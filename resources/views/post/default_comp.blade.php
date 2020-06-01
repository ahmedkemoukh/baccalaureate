@component('post.default')
@slot('login')
@if(Auth::guard('controller')->check())
<div class="row bg-warning">
<span class='col-6 text-warning'>{{Auth::guard('controller')->user()->name}} {{Auth::guard('controller')->user()->prenom}}</span>
<a class="col-6 dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>




                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</div>
@else
@if(Auth::guard('web')->check())
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h5 class='text-success' id='user'>{{Auth::guard('web')->user()->name}}</h5>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
 {{ __('Logout') }}
</a>

    </div>
  </div>





                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

@else
<form class=" form-inline  justify-content-end" method="POST" action="{{ route('login') }}">
    @csrf
      <input class="form-control mr-sm-2 border border-warning" type="email" placeholder="email" name="email" aria-label="email">
      <input class="form-control mr-sm-2 border border-warning" type="password" placeholder="password" name="password" aria-label="password">
      <button class="btn btn-outline-success my-2 display-4 my-sm-0" type="submit">Login</button>
    </form>
    <a class='text-primary' href="#">forgen key</a>
    @endif
    @endif

@endslot
@endcomponent
