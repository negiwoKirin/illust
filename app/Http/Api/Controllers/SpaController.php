<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpaRequest;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function app()
    {
        return view('spa/app');
    }
}
