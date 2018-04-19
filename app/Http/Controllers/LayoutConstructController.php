<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Layout;

class LayoutConstructController extends Controller
{
    public function index(Request $request, $layout_id, $image_id)
    {
    	// $layouts = Layout::get();
// $layout = Layout::get()->where('layout_id', $layout_id)->first();
// $layout_id = $layout->layout_id;

    	/*echo '<pre>';
    	var_dump($layout_id);
    	echo '</pre>';
    	echo '<pre>';
    	var_dump($image_id);
    	echo '</pre>';
    	exit;
*/
    	return view('users.layout_config');
    }
}
