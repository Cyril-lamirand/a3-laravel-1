<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WebsiteController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('homepage');
    }
}
