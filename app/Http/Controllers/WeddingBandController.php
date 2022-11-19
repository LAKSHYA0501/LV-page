<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WeddingBandController extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
}
