<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function main()
    {
      $people = ['Taylor','Matt','jeffrey'];
      return view('welcome',compact('people'));
    }
     public function about()
     {
     		# code...
     	return view('about');
     }
}

