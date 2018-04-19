<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Layout;

class LayoutSelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = \Auth::user();
        $user_id = $user->id;

        $layouts = Layout::get();
        $images = Image::get()->where('user_id', $user_id);
        return view('users.layout_select', [
            'layouts' => $layouts,
            'user_id' => $user_id,
            'images' => $images
        ]);

                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $layout_id)
    {
        $layout = Layout::get()->where('layout_id', $layout_id)->first();
        
        $images_count = $layout->images_count;

        if(is_null($layout_id))
            return with('error', 'Выберите шаблон');

        $user = \Auth::user();
        $user_id = $user->id;
        $images = Image::get()->where('user_id', $user_id);

        return view('users.layout_images_select', [
            'layout_id' => $layout_id,
            'images_count' => $images_count,
            'user_id' => $user_id,
            'images' => $images

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
