<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyAbsen | Masuk</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap 4 (Purple Theme) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.6.0/dist/cosmo/bootstrap.min.css">
  <!-- Custom Purple Theme -->
  <style>
    body {
      background: linear-gradient(135deg, #7b2ff2 0%, #f357a8 100%);
      min-height: 100vh;
      font-family: 'Source Sans Pro', sans-serif;
    }
    .login-box {
      margin: 0 auto;
      position: relative;
      top: 50%;
      transform: translateY(10vh);
      max-width: 400px;
      width: 100%;
    }
    .dashboard-card {
      background: #fff;
      border-radius: 1.5rem;
      box-shadow: 0 8px 32px 0 rgba(123,47,242,0.2);
      border: none;
      padding: 2rem 2rem 1.5rem 2rem;
      transition: box-shadow 0.3s;
    }
    .dashboard-card:hover {
      box-shadow: 0 16px 48px 0 rgba(123,47,242,0.25);
    }
    .login-logo a {
      color: #7b2ff2;
      font-size: 2.2rem;
      font-weight: bold;
      letter-spacing: 2px;
      text-shadow: 0 2px 8px rgba(123,47,242,0.15);
    }
    .btn-primary, .btn-primary:focus, .btn-primary:active {
      background: linear-gradient(90deg, #7b2ff2 0%, #f357a8 100%);
      border: none;
      box-shadow: 0 2px 8px rgba(123,47,242,0.15);
      transition: background 0.3s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #f357a8 0%, #7b2ff2 100%);
    }
    .form-control:focus {
      border-color: #7b2ff2;
      box-shadow: 0 0 0 0.2rem rgba(123,47,242,0.15);
    }
    .login-box-msg {
      color: #7b2ff2;
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
    }
    .icheck-primary input[type="checkbox"]:checked + label::before {
      background-color: #7b2ff2;
      border-color: #7b2ff2;
    }
    .alert-danger {
      background: #f8d7fa;
      color: #a100a7;
      border-color: #f3b6f7;
    }
    .alert-success {
      background: #e6f7ff;
      color: #0070c0;
      border-color: #b3e0ff;
    }
    a {
      color: #7b2ff2;
    }
    a:hover {
      color: #f357a8;
      text-decoration: underline;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>My</b>Absen</a>
  </div>
  <!-- /.login-logo -->
  <div class="card dashboard-card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk memulai sesi kamu</p>
      @error('username')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
      @enderror
      @error('password')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
      @enderror
      @if(session()->has('loginError'))                             
        <div class="alert alert-danger" role="alert">
          {{ session('loginError') }}
        </div>
      @endif
      <form action="/" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="helmi" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat aku
              </label>
            </div>
          </div>
          <div class="col-5 text-right">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
        </div>
      </form>
      <br>
      <p class="mb-1 text-center">
        <a href="forgot-password.html">Lupa password?</a>
      </p>     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
