<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return 'user.homepage';
    }
    public function article(){
        return 'user.article';
    }
}
