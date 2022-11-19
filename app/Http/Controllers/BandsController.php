<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingBands;

class BandsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->mans) {
            $bands = WeddingBands::where('prodmeta_section', 'mans')->get();
        } elseif ($request->womans) {
            $bands = WeddingBands::where('prodmta_section', 'womans')->get();
        } else {
            $bands = WeddingBands::all();
        }

        return view('bands')->with(['bands' => $bands]);
    }
}
