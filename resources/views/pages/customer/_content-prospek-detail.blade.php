<div>
    <div class="flex max-sm:flex-col gap-14 md:gap-8">
        <div class="md:w-2/5 space-y-6">
            <div class="grid md:grid-cols-3">
                <div class="max-w-28">
                    <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="w-20 h-20 rounded-full mb-2 mx-auto">
                    <div class="text-xs text-center">
                        <div>ID : 565402</div>
                        <div>2 tahun yang lalu</div>
                    </div>
                </div>
                <div class="col-span-2 text-sm pt-2">
                    <div class="font-semibold line-clamp-1">Merryane</div>
                    <div class="font-medium">Brv N7X</div>
                    <div class="flex items-center gap-1">
                        <i class='bx bxs-map text-lg'></i>
                        <span class="font-poppins font-medium text-xs">Jakarta Selatan</span>
                    </div>
                    <div class="space-y-1 mt-1 text-center md:max-w-[75%]">
                        <div class="buttons-click cursor-pointer" id="btn-1">
                            <div class="buttons-outline orange py-2 text-xs w-full rounded-md">
                                <i class='bx bx-phone'></i>
                                <span class="">082123xxxx</span>
                            </div>
                            <a href="#" class="buttons-outline orange py-2 text-xs w-full rounded-md hidden">
                                <i class='bx bx-phone'></i>
                                <span class="py-[.1rem]">0821233836721</span>
                            </a>
                        </div>
                        <div class="buttons-click cursor-pointer" id="btn-2">
                            <div class="buttons-outline green py-2 text-xs w-full rounded-md">
                                <i class='bx bxl-whatsapp'></i>
                                <span class="">082123xxxx</span>
                            </div>
                            <a href="#" class="buttons-outline green py-2 text-xs w-full rounded-md hidden">
                                <i class='bx bxl-whatsapp'></i>
                                <span class="py-[.1rem]">0821233836721</span>
                            </a>
                        </div>
                        <div class="buttons-click cursor-pointer" id="btn-3">
                            <div class="buttons-outline red py-2 px-2 text-xs w-full rounded-md">
                                <i class='bx bx-envelope'></i>
                                <span class="">xxxrryane@gmail.com</span>
                            </div>
                            <a href="#" class="buttons-outline red py-2 px-2 text-xs w-full rounded-md hidden">
                                <i class='bx bx-envelope'></i>
                                <span class="py-[.1rem]">Merryane@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 mt-4 space-y-2">
                    <button type="button" class="buttons orange py-2 text-xs w-full rounded-md" data-modal-target="modal-appointment" data-modal-toggle="modal-appointment">Appointment to set</button>
                    <div class="text-xs font-medium">Next Appointment 30-October-2024 13:01</div> <!-- terisi ketika sudah mengisi appointment -->
                </div>
            </div>
            <div class="text-sm space-y-4">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <div class="font-semibold border-b-2 border-orange-500">Info Umum</div>
                        <a href="{{ route('addprospect', app()->getLocale()) }}" class="flex items-center gap-1 font-medium p-2 hover:text-orange-500 transition-all duration-150 ease-in">
                            <i class='bx bx-edit-alt text-base'></i>
                            Ubah
                        </a>
                    </div>
                    <div>
                        <div class="overflow-x-scroll overflow-y-hidden">
                            <table class="table text-xs">
                                <tbody>
                                    <tr>
                                        <th>Sumber Prospek</th>
                                        <td>Rajamobil.com</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td>2 tahun yang lalu</td>
                                    </tr>
                                    <tr>
                                        <th>DP</th>
                                        <td>Rp. 30.000.000 - 40.000.000</td>
                                    </tr>
                                    <tr>
                                        <th>Angsuran</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Tenor</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan Lain</th>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <div class="font-semibold border-b-2 border-orange-500">Info Mobil</div>
                    </div>
                    <div>
                        <div class="overflow-x-scroll overflow-y-hidden">
                            <table class="table text-xs">
                                <tbody>
                                    <tr>
                                        <th>Merek</th>
                                        <td>Honda</td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td>BRV</td>
                                    </tr>
                                    <tr>
                                        <th>Tipe</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Leasing</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>TDP</th>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <div class="font-semibold border-b-2 border-orange-500">Keterangan</div>
                    </div>
                    <div class="text-xs font-medium">
                        Saya tertarik dengan mobil Honda BRV. Saya berharap dengan DP Rp. . Mohon diberikan beberapa alternatif paket promo.
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-3/5">
            <div class="space-y-4">
                <div class="button-step-prospek">
                    <button class="active" data-target="tab-prospek">1. Prospek</button>
                    <button class="" data-target="tab-spk">2. Pindahkan Ke SPK</button> <!-- kalo sudah isi prospek ini bisa di klik diisi dengan "tab-spk" -->
                    <button class="" data-target="tab-arsip">3. Arsipkan DO</button> <!-- kalo sudah isi prospek ini bisa di klik diisi dengan "tab-arsip" -->
                </div>
                <div class="text-sm">
                    <div class="content-step-prospek" id="tab-prospek">
                        <div class="p-3 bg-primarys font-medium w-fit mx-auto shadow-md mb-8 rounded-md dark:bg-gray-700" id="total-scorring">0% Interest / Low</div>
                        <div class="font-semibold border-b-2 border-orange-500 w-fit mb-6">Cust./Prospek Sudah Menentukan :</div>
                        <form action="#" class="space-y-6">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input id="tipe_mobil" name="tipe_mobil" type="checkbox" value="14" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="tipe_mobil" class=" text-sm form-label mb-0">Sudah menentukan Tipe + Warna</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="cash_credit" name="cash_credit" type="checkbox" value="14" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="cash_credit" class=" text-sm form-label mb-0">Sudah menentukan Cash / Kredit</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="ready_dikirim" name="ready_dikirim" type="checkbox" value="14" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="ready_dikirim" class=" text-sm form-label mb-0">Memastikan kapan kendaraan ready/dikirim</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="minta_diskon" name="minta_diskon" type="checkbox" value="14" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="minta_diskon" class=" text-sm form-label mb-0">Serius menegosiasi diskon/bonus/bunga dsb</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 group-checkbox">
                                <div class="font-semibold">Rencana SPK :</div>
                                <div class="flex items-center">
                                    <input id="dalam_satu_dua_hari" name="beli_minggu_ini[]" type="checkbox" value="36" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="dalam_satu_dua_hari" class=" text-sm form-label mb-0">Segera Dalam 1 - 2 hari ini</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="beli_minggu_ini" name="beli_minggu_ini[]" type="checkbox" value="30" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="beli_minggu_ini" class=" text-sm form-label mb-0">Dalam satu minggu ini</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="dalam_satu_dua_minggu" name="beli_minggu_ini[]" type="checkbox" value="15" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="dalam_satu_dua_minggu" class=" text-sm form-label mb-0">Dalam 1 - 2 minggu ini</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="lebih_dari_dua_minggu" name="beli_minggu_ini[]" type="checkbox" value="1" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="lebih_dari_dua_minggu" class=" text-sm form-label mb-0">> 2 minggu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 group-checkbox">
                                <div class="font-semibold">Faktor + (R.O. atau Prospek Baru) :</div>
                                <div class="flex items-center">
                                    <input id="repeat_order" name="repeat_order[]" type="checkbox" value="7" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="repeat_order" class=" text-sm form-label mb-0">Repeat Order Min.3x di waktu yg berbeda</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="repeat_order_2" name="repeat_order[]" type="checkbox" value="5" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="repeat_order_2" class=" text-sm form-label mb-0">Repeat Order 1 - 2x di waktu yg berbeda</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="prospek_baru_dikenal" name="repeat_order[]" type="checkbox" value="5" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="prospek_baru_dikenal" class=" text-sm form-label mb-0">Prospek Baru, sudah kenal baik sebelumnya</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="alamat_rumah_kantor" name="repeat_order[]" type="checkbox" value="4" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="alamat_rumah_kantor" class=" text-sm form-label mb-0">Sudah mendapatkan alamat prospek (baru)</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="cust_refrensi" name="repeat_order[]" type="checkbox" value="4" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="cust_refrensi" class=" text-sm form-label mb-0">Referensi dari orang yg dekat dgn prospek</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="tidak_ada_faktor_plus" name="repeat_order[]" type="checkbox" value="1" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="tidak_ada_faktor_plus" class=" text-sm form-label mb-0">Tidak Ada Faktor+</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="no_answer" name="repeat_order[]" type="checkbox" value="1" class="form-checkbox">
                                    <div class="border-b border-gray-300 ms-2 py-1 w-full">
                                        <label for="no_answer" class=" text-sm form-label mb-0">Tidak Ada Jawaban</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="buttons py-2 bg-orange-500 hover:bg-orange-600 rounded-md text-xs w-full">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="hidden content-step-prospek" id="tab-spk">
                        <form action="#" class="space-y-2 mt-8">
                            <div>
                                <label for="no_spk" class="form-label">No SPK</label>
                                <input type="text" name="no_spk" id="no_spk" class="form-control">
                            </div>
                            <div>
                                <label for="dateCust" class="form-label">Tanggal Lahir Customer</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                                    </div>
                                    <input type="text" name="date_cust" id="dateCust" class="form-control group" required>
                                </div>
                            </div>
                            <div>
                                <label for="dateSPK" class="form-label">Tanggal SPK</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                                    </div>
                                    <input type="text" name="date_spk" id="dateSPK" class="form-control group" required>
                                </div>
                            </div>
                            <div>
                                <label for="model" class="form-label">Model</label>
                                <select name="model" id="model" class="form-control" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mitsubisi">Mitsubisi</option>
                                </select>
                            </div>
                            <div>
                                <label for="tipe" class="form-label">Tipe</label>
                                <select name="tipe" id="tipe" class="form-control" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="MT 1.5 CVT">MT 1.5 CVT</option>
                                    <option value="AT 1.5 VVT">AT 1.5 VVT</option>
                                </select>
                            </div>
                            <div>
                                <label for="nama_stnk" class="form-label">Nama STNK</label>
                                <input type="text" name="nama_stnk" id="nama_stnk" class="form-control">
                            </div>
                            <div>
                                <label for="dp" class="form-label">DP</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <span class="font-medium">Rp</span>
                                    </div>
                                    <input type="text" name="dp" id="dp" class="form-control group" required>
                                </div>
                            </div>
                            <div>
                                <label for="file_input" class="form-label">File SPK</label>
                                <input type="file" name="foto" id="file_input" class="form-files">
                            </div>
                            <div>
                                <label for="spkNote" class="form-label">SPK Note</label>
                                <textarea name="sales_note" id="spkNote" cols="2" class="form-control"></textarea>
                            </div>
                            <div>&nbsp;</div>
                            <div class="">
                                <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 rounded-md text-xs w-full">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="hidden content-step-prospek" id="tab-arsip">
                        <form action="#" class="space-y-2 mt-8">
                            <div>
                                <label for="no_do" class="form-label">No DO</label>
                                <input type="text" name="no_do" id="no_do" class="form-control">
                            </div>
                            <div>
                                <label for="dateDO" class="form-label">Tanggal DO</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                                    </div>
                                    <input type="text" name="date_cust" id="dateDO" class="form-control group" required>
                                </div>
                            </div>
                            <div>
                                <label for="model" class="form-label">Model</label>
                                <select name="model" id="model" class="form-control" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mitsubisi">Mitsubisi</option>
                                </select>
                            </div>
                            <div>
                                <label for="tipe" class="form-label">Tipe</label>
                                <select name="tipe" id="tipe" class="form-control" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="MT 1.5 CVT">MT 1.5 CVT</option>
                                    <option value="AT 1.5 VVT">AT 1.5 VVT</option>
                                </select>
                            </div>
                            <div>&nbsp;</div>
                            <div class="">
                                <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 rounded-md text-xs w-full">Arsipkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 border border-gray-300 rounded-md shadow-sm p-4">
        <form action="#" class="space-y-2">
            <div>
                <label for="salesNote" class="form-label">Sales Note</label>
                <textarea name="sales_note" id="salesNote" cols="2" class="form-control"></textarea>
            </div>
            <div class="">
                <button type="submit" class="buttons py-2 bg-orange-500 hover:bg-orange-600 rounded-md text-xs">Simpan Notes</button>
            </div>
        </form>
    </div>
    <div class='btn-group-table justify-end mt-4'>
        <a href="#" class='text-xs btn btn-outline'>
            <i class='bx bx-folder-open'></i>
            Arsipkan
        </a>
        <a href='#' class='text-xs btn btn-outline'>
            <i class='bx bx-trash'></i>
            Hapus
        </a>
    </div>
</div>


<!-- Appointment modal -->
<div id="modal-appointment" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-ibm dark:text-white">
                    Set Appointment
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-appointment">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 px-6">
                <form action="#" class="space-y-4">
                    <div>
                        <label for="dateAppointment" class="form-label">Pilih Tanggal</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="date_appointment" id="dateAppointment" class="form-control group form-validation" required>
                        </div>
                    </div>
                    <div>
                        <label for="timeAppointment" class="form-label">Pilih Waktu</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bx-time text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="time_appointment" id="timeAppointment" class="form-control group form-validation" required>
                        </div>
                    </div>
                    <div class="space-y-2 py-4">
                        <button type="submit" class="buttons w-full py-2.5 bg-orange-500 hover:bg-orange-600 rounded-md text-base">Appointment</button>
                        <button type="submit" class="buttons-outline w-full py-2.5 rounded-md text-base hover:bg-gray-500 hover:text-white dark:text-gray-300 dark:border-gray-500">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            Pdetail.init();
        }, 1000);

        let Pdetail = {
            init: function() {
                Pdetail.stepProspek();
                Pdetail.checkboxGroup();
            },
            stepProspek: function() {
                let btn = document.querySelectorAll(".button-step-prospek button");
                let content = document.querySelectorAll(".content-step-prospek");

                btn.forEach(element => {
                    let attr = element.getAttribute("data-target");

                    if (attr.length >= 1) {
                        element.addEventListener("click", function() {
                            btn.forEach(el => {
                                el.classList.remove("active");
                            });
                            content.forEach(elem => {
                                elem.classList.add("hidden");
                            });

                            element.classList.add("active");
                            document.querySelector("#" + attr).classList.remove('hidden');
                        });
                        element.classList.remove("cursor-not-allowed");
                    } else {
                        element.classList.add("cursor-not-allowed");
                    }
                });
            },
            checkboxGroup: function() {
                $("input:checkbox").on('click', function() {
                    // in the handler, 'this' refers to the box clicked on
                    var $box = $(this);

                    if ($box.is(":checked")) {
                        // the name of the box is retrieved using the .attr() method
                        // as it is assumed and expected to be immutable
                        var group = "input:checkbox[name='" + $box.attr("name") + "']";
                        // the checked state of the group/box on the other hand will change
                        // and the current value is retrieved using .prop() method
                        $(group).prop("checked", false);
                        $box.prop("checked", true);
                    } else {
                        $box.prop("checked", false);
                    }

                    // setup scorring
                    let checkGroup = document.querySelectorAll("input[type='checkbox']");
                    let scorring = 0;

                    checkGroup.forEach(element => {
                        if (element.checked) {
                            scorring += parseInt(element.value);
                        }
                    });

                    scorringCount(scorring);
                });

                function scorringCount(val) {
                    // 1-49 Interest / Low
                    // 50-75 Medium
                    // 76-99 Hot Prospect

                    let badgeScorring = document.querySelector("#total-scorring");

                    var data = "";
                    if (val <= 49) data = `${val}% Interest / Low`;
                    if (val >= 50 && val <= 75) data = `${val}% Medium`;
                    if (val >= 76 && val <= 99) data = `${val}% Hot Prospect`;

                    badgeScorring.innerHTML = data;
                }
            }
        }

        flatpickr("#dateAppointment", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });

        let arrDate = ['#dateCust', '#dateSPK', '#dateDO'];
        arrDate.forEach(element => {
            flatpickr(element, {
                enableTime: false,
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr, instance) {
                    console.log("change");
                },
            });
        });

        flatpickr("#timeAppointment", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            minTime: "08:00",
            maxTime: "17:00",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });

    });
</script>
@endsection