@extends('layouts.success')

@section('tittle')
    Store Success Page
@endsection

@section('content')        
<body>
  <!-- Page Content -->
  <div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="/images/success.svg" alt="" class="mb-4" />
            <h2>
              Transaction Processed!
            </h2>
            <p>
              Silahkan tunggu konfirmasi email dari kami dan <br />
              kami akan menginformasikan resi secept mungkin!
            </p>
            <div>
              <a class="btn btn-success w-50 mt-4" href="/dashboard">
                My Dashboard
              </a>
              <a class="btn btn-signup w-50 mt-2" href="/">
                Go To Shopping
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/script/navbar-scroll.js"></script>
</body>
@endsection