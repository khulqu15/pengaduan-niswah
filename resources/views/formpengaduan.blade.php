<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/formpengaduan.css')}}">
    <title>Menulis Laporan Pengaduan Masyarakat</title>
  </head >
  <body >

   <!-- Tulikan Keluhan Anda -->
   <div class="container my-5 p-3" style="width:100%; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
   <h2 class="alert mt-2 patuaone font-weight-bold text-white" style="cursor: pointer" onclick="window.location.href = '{{ route('home') }}'"> Form Pengaduan Masyarakat </h2>
      <div class="container-fluid mt-2">
          <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6" >
                    <img src="img/o.png" width="110%" style="margin-left:-10px;">
              </div>
          <div class="col-md-2"></div>
      </div>
   <!-- End Tulikan Keluhan Anda -->

    <form enctype="multipart/form-data" action="{{ route('store.complaint') }}" method="POST">
      @csrf
      <!-- End Form Tanggal Pengaduan -->
    
    <!--Form Upload images -->
    <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="NIK"> NIK </label>
          <input required type="text" name="nik" class="form-control" id="NIK"> 
     </div>
    </div>
    <!-- End Form Upload images -->

   
    <!-- Form Keluhan-->
     <div class="form-group mt-3">
      <label for="TuliskanKeluhanAmda"> Tuliskan Keluhan Anda </label>
      <input required type="text" name="report" class="form-control"  id="TuliskanKeluhanAmda"> 
     </div>
    <!-- End Form Keluhan-->


    <!--Form Upload images -->
    
        <div class="form-group mt-3">
          <label for="UploadImages"> Upload Images </label>
          <input required type="file" name="picture" class="form-control" id="UploadImages"> 
     </div>
    
    <!-- End Form Upload images -->
    <div class="container mt-5">
      <div class="row text-right">
          <div class="col-md-4 offset-md-8 text-right">
          <div class="d-inline-block">
            <button type="submit" class="btn btn-light creteround font-weight-bold">KIRIM</button>
          </div>
        </div>
    </div>
     </form>
   </div>
  </body>
</html>