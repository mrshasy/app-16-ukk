<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function admin() {
        return view('admin');
    }

    public function petugas() {
        return view('petugas');
    }

    public function peminjam() {
        return view('peminjam');
    }
}
