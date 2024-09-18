<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurPeopleController extends Controller
{
    public function index(){
        return view('ourPeople');
    }
}
