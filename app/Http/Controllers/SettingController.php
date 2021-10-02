<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id' , 'desc')->get();
        return view('setting' ,compact('categories'));
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
        // $category = new Setting();
        // $category->category_id= $request->has('category_id')? $request->get('category_id'):'';
        
        // $category->save();
       

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
    public function settings(Request $request)
    {


        
        $cid1 = $request->get('category_id1');
        $cid2 = $request->get('category_id2');
        $cid3 = $request->get('category_id3');
        $cidup1 = Setting::where('id' , '1')->limit(1)->update(['category_id1' => $cid1]);
        $cidup2 = Setting::where('id' , '1')->limit(1)->update(['category_id2' => $cid2]);
        $cidup3 = Setting::where('id' , '1')->limit(1)->update(['category_id3' => $cid3]);

        return redirect()->back();
    }
}
