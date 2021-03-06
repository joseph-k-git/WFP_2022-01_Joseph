<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Supplier::all();
        //dd($result);
        return view("supplier.index", ["result" => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
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
        $data = new Supplier();
        $data->name = $request->get('name');
        $data->address = $request->get('address');
        
        $data->save();

        return redirect()->route('supplier.index')->with('status','Supplier has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $data = $supplier;
        return view('supplier.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');

        $supplier->save();

        return redirect()->route('supplier.index')->with('status', 'Supplier data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $this->authorize('delete-permission');

        try {
            $supplier->delete();
            return redirect()->route('supplier.index')->with('status', 'Supplier data has been deleted');
        } catch(\PDOException $e) {
            $msg = "Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan.";
            return redirect()->route('supplier.index')->with('error', $msg);
        }
    }

    public function getEditFormA(Request $request)
    {
        $id = $request->get('id');
        $data = Supplier::find($id);

        return response()->json(array(
            'status' => 'oke',
            'msg' => view('supplier.getEditFormA', compact('data'))->render(),
        ), 200);
    }

    public function getEditFormB(Request $request)
    {
        $id = $request->get('id');
        $data = Supplier::find($id);

        return response()->json(array(
            'status' => 'oke',
            'msg' => view('supplier.getEditFormB', compact('data'))->render(),
        ), 200);
    }

    public function saveData(Request $request)
    {
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');

        $supplier->save();

        return response()->json(array(
            'status' => 'OK',
            'msg' => 'Sukses EditB data supplier',
        ), 200);
    }

    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $supplier = Supplier::find($id);
    
            $supplier->delete();
    
            return response()->json(array(
                'status' => 'OK',
                'msg' => 'Sukses DELete data supplier',
            ), 200);
        } catch(\PDOException $e) {
            return response()->json(array(
                'status' => 'fail',
                'msg' => 'Failed to DELete data supplier',
            ), 200);
        }
    }
}
