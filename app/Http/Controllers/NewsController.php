<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Setting;
use Carbon\Carbon;
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
        $news= News::with('category')->get();
        
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
        $newspaper->is_active= 1;


        $cat_id = $request->category_id;
        $newspaper->category_id = implode(' ', $cat_id);
        
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
        $categories = Category::orderBy('id' , 'desc')->get();
        $images= explode('|', $news->image);
        return view('news_details', compact('news', 'images','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function editPost($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        
        $newsId = News::findOrFail($id);
        $postcat = explode(',', $newsId->category_id);
        $images = explode('|', $newsId->image);

        // foreach($images as $image){
        //     $image_path = public_path("{$image}");
        //     unlink($image_path);
        // }
        return view('editNews', compact('newsId','postcat','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    
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
            $category_id = explode(' ', $news->category_id);
            

            $returnNews[] = [
               'id'=>$news->id,
               'name'=> $news->name,
               'title'=> $news->title,
               'news_details'=> $news->news_details,
               'category_id'=> $category_id,
               'image'=> $images[0]
            ];

        }

        return view('admin_panel', compact('returnNews','categories'));
    }

    public function allNews(){

        $setting =Setting::all();
        foreach ($setting as $key => $value) {

                $catId1= $value->category_id1;
                $catId2= $value->category_id2;
                $catId3= $value->category_id3;
            }

            
        $categories = Category::orderBy('id' , 'desc')->get();
        
        // $popular = Setting::with('category','news')->where('category_id1', $catId1)->limit(4)->get();
        $popular1 = Category::with('news')->where('id', $catId1)->limit(4)->get();
        foreach ($popular1 as $key => $value) {
           
            $news1= $value->news;
        }

        $popular2 = Category::with('news')->where('id', $catId2)->limit(4)->get();
        foreach ($popular2 as $key => $value) {
           
            $news2= $value->news;
        }

        $popular3 = Category::with('news')->where('id', $catId3)->limit(4)->get();
        foreach ($popular3 as $key => $value) {
           
            $news3= $value->news;
        }
        
        $latestNews = News::with('category')->orderby('created_at' , 'desc')->limit(4)->get();  

        return view('home' , compact('latestNews', 'categories','news1','news2','news3'));

    }


    public function updatestore(Request $request,$id)
    {
        $newspaper = News::findOrFail($id);
        $newspaper->name= $request->has('name')? $request->get('name'):'';
        $newspaper->title= $request->has('title')? $request->get('title'):'';
        $newspaper->news_details= $request->has('news_details')? $request->get('news_details'):'';
        $newspaper->is_active= 1;


        $cat_id = $request->category_id;
        $newspaper->category_id = implode(' ', $cat_id);
        
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
            return back()->with('success', 'News updated');
        } else{
            return back()->with('error', 'News was not Update!');
        }
    }
    
}
