<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class ServiceController extends Controller
{
    public function index()
    {
        $data['caption_text'] = __('language.m_service');
        $data['data_period'] = [
            "start" => "03 November",
            "end" => "09 November 2024",
            "listDay" => [
                [
                    "date" => "2024-11-03",
                    "day" => "Minggu"
                ],
                [
                    "date" => "2024-11-04",
                    "day" => "Senin"
                ],
                [
                    "date" => "2024-11-05",
                    "day" => "Selasa"
                ],
                [
                    "date" => "2024-11-06",
                    "day" => "Rabu"
                ],
                [
                    "date" => "2024-11-07",
                    "day" => "Kamis"
                ],
                [
                    "date" => "2024-11-08",
                    "day" => "Jumat"
                ],
                [
                    "date" => "2024-11-09",
                    "day" => "Sabtu"
                ]
            ]
        ];
        
        return request()->routeIs('requestservice') 
            ? view('pages.notifikasi.service-listdata', $data) 
            : view('pages.notifikasi.service-listdata-sa', $data);
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
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "booking_date" => "2016-07-31 23:25:43",
                        "request_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requestservice.show', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "name" => "Abbott Kulas",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "booking_date" => "2016-07-31 23:25:43",
                        "request_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requestservice.show', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
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

        return request()->routeIs('requestservice.show') 
            ? view('pages.notifikasi.service-showdata', $data) 
            : view('pages.notifikasi.service-showdata-sa', $data);
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
                        "name" => "<div>Esmeralda Kulas</div>
                                    <div class='mt-1'><span class='badge-red'>Archived</span></div>",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "testdrive_date" => "2016-07-31 23:25:43",
                        "request_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requestservice.showsa', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "name" => "<div>Abbott Kulas</div>
                                    <div class='mt-1'><span class='badge-blue'>Reschedule</span></div>",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "testdrive_date" => "2016-07-31 23:25:43",
                        "request_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requestservice.showsa', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 3,
                        "name" => "<div>Abbott Kulas</div>",
                        "model" => "BRV N7X",
                        "phone" => "+6285780901246",
                        "testdrive_date" => "2016-07-31 23:25:43",
                        "request_date" => "2016-07-31 23:25:43",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('requestservice.showsa', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='3'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function inputService()
    {
        // Tetapkan bulan dan tahun yang diinginkan
        $year = 2024;
        $month = 11;

        // Dapatkan tanggal awal dan akhir bulan
        $startOfMonth = Carbon::createFromDate($year, $month, 1)->startOfMonth();
        $endOfMonth = $startOfMonth->copy()->endOfMonth();

        // Menyusun array tanggal dari awal hingga akhir bulan
        $daysInMonth = [];
        $currentDate = $startOfMonth->copy();
        
        // Loop untuk mendapatkan setiap hari dalam bulan tersebut
        while ($currentDate->lte($endOfMonth)) {
            $daysInMonth[] = [
                'date' => $currentDate->format('d M Y'),
                'day' => $currentDate->day,
                'weekday' => $currentDate->dayOfWeek, // 0 untuk Minggu, 1 untuk Senin, dst
            ];
            $currentDate->addDay();
        }
        
        $data['caption_text'] = app()->getLocale() == "en" ? "input service data" : "pengisian data service";
        $data['list_days'] = ["Monday", "Tuesday",	"Wednesday", "Thursday", "Friday", "Saturday",	"Sunday"];
        $data['daysInMonth'] = $daysInMonth;
        $data['startOfMonth'] = $startOfMonth;

        return view('pages.notifikasi.service-inputdata', $data);
    }

    public function inputServiceSa()
    {
        $data['caption_text'] = app()->getLocale() == "en" ? "input service data" : "pengisian data service";
        $data['data_period'] = [
            "start" => "03 November",
            "end" => "09 November 2024",
            "listDay" => [
                [
                    "date" => "2024-11-03",
                    "day" => "Minggu"
                ],
                [
                    "date" => "2024-11-04",
                    "day" => "Senin"
                ],
                [
                    "date" => "2024-11-05",
                    "day" => "Selasa"
                ],
                [
                    "date" => "2024-11-06",
                    "day" => "Rabu"
                ],
                [
                    "date" => "2024-11-07",
                    "day" => "Kamis"
                ],
                [
                    "date" => "2024-11-08",
                    "day" => "Jumat"
                ],
                [
                    "date" => "2024-11-09",
                    "day" => "Sabtu"
                ]
            ]
        ];

        return view('pages.notifikasi.service-inputdata-sa', $data);
    }
}
