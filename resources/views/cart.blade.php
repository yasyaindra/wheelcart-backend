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
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body>
    <!-- Your Cart -->
    <section class="cart-title">
      <div class="container">
        <div class="col">
          <div class="row text-center my-5">
            <h1>Your Cart</h1>
            <p>Pastikan belanjaan dibayar lunas</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Your Cart -->

    <!-- Breadcrumbs -->
    <div class="container mt-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Cart Checkout
          </li>
        </ol>
      </nav>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Chekout Items Form  -->
    <section class="checkout">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <h3 class="mb-3">Your Items</h3>
              @if(session()->has('success'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
            @foreach ($transactions as $transaction)
              <div class="row align-items-center mb-2">
                <div class="col-2">
                  <img src="/assets/cart/cart.png" alt="" />
                </div>
                <div class="col-4">
                  <h5 class="m-0">{{$transaction->product->name}}</h5>
                  <p class="m-0" style="color: #b7b7b7">IDR {{$transaction->product->price * $transaction->quantity}}.000</p>
                  <input type="hidden" value="{{$transaction->id}}" name="id">
                </div>
                <div class="col-4 quantity-buttons">
                  <button
                    type="button"
                    class="btn btn-sm quantity-left-minus"
                    style="background-color: #eaeafe"
                  >
                    <i class="uil uil-minus-circle" style="color: white"></i>
                  </button>
                  <span class="mx-2 quantity" class="form-control">{{$transaction->quantity}}</span>
                  <input type="hidden" value={{$transaction->quantity}} name="quantity">
                  <button
                    type="button"
                    class="btn btn-sm quantity-right-plus"
                    style="background-color: #1abc9c"
                  >
                    <i class="uil uil-plus-circle"></i>
                  </button>
                </div>
                <div class="col-2">
                  <form action="/cart/{{$transaction->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button
                      type="submit"
                      class="btn btn-sm btn-danger"
                      style="background-color: #920e12"
                    >
                      <i class="uil uil-times"></i>
                    </button>
                  </form>
                </div>
              </div>
              @endforeach
            </div>
            <div class="col-lg-5">
                <div class="card rounded-0 checkout-detail">
                  <div class="card-body">
                    <h5 class="card-title">Informasi Biaya</h5>
                    @foreach ($transactions as $transaction)
                      <div class="row mt-3 align-items-center justify-content-end">
                        <div class="col">
                          <h6 class="m-0">{{$transaction->product->name}}</h6>
                          <small class="text-muted">{{$transaction->quantity}} Items</small>
                        </div>
                        <div class="col d-flex justify-content-end">
                          <h5 class="m-0 align-self-center text-success">
                            IDR {{$transaction->product->price * $transaction->quantity}}.000
                          </h5>
                        </div>
                      </div>
                    @endforeach
                    <hr />
                    <div class="row mt-3 align-items-center justify-content-end">
                      <div class="col">
                        <h6 class="m-0">Courier</h6>
                        <small class="text-muted">JNT</small>
                      </div>
                      <div class="col d-flex justify-content-end">
                        <h5 class="m-0 align-self-center text-success">
                          IDR 80.000
                        </h5>
                      </div>
                    </div>
                    <div class="row mt-3 align-items-center justify-content-end">
                      <div class="col">
                        <h6 class="m-0">Tax</h6>
                        <small class="text-muted">Negara 20%</small>
                      </div>
                      <div class="col d-flex justify-content-end">
                        <h5 class="m-0 align-self-center text-success">
                          IDR 100.000
                        </h5>
                      </div>
                    </div>
                    <div class="row mt-3 align-items-center justify-content-end">
                      <div class="col">
                        <h6 class="m-0">Eid Promo</h6>
                        <small class="text-muted">10% Off</small>
                      </div>
                      <div class="col d-flex justify-content-end">
                        <h5 class="m-0 align-self-center text-danger">
                          - IDR 201.000
                        </h5>
                      </div>
                    </div>
                    <div class="row mt-3 align-items-center justify-content-end">
                      <div class="col">
                        <h6 class="m-0">Total Harga</h6>
                        <small class="text-muted">10% Off</small>
                      </div>
                      <div class="col d-flex justify-content-end">
                        <h5 class="m-0 align-self-center text-primary">
                          IDR {{$total}}.000
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-grid gap-3 mt-3">
                  <button
                    class="btn btn-warning"
                    type="submit"
                    data-bs-toggle="modal"
                    data-bs-target="#checkout"
                  >
                    Checkout
                  </button>
                  <a
                    class="btn text-white"
                    style="background-color: #eaeafe; color: #adadad"
                    type="button" href="/"
                  >
                    Cancel
                  </a>
                </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-sm col-lg-6">
              <form>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" />
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address II</label>
                  <input type="text" class="form-control" id="address" />
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">City</label>
                  <select class="form-select">
                    <option disabled>Open this select menu</option>
                    <option value="1">Tangerang</option>
                    <option value="2">Jakarta</option>
                    <option value="3">Bandung</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Country</label>
                  <select class="form-select">
                    <option disabled>Open this select menu</option>
                    <option value="1">Indonesia</option>
                    <option value="2">Filipina</option>
                    <option value="3">Malaysia</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
      </div>
    </section>
    <!-- End Checkout -->
    <!-- Checkout Details -->

    <!-- End Checkout Details -->
    <footer class="border-top bg-light p-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col">
            <p>Yasya Indra Technology. 2018</p>
          </div>
          <div class="col nav-socmed d-flex justify-content-end">
            <a href="" class="text-decoration-none">
              <img src="/assets/icons/001-facebook.png" alt="" />
            </a>
            <a href="" class="text-decoration-none">
              <img src="/assets/icons/002-twitter.png" alt="" />
            </a>
            <a href="" class="text-decoration-none">
              <img src="/assets/icons/003-instagram.png" alt="" />
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
    <!-- Modal -->
    <div
      class="modal fade"
      id="checkout"
      tabindex="-1"
      aria-labelledby="checkoutLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col text-center">
                <img src="/assets/checkout/ic_sukses_checkout.png" alt="" />
                <h2>Checkout Berhasil!</h2>
                <p>Barang segera diantar!</p>
                <a
                  href="/"
                  class="btn"
                  style="background-color: #eaeafe; color: #adadad"
                  >Home</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script>
    let btnAdd = document.querySelectorAll('.quantity-right-plus');
    let btnSubtract = document.querySelectorAll('.quantity-left-minus');
    let inputs = document.querySelectorAll('.quantity');

    btnAdd.forEach( (btn,index) => {
        btn.addEventListener('click', () => {
          inputs[index].innerHTML = parseInt(inputs[index].innerHTML) + 1 
      });
    })

    btnSubtract.forEach((btn,index) => {
        btn.addEventListener('click', () => {
          if(inputs[index].innerHTML > 0){
          inputs[index].innerHTML = parseInt(inputs[index].innerHTML) - 1;
          }
        })
      });

    // btnAdd.addEventListener('click', () => {
    //   input.innerHTML = parseInt(input.innerHTML) + 1;
    // });

    // btnSubtract.addEventListener('click', () => {
    //   if(input.innerHTML > 0){
    //     input.innerHTML = parseInt(input.innerHTML) - 1;
    //   }
    // });
    </script>
  </body>
</html>