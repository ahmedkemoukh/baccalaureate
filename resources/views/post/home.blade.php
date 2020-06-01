
<?php
$division=array("math","science","littérature","langage");
$matier=array('math',"science","physics","arab","francais","english");
?>
@extends('post.default_comp')

@section('content')




<div class="row justify-content-center m-2">
@foreach($division as $div)

  <div class="card col-4 overflow-auto">
    <img src="images/{{$div}}.jpg" class="card-img-top" alt="...">
    <div class="card-img-overlay pt-0">
    <h5 class="card-title text-center bg-warning">{{$div}}</h5>
    <ul class="list-group list-group-flush">
    @foreach($matier as $matiers)
  <li class="list-group-item"><a href='/{{$div}}/{{$matiers}}/bac' class='text-light'>{{$matiers}}</a></li>
  @endforeach

</ul>
</div>

  </div>

  @endforeach


</div>
<script src="{{ asset('js/monjs.js')}}"></script>
@endsection
