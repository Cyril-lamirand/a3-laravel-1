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

    /**
     * @return View
     */
    public function album(): View
    {
        return view('album');
    }
}
