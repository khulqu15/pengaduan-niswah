@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-users mr-2"></i><b> Data Masyarakat </b></h4><hr>

      
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Telp</th>
                    <th class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->phone }} </td>
                    <td> <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')" href="{{ route('delete.user', $item->id) }}" class="btn btn-danger" title=""> <i class="fa fa-trash mr-2 "></i>HAPUS</a></td> 
                  </tr>                      
                  @endforeach

                </tbody>
                    
              </table>
    </div>  
  </div>

  @endsection