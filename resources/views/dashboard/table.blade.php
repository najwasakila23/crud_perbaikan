<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Piket Rayon Cibedug 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Data Siswa </a>
        <span> {{Auth::user()->name}}</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <a href="/konsekuensi" class="btn btn-secondary">Konsekuensi</a>
    <a href=" {{route('logout')}}" class="btn btn-secondary">Logout</a><br><br>

    <div class="container mt-4">
        <div class=" row ">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header"></div><br>
                    <h4 class="text-center">Data Siswa Yang Sudah Piket
                        <a href="/index" class="btn btn-warning float-end">Tambah Data</a>
                    </h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="justify-content-center">
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Rombel</th>
                                <th scope="col">Tugas Piket</th>
                                <th scope="col">Jadwal Piket</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($input as $input)
                            <tr>
                                <th scope="row ">{{$i++}}</th>
                                <td>{{$input->nis}}</td>
                                <td>{{$input->name}}</td>
                                <td>{{$input->rayon}}</td>
                                <td>{{$input->judul}}</td>
                                <td>{{$input->tenggat}}</td>
                                <td>
                                    <form action="{{route('destroy', $input->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
                                        @csrf
                                        <button type="submit" class="bi bi-trash btn btn-secondary "></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</body>

</html>