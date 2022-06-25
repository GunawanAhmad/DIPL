<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran Paket Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="user/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user/daftar-produk">Daftar produk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pengaturan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="user/profil">Profile</a>
                            </li>
                            <li>
                                <form class="mb-0 cursor-pointer" action="user/logout" method="post">
                                    @csrf
                                    <a class="dropdown-item" onclick="this.parentNode.submit(); ">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="row mx-auto">
            <div class="col-12">
                <h2 class="mb-3 text-danger text-center mt-5">Pembayaran</h2>
            </div>

            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data->nama }}</h5>
                            <hr>
                            <div class="card-text">
                                <p class="mb-0">Jumlah menit:</p>
                                <p class="fw-bold">{{ $data->jumlah_menit }} Menit</p>
                                <p class="mb-0">Harga:</p>
                                <p class="fw-bold">Rp{{ $data->harga }}</p>
                                <p class="mb-0">Masa berlaku:</p>
                                <p class="fw-bold">{{ $data->masa_berlaku }} hari</p>
                                </p>
                            </div>
                            <div class="card-text text-end">
                                <form action="/user/pembayaran/tel/{{ $data->id }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary">Bayar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>


</html>
