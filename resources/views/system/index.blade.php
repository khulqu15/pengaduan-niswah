@extends('layout.main')

@section('content')
<div class="col-md-10 p-5 pt-2 ">
            <h3><i class="fas fa-home mr-2"></i></i><b>Home</b></h3>
            <hr>

            <div class="row text-white">
                <div class="card bg-info ml-5 mt-4" style="width: 18rem; margin-right: 10px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-edit mr-2"></i>
                        </div>
                        <h5 class="card- title"> Jumlah Laporan Warga</h5>
                        <div class="display-4"> 100 </div>
                        <a href="?page=pengguna">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="card bg-success ml-5 mt-4" style="width: 18rem; margin-right: 20px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="far fa-file-alt mr-2"></i>
                        </div>
                        <h5 class="card-title text-white">Jumlah Tanggapan</h5>
                        <div class="display-4"> 100 </div>
                        <a href="?page=anggota">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="card bg-warning ml-5 mt-4" style="width: 18rem; margin-right: 20px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="far fa-file mr-2"></i>
                        </div>
                        <h5 class="card-title text-white"> Jumlah Laporan </h5>
                        <div class="display-4"> 100 </div>
                        <a href="?page=buku">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection