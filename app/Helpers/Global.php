<?php

use App\Models\DetailAdminCabang;
use Illuminate\Support\Str;
use App\Models\DetailMember;
use App\Models\DetailCustomer;
use Illuminate\Support\Facades\Auth;

function dataCustomer(){
        $data_customer = DetailCustomer::where('id_user', Auth::user()->id)->first();
        return $data_customer;
}

function dataMember() {
        $data_customer = DetailMember::where('id_user', Auth::user()->id)->first();
        return $data_customer;
}

function dataAdminCabang() {
        $data_adminCabang = DetailAdminCabang::where('id_user', Auth::user()->id)->first();
        return $data_adminCabang;
}

if (! function_exists('kata')) {
        /**
         * Limit the number of kata in a string.
         *
         * @param  string  $value
         * @param  int     $kata
         * @param  string  $end
         * @return string
         */
        function kata($value, $kata, $end = '...')
        {
            return Str::words($value, $kata, $end);
        }
    }