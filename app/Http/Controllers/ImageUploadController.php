<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $images = Image::latest();
        return view('users.upload');
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
        $imagename = null;

        $images = $request->file('image');
        if (count($images) > 10) {
            return back()->with('error','To mutch!'); 
        }
        else {

            $validator = Validator::make($request->all(), [
                'image.*' => 'nullable|image|mimes:jpeg,png|max:10000|dimensions:max_width=3000,max_height=2000'
            ]);

        // return $validator;
      // exit;

        if($validator->fails()){
          return back()->withInput()->withErrors($validator);
        } else {


        foreach ($images as $file) {
        /*$image = new \App\Image;
        $user = User::find($id);
        $user->id = request->inpit('id');*/
            

        if($file)
            $image->user_id;
            {
                $imagename = $file->store('public/'. 1 . '/images');
                $imagename = substr($imagename, strripos($imagename, '/')+1);
            }

            $image->image = $imagename;
            $image->save();

        }


        return redirect('users.layout_select');


        /*echo '<pre>';
        var_dump($file);
        echo '</pre>';*/


        }
      }
      exit;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
