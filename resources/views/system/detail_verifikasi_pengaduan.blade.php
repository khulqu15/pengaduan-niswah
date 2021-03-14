@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3" > 
      
      <div class="col-md-10" style=" margin-top: 2%; margin-left:9%; width:100%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
       
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" >  <i class="fas fa-clipboard-check mr-2"></i><b> Detail Pengaduan </b></h3> <hr>
            </div>

            <a href="verifikasipengaduan.html" class="btn btn-danger"> <i class="fas fa-arrow-left mr-2"></i>Kembali</a>
             <a href="verifikasipengaduan.html" class="btn btn-primary ml-3"><i class="fas fa-check-circle mr-2"></i>Proses & Verifikasi</a>

  
    <div class="row">
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="id"> Id  </label>
          <input type="Id" name="" class="form-control" id="id" > 
     </div>
    </div>
  
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="Tanggal"> Tanggal </label>
          <input type="text" name="" class="form-control" id="Tanggal"> 
     </div>
   </div>
  
    
    <div class="col-md-6">
     <div class="form-group mt-3">
      <label for="nik"> NIK </label>
      <input type="text" name="" class="form-control"  id="nik"> 
     </div>
   </div>
   
   
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="isi"> Isi Laporan</label>
          <input type="Password" name="" class="form-control" id="isi"> 
     </div>
   </div>
    
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="foto"> Foto</label>
          <input type="file" name="" class="form-control" id="foto"> 
     </div>
   </div>
    
  
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="status"> Status</label>
          <input type="text" name="" class="form-control" id="status"> 
     </div>
   </div>
    
  


     </form>
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
@endsection