<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = 'Welcome To My LARA PROJECT';

       // return view('pages.index', compact('title'));
       return view('pages.index')->with('title', $title);
    }


    public function about(){

        $title = 'ABOUT PAGE';

        return view('pages.about')->with('title', $title);
    }

    public function services(){

        $data = array('title' => 'This is Services Page','services' => ['Web Design', 'Programming', 'Information System']);

        return view('pages.services')->with($data);

    }
}
