<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category()
    {
        $data['caption_text'] = __('language.m_category');

        return view('pages.product.product-category', $data);
    }

    public function getDataCategory(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "name" => "Honda Genuine Tes",
                        "keterangan" => "<div class='line-clamp-2'>Honda Genuine Chemicals adalah produk Chemicals yang formulanya telah disesuaikan dan cocok untuk berbagai kondisi teknis pada seluruh produk mobil Honda. Penggunaan Chemicals diluar dari rekomendasi Honda/non Honda Chemicals dan penggunaan chemicals palsu dengan sengaja, dapat merugikan dan merusak kendaraan Honda Anda, serta dapat menghilangkan jaminan garansi 3 tahun/100.000 km pada kendaraan Honda Anda.</div>",
                        "status" => "<span class='badge-green'>Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('product.addcategory', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "name" => "Honda Automobile Oil",
                        "keterangan" => "<div class='line-clamp-2'>Kini Anda bisa mendapatkan kinerja optimal dari mesin Honda serta meningkatkan efisiensi bahan bakar dan di saat yang bersamaan merawat mesin sekaligus lingkungan, dengan Honda Automobile Oil. Diformulasikan secara khusus oleh Honda R&D Jepang sebagai paduan sempurna bagi mobil Honda Anda. Berdasarkan pengujian internal, Honda Automobile Oil memiliki efektifitas efisiensi bahan bakar yang lebih baik sebesar 4%. Di Honda kami menghargai INVESTASI Anda dengan INOVASI.",
                        "status" => "<span class='badge-red'>Not Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('product.addcategory', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function addCategory()
    {
        $data['caption_text'] = (app()->getLocale() == "en" ? "Add " : "Tambah "). __('language.m_category');

        return view('pages.product.product-category-add', $data);
    }

    public function productList()
    {
        $data['caption_text'] = __('language.m_listproduct');

        return view('pages.product.product-list', $data);
    }

    public function getDataList(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                "draw" => 2,
                "recordsTotal" => 10,
                "recordsFiltered" => 3,
                "data" => [
                    [
                        "id" => 1,
                        "produk" => "<div class='line-clamp-1'>Tes 1</div>",
                        "foto" => "<img src='".asset('image/profil.jpg')."' class='w-24 h-10 object-contain rounded-md'>",
                        "kategori" => "<div class='line-clamp-1'>Honda Genuine Tes</div> ",
                        "keterangan" => "<div class='line-clamp-1'>Honda Genuine Chemicals adalah produk Chemicals yang formulanya telah disesuaikan dan cocok untuk berbagai kondisi teknis pada seluruh produk mobil Honda. Penggunaan Chemicals diluar dari rekomendasi Honda/non Honda Chemicals dan penggunaan chemicals palsu dengan sengaja, dapat merugikan dan merusak kendaraan Honda Anda, serta dapat menghilangkan jaminan garansi 3 tahun/100.000 km pada kendaraan Honda Anda.</div>",
                        "status" => "<span class='badge-green'>Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('product.addlist', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='1'>Hapus</button>
                                    </div>"
                    ], [
                        "id" => 2,
                        "produk" => "<div class='line-clamp-1'>Tes 2</div>",
                        "foto" => "<img src='".asset('image/profil.jpg')."' class='w-24 h-10 object-contain rounded-md'>",
                        "kategori" => "<div class='line-clamp-1'>Honda Automobile Oil</div> ",
                        "keterangan" => "<div class='line-clamp-1'>Kini Anda bisa mendapatkan kinerja optimal dari mesin Honda serta meningkatkan efisiensi bahan bakar dan di saat yang bersamaan merawat mesin sekaligus lingkungan, dengan Honda Automobile Oil. Diformulasikan secara khusus oleh Honda R&D Jepang sebagai paduan sempurna bagi mobil Honda Anda. Berdasarkan pengujian internal, Honda Automobile Oil memiliki efektifitas efisiensi bahan bakar yang lebih baik sebesar 4%. Di Honda kami menghargai INVESTASI Anda dengan INOVASI.",
                        "status" => "<span class='badge-red'>Not Active</span>",
                        "action" => "<div class='btn-group-table'>
                                        <a href='".route('product.addlist', ['language' => app()->getLocale(), 'id' => 1])."' class='btn orange'>Lihat</a>
                                        <button class='btn btn-outline delete-row' data-row='2'>Hapus</button>
                                    </div>"
                    ]
                ]
            ];

            return response()->json($data);
        }
    }

    public function addList()
    {
        $data['caption_text'] = (app()->getLocale() == "en" ? "Add " : "Tambah "). __('language.m_listproduct');

        return view('pages.product.product-list-add', $data);
    }

}
