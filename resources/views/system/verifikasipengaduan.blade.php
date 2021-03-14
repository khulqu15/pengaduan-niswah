@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4> <i class="fas fa-clipboard-check mr-2"></i><b>Verifikasi Pengaduan Masyarakat </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">TANGGAL</th>
                        <th scope="col" class="text-center">NIK</th>
                        <th scope="col" class="text-center">Isi Laporan</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">Status</th>
                        <th colspan="3" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ substr($item->report, 0, 30) }}</td>
                    <td><img src="{{ asset('img/report/'.$item->picture) }}" width="50px" alt="{{ $item->picture }}"></td>
                    <td>{{ $item->status }}</td>
                    <td><a href="{{ route('show.complaint', $item->id) }}" class="btn btn-info" title=""> <i class="fas fa-info-circle"></i> Detail & Verifikasi</a></td>  
                  </tr>
                  @endforeach

                </tbody>
                    
              </table>
    </div>  
  </div>
  @endsection