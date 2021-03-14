<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('system.edit_data_petugas', compact('data'));
    }

    public function create()
    {
        return view('system.tambah_data_petugas');
    }

    public function update(Request $request, $id)
    {
        $data = User::where('id', $id)->update($request->except('_method', '_token'));
        return redirect()->route('data.petugas');
    }

    public function store(Request $request)
    {
        $data = User::create($request->except('_method', '_token'));
        return redirect()->route('data.petugas');
    }
}
