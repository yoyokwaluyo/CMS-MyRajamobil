<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function inputVoucher()
    {
        $data['caption_text'] = __('language.m_inputvoucher');

        return view('pages.workshop.voucher-input', $data);
    }

    public function getDataInput(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "target" => "ABC Zone",
                        "deskripsi" => "ABC Testing",
                        "berlaku" => "<span class='badge-green'>1 Bulan</span>",
                        "code" => "xasha12",
                        "created" => "12-11-2024",
                        "updated" => "12-11-2024",
                        "action" => "<div class='btn-group-table justify-around items-center'>
                                        <a href='#' class='btn orange'>Ubah</a>
                                        <input name='check_voucher' type='checkbox' value='1' class='form-checkbox checkbox_table' data-row='1'>
                                    </div>"
                    ], [
                        "id" => 2,
                        "target" => "ABC Zone",
                        "deskripsi" => "ABC Testing",
                        "berlaku" => "<span class='badge-green'>2 Bulan</span>",
                        "code" => "xasha12",
                        "created" => "12-11-2024",
                        "updated" => "12-11-2024",
                        "action" => "<div class='btn-group-table justify-around items-center'>
                                        <a href='#' class='btn orange'>Ubah</a>
                                        <input name='check_voucher' type='checkbox' value='1' class='form-checkbox checkbox_table' data-row='2'>
                                    </div>"
                    ], [
                        "id" => 3,
                        "target" => "ABC Zone",
                        "deskripsi" => "ABC Testing",
                        "berlaku" => "<span class='badge-green'>3 Bulan</span>",
                        "code" => "xasha12",
                        "created" => "12-11-2024",
                        "updated" => "12-11-2024",
                        "action" => "<div class='btn-group-table justify-around items-center'>
                                        <a href='#' class='btn orange'>Ubah</a>
                                        <input name='check_voucher' type='checkbox' value='1' class='form-checkbox checkbox_table' data-row='3'>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function listclaim()
    {
        $data['caption_text'] = __('language.m_claimvoucher');

        return view('pages.workshop.voucher-claim', $data);
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
                        "target" => "ABC Zone",
                        "nopol" => "B 1252 CCC",
                        "nama" => "Tes Name",
                        "code" => "xasha12",
                        "tanggal" => "12-11-2024",
                        "klaimvia" => "Booking",
                        "status" => "<span class='badge-green'>Terpakai</span>",
                        "action" => "<div class='btn-group-table'>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "target" => "ABC Zone",
                        "nopol" => "B 1252 CCC",
                        "nama" => "Tes Name",
                        "code" => "xasha12",
                        "tanggal" => "12-11-2024",
                        "klaimvia" => "Booking",
                        "status" => "<span class='badge-red'>Kadaluarsa</span>",
                        "action" => "<div class='btn-group-table'>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 3,
                        "target" => "ABC Zone",
                        "nopol" => "B 1252 CCC",
                        "nama" => "Tes Name",
                        "code" => "xasha12",
                        "tanggal" => "12-11-2024",
                        "klaimvia" => "Booking",
                        "status" => "<span class='badge-indigo'>Belum Terpakai</span>",
                        "action" => "<div class='btn-group-table'>
                                        <button class='btn btn-outline delete-row' data-row='3'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function addVoucher()
    {
        $data['caption_text'] = __('language.m_voucher');

        return view('pages.workshop.voucher-input-add', $data);
    }

    public function masterZone()
    {
        $data['caption_text'] = __('language.m_zone');

        return view('pages.workshop.voucher-input-zone', $data);
    }

    public function passcode()
    {
        $data['caption_text'] = __('language.m_passcode');

        return view('pages.workshop.voucher-input-passcode', $data);
    }

}
