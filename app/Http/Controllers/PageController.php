<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Page;
use App\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $page = Page::where('type', 1)->first();
        if(!$page) abort('404');

        $slides = Slider::orderBy('piority','ASC')->get();

        $brands = Brand::all();


        return view('frontend.home',compact('page','slides','brands'));
    }

    public function company(){
        $page = Page::where('type', 2)->first();
        if(!$page) abort('404');

        return view('frontend.company',compact('page'));
    }

    public function brand(){
        $page = Page::where('type', 3)->first();
        if(!$page) abort('404');
        $brands = Brand::orderBy('piority','ASC')->get();

        return view('frontend.brand',compact('page','brands'));
    }

    public function contact(){
        $page = Page::where('type', 5)->first();
        if(!$page) abort('404');

        return view('frontend.contact',compact('page'));
    }
}
