<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mywork;
class MyworkController extends Controller
{
    public function index(){
        return view('myworks',[
            'title' => 'My Works',
            'project' => Mywork::all()
        ]);
    }
    public function detail($slug){
        return view('mywork', [
            'title' => 'My Work',
            'project' => Mywork::firstWhere('slug', $slug)
        ]);
    }
}
