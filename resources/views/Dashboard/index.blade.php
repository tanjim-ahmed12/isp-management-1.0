@extends('layouts.Dashboard')

@section('content')
<div class = "card">
    <div class="card-body">
      <Style>
        h1 {text-align: center;}
        h5 {text-align: center;}
      </Style>
  <h1>My Profile</h1>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
</div>
@endsection