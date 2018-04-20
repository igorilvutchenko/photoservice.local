<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Layout;

class LayoutConstructController extends Controller
{
    public function index(Request $request, $layout_id)
    {
    	// $layouts = Layout::get();
// $layout = Layout::get()->where('layout_id', $layout_id)->first();
// $layout_id = $layout->layout_id;

    $images = $request->input('images');

for ($i=0; $i<count($images); $i++) {
    
    $results[] = Image::get()->where('image_id', $images[$i])->toArray();
// return $images;
    }

foreach ($results as $result) {
           
}
// foreach ($images as $image) {
//     echo '<pre>';
//     var_dump($images);
//     echo '</pre>';

//     // echo $image;
// }
// exit;


    // $image_id = $result->image_id;
    // $image = $result->image;


/*echo '<pre>';
echo $image_id;
echo $image;
echo '</pre>';*/


   $user = \Auth::user();
        $user_id = $user->id;
        return view('users.layout_config', [
            'layout_id' => $layout_id,
            // 'selected' => $selected,
            'user_id' => $user_id
        ])->with('results', $results);
    }
}
