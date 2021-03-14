<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  

    <title>Pengaduan Masyarakat</title>
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-tosca fixed-top">
        <a class="navbar-brand text-white" href="{{ route('home') }}" style="margin-left: 20px; "> <b>PENGADUAN MASYARAKAT </b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0 mr-3" type="submit">Search</button>
        </form>

        <h5>
            <a class="text-white mr-3" href="logout.php" style="font-size: 17px;"> <i class="fas fa-sign-out-alt"></i>
                Log Out</a>
        </h5>

        </div>
    </nav>

    <!-- link-->

    <div class="row no-gutters mt-4">
        <div class="col-md-2 bg-tsca mt-2 pr-3">
            <li class="dropdown user user-menu">
                <img src="{{ asset('img/p.png') }}" class="user-image" alt="User Image"
                    style="width: 200px; margin-left:5px; margin-right:7px; margin-top: 50px; ">
                <ul class="nav flex-column ml-3 mb-5"> <br>

                    <li class="nav-item">
                        <a class="nav-link active text-white" href="{{ route('dashboard.index') }}"
                            style="font-size: 14px; margin-top: 5px;"> <i class="fas fa-home mr-2 "></i>Home</a>
                        <hr class="bg-secondary">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-white" href="{{ route('ver.complaint') }}" style="font-size: 14px;">
                            <i class="fas fa-clipboard-check mr-2"></i>Verifikasi Pengaduan </a>
                        <hr class="bg-secondary">
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-file-alt mr-2"></i>
                            Data
                        </a>
                        <hr class="bg-secondary">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('data.petugas') }}">Data Petugas & Admin</a></li>
                        <li><a class="dropdown-item" href="{{ route('data.user') }}">Data Masyarakat</a></li>
                        <li><a class="dropdown-item" href="{{ route('data.complaint') }}">Data Pengaduan</a></li>
                        <li><a class="dropdown-item" href="{{ route('data.respond') }}">Data Tanggapan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> <i class="far fa-file mr-2"></i>
                            Laporan
                        </a>
                        <hr class="bg-secondary">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('report.petugas') }}"> Laporan Petugas & Admin</a></li>
                        <li><a class="dropdown-item" href="{{ route('report.user') }}">Laporan Masyarakat</a></li>
                        <li><a class="dropdown-item" href="{{ route('report.complaint') }}">Laporan Pengaduan</a></li>
                        <li><a class="dropdown-item" href="{{ route('report.respond') }}">Laporan Tanggapan</a></li>
                    </ul>

                        </ul>
                    </li>
        </div>

        <!-- Home -->

        @yield('content')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{url('admin.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
