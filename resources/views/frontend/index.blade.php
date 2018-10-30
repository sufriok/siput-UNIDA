<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="/frontend/css/bootstrap.css">
        <link rel="stylesheet" href="/frontend/css/style.css">


        <title>Sistem Informasi Paket dan Surat</title>
    </head>

    <body id="home">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <a href="#home" class="navbar-brand">Siput</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#paket-section" class="nav-link">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a href="#surat-section" class="nav-link">Surat</a>
                        </li>
                        @if (Route::has('login'))
                            <li class="nav-item">
                                @auth
                                    <a href="{{ url('/home') }}" class="nav-link">Dasboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                                @endauth
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!--home section-->
        <header id="home-section">
            <div class="dark-overlay">
                <div class="home-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block">
                            <div class="card bg-info card-center card-form">
                             <h3 class="text-center">Tata cara Pengambilan Kiriman</h3>
                            </div>
                                
                                <div class="d-flex flex-row">
                                    <div class="p-4 align-self-start">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Silahkan melihat informasi di website
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-4 align-self-start">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                    Jika nama anda terdapat pada table website perhatikan kode kiriman anda
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-4 align-self-start">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                    Segera ke kantor ADM dan membawa uang sebanyak 2k
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-4 align-self-start">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                    Informasikan kode kiriman anda kepada Staff ADM
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-4 align-self-start">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                    Selamat paket/surat anda sudah diterima
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card bg-info card-center card-form">
                                    <div class="card-body">
                                        <h3>Jadwal buka kantor:</h3>
                                        <hr>
                                        <p>Pagi jam 07.30-11.30</p>
                                        <p>Siang jam 01.00-03.00</p>
                                        <hr>
                                        <br>
                                        <p>NB: Tidak ada pengambilan kiriman di luar jadwal diatas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--paket head-->
        <section id="paket-section">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="p-5">
                            <h1 class="display-4">Paket</h1>
                            <p class="lead">
                            Paket yang kami terima dan belum diambil hinggal saat ini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--paket section-->
        <section id="explore-section" class="bg-light text-muted py-5">
            <div class="container">
            <div class="card">
                <div class="card-header">Data Paket</div>
                <div class="card-body">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Tanggal Masuk</th>
                        <th>Kode Paket</th>
                        <th>Nama</th>
                        <th>Daerah</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach( $pakets as $paket)
                    <tr>
                        <td>{{ $paket->created_at }}</td>
                        <td>{{ $paket->no_delivery }}</td>
                        <td>{{ $paket->nama }}</td>
                        <td>{{ $paket->daerah }}</td>
                        <td>{{ $paket->keterangan }}</td>
                        <td>{{ $paket->status }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div> 
                <div class="card-footer"></div>
            </div> 
            </div>
        </section>

        <!--surat head-->
        <section id="surat-section">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="p-5">
                            <h1 class="display-4">Surat</h1>
                            <p class="lead">
                            Surat yang kami terima dan belum diambil hinggal saat ini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--surat section-->
        <section id="explore-section" class="bg-light text-muted py-5">
            <div class="container">
            <div class="card">
                <div class="card-header">Data Surat</div>
                <div class="card-body">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>Kode Surat</th>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach( $surats as $surat)
                        <tr>
                            <td>{{ $surat->created_at }}</td>
                            <td>{{ $surat->no_delivery }}</td>
                            <td>{{ $surat->nama }}</td>
                            <td>{{ $surat->daerah }}</td>
                            <td>{{ $surat->keterangan }}</td>
                            <td>{{ $surat->status }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </div> 
                <div class="card-footer"></div>
            </div> 
            </div>
        </section>

        <footer class="bg-dark navbar-dark footer">
        <div class="text-center ok">
        <p> &amp; Copy Right by Sufriadi | 2018</p>
        </div>
        </footer>

        <script src="/frontend/js/jquery.min.js"></script>
        <script src="/frontend/js/popper.min.js"></script>
        <script src="/frontend/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        </script>

    </body>
</html>
