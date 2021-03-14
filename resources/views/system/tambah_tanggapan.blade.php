@extends('layout.main')

@section('content')

    <div class="col-md-10 p-5 pt-2 mt-3" > 
      <div class="col-md-10" style=" margin-top: 3%; margin-left:9%; width:100%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" > <i class="fas fa-paste mr-2"></i><b>Edit Data Tanggapan  </b></h3> <hr>
            </div>
          </div>
      </div>
    <form action="{{ route('store.complaint.post') }}" method="POST">

    @csrf

    <input type="hidden" name="complaint_id" value="{{ $data->id }}" class="form-control" id="Id Tanggapan" >     
    <input type="hidden" name="user_id" value="{{ Auth::id() }}" class="form-control" id="Id Pengaduan"> 
    
      <div class="col-md-12">
        <div class="form-group mt-3">
          <label for="Tanggapan">Tanggapan</label>
          <input required type="text" name="response" class="form-control" id="Tanggapan"> 
     </div>
   </div>

   <button class="btn btn-success px-5">Simpan</button>

     </form>
   </div>
@endsection