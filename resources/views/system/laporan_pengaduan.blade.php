@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 

         <h3 class="m-0 font-weight-bold text-secondary" align="center" > PEMERINTAH KABUPATEN PASURUAN </h3>

         <h4 class="m-0 font-weight-bold text-secondary" align="center"> DESA NGULAAN NGADIMULYO RT.01 RW.02 KEC.SUKOREJO </h4>

         <h6 class="m-0 font-weight-bold text-secondary" align="center"> KODE POS 67161 </h6> <hr>

         <h6 class="m-0 font-weight-bold text-secondary" align="center"> Laporan Pengaduan </h6>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Tanggal_Pengaduan</th>
                        <th scope="col" class="text-center">NIK</th>
                        <th scope="col" class="text-center">Isi Laporan</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">Status</th>
                        
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
                    </tr>                      
                    @endforeach


                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection