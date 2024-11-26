<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_operasional');

        return view('pages.workshop.operasional', $data);
    }

    public function tentang()
    {
        $data['caption_text'] = __('language.m_about_workshop');

        return view('pages.workshop.tentang-bengkel', $data);
    }

    public function salesAdvisor()
    {
        $data['caption_text'] = __('language.m_salesadvisor');

        return view('pages.workshop.sales-advisor', $data);
    }

    public function getDataSa(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "name" => "<div>Esmeralda Kulas</div>",
                        "dealer" => "Honda Imora",
                        "kategori" => "Service",
                        "status" => "<span class='badge-green'>Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('salesadvisor.add', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "name" => "<div>Abbott Kulas</div>",
                        "dealer" => "Honda Imora",
                        "kategori" => "Body Repair",
                        "status" => "<span class='badge-red'>Not Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('salesadvisor.add', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 3,
                        "name" => "<div>Abbott Kulas</div>",
                        "dealer" => "Honda Imora",
                        "kategori" => "Service",
                        "status" => "<span class='badge-green'>Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('salesadvisor.add', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='3'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function addSalesAdvisor(Request $request)
    {
        $data['caption_text'] = (app()->getLocale() == "en" ? "add " : "tambah ").__('language.m_salesadvisor');

        return view('pages.workshop.sales-advisor-tambah', $data);
    }
}
