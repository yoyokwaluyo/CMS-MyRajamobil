@extends('layouts.main')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="bg-primarys h-screen overflow-auto">

    <div class="container md:w-[90%] mx-auto px-4 py-8 min-h-screen flex items-center justify-center">

        <div class="w-1/2 bg-gray-50 rounded-md py-6 px-8 shadow-md">
            <img src="{{ asset('image/logo-myrajamobil.png') }}" class="h-10 mx-auto" alt="Logo" />
            
            <div class="stepper-form">
                <div class="tabs">
                    <ol>
                        <li class="active" data-tabs="1">
                            <div>
                                <i class='bx bx-user-circle'></i>
                            </div>
                        </li>
                        <li data-tabs="2">
                            <div>
                                <i class='bx bx-id-card'></i>
                            </div>
                        </li>
                        <li data-tabs="3">
                            <div>
                                <i class='bx bx-briefcase'></i>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>

            <form action="#">
                <!-- STEP 1 -->
                <div class="mx-auto steps" id="step-1">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Informasi Akun</h3>
                    <div class="grid gap-4 grid-cols-1 mb-10">
                        <div>
                            <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" class="form-control form-validation" required>
                        </div>
                        <div>
                            <label for="password" class="form-label">Password <span class="text-red-500">*</span></label>
                            <input type="password" id="password" name="password" class="form-control form-validation" required>
                        </div>
                    </div>
                </div>
                <!-- STEP 2 -->
                <div class="mx-auto steps" id="step-2">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Data Diri</h3>
                    <div class="grid gap-4 grid-cols-1 mb-10">
                        <div>
                            <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-validation" required="">
                        </div>
                        <div>
                            <label for="nohp" class="form-label">Nomor Handphone <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">+62</span>
                                </div>
                                <input type="text" name="nohp" id="nohp" class="form-control group form-validation" placeholder="123-45-678" required>
                            </div>
                        </div>
                        <div>
                            <label for="nowa" class="form-label">Nomor Whatsapp <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">+62</span>
                                </div>
                                <input type="text" name="nowa" id="nowa" class="form-control group form-validation" placeholder="123-45-678" required>
                            </div>
                        </div>
                        <div>
                            <label for="hubungi_saya" class="form-label">Hubungi Saya <span class="text-red-500">*</span></label>
                            <select name="hubungi_saya" class="form-select" id="hubungi_saya" required="">
                                <option value="" selected="" disabled="">Pilih</option>
                                <option value="Telepon">Telepon</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Email">Email</option>
                            </select>
                        </div>
                        <div>
                            <label for="file_input" class="form-label">Foto Profil</label>
                            <input type="file" name="foto" id="file_input" class="block w-full font-ibm border border-gray-400 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                        </div>
                    </div>
                </div>
                <!-- STEP 3 -->
                <div class="mx-auto steps" id="step-3">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Tipe Penjual</h3>
                    <div class="grid gap-4 grid-cols-1 mb-10">
                        <div class="space-y-4">
                            <div class="flex items-center border border-gray-400 rounded-md p-4">
                                <input type="radio" checked id="showroom_baru" value="showroom_baru" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                                <label for="showroom_baru" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                    <span class="text-sm font-ibm">Jual Mobil Baru</span>
                                    <span class="text-xs font-light">Untuk salesman mobil dari Authorized Dealer</span>
                                </label>
                            </div>
                            <div class="flex items-center border border-gray-400 rounded-md p-4">
                                <input type="radio" id="showroom_bekas" value="showroom_bekas" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                                <label for="showroom_bekas" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                    <span class="text-sm font-ibm">Jual Mobil Bekas</span>
                                    <span class="text-xs font-light">Untuk showroom penjual mobil bekas atau CBU</span>
                                </label>
                            </div>
                            <div class="flex items-center border border-gray-400 rounded-md p-4">
                                <input type="radio" id="showroom_perorangan" value="showroom_perorangan" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                                <label for="showroom_perorangan" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                    <span class="text-sm font-ibm">Jual Mobil Bekas</span>
                                    <span class="text-xs font-light">Untuk perorangan yang akan memasang mobil bekas</span>
                                </label>
                            </div>
                        </div>
                        <div class="space-y-4 showroom_baru">
                            <div>
                                <label for="provinsi-dealer" class="form-label">Pilih Provinsi Dealer <span class="text-red-500">*</span></label>
                                <select name="provinsi-dealer" id="provinsi-dealer" class="form-select form-validation" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </div>
                            <div>
                                <label for="kota-dealer" class="form-label">Pilih Kota Dealer <span class="text-red-500">*</span></label>
                                <select name="kota-dealer" id="kota-dealer" class="form-select form-validation" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Semarang">Semarang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Depok">Depok</option>
                                </select>
                            </div>
                            <div>
                                <label for="merek" class="form-label">Pilih Merek <span class="text-red-500">*</span></label>
                                <select name="merek" id="merek" class="form-select form-validation" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mitsubisi">Mitsubisi</option>
                                </select>
                            </div>
                            <div>
                                <label for="authorized" class="form-label">Pilih Authorized Dealer <span class="text-red-500">*</span></label>
                                <select name="authorized" id="authorized" class="form-select form-validation" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Plaza Toyota">Plaza Toyota</option>
                                    <option value="Honda Imora">Honda Imora</option>
                                    <option value="Auto2000">Auto2000</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-4 hidden showroom_bekas">
                            <div>
                                <label for="jenis_showroom" class="form-label">Pilih Jenis Showroom <span class="text-red-500">*</span></label>
                                <select name="jenis_showroom" id="jenis_showroom" class="form-select" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Showroom Mobil CBU">Showroom Mobil CBU</option>
                                    <option value="Showroom Mobil Bekas">Showroom Mobil Bekas</option>
                                </select>
                            </div>
                            <div>
                                <label for="provinsi_showroom" class="form-label">Pilih Provinsi Showroom <span class="text-red-500">*</span></label>
                                <select name="provinsi_showroom" id="provinsi_showroom" class="form-select" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </div>
                            <div>
                                <label for="kota_showroom" class="form-label">Pilih Kota Showroom <span class="text-red-500">*</span></label>
                                <select name="kota_showroom" id="kota_showroom" class="form-select" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Semarang">Semarang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Depok">Depok</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-4 hidden showroom_perorangan">
                            <div>
                                <label for="provinsi_perorangan" class="form-label">Pilih Provinsi <span class="text-red-500">*</span></label>
                                <select name="provinsi_perorangan" id="provinsi_perorangan" class="form-select" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </div>
                            <div>
                                <label for="kota_perorangan" class="form-label">Pilih Kota <span class="text-red-500">*</span></label>
                                <select name="kota_perorangan" id="kota_perorangan" class="form-select" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Semarang">Semarang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Depok">Depok</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="referensi" class="form-label">Darimana Anda mengetahui Rajamobil.com? <span class="text-red-500">*</span></label>
                            <select name="referensi" id="referensi" class="form-select form-validation" required="">
                                <option value="" disabled="" selected="">Pilih</option>
                                <option value="google">Google</option>
                                <option value="teman">Teman</option>
                                <option value="kantor">Kantor</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="hidden referensi_lainnya">
                            <label for="sumber" class="form-label">Sumber <span class="text-red-500">*</span></label>
                            <input type="text" name="sumber" id="sumber" class="form-control" required="">
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <button class="buttons mx-auto w-full rounded-md" id="button-step" disabled current-steps="1">Lanjut</button>
                    <button class="buttons orange mx-auto hidden w-full rounded-md" type="button" id="button-form">Daftar</button>
                    <div class="flex justify-center">
                        <a href="{{ route('login', app()->getLocale()) }}" class="buttons-outline hover:bg-orange-200 hover:border-orange-200 hover:text-orange-500 rounded-md border-0 hover:bg-transparent"><span class="text-black/60">Sudah punya akun?</span> Masuk Sekarang</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>


@endsection

@section('scripts')
<script>
    let daftar = {
        init: function() {
            // hide content step page
            daftar.showPage("step-1");

            daftar.formValidation(1);
            daftar.buttonSubmit();
            daftar.tipePenjual();
        },
        showPage: function(page) {
            let steps = document.querySelectorAll(".steps");
            steps.forEach(element => {
                element.classList.remove("hidden");
                if (element.id !== page) {
                    element.classList.add("hidden");
                }
            });
        },
        activeTabs: function(page) {
            let tabs = document.querySelectorAll(".tabs ol li");

            tabs.forEach(element => {
                let tab = element.getAttribute("data-tabs");
                if (page == tab) {
                    element.classList.add("active");
                }
            });
        },
        activeButton: function(active, page) {
            let btn = document.querySelector("#button-step");

            if (active) {
                btn.classList.add("orange");
            } else {
                btn.classList.remove("orange");
            }
            btn.disabled = !active;
            btn.setAttribute("current-steps", page);
        },
        tipePenjual: function() {
            let tipePenjual = document.getElementsByName("tipe_penjual");
            let referensi = document.querySelector("#referensi");
            let btn = document.querySelector("#button-step");
            let btnForm = document.querySelector("#button-form");

            tipePenjual.forEach(element => {
                element.addEventListener("click", function() {
                    // hidden form input by tipe_penjual
                    tipePenjual.forEach(el => {
                        document.querySelector("."+el.value).classList.add("hidden");
                        // remove form-validation class
                        let formshide = document.querySelectorAll("."+el.value+" .form-control");
                        formshide.forEach(elemt => {
                            elemt.classList.remove("form-validation");
                        });
                    });
                    // show form input by tipe_penjual
                    let tipeP = element.value;
                    document.querySelector("."+tipeP).classList.remove("hidden");
                    // add form-validation class
                    let formshow = document.querySelectorAll("."+tipeP+" .form-control");
                    formshow.forEach(elem => {
                        elem.classList.add("form-validation");
                        elem.value = "";
                    });
                    // call form validation page 3 every click
                    daftar.formValidation(3);
                    daftar.activeButton(false, 3);
                    btn.classList.remove("hidden");
                    btnForm.classList.add("hidden"); // hide button modal pin
                });
            });
            // show hide form referensi
            referensi.addEventListener("change", function(e) {
                if (e.target.value.trim() === "lainnya") {
                    document.querySelector(".referensi_lainnya").classList.remove("hidden");
                    document.querySelector(".referensi_lainnya .form-control").classList.add("form-validation");
                    // call form validation page 3
                    // daftar.formValidation(3);
                } else {
                    document.querySelector(".referensi_lainnya").classList.add("hidden");
                    document.querySelector(".referensi_lainnya .form-control").classList.remove("form-validation");
                    document.querySelector(".referensi_lainnya .form-control").value = "";
                }
            });
        },
        formValidation: function(page) {
            let formInput = document.querySelectorAll("#step-"+page+" .form-validation");
            let btn = document.querySelector("#button-step");
            let btnForm = document.querySelector("#button-form");
            let arr = {};

            formInput.forEach((element, key) => {
                element.addEventListener("change", (e) => {
                    var val = e.target.value;
                    
                    // set array true/false from value input
                    formInput.forEach((el, val) => {
                        (el.value.trim().length !== 0) ? arr[val] = true : arr[val] = false;
                    });
                    console.log(arr);

                    // Check that all fields are filled in every page step
                    let count = 0;
                    formInput.forEach((elem, idx) => {
                        if (arr[idx]) count++;
                    });
                    console.log(count);

                    if (count >= formInput.length) { // succes or continue step
                        daftar.activeButton(true, page);
                        daftar.buttonNext(page);
                        if (page == 3) { // page ke 3
                            btn.classList.add("hidden");
                            btnForm.classList.remove("hidden"); // show button modal pin
                        }
                    } else {
                        daftar.activeButton(false, page);
                        if (page == 3) { // page ke 3
                            btn.classList.remove("hidden");
                            btnForm.classList.add("hidden"); // hide button modal pin
                        }
                    }
                });
            });
        },
        buttonNext: function(page) {
            let btn = document.querySelector("#button-step");
            
            if (page == 1) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");
                    
                    if (pageSteps == 1) {
                        daftar.showPage("step-2");
                        daftar.activeTabs(2);

                        daftar.activeButton(false, 2);
                        daftar.formValidation(2);
                    }
                });
            }

            if (page == 2) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");
                    
                    if (pageSteps == 2) {
                        daftar.showPage("step-3");
                        daftar.activeTabs(3);
    
                        daftar.activeButton(false, 3);
                        daftar.formValidation(3);
                    }
                });
            }
        },
        buttonSubmit: function() {
            let btn = document.querySelector("#button-form");

            btn.addEventListener("click", function() {
                window.location.href = "/login";
                console.log("Submit");
            });
        }
    }

    document.addEventListener("DOMContentLoaded", (event) => {
        daftar.init();
    });
</script>
@endsection