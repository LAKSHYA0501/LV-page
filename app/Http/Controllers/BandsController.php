<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingBands;

class BandsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->mens) {
            $bands = WeddingBands::where('prodmeta_section', 'mens')->get();
        } elseif ($request->womens) {
            $bands = WeddingBands::where('prodmta_section', 'womens')->get();
        } else {
            $bands = WeddingBands::all();
        }

        return view('bands')->with(['bands' => $bands]);
    }
}
