<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />



  <!-- Styles -->
  <!-- ?v=2.0.4 -->
  <link id="pagestyle" href="Dashboard/css/argon-dashboard.css" rel="stylesheet" />

</head>

<body>
  <div class="min-height-300 bg-primary position-absolute w-100">

  </div>

  <div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

        <a class="navbar-brand m-0" href=" {{url('/home')}} " target="_blank">
          <img src="{{asset('assets\Others\download.png')}}" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">Internet Support</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">

      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/home')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('/Tickets') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Support Tickets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{url('/Billing')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{url('/ChangePlan')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Change Plan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{url('/Session')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Report</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../pages/profile.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../pages/sign-in.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../pages/sign-up.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="dropdown-item ms-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </span>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">

      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Name: </p>
                      <h5 class="font-weight-bolder">
                        {{ Auth::user()->name }}
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder"></span>
                        {{ Auth::user()->email }}
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Package Type: </p>
                      <h5 class="font-weight-bolder">
                        {{ Auth::user()->PackageType }}
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">.</span>
                        .
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Joined Since: </p>
                      <h5 class="font-weight-bolder">
                        {{Auth::user()->created_at}}
                      </h5>
                      <p class="mb-0">
                        <span class="text-danger text-sm font-weight-bolder">.</span>
                        .
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Last Payment Done at: </p>
                      <h5 class="font-weight-bolder">
                        {{$lastPayment->created_at}}
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">Reference: </span> {{$lastPayment->Reference}}
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                      <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Top Bar info -->
        <div class="row mt-4">
          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100 text-center">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tickets Brief</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-arrow-up text-success"></i>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Subject</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ticketBrief as $items)
                      <tr>
                        <td>{{$items->id}}</td>
                        <td>{{$items->ticket_Brief}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                  </div>
                </div>
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
              <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">
                  <div class="carousel-item h-100 active" style="background-image: asset('assets\Others\isp.png');
      background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">

                      <h5 class="text-white mb-1">Conquer the battlefield with our new gaming package</h5>
                      <p>Non-stop Gaming at a reasonable rate</p>
                    </div>
                  </div>
                  <img class="w-100 h-100 " src="{{asset('assets\Others\gaming-win-1200x630.jpg')}}" alt="logo">

                </div>

              </div>
            </div>
            <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
  </div>
  <div class="row mt-4">
    
    <!-- <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-2">Last Transaction Details</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center ">
            <tbody>
              <tr>
                <td class="w-30">
                  <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                      <img class="w-75 me-3 mb-0" src="{{asset('assets\Others\human-hand-holding-smartphone-approval-check-icon-payment-made-settlement-screen-showing-qr-code-stock-vector-156912967.jpg')}}">
                    </div>
                    <div class="ms-4">
                      <p class="text-xs font-weight-bold mb-0">Transaction ID</p>
                      <h6 class="text-sm mb-0">{{$lastPayment->id}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Refernce</p>
                    <h6 class="text-sm mb-0">{{$lastPayment->Reference}}</h6>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Amount</p>
                    <h6 class="text-sm mb-0">{{$lastPayment->Amount}}</h6>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Time</p>
                    <h6 class="text-sm mb-0">{{$lastPayment->created_at}}</h6>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div> -->

  </div>

  </div>
  </main>
  </div>
  @yield('content')
  </div>
  </div>


  @yield('scripts')
  <script src="{{ asset('Dashboard/js/popper.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/bootstrap.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/perfect-scrollbar.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/smooth-scrollbar.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/chartjs.min.js') }}" defer> </script>




</body>

</html>