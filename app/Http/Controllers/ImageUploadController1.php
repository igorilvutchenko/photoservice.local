<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function uploadForm()
  {
      return view('users.upload');
  }

  public function uploadSubmit(Request $request)
  {
  	$rules = [
            'name' => 'required|min:2|max:250'
        ];

        $images = count($this->input('images'));
        foreach(range(0, $images) as $index) {
            $rules['images.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';

        }
        // $rules['images.*'] = 'required|image|mimes:jpeg,bmp,png|max:2000';
        return $rules;
  }

}
