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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

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
                        {{Auth::user()->name}}
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">.</span>
                        .
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
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Tickets Pending</p>
                      <h5 class="font-weight-bolder">
                        1
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">.</span> .
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

        <div class="row mt-6">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Session Data</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2 text-center">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Subject</th>
                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Details</th>
                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Review</th>
                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Rating</th>
                        <th class="text-secondary opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tickets as $items)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{$items->id}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">{{$items->ticket_Brief}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="">{{$items->ticket_Details}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm font-weight-bold">{{$items->review}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm font-weight-bold">{{$items->rating}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <a href="{{url('/editTicket/'. $items->id)}}" class="btn btn-primary text-sm ms-4"><i class="fas fa-file-pdf text-lg me-1"></i><strong>Edit</strong></a>
                          <a href="{{url('/deleteTicket/'. $items->id)}}" class="btn btn-danger text-sm ms-4"><i class="fas fa-file-pdf text-lg me-1"></i><strong>Delete</strong></a>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 mb-lg-0 mb-4">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Tickets
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/Tickets/add/insert')}}" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <label for="" class="">Ticket Subject</label>
                        <input type="text" class="form-control" name="ticket_Brief">
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <label for="" class="">Details</label>
                        <input type="text" class="form-control" name="ticket_Details">
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <label for="" class="">Review</label>
                        <input type="text" class="form-control" name="review">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="" class="">Rating</label>
                        <input type="text" class="form-control" name="rating">
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Modal -->




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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>