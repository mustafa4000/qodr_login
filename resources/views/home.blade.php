@extends('layouts.app')

@section('content')
<main class="main-content">

  <div class="container-fluid">
      <!-- begin::page header -->
      <div class="page-header d-md-flex justify-content-between align-items-center">
          <div>
              <h4>Santri</h4>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Santri</li>
                  </ol>
              </nav>
          </div>
          <div>
              <div class="reportrange btn btn-light">
                  <i class="ti-calendar m-r-10"></i>
                  <span></span>
                  <i class="ti-angle-down m-l-10"></i>
              </div>
          </div>
      </div>
      <!-- end::page header -->
  </div>

</main>
@endsection