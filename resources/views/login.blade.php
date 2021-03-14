<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/login_register.css')}}">
    <title>Login</title>
  </head>
  <body>

  <!--navbar -->
  <nav class="navbar navbar-expand-lg navbar-white bg-tosca fixed-top">
      <div class="container-fluid">
        <div class="">
            <img src="{{ url ('img/p.png') }}" width="65px" height="65px" >
            <a class="text-white breeserif font-weight-bold navbar-brand ml-2" href="{{ route('home') }}">Pengaduan Masyarakat</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
  </nav>
      
  <!-- Form Login -->

    <div class="container-fluid mt-5 py-5">
        <div class="row">
            <div class="col-md-6" style="margin-top:7%; margin-left:15%; width:35%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
              <img src="img/c.png"  class="mt-4 py-4" width="90%">
            </div>
            <div class="col-md-4 bg-light" style="margin-top:7%; width:35%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
                  <div class="mt-4 py-3">
                  <h4 class="text-center text-tosca crete font-weight-bold" > Login </h4>
                  <form class="mt-4 py-4" action="{{ route('login.post') }}" method="POST"> 
                    @csrf
                    <div class="mb-3">
                      <label class="creteround font-weight-bold">Email</label>
                      <input required type="text"  name="email" class="form-control creteround font-weight-bold"  placeholder="Masukkan Email/No.Telp Anda">
                    </div>
                    <div class="mb-3">
                      <label class="creteround font-weight-bold">Password</label>
                      <input required type="password"  name="password" class="form-control creteround font-weight-bold"   placeholder="Masukkan Password Anda">
                      </div>
                      <div class="mt-3 py-3">
                        <button type="submit" class="btn btn-tosca text-white creteround font-weight-bold" >Login </button>
                        <a href="{{ route('register') }}" class="btn btn-primary text-white creteround font-weight-bold">Register</a>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>

    
