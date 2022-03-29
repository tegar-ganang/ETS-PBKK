<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Rekam Medis</title>

    <style>
    html {
            height: 100%;
        }
        body {
            font-family: sans-serif;
            background-color:#af0e0e;
        }
        .card-body {
            position: relative;
            padding: 40px;
            background: rgb(13, 41, 63);
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.19) 10px 10px 20px, rgba(0, 0, 0, 0.23) 0px 10px 10px;
        border-radius: 40px;
        }
    
    </style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center sm:items-center py-4">
                <div class="col-lg-6">
                    <div class="card mt-3">
                        <div class="card-body" >
                            <p style="text-align: center"></p>
                            <h3 class="text-center" style="color:whitesmoke">Form Rekam Medis</h3>

                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group" >
                                    <label for="nama" style="color:whitesmoke">Nama Pasien</label>
                                    <input class="form-control" type="dropdown" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                    @error('nama')
               		                <div class="alert alert-danger">{{ $message }}</div>
       		                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_dok" style="color:whitesmoke">Nama Dokter</label>
                                    <input class="form-control" type="dropdown" name="nama_dok" value="{{ old('nama_dok') }}" class="@error('nama_dok') is-invalid @enderror">
                                    @error('nama_dok')
               		                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kondisi" style="color:whitesmoke">Kondisi Kesehatan</label>
                                    <input class="form-control" type="text" name="kondisi" value="{{ old('kondisi') }}" class="@error('kondisi') is-invalid @enderror">
                                    @error('kondisi')
               		                <div class="alert alert-danger">{{ $message }}</div>
                                       @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" style="color:whitesmoke">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="@error('tanggal_lahir') is-invalid @enderror">
                                    @error('tanggal_lahir')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="@error('sex') is-invalid @enderror" style="color:whitesmoke">Jenis Kelamin</label>
                                    @error('sex')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="male" id="male" name="sex">
                                            <label class="custom-control-label" for="male" style="color:whitesmoke">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="female" id="female" name="sex">
                                            <label class="custom-control-label" for="female" style="color:whitesmoke">Perempuan</label>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="suhu" style="color:whitesmoke">Suhu Tubuh</label>
                                    <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                    @error('suhu')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label" style="color:whitesmoke">Foto Resep</label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="examplecheck1" class="@error('exampleCheck1') is-invalid @enderror">
                                    @error('exampleCheck1')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-check-label" for="exampleCheck1" style="color:whitesmoke">Data yang telah diisi valid</label>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>
                            </form>
                            <a href="/article" class="text-decoration-none d-block mt-3" style="color:rgb(65, 203, 245)">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>