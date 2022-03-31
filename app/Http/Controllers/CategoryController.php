<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

use App\Medicine; //test

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = DB::table('categories')->get(); // Fluent Query Builder

        $categories = Category::all(); // Eloquent ORM

        return view('category.index', ['categories' => $categories]);
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $medicines = DB::table('medicines')->where('category_id', $category->id)->get(); // Fluent Query Builder
        return view('category.show', ['medicines' => $medicines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showlist($id_category)
    {
        // Method #1: Query Builder
        $result = DB::table('categories')
            ->join('medicines','categories.id','=','medicines.category_id')
            ->where('categories.id','=','$id_category')
            ->get(); // ->get() always return ArrayList / Collection
        $getTotalData = $result->count();

        // Method #2: Eloquent
        $data = Category::find($id_category); // return a single model/class
        $name_category = $data->name;
        $result = $data->medicines; // ->medicines is Relationship Eloquent model and will return ArrayList/Collection because it has 'hasMany' statement.
        $getTotalData = $result ? $result->count() : 0; // if there is no result, then getTotalData is set to 0.

        return view('report.list_medicines_by_category', compact('id_category','name_category','result','getTotalData'));
    }
}
