<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
		protected $request;

    public function __construct(Request $request)
    {
    	$this->request = $request;
    }

    public function index()
    {
    	//got to: http://localhost:8000/posts?foo=bar
    	return $this->request->all();
    }

    //other way - without counstructor
    public function show(Request $request)
    {
    	return $request->all();
    }

    //or - with helper method
    public function test()
    {
    	return request()->all();
    }
}
