<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspekController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_addprospect');

        return view('pages.customer.prospek-tambah', $data);
    }
}
