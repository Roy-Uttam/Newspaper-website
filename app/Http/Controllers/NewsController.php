<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::with('category')->paginate(6);
        return view('news', compact('news'));
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
        $newspaper = new News();
        $newspaper->name= $request->has('name')? $request->get('name'):'';
        $newspaper->title= $request->has('title')? $request->get('title'):'';
        $newspaper->news_details= $request->has('news_details')? $request->get('news_details'):'';
        $newspaper->category_id= $request->has('category_id')? $request->get('category_id'):'';
        $newspaper->is_active= 1;

        if($request->hasFile('images')){
            $files = $request->file('images');

            $imageLocation= array();
            $i=0;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName= 'news_'. time() . ++$i . '.' . $extension;
                $location= '/images/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[]= $location. $fileName;
            }

            $newspaper->image= implode('|', $imageLocation);
            $newspaper->save();
            return back()->with('success', 'News Successfully Saved!');
        } else{
            return back()->with('error', 'News was not saved Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $images= explode('|', $news->image);
        return view('news_details', compact('news', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $images = explode('|', $news->image);

        foreach($images as $image){
            $image_path = public_path("{$image}");
            unlink($image_path);
        }
        
        $news->delete();
        return redirect()->back();
    }

    public function addNews(){

        $categories =Category::orderBy('id', 'desc')->get();

        $newspapers= News::all();
        $returnNews= array();

        foreach ($newspapers as $news){
            $images= explode('|', $news->image);

            $returnNews[] = [
               'id'=>$news->id,
               'name'=> $news->name,
               'title'=> $news->title,
               'news_details'=> $news->news_details,
               'category_id'=> $news->category_id,
               'image'=> $images[0]
            ];

        }

        return view('admin_panel', compact('returnNews','categories'));
    }

    public function latestNews(){
        $latestNews = News::with('category')->orderby('created_at' , 'desc')->limit(4)->get();        

        return view('home' , compact('latestNews'));

    }
}
