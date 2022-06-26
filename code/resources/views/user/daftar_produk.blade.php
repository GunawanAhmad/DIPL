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
                        <a class="nav-link " aria-current="page" href="/user">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="daftar-produk">Daftar produk</a>
                    </li>
                </ul>
                <form class="mb-0 cursor-pointer" action="/user/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="mt-5">Daftar paket Data</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Tgl ditambahkan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Masa berlaku</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} MB</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="pembayaran/data/{{ $item->id }}">Beli</a>
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
        <h4>Daftar paket Telepon</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Tgl ditambahkan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Masa berlaku</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tel as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} Menit</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="pembayaran/tel/{{ $item->id }}">Beli</a>
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
        <h4>Daftar paket SMS</h4>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Tgl ditambahkan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Masa berlaku</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sms as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} SMS</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <form action="pembayaran/sms/{{ $item->id }}">
                                        <button type="button" class="btn btn-success">
                                            <a href="pembayaran/sms/{{ $item->id }}">Beli</a>
                                        </button>
                                    </form>
                                </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
