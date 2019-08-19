<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('AddCategories', ['categories' => $categories]);
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
        //get the max category_id 
        $lastCategoryId = Category::max('category_id');
        $attributes = $this->validate($request, [
            'name' => 'required|max:25',
            'description' => 'required|max:60',
        ]);
        $name = request('name');
        $description = request('description');

      //get the max category_id and sum + 1 
      $new_category_id = $lastCategoryId + 1;
       
       DB::table('categories')->insertGetId(
       ['name' => $name, 'category_id' => $new_category_id, 'description' => $description, 'created_at' => now()]);    

       return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Request $resquest)
    {
        if(Auth::user()->role === 0){
        $categories = Category::all();
        $editCategory = Category::find($resquest->id)->get()->first();
        return view('EditCategories', ['editCategory' => $editCategory, 'categories' => $categories]);
        }else{
            return redirect()->back();
        }
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
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $name = request('name');
        $description = request('description');
        
       
         Category::where('id', $request->id)
         ->update(['name' => $name, 'description' => $description, 'updated_at' => now()]);
        
        return redirect('/categories');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Request $request)
    {
            $this->validate($request, [
            'name' => 'required|numeric',
        
        ]);        
       
        $category = Category::find(request('name'));
        $category->delete();
        return redirect('/categories');
    }
}
