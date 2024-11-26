<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_promo');

        return view('pages.promo.promo_list', $data);
    }

    public function addPromo()
    {
        $data['caption_text'] = __('language.m_addpromo');

        return view('pages.promo.promo_add', $data);
    }
}
