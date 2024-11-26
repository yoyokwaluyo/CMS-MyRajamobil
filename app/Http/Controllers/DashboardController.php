<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['caption_text'] = app()->getLocale() == 'en' ? "Dashboard" : "Dasbor";

        return view('pages.dashboard.index', $data);
    }
}
