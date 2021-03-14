@extends('layout.main')

@section('content')

      <div class="col-md-10 p-5 pt-2 mt-3" > 
        <h4 ><i class="fas fa-users-cog mr-2"></i><b> Data Petugas </b></h4><hr>

        <a href="{{ route('create.user') }}"  class="btn btn-info" title=""> <i class="fas fa-plus mr-2"></i> Tambah Data</a>
       
          <table class="table table-striped table-bordered mt-3" >
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Nama_petugas</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Telp</th>
                        <th scope="col" class="text-center">Level</th>
                        <th colspan="3" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $item)
                    <tr>
                      <td> {{ $item->name }} </td>
                      <td> {{ $item->email }} </td>
                      <td> {{ $item->phone }} </td>
                      <td> {{ $item->level }} </td>
                      <td> <a href="{{ route('edit.user',  $item->id) }}" class="btn btn-info" title=""> <i class="fa fa-edit mr-1"></i> EDIT</a></td>  
                      <td> <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')" href="{{ route('delete.user', $item->id) }}" class="btn btn-danger" title=""> <i class="fa fa-trash mr-1"></i> HAPUS</a></td> 
                    </tr>                      
                    @endforeach

                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection