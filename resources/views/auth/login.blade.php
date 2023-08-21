<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="vh-100" style="background-color: #fff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card shadow-2-strong">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body p-5 text-center pt-3 pb-3">

                            <p style="font-size: 50px"><i class="fa fa-user"></i></p>
                            <h3 class="mb-5">USER LOGIN</h3>

                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2"
                                       class="form-control form-control text-center form-control @error('email') is-invalid @enderror"
                                       placeholder="Email" autocomplete="off" name="email"/>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2"
                                       class="form-control form-control text-center @error('password') is-invalid @enderror"
                                       placeholder="Password" name="password"/>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button class="btn btn-outline-primary btn-block" style="width: 100%" type="submit">Login
                            </button>


                            <div class="form-check d-flex justify-content-start mt-2">
                                <label class="form-check-label" for="form1Example3">Dont have a account <a
                                        href="{{route('register')}}">Register!</a></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
