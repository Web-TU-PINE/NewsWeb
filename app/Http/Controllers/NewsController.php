<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\news;
use App\gallery;
use Image;
use File;

use App\Http\Requests\NewsRequest;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $News = news::paginate(10);
      $count = news::count();

      $data['News'] = $News;
      $data['Count'] = $count;
      return view('news.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = new news();
        $news->name = $request->name;
        $news->content = $request->content;


        //upload img
        if($request->hasFile('image')){
              $newfilename = str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
              $request->file('image')->move(public_path().'/images/',$newfilename);
              Image::make(public_path().'/images/'.$newfilename)->resize(50,50)->save(public_path().'/images_resize/'.$newfilename);

              $news->image = $newfilename;
        }

        $news->save();
        $request->session()->flash('status','success');
        return back();
        // return redirect()->action('NewsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $data['news'] = $news;
        return view('news.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {

          $news = News::find($id);
          $news->name = $request->name;
          $news->content = $request->content;

          //upload img
          if($request->hasFile('image')){
            if($news->image!='nopic.jpg'){
                File::delete(public_path().'\\images\\'.$news->image);//ถ้า path จริง จะใส่// ซื่อต่างกับการอัพโหลดใส่/
                File::delete(public_path().'\\images_resize\\'.$news->image);
            }
                $newfilename = str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/images/',$newfilename);
                Image::make(public_path().'/images/'.$newfilename)->resize(50,50)->save(public_path().'/images_resize/'.$newfilename);

                $news->image = $newfilename;
          }else{
              $news->image = $news->image;
          }
          $news->save();


          return redirect()->action('NewsController@index');
          return "Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = news::find($id);
        if($news->image!='nopic.jpg'){
            File::delete(public_path().'\\images\\'.$news->image);//ถ้า path จริง จะใส่// ซื่อต่างกับการอัพโหลดใส่/
            File::delete(public_path().'\\images_resize\\'.$news->image);
        }
        $news->delete();
          return redirect()->action('NewsController@index');
    }

    public function dowload($id){
          $news = news::find($id);
          return response()->dowload(public_path().'/images/'.$news->image);
    }
}
