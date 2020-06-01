
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Album example · Bootstrap</title>



    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mybootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jq.js')}}"></script>





</head>
<body>
        <nav class="navbar px-0 navbar-expand-lg bg-dark">
                <a class="navbar-brand" href="/home"><img src="{{ asset('images/logoB.png')}}" class='pl-3 img-fluid w-25'></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                  <div class='ml-auto pr-1  '>
                   {{$login}}
                </div>
              </nav>
        <div class='container-fluid p-0 jumbotron'>

    @yield("content")
    <footer  class="py-4 bg-dark  mt-5">
        <div class="container text-center">
          <small>Copyright &copy; Your Website</small>
        </div>
        </div>
      </footer>
      <script src="{{ asset('js/monjs.js')}}"></script>

      </body>
      </html>
