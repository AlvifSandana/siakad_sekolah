<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>SiAkad Login Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/loginstyles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
</head>
<body>
  <section class="ftco-section">
    <div class="container">
      @include('layouts.flash')
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4">Login Portal</h3>
            <form action="#" class="login-form" method="POST">
              @csrf
              @method('POST')
              <div class="form-group">
                <input type="text" name="email" class="form-control rounded-left" placeholder="Email" required>
              </div>
              <div class="form-group d-flex">
                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5 w-100">Masuk</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
