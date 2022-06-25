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
        .container {
            max-width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h4 class="mb-3 mt-5">Tambah paket sms</h4>
        <form action="/tambah-sms" method="POST" class="form">
            @csrf
            <div class=" form-group mb-3">
                <label for="nama">Nama produk</label>
                <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Nama produk"
                    name="nama">
            </div>
            <div class="form-group mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="harga produk" name="harga">
            </div>
            <div class="form-group mb-3">
                <label for="berlaku">Masa berlaku (hari)</label>
                <input type="number" class="form-control" id="berlaku" placeholder="Masa berlaku" name="masa_berlaku">
            </div>
            <div class="form-group mb-3">
                <label for="jumlah">Jumlah sms</label>
                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah data" name="jumlah_sms">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
