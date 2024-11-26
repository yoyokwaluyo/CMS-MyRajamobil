<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipdoController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_arsipdo');

        return view('pages.customer.arsip-do', $data);
    }
}
