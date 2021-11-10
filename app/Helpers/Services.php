<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Services
{

       public static function getGrafikAkreditasiUniversitas()
       {
              return Services::get("akreditasi/fakultas");
       }

       public static function getDataProdi($kode)
       {
              return Services::get("akreditasi/fakultas/$kode");
       }

       public static function getCounterMahasiswa()
       {
              return Services::get("mahasiswa/counter");
       }

       public static function getCounterSebaranMahasiswaFakultas()
       {
              return Services::get("mahasiswa/sebaran/fakultas");
       }

       public static function getSDMKualifikasi()
       {
              return Services::get("sdm/kualifikasi");
       }

       public static function getSDMUsia()
       {
              return Services::get("sdm/usia");
       }

       public static function getSDMJabatanFungsional()
       {
              return Services::get("sdm/jabatan/fungsional");
       }

       public static function getSDMGolongan()
       {
              return Services::get("sdm/pangkat/golongan");
       }

       public static function get($endpoint, $data = [])
       {
              $headers = [
                     "Content-Type" => "Application/Json"
              ];
              return Http::withHeaders($headers)->get(env("BACKEND_URL") . $endpoint, $data);
       }
}
