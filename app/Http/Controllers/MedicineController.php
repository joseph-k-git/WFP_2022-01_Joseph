<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Category;
use Illuminate\Http\Request;
use DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Raw Query
        //$result = DB::select(DB::raw("SELECT * FROM medicines"));

        // Fluent Query Builder
        //$result = DB::table("medicines")->get();

        // Eloquent ORM
        $result = Medicine::all();

        //dd($result);

        // Compact. Nama harus sama.
        //return view('medicine.index', compact('result'));

        // Array. Bisa berbeda nama untuk diterima di view.
        return view('medicine.index', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("medicine.create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $medicine = new Medicine();
        $medicine->generic_name = $request->get('name');
        $medicine->form = $request->get('form');
        $medicine->restriction_formula = $request->get('restriction');
        $medicine->price = $request->get('price');
        $medicine->faskes1 = ($request->get('faskes1') == 1) ? 1 : 0;
        $medicine->faskes2 = ($request->get('faskes2') == 1) ? 1 : 0;
        $medicine->faskes3 = ($request->get('faskes3') == 1) ? 1 : 0;
        $medicine->category_id = $request->get('category');

        $image = $request->file('image');
        $medicine->image = time()." ".$medicine->generic_name.".".$image->extension();

        $medicine->save();
        
        $destinationPath = public_path('images');
        $image->move($destinationPath, $medicine->image);

        return redirect()->route('medicine.index')->with('status','Medicine has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        return view('medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function coba1()
    {
        // Query Builder filter
        $result = DB::table('medicines')
            ->where('price','>',20000)
            ->get();

        $result = DB::table('medicines')
            ->where('generic_name','like','%fen')
            ->get();
        
        // Group By
        $result = DB::table('medicines')
            ->select('generic_name')
            ->groupBy('generic_name')
            ->get();

        // Agregate
        $result = DB::table('medicines')->count();

        $result = DB::table('medicines')->max('price');

        // Filter + Aggregate
        $result = DB::table('medicines')
            ->where('generic_name','like','%fen')
            ->avg('price');

        // Join
        $result = DB::table('medicines')
            ->join('categories','medicines.category_id', '=', 'categories.id')
            ->get();

        // Join + Sort
        $result = DB::table('medicines')
            ->join('categories','medicines.category_id','=','categories.id')
            ->orderBy('price','desc')
            ->get();
        
        // Eloquent
        $result = Medicine::where('price','>',20000)->get();
        
        dd($result);
    }

    public function showInfo()
    {
        $result = Medicine::orderBy('price', 'desc')->first();

        return response()->json(
            array(
                'status' => 'oke',
                'msg' => 
                    '<div class="alert alert-info">'.
                    'Did you know?<br>'.
                    'Harga obat termahal adalah '.$result->generic_name.' '.$result->form.' dengan harga '.$result->price.
                    '</div>',
            ),
            200
        );
    }
}
