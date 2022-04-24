<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Med;
use App\Models\News;
use App\Models\Newspaper;
use App\Models\Setting;
use App\Models\Summernote;
use Carbon\Carbon;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        
        return view('admin.news', compact('news','categories'));
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
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function news_details($id)
    {

        
        $newsId = Newspaper::findOrFail($id)->increment('views');
        $news = Newspaper::with('category')->where('id', $id)->first();
        // dd($news);
        $categories = Category::orderBy('id' , 'desc')->get();
        
        return view('news_details', compact('news','categories','newsId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    
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
    


    public function allNews(){

        $setting =Setting::all();
        foreach ($setting as $key => $value) {

                $catId1= $value->category_id1;
                $catId2= $value->category_id2;
                $catId3= $value->category_id3;
            }

            
        $categories = Category::orderBy('id' , 'desc')->get();
        
        
        $popular1 = Category::with('news')->where('id', $catId1)->limit(4)->get();
        foreach ($popular1 as $key => $value) {
           
            $news_section1= $value->news;
            
        }

        $popular2 = Category::with('news')->where('id', $catId2)->limit(4)->get();
        foreach ($popular2 as $key => $value) {
           
            $news_section2= $value->news;
        }

        $popular3 = Category::with('news')->where('id', $catId3)->limit(4)->get();
        foreach ($popular3 as $key => $value) {
           
            $news_section3= $value->news;
        }
        
        $latestNews = Newspaper::with('category')->orderby('created_at' , 'desc')->limit(4)->get(); 
        $popular = Newspaper::with('category')->orderby('views' , 'desc')->limit(4)->get();  

        return view('home' , compact('latestNews', 'categories','news_section1','news_section2','news_section3','popular','catId1','catId2','catId3'));

    }


    
}
