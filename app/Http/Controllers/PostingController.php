<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function banner()
    {
        $data['caption_text'] = __('language.m_banner');

        return view('pages.posting.banner', $data);
    }

    public function getDataBanner(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "foto" => "<img src='https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner/1425-df6e5839d2573f3943bfc7e042b490c2.jpg' class='w-32 h-10 object-contain rounded-md'>",
                        "page" => "Customer-Care",
                        "status" => "<span class='badge-green'>Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('posting.addbanner', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "foto" => "<img src='https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner/1425-df6e5839d2573f3943bfc7e042b490c2.jpg' class='w-32 h-10 object-contain rounded-md'>",
                        "page" => "Spare-Part",
                        "status" => "<span class='badge-red'>Not Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('posting.addbanner', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "foto" => "<img src='https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner/1425-df6e5839d2573f3943bfc7e042b490c2.jpg' class='w-32 h-10 object-contain rounded-md'>",
                        "page" => "Service",
                        "status" => "<span class='badge-red'>Not Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('posting.addbanner', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function addBanner()
    {
        $data['caption_text'] = (app()->getLocale() == "en" ? "Add " : "Tambah "). __('language.m_banner');

        return view('pages.posting.banner-add', $data);
    }
}
