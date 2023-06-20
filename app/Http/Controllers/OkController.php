<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OkController extends Controller
{
    //
    function loadview($user)

     {

        echo view('users',['name'=>$user]);
     }
}
