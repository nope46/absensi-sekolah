@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">GPS</a></li>
@endsection

@section('content')
<style>
    .dashboard-card {
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
        border-radius: 1rem!important;
        border: none;
        margin-bottom: 2rem;
    }
    .dashboard-card .card-header {
        border-radius: 1rem 1rem 0 0!important;
    }
    .dashboard-card .card-body {
        border-radius: 0 0 1rem 1rem!important;
    }
    .dashboard-small-box {
        border-radius: 1rem!important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,.10)!important;
        border: none;
    }
</style>
@endsection
