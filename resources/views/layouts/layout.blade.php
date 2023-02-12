<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wheelcart</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h1>Wheelcart</h1>
        </a>
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse float-right" id="navbarNav">
            <ul class="navbar-nav mx-auto text-uppercase">
              <li class="nav-item active fw-bold">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#designers">Designers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">About</a>
              </li>
            </ul>
            @auth
            <div class="mx-lg-4">
              <a href="/cart" class="nav-link">
                <i class="uil uil-shopping-cart-alt"></i>
                My Cart (<span>{{ App\Models\Transaction::where('user_id', auth()->user()->id)->count() }}</span>)</a
              >
            </div>
            <div>
                  <a
                    href="#"
                    class="nav-link"
                  >
                    Welcome, {{strtok(auth()->user()->name, " ")}}
                  </a>
            </div>
            @else
            <div class="mx-lg-4">
              <a href="/cart" class="nav-link">
                <i class="uil uil-shopping-cart-alt"></i>
                My Cart (<span>0</span>)</a
              >
            </div>
            <div>
              <a
                href=""
                class="nav-link"
                data-bs-toggle="modal"
                data-bs-target="#login"
              >
                <i class="uil uil-signin"></i>
                Login
              </a>
            </div>
            @endauth
          </div>
        </div>
      </div>
    </nav>
        @yield('content')
    <!-- End Designer -->
    <!-- Footer -->
    <footer class="border-top bg-light p-5" id="footer">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col">
            <p>
            <a href="https://hello.yasya.tech" target="_blank">
              Yasya Indra Technology. 2018
            </a>
            </p>
          </div>
          <div class="col nav-socmed d-flex justify-content-end">
            <a href="" class="text-decoration-none">
              <img src="{{asset('/assets/icons/001-facebook.png')}}" alt="" />
            </a>
            <a href="" class="text-decoration-none">
              <img src="{{asset('/assets/icons/002-twitter.png')}}" alt="" />
            </a>
            <a href="" class="text-decoration-none">
              <img src="{{asset('/assets/icons/003-instagram.png')}}" alt="" />
            </a>
          </div>
        </div>
        <div class="row mt-3 justify-content-between">
          <div class="col text-uppercase">
            <nav class="nav-footer d-flex justify-content-end">
              <a class="nav-link active" href="#">Jobs</a>
              <a class="nav-link" href="#">Developers</a>
              <a class="nav-link" href="#">Terms</a>
              <a class="nav-link" href="#">Privacy</a>
            </nav>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Modal -->
    <div
      class="modal fade"
      id="login"
      tabindex="-1"
      aria-labelledby="loginLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form method="POST" action="/login">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror""
                  id="exampleInputEmail1" name="email"
                  aria-describedby="emailHelp" value="{{ old('email') }}"
                />
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password" name="password"
                />
              </div>
              <div class="mb-3">
                <label for=""
                  >Belum punya akun? Daftar
                  <a href="/register">disini!</a>
                </label>
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    @if ($errors->any() || session()->has('loginError'))
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#login').modal('show');
        });
    </script>
    @endif
  </body>
</html>