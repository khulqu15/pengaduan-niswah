@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-paste mr-2"></i><b> Data Tanggapan </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Tanggal_Tanggapan</th>
                        <th scope="col" class="text-center">Tanggapan</th>
                        <th colspan="2" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($data as $item)
                  <tr>
                    <td> {{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }} </td>
                    <td> {{ $item->response }} </td>
                    <td> <a href="{{ route('edit.respond', $item->id) }}" class="btn btn-info" title=""> <i class="fa fa-edit mr-2"></i> EDIT</a></td>  
                    <td> <a onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')" href="{{ route('delete.respond', $item->id) }}" class="btn btn-danger" title=""> <i class="fa fa-trash mr-2"></i>HAPUS</a></td> 
                  </tr>                      
                  @endforeach

                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection