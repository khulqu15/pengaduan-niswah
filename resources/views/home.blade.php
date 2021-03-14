<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <title>Pengaduan Masyarakat</title>
  </head>
  <body>
    <!--Navbar -->

    <nav class="navbar navbar-expand-lg navbar-white bg-tosca fixed-top">
        <div class="container-fluid">
        <div class="">
            <img src="{{ url ('img/p.png') }}" width="65px" height="65px" >
            <a class="text-white breeserif font-weight-bold navbar-brand ml-2" href="{{ route('home') }}">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
            <a class="nav-link breeserif font-weight-bold text-white" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link breeserif font-weight-bold text-white" href="{{ route('register') }}">Register</a>
                </li> 
            </div>
        </div>
        </div>
    </nav>
      
  <!--Selamat Datang -->

    <div class="container mt-5 py-5">
        <div class="row py-5">
          <div class="col-md-6">
            <p>
              <h1 class=" patuaone font-weight-bold text-dark" >Selamat Datang di Forum</h1>
              <h1 class=" patuaone font-weight-bold text-tosca"> Layanan Pengaduan</h1>
              <h1 class=" patuaone font-weight-bold text-dark">  Masyarakat Online </h1>
            </p>
            <p class="acme font-weight-bold text-dark" > <br>
                Anda bisa melaporkan semua keluhan anda di forum ini 
            </p>
            <p> 
              <br>
              <a type="button" href="{{ route('form.pengaduan') }}" class="btn btn-tosca text-white breeserif creteround font-weight-bold"> Buat Laporan Pengaduan </a>
            </p>
          </div>
          <div class="col-md-6">
            <img src="img/h.png" width="90%" height="95%">
          </div>
        </div>
    </div>

    <!--Pengertian Pengaduan Masyarakat -->

        <div class="container mt-3 py-3" >
            <div class="row">
            <div class="col-md-6">
                <img src="img/n.png" width="95%" height="87%">
            </div>
                <div class="col-md-6">
                    <h2 class= "patua font-weight-bold text-dark"> Layanan Pengaduan Masyarakat </h2>
                    <p class= "acme font-weight-bold text-dark "> <br>
                        Merupakan bagian dari pelayanan publik, 
                        di mana masyarakat dapat
                        menyampaikan keluhan maupun saran
                        perbaikan terhadap pelayanan yang diberikan
                    </p>
                </div>
            </div>
        </div>

  <!--Tujuan -->

    <div class="container mt-4 py-4" >
        <div class="row">
            <div class="col-md-6">
              <h2 class= "patua font-weight-bold text-dark"> Tujuan Pengaduan Masyarakat </h2>
                 <br >
                <h5 class="acme font-weight-bold text-dark">
                  <ul style="list-style: lower-alpha">
                    <li>
                      Untuk Menindak lanjuti pengaduan masyarakat secara cepat dan tepat
                    </li>
                    <li>
                      Mengeliminasi penyimpangan-penyimpangan yang timbul
                    </li>
                    <li>
                      Memberdayakan masyarakat untuk berperan aktif dalam membantu
                    </li>
                  </ul>
                 </h5>
            </div>
            <div class="col-md-6">
            <img src="img/k.png" width="95%" height="87%">   
          </div>
        </div>
    </div>


    <!--footer-->
    <footer class="sticky-footer bg-tsca">
    <div class="container my auto">
    <div class="copyright text-center my-auto">
    <span> Copyright &copy; Niswatul Khasanah </span>
    </div>
    </div>
    </footer>


  </body>
</html>