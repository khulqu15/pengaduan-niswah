@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
          <h3 class="m-0 font-weight-bold text-secondary" align="center" > PEMERINTAH KABUPATEN PASURUAN </h3>

         <h4 class="m-0 font-weight-bold text-secondary" align="center"> DESA NGULAAN NGADIMULYO RT.01 RW.02 KEC.SUKOREJO </h4>

         <h6 class="m-0 font-weight-bold text-secondary" align="center"> KODE POS 67161 </h6> <hr>

         <h6 class="m-0 font-weight-bold text-secondary" align="center"> Laporan Masyarakat  </h6>
      
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Telp</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td> {{ $item->name }} </td>
                      <td> {{ $item->email }} </td>
                      <td> {{ $item->phone }} </td>
                    </tr>                      
                    @endforeach
                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection