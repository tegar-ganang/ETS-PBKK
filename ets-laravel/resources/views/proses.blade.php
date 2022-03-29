<!DOCTYPE html>
<html lang="en" class="imagec">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <style>
        .card-body {
            box-shadow: rgba(0, 0, 0, 0.19) 10px 10px 20px, rgba(0, 0, 0, 0.23) 0px 10px 10px;
        }
    </style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5" >
                    <div class="card-body ">
                        <h3>Form Rekam Medis</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px; border:red">Nama Pasien</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nama Dokter</td>
                                <td>{{ $data->nama_dok }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kondisi Kesehatan</td>
                                <td>{{ $data->kondisi }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tanggal lahir</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Jenis Kelamin</td>
                                <td>{{ $data->sex }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Suhu Tubuh</td>
                                <td >{{ $data->suhu }}</td>
                            </tr>
                            <tr>
                                <td>Foto Resep</td>
                                <td><img src="{{ $data->image }}" alt="" width="200px"></td>
                            </tr>
                        </table>

                        <a href="/form" class="btn btn-primary">Kembali</a>
                        <a href="/article" class="text-decoration-none d-block mt-3">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('sweetalert::alert')
</html> 