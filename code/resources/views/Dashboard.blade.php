@extends('sidebar')
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
    </style>
</head>

<body>
    <h1 class="text-center">Dashboard</h1>
    <div class="container">
        <h4>Daftar paket Data</h4>
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
                                <th scope="row">1</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} MB</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-end">
            <a href="/tambah-data" class="btn-primary">Tambah paket data</a>
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
                                <th scope="row">1</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} Menit</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-end">
            <a href="/tambah-tel" class="btn-primary">Tambah paket telepon</a>
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
                                <th scope="row">1</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->jumlah_data }} SMS</td>
                                <td>{{ $item->masa_berlaku }} Hari</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-end">
            <a href="/tambah-sms" class="btn-primary">Tambah paket sms</a>
        </div>
    </div>
</body>
