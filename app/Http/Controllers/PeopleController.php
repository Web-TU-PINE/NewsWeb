<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
use App\news;
use App\gallery;
use Image;
use File;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $News = person::paginate(10);
      $count = person::count();

      $data['News'] = $News;
      $data['Count'] = $count;
      // return view('news.index',$data);
        // return view('person.create');
        return view('person.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $person = new person();
      $person->name = $request->name;
      $person->position = $request->position;


      //upload img
      if($request->hasFile('name_img')){
            $newfilename = str_random(10).'.'.$request->file('name_img')->getClientOriginalExtension();
            $request->file('name_img')->move(public_path().'/images/',$newfilename);
            Image::make(public_path().'/images/'.$newfilename)->resize(50,50)->save(public_path().'/images_resize/'.$newfilename);

            $person->name_img = $newfilename;
      }

      $person->save();
      $request->session()->flash('status','success');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = person::find($id);
      $data['person'] = $news;
      return view('person.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

                $person = person::find($id);
                $person->name = $request->name;
                $person->position = $request->position;

                //upload img
                if($request->hasFile('name_img')){
                  if($person->name_img!='nopic.jpg'){
                      File::delete(public_path().'\\images\\'.$person->name_img);//ถ้า path จริง จะใส่// ซื่อต่างกับการอัพโหลดใส่/
                      File::delete(public_path().'\\images_resize\\'.$person->name_img);
                  }
                      $newfilename = str_random(10).'.'.$request->file('name_img')->getClientOriginalExtension();
                      $request->file('name_img')->move(public_path().'/images/',$newfilename);
                      Image::make(public_path().'/images/'.$newfilename)->resize(50,50)->save(public_path().'/images_resize/'.$newfilename);

                      $person->name_img = $newfilename;
                }else{
                    $person->name_img = $person->name_img;
                }
                $person->save();


                return redirect()->action('PeopleController@index');
          }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $person = person::find($id);
      if($person->name_img!='nopic.jpg'){
          File::delete(public_path().'\\images\\'.$person->name_img);//ถ้า path จริง จะใส่// ซื่อต่างกับการอัพโหลดใส่/
          File::delete(public_path().'\\images_resize\\'.$person->name_img);
      }
      $person->delete();
        return redirect()->action('PeopleController@index');
  }

}
