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


<div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <!-- <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm"> -->
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Support Tickets
              </h5>
             
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            
            <div class="card">
                <div class="card-header">
                    <h4>Add Tickets</h4>
                </div>
                <div>
                    <form action="{{url('/Tickets/add/insert')}}" method ="POST" enctype="multipart/form-data">
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
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        
                    </form>
            
                </div>
            
            </div>
          </div>
        </div>
 
      </div>
     
    </div>
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
      
   @yield('scripts')
    <script src="{{ asset('Dashboard/js/popper.min.js') }}" defer> </script>
    <script src="{{ asset('Dashboard/js/bootstrap.min.js') }}" defer> </script>
    <script src="{{ asset('Dashboard/js/perfect-scrollbar.min.js') }}" defer> </script>
    <script src="{{ asset('Dashboard/js/smooth-scrollbar.min.js') }}" defer> </script>
    <script src="{{ asset('Dashboard/js/chartjs.min.js') }}" defer> </script>

