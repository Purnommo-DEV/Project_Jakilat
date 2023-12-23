<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailAdminCabang;
use App\Models\DetailCustomer;
use App\Models\DetailMember;

class SuperAdminController extends Controller
{
    public function beranda_super_admin(){
        return view('SuperAdmin.Beranda.beranda');
    }

    public function manajemen_user(){
        $userMember = DetailMember::get();
        $userAdmin = DetailAdminCabang::get();
        $userCustomer = DetailCustomer::get();
        return view('SuperAdmin.User.index', compact('userMember', 'userAdmin', 'userCustomer'));
    }
}
