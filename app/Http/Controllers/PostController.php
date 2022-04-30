<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		
        if($request->has('name')){
			$records = Post::where('name',$request->name)->get();
		}else{
			$records = Post::All();
		}
		Log::info($request->name.PHP_EOL);
		;
		return view('forum',compact('records'));
    }
}
