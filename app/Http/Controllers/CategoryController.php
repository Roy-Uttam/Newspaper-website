<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id' , 'desc')->get();
        return view('admin.category' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // dd($request->all());

        $validator = Validator::make($request->all(), [

            'add_name'   => 'max:100|required',
            'add_description'       => 'max:2000|required',
        ]);

        if ($validator->fails()) {
            $data          = array();
            $data['error'] = $validator->errors()->all();
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        } else {

            $categories = Category::create([

                'category_name' => $request->add_name,
                'cat_code' => $request->add_description,
            ]);

            $data = array();
            $data['message'] = 'Category Added Successfully';
            $data['category_name'] = $categories->category_name;
            $data['cat_code']       = $categories->cat_code;
            $data['id'] = $categories->id;

            return response()->json([
                'success' => true,
                'data'    => $data,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request->all);
        $categories = Category::find($request->id);

        if ($categories) {
            return response()->json([
                'success' => true,
                'data'    => $categories,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'data'    => 'No information found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'add_name'   => 'max:100|required',
            'add_description'       => 'max:2000|required',
        ]);
        if ($validator->fails()) {
            $data          = array();
            $data['error'] = $validator->errors()->all();
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        } else {
            $categories = Category::find($request->hidden_id);

            $categories['category_name']       = $request->edit_name;
            $categories['cat_code']       = $request->edit_description;
            $categories->update();

            $data                = array();
            $data['message']     = 'Category updated successfully';
            $data['category_name'] =  $categories->category_name;
            $data['cat_code']       = substr($categories->cat_code, 0, 50);
            $data['id']          = $request->hidden_id;

            return response()->json([
                'success' => true,
                'data'    => $data,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->id);
        $categories = Category::findOrFail($request->id);
        if ($categories) {
            $categories->delete();
            $data            = array();
            $data['message'] = 'Category deleted successfully';
            $data['id']      = $request->id;
            return response()->json([
                'success' => true,
                'data'    => $data,
            ]);
        } else {
            $data            = array();
            $data['message'] = 'Category can not deleted!';
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        }
    }




public function CatNews($cat_code)

{

    $categories = Category::orderBy('id' , 'desc')->get();

    $catnews = Category::with('news')->where('cat_code', $cat_code)->get();
    foreach ($catnews as $cat) {
        $cat_value = $cat->news;
    }
    

    return view('cat_news' , compact('categories','cat_value'));
    
}

}


