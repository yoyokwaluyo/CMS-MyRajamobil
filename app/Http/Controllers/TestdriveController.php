<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;

class TestdriveController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_testdrive');

        return view('pages.notifikasi.testdrive', $data);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "name" => "Esmeralda Kulas",
                        "email" => "Esmeralda@heaney.info",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "request_date" => "2016-07-31 23:25:43",
                        "testdrive_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requesttestdrive.show', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <a href='#' class='btn btn-outline'>Hapus</a>
                                    </div>"
                    ], [
                        "id" => 2,
                        "name" => "Abbott Kulas",
                        "email" => "abbott.cali@heaney.info",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "request_date" => "2016-07-31 23:25:43",
                        "testdrive_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requesttestdrive.show', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <a href='#' class='btn btn-outline'>Hapus</a>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function show()
    {
        $data['caption_text'] = app()->getLocale() == "en" ? "detail request data" : "detail data permintaan";

        return view('pages.notifikasi.testdrive-lihat', $data);
    }

}
