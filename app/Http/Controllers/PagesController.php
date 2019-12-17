<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Hello ladies and gentelmen to index page";
        //return view('pages.index',compact('title'));
                return view('pages.index')->with('title',$title);

    }
    public function about(){
        $title="Abouuuuuuuuut usss";

        return view('pages.about')->with('aze',$title);

    }
    public function Services()
    {
        $data=array(
            'title'=>'Helloazinzar',
            'services' =>['big data','laravel','symphony' ]
        );

        return view('pages.services')->with($data);

    }
}
