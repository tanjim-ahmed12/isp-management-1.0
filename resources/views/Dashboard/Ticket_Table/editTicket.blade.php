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

    <main class="main-content position-relative border-radius-lg ">
      <div class="container-fluid py-4">

        <!-- Top Bar info -->
        <div class="row mt-6">
          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tickets</h6>
                <!-- <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">5 MBPS</span> in 2021
              </p> -->
              </div>

            </div>
          </div>
          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="container-fluid py-4">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">

                    <div class="card">
                      <div class="card-header">
                        <h4>Edit Tickets</h4>
                      </div>
                      <div class="card body">
                        <form action="{{url('/updateTicket/'.$edit->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')

                          <div class="row">
                            <div class="col-md-6">
                              <label for="" class="">Ticket Subject</label>
                              <input type="text" value="{{$edit->ticket_Brief}}" class="form-control" name="ticket_Brief">
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-6">
                              <label for="" class="">Details</label>
                              <input type="text" value="{{$edit->ticket_Details}}" class="form-control" name="ticket_Details">
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-6">
                              <label for="" class="">Review</label>
                              <input type="text" value="{{$edit->review}}" class="form-control" name="review">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <label for="" class="">Rating</label>
                              <input type="text" value="{{$edit->rating}}" class="form-control" name="rating">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('/Tickets')}}" class="btn btn-danger">Cancel</a>
                          </div>


                        </form>

                      </div>

                    </div>
                  </div>
                </div>

              </div>

            </div>




          </div>


        </div>
    </main>
  </div>

  </div>
  </div>



  <script src="{{ asset('Dashboard/js/popper.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/bootstrap.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/perfect-scrollbar.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/smooth-scrollbar.min.js') }}" defer> </script>
  <script src="{{ asset('Dashboard/js/chartjs.min.js') }}" defer> </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  {{--Messgae--}}
  @if (Session::has('success'))
  <span class="text-succuess">{{session('success')}}</span>
  @endif

</body>

</html>