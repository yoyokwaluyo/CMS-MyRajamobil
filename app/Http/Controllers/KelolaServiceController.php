<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaServiceController extends Controller
{
    public function index(Request $request)
    {
        $data['caption_text'] = __('language.m_kelolas');
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
        $data['time_show'] = [
            "07:00",
            "07:15",
            "07:30",
            "07:45",
            "08:00",
            "08:15",
            "08:30",
            "08:45",
            "09:00",
            "09:15",
            "09:30",
            "09:45",
            "10:00",
            "10:15",
            "10:30",
            "10:45",
            "11:00",
            "11:15",
            "11:30",
            "11:45",
            "12:00",
            "12:15",
            "12:30",
            "12:45",
            "13:00",
            "13:15",
            "13:30",
            "13:45",
            "14:00",
            "14:15",
            "14:30",
            "14:45",
            "15:00",
            "15:15",
            "15:30",
            "15:45",
            "16:00",
            "16:15",
            "16:30",
            "16:45"
        ];

        return view('pages.workshop.kelola-service', $data);
    }

}
