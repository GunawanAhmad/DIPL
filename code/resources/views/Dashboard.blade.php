<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>Document</title>
        <style>
            .list-group-item {
                display: flex;
                justify-content: space-between;
            }
        </style>
    </head>
    <body>
        <h1 class="text-center">Dashboard</h1>
        <div class="container">
            <h4>Daftar paket</h4>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Tgl ditambahkan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Paket murah</td>
                                <td>12/4/2000</td>
                                <td>2.846</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                    >
                                        <i class="far fa-eye"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                    >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Paket murah juga</td>
                                <td>12/1/2020</td>
                                <td>3.417</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                    >
                                        <i class="far fa-eye"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                    >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Murah banget</td>
                                <td>13/01/2021</td>
                                <td>1.234</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                    >
                                        <i class="far fa-eye"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                    >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-end">
                <button class="btn-primary">Tambah paket</button>
            </div>
        </div>
    </body>