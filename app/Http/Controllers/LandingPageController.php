<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Designs;
use App\Models\Experience;
use App\Models\Portfolios;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $designs = Designs::all();
        $portfolios = Portfolios::all();
        return view('landing-page.index', compact('experiences', 'designs', 'portfolios'));
    }
}
