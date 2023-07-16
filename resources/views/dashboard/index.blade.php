@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piket Rayon Cibedug 2</title>
    <link rel="stylesheet" href="login-form-18/css/style.css">

</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://www.solidbackgrounds.com/images/1920x1080/1920x1080-purple-web-solid-color-background.jpg'); background-position-y: 50%;">
    </div>
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-header pb-0">
                        </div>
                        <div class="card-body">
                            <h1 class="text-bold text-sm">Form Pengisian Absen Rayon Cibedug 2</h1>
                            <p class=" text-sm">Pendataan piket siswa hanya boleh dilakukan oleh penanggung jawab</p>
                            <form action="{{route('data')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIS</label>
                                            <input id="nis" name="nis" class="form-control" type="text" placeholder="12108785">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <input id="name" name="name" class="form-control" type="text" placeholder="Siti Najwa Sakila">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group" class="center">
                                                <label for="example-text-input" class="form-control-label">Jadwal
                                                    Piket</label>
                                                <input id="tenggat" name="tenggat" class="form-control" type="date" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tugas Piket</label>
                                            <input id="judul" name="judul" class="form-control" type="text" placeholder="A">
                                        </div>
                                      </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="f`orm-control-label">Rayon
                                                </label>
                                            <input id="rayon" name="rayon" class="form-control" type="text" placeholder="PPLG Xl-3">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary center-block rounded submit p-3 px-5">Masukkan
                                Data</button>
                        </div>



                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>