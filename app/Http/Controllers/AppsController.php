<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apps;

class AppsController extends Controller
{
  public function all(){
    return view('landing-page/home',['apps'=> Apps::all(),
    'row' => Apps::find()
]);
}}
