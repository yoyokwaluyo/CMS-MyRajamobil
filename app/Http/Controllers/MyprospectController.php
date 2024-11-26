<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyprospectController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_myprospect');

        return view('pages.customer.prospek-saya', $data);
    }

    public function detail()
    {
        $data['caption_text'] = "Detail ".__('language.m_myprospect');

        return view('pages.customer.prospek-detail', $data);
    }
}
