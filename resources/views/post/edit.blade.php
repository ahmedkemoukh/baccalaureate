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
  
    

   
      
   
<!-- </head> -->
<!-- <body> -->

  <!-- <div class="table-responsive-md"> -->
    <body>
    <h5>edit</h5>
    {{Form::open(['method'=>'put','url'=>route('news.update',$post)])}}
   <div class='form-group'>
   {{Form::label('title','name')}}
   {{Form::input('text','name',$post->name,['class'=>'form-control'])}}
   </div>
   <button class='btn' type='submit'>envoiyer</button>
    {{Form::close()}}
           



 
</body>
</html>