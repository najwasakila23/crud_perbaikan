<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login-form-18/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <form action="{{route('auth')}}" method="POST">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                            <h3 class="text-center">Login</h3>
                            <h6>Login Hanya untuk Penanggung Jawab Piket!</h6>

                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-o"></span>
                            </div>
                            <form action="#" class="login-form">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class=" form-control rounded-left" placeholder="Masukkan Email" required>

                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" id="password" name="password" class=" form-control rounded-left" placeholder="Masukkan Password" required>

                                </div>
                                <h4 class="text-center mb-4"> <a href="{{route('register')}}">Belum Punya Akun?</a></h4>

                        </div>
                        <div class=" form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                        </div>
            </form>
        </div>

        </div>
        </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>