@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-file-alt mr-2"></i><b> Data Pengaduan </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Tanggal Pengaduan</th>
                        <th scope="col" class="text-center">NIK</th>
                        <th scope="col" class="text-center">Isi_Laporan</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Tanggapi</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($data as $item)
                  <tr>
                    <td> {{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }} </td>
                    <td> {{ $item->nik }} </td>
                    <td> {{ substr($item->report, 0, 30) }} </td>
                    <td> <img width="50px" src="{{ asset('img/report/'.$item->picture) }}" alt=""></td>
                    <td> {{ $item->status }}</td>
                    <td> 
                      <a href="{{ route('store.complaint.response', $item->id) }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                      </a>
                    </td>
                  </tr>                      
                  @endforeach


                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection