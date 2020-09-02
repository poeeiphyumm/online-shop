<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BackendController extends Controller
{
    public function dashboardfun($value='')
    {

        return view('backend.dashboard');
    }
    public function createfun($value='')
    {

        return view('backend.items.create');
    }
    public function indexfun($value='')
    {

        return view('backend.items.index');
    }
    
    
    
   }