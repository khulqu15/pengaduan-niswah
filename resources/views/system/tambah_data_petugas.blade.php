@extends('layout.main')

@section('content')
    
      <div class="col-md-10 p-5 pt-2 mt-3" > 
      
      <div class="col-md-10" style=" margin-top: 3%; margin-left:9%; width:100%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
       
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" > <i class="fas fa-users-cog mr-2"></i><b>Tambah Data Anggota </b></h3> <hr>
            </div>

          <form action="{{ route('store.user') }}" method="POST">
            @csrf
    <div class="row">
   
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="NIK"> Nama Petugas </label>
          <input type="text" name="name" class="form-control" id="NIK"> 
     </div>
   </div>
  
    
    <div class="col-md-6">
     <div class="form-group mt-3">
      <label for="TuliskanKeluhanAmda"> Email </label>
      <input type="text" name="email" class="form-control"  id="TuliskanKeluhanAmda"> 
     </div>
   </div>
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="UploadImages"> Password</label>
          <input type="Password" name="password" class="form-control" id="UploadImages"> 
     </div>
   </div>
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="UploadImages"> Telp</label>
          <input type="text" name="phone" class="form-control" id="UploadImages"> 
     </div>
   </div>
    
   <div class="col-md-6">
    <div class="form-group mt-3">
      <label for="UploadImages"> Level</label>
      <select name="level" id="level" class="form-control">
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
      </select>
    </div>
  </div>

  <div class="container mt-2">
    <div class="row">
        <div class="col-md-5"></div>
          <div class="col-md-5"></div>
        <div class="col-md-2" >
        <div>
          <button type="submit" class="btn btn-primary text-white creteround font-weight-bold">SIMPAN</button>
        </div>
      </div>
  </div>
</div>


     </form>
   </div>

@endsection