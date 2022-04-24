<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $news= Newspaper::with('category')->get();
        $categories = Category::orderBy('id' , 'desc')->get();
        
        return view('admin.newspaper', compact('news','categories'));
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


        $validator = Validator::make($request->all(), [

          
        ]);
        // dd('test');
        if ($validator->fails()) {
            $data          = array();
            $data['error'] = $validator->errors()->all();
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        } else {
            $image = $request->cover_photo;

            if ($image) {

                $image_name = hexdec(uniqid());
                $image_ext  = strtolower($image->getClientOriginalExtension());

                $image_full_name = $image_name . '.' . $image_ext;
                $image_upload_path2     = 'items/';
                $image_upload_path3    = 'images/items/';
                $image_url       = $image_upload_path2 . $image_full_name;
                $success       = $image->move($image_upload_path3, $image_full_name);
            }

            $items = Newspaper::create([
                'name' => $request->name,
                'title' => $request->title,
                'news_details' => $request->detail,
                'category_id' => $request->category,
                'image' => $image_url,
            ]);

            

            $data = array();
            $data['message'] = 'Item Added Successfully';
            $data['name'] = $items->name;
            $data['title']       = $items->title;
            $data['news_details']       = $items->news_details;
            $data['category_id']       = $items->category_id;
            $data['image']       = $items->image;
            $data['id'] = $items->id;
            // dd($data);

            return response()->json([
                'success' => true,
                'data'    => $data,
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show(Newspaper $newspaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request->all());
        $item = Newspaper::with('category')->get()->find($request->id);
        $categories = Category::orderBy('id' , 'desc')->get();
        

        // dd($item);

        if ($item) {
            return response()->json([
                'success' => true,
                'data'    => $item,
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
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

        ]);
        if ($validator->fails()) {
            $data          = array();
            $data['error'] = $validator->errors()->all();
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        } else {
            $item = Newspaper::with('category')->find($request->hidden_id);

            // dd($item);
            $image = $request->cover_photo;

            if ($image) {
                File::delete('images/' . $item->image);
                $image_name = hexdec(uniqid());
                $image_ext  = strtolower($image->getClientOriginalExtension());

                $image_full_name = $image_name . '.' . $image_ext;
                $image_upload_path     = 'items/';
                $image_upload_path1    = 'images/items/';
                $image_url       = $image_upload_path . $image_full_name;
                $success                       = $image->move($image_upload_path1, $image_full_name);
            } else {
                $image_url = $item->image;
            }

           
            $item['name'] = $request->name;
            $item['title']       = $request->title;
            $item['news_details']       = $request->detail;
            $item['category_id']       = $request->category;
            $item['image']       = $image_url;
            $item->update();



            $item['message'] = 'Item Updated Successfully';
            return response()->json([
                'success' => true,
                'data'    => $item,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->id);
        $items = Newspaper::findOrFail($request->id);
        if ($items) {
            $items->delete();
            File::delete('images/' . $items->image);
            $data            = array();
            $data['message'] = 'Item deleted successfully';
            $data['id']      = $request->id;
            return response()->json([
                'success' => true,
                'data'    => $data,
            ]);
        } else {
            $data            = array();
            $data['message'] = 'Item can not deleted!';
            return response()->json([
                'success' => false,
                'data'    => $data,
            ]);
        }
    }
    
}
