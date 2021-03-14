<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function formPengaduan()
    {
        return view('formpengaduan');
    }

    public function dashboardIndex()
    {
        return view('system.index');
    }

    public function verComplaint()
    {
        $data = Complaint::orderBy('id', 'DESC')->get();
        return view('system.verifikasipengaduan', compact('data'));
    }

    public function editTanggapan($id)
    {
        $data = Response::find($id);
        return view('system.edit_data_tanggapan', compact('data'));
    }

    public function addComplaintRespond($id)
    {
        $data = Complaint::find($id);
        return view('system.tambah_tanggapan', compact('data'));
    }

    public function dataPetugas()
    {
        $data = User::where('level', '!=', 'user')->orderBy('id', 'DESC')->get();
        return view('system/data_petugas', compact('data'));
    }

    public function dataUser()
    {
        $data = User::where('level', 'user')->orderBy('id', 'DESC')->get();
        return view('system.data_masyarakat', compact('data'));
    }

    public function dataComplaint()
    {
        $data = Complaint::orderBy('id', 'DESC')->get();
        return view('system/data_pengaduan', compact('data'));
    }

    public function dataRespond()
    {
        $data = Response::orderBy('id', 'DESC')->get();
        return view('system/data_tanggapan', compact('data'));
    }

    public function reportPetugas()
    {
        $data = User::where('level', '!=', 'user')->orderBy('id', 'DESC')->get();
        return view('system.laporan_petugas', compact('data'));
    }

    public function reportUser()
    {
        $data = User::where('level', 'user')->orderBy('id', 'DESC')->get();
        return view('system.laporan_masyarakat', compact('data'));
    }

    public function reportComplaint()
    {
        $data = Complaint::orderBy('id', 'DESC')->get();
        return view('system.laporan_pengaduan', compact('data'));
    }

    public function reportRespond()
    {
        $data = Response::orderBy('id', 'DESC')->get();
        return view('system.laporan_tanggapan', compact('data'));
    }
}
