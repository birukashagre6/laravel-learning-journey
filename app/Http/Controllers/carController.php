<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{

 public function __invoke(){
        return '__biruk';
    }
 public function index(){
     return 'This is the car controller';
 }
 public function mycar(){
    return "this is my car";
 }
}
