<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        .list-group-item {
            display: flex;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
            display: inline-block;
            padding: 5px
        }

        .btn a {
            color: white !important;
            display: block;
            height: 100%;
            width: 100%;
            padding: .25rem 1rem;
        }

        .btn {
            padding: 0;
        }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="user">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user/daftar-produk">Daftar produk</a>
                    </li>
                </ul>
                <form class="mb-0 cursor-pointer" action="user/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div>
            <p class="mb-0">Nama: </p>
            <p class="fw-bold">{{ $user->nama }}</p>
            <p class="mb-0">Saldo: </p>
            <p class="fw-bold">{{ $user->saldo }}</p>
        </div>
        <h4 class="mt-5">Paket Data anda</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th>Tanggal expired</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal_berakhir }}</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="/user/pembayaran/data/{{ $item->produk_id }}">Beli</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <h4>Paket telepon anda</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th>Tanggal expired</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tel as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal_berakhir }}</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="/user/pembayaran/tel/{{ $item->produk_id }}">Beli</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <h4>Paket sms anda</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th>Tanggal expired</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sms as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal_berakhir }}</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="/user/pembayaran/sms/{{ $item->produk_id }}">Beli</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
