<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Med;
use App\Models\News;
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
        $news= News::with('category')->get();
        
        return view('admin.news', compact('news'));
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

            // SummerEditor
            
            $this->validate($request, [
                'detail' => 'required',
            ]);
     
            $detail=$request->input('detail');
     
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
     
            foreach($images as $k => $img){

                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
     
                list(, $data)      = explode(',', $data);
     
                $data = base64_decode($data);
                $image_name= '/images/summereditor/' . time().$k.'.png';
     
                $path = public_path() . $image_name;
     
                file_put_contents($path, $data);
     
                $img->removeAttribute('src');
     
             $img->setAttribute('src', $image_name);
            }
            $detail = $dom->saveHTML();
            $summernote = new Summernote();
            $summernote->content = $detail;
            $summernote->save();
            $newspaper->news_details= $detail;
            $newspaper->sid= $summernote->id;
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

        
        $newsId = News::findOrFail($news->id)->increment('views');
        $categories = Category::orderBy('id' , 'desc')->get();
        $images= explode('|', $news->image);
        $n = News::with('summer')->findOrFail($news->id);
        return view('news_details', compact('news', 'images','categories','newsId'));
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

        return view('admin.editNews', compact('newsId','postcat','categories'));
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

        
        $news = News::with('summer')->findOrFail($id);
        $n =$news->summer->id;
        $nn = Summernote::findOrFail($n);
        $images = explode('|', $news->image);

        // $detail=$nn->content;
        // $dom = new \DomDocument();
        //     $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        //     $image = $dom->getElementsByTagName('img');
        //     foreach($image as $k =>$image){
        //         $image_path = public_path("{$k}");
        //         unlink($image_path);
        //     }
        
      
        
        foreach($images as $image){
            $image_path = public_path("{$image}");
            unlink($image_path);
        }
        
        $news->delete();
        $nn->delete();
        return redirect()->back()->with('success', 'News deleted');
        
    
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

        return view('admin.admin_panel', compact('returnNews','categories'));
    }

    public function updatestore(Request $request,$id)
    {
        $newspaper = News::findOrFail($id);
        $newspaper->name= $request->has('name')? $request->get('name'):'';
        $newspaper->title= $request->has('title')? $request->get('title'):'';
        $newspaper->is_active= 1;


        $cat_id = $request->category_id;
        $newspaper->category_id = implode(' ', $cat_id);
        
        if($request->hasFile('images')){
            $files = $request->file('images');
            $images = explode('|', $newspaper->image);
            if($images){
                foreach($images as $image){
                    $image_path = public_path("{$image}");
                    unlink($image_path);
                }
            }
               
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

            if($request->has('details')){
                $summernote = new Summernote();
                $summerid =$summernote->id;
                if($summerid){
                    foreach($summerid as $s){
                        $s->delete();
                    }
                }
                

                // SummerEditor
            
            $this->validate($request, [
                'detail' => 'required',
            ]);
     
            $detail=$request->input('detail');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
     
            foreach($images as $k => $img){
                
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
     
                list(, $data)      = explode(',', $data);
     
                $data = base64_decode($data);
                $image_name= '/images/summereditor/' . time().$k.'.png';
     
                $path = public_path() . $image_name;
     
                file_put_contents($path, $data);
     
                $img->removeAttribute('src');
     
             $img->setAttribute('src', $image_name);

            }
            $detail = $dom->saveHTML();
            
            $summernote->content = $detail;
            $summernote->save();
            $newspaper->news_details= $detail;
            $newspaper->sid= $summernote->id;
            
        }
        $newspaper->save();
            

            return back()->with('success', 'News updated');
        } else{
            return back()->with('error', 'News was not Update!');
        }
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
        $popular = News::with('category')->orderby('views' , 'desc')->limit(4)->get();  

        return view('home' , compact('latestNews', 'categories','news1','news2','news3','popular'));

    }


    // public function upload(Request $request) {
    // if($request->hasFile('upload')) {
    //     //get filename with extension
    //     $filenamewithextension = $request->file('upload')->getClientOriginalName();
  
    //     //get filename without extension
    //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
    //     //get file extension
    //     $extension = $request->file('upload')->getClientOriginalExtension();
  
    //     //filename to store
    //     $filenametostore = $filename.'_'.time().'.'.$extension;
  
    //     //Upload File
    //     $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
    //     echo json_encode([
    //         'default' => asset('storage/uploads/'.$filenametostore),
    //     ]);
    //     }
    // }

    
}
