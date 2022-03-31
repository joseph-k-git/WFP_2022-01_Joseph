<?php

namespace App\Http\Controllers;

use App\Medicine;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
