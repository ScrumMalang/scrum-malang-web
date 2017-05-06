@extends('layouts.landing') 
@section('title', 'Page Not found')
@section('content')
<div class="main-container">
  <section class="error-page fullscreen-element preserve-3d">
    <div class="container vertical-align">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="text-white">404<br>Not Found</h1>
          <p class="lead text-white">Oh dear, this is not the way to the Meetup...</p>
          <a href="#" class="btn btn-white">Take Me Home</a>
          <a href="#" class="btn btn-white btn-hollow">Report this error</a>
        </div>

        <div class="col-sm-4 text-right">
          <i class="icon pe-7s-way"></i>
          <i class="icon pe-7s-compass"></i>
          <i class="icon pe-7s-attention"></i>
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
</div>
@endsection 
@section('scripts')
<script>
  $(document).ready(function() {

  });
@endsection