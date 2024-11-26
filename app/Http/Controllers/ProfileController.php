<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['caption_text'] = app()->getLocale() == 'en' ? "Profile" : "Profil";

        return view('pages.profile.index', $data);
    }
}
