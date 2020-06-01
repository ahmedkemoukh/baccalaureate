
<?php
$division=array("math","science","littérature","langage");
$matier=array('math',"science","physics","arab","francais","english");
?>

@extends('post.default_comp')
@section('content')

    <div class='row'>

    <div class='list col-md-2 border-right border-warning text-center pr-4'>
      <form id='serch' method="POST">
          @csrf
        <div  class='form-group p-1  border-bottom border-dark'>
        <input class="form-control" type="" placeholder="id exercice" name="serch" aria-label="">
        <input type='submit' class=' mt-2 btn btn-primary' value='cherch'>

</form>
</div>
<ul class='ml-1'>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>

<h5 class='text-changa title'>التخصصات</h5>


    <ul class='nav flex-column'>

        @foreach($division as $divis)
    <li class="bd-toc-link"><a href='/{{$divis}}/{{Request::segment(2)}}/bac' class='text-dark'>{{$divis}}</a></li></li>
      @endforeach

</ul>
<div  class='form-group p-1  border-bottom border-dark'></div>
<h5 class='text-changa title'>المواد</h5>
    <ul class='nav flex-column'>

        @foreach($matier as $matiers)
    <li class="bd-toc-link " ><a href='/{{Request::segment(1)}}/{{$matiers}}/bac' class='text-dark'>{{$matiers}}</a></li></li>
      @endforeach

</ul>


<div  class='form-group p-1  border-bottom border-dark'></div>
@if(Auth::check())
<h5 class='text-changa title mt-3'>ايضافة ملف</h5>

<form id='form' class='mt-4'   enctype="multipart/form-data">
    @csrf
        <div class="form-group text-right">
                <label for="exampleInputEmail1">اختر تخصص</label>
                <select  class="form-control"  name='selectB'>
                        <option value='math'>رياضيات</option>
                        <option value='sienc'>علوم تجريبية</option>
                        <option value='lang'>لغات</option>
                        <option value='itterar'>اداب و فلسة</option>
                      </select>
        </div>

        <div class="form-group text-right">
                <label for="exampleInputEmail1">اختر مادة</label>
                <select  class="form-control"  name='selectM'>
                  <option value="math">رياضيات</option>
                  <option value='physics'>فزياء</option>
                  <option value='arab'>عربية</option>
                  <option value="french">فرنسسية</option>
                  <option value='englch'>انكليزية</option>
                </select>
              </div>
              <div class="form-group text-right">
                    <label for="exampleInputEmail1">اختر نوع</label>
                    <select  class="form-control"  name='selectT'>
                      <option value="bac">باكالوريا</option>
                      <option value='exercice'>تمرين</option>

                    </select>
                  </div>

                    <div class="form-group text-right">
                            <label for="exampleInputEmail1">اضف ملف</label>

                            <input type="file" class="form-control-file" name='fileUp' id="exampleFormControlFile1">
                          </div>

                          <input type="submit" class="btn btn-xs btn-primary" value="envoiyer">
</form>
@endif

    </div>
    <div class='col-md'> <h1 class='bd-title text-center'>{{Request::segment(1)}}</h1>


        {{$ifram}}



@if(Auth::check())
<div class="form-group text-right m-2  divcomanter">
        <label for="exampleFormControlTextarea1">ايظافة تعليق</label>
        <form  method="POST" action='uploadFile'  enctype="multipart/form-data" id='comment' >
            @csrf
        <input name='file' value='fff' id='filId' hidden>
        <textarea class="form-control" id="text" name='message' rows="3"></textarea>
        <div class='d-flex justify-content-end  mb-3 '>
                <button class="btn btn-primary mt-1" >ajouter</button>
                </div>
            </form>
      </div>
      @endif
      <div class='text-right mt-5' >
      <label for="exampleFormControlTextarea1">التعليقات</label>
      </div>
      <div id='listComment'>


    </div>
    </div>
    <div class='list col-md-2 border-left border-success text-center pr-4 p-0'>
        <div class=' m-1 row border-bottom border-dark'>
        @if(Route::currentRouteName()=='exercice.index')
        <h5 class='text-changa  col-6 text-da '><a   href="exercice" class='text-dark' >تمارين للبكالوريا</a></h5>
        <h5 class='text-changa title col-6 '><a  href="bac" class='text-dark'>مواضيع الباكالوريا</a></h5>
        @else
        <h5  class='text-changa title  col-6'><a  href="exercice" class='text-dark'>تمارين للبكالوريا</a></h5>
        <h5 class='text-changa col-6'><a  href="bac" class='text-dark'>مواضيع الباكالوريا</a></h5>
        @endif


</div>



    <ul class="list-group ">
  {{$sup}}

</ul>
    </div>
    </div>
       </div>

<script>
    $('#serch').on('submit',function(e)
    {
       e.preventDefault();
       $data=new FormData(this);

       $.ajax({
   url:"{{route('uploadFile.serch')}}",
   method:"POST",
   data:$data,
   dataType:"JSON",
   contentType:false,
   cache:false,
processData:false,
success:function(data)
{
    if(data['reponse']!==0)
    {
        alert("operation sucess");
    $('iframe').attr('id',data['sussess']);
        $('iframe').attr('src','/pdf/'+data['sussess'])

    }
    else
    {
    alert(data['sussess']);
    }
}

       })
    }
    );



    $('#form').on('submit',function(e)
    {
       e.preventDefault();
       $data=new FormData(this);

       $.ajax({
   url:"{{route('uploadFile.store')}}",
   method:"POST",
   data:$data,
   dataType:"JSON",
   contentType:false,
   cache:false,
processData:false,
success:function(data)
{
    alert(data['sussess']);
}

       })
    }
    );

    $('#comment').on('submit',function(e)
    {
        e.preventDefault();
        $('#filId').attr('value',$('iframe').attr('id'));
        $data=new FormData(this);

  $.ajax({
   url:"{{route('comment.store')}}",
   method:"POST",
   data:$data,
   dataType:"JSON",
   contentType:false,
   cache:false,
processData:false,
success:function(data)
{
   if(data['success']!='error')
   {
    $text=$('#text').val();
       $comment='  <div class="media mt-2 border-bottom border-danger">'+
                              ' <img src="/images/aa.jpg" class="col-1 rounded-circle" height="20" width="20" alt="...">'+
                               ' <div class="media-body mt-1">'+
                                '  <h5 class="mt-0">'+$("#user").html()+'</h5>'+
                               '   <p class="col-8">'+$text+'</p> </div> </div>';


       $('#listComment').prepend($comment);
   }
   else{
       alert('error');
   }
}

       })

    }
    );

    $('.list-item').on('click',function(){


        $('iframe').attr('id',$(this).attr('id'));
        $('iframe').attr('src','/pdf/'+$(this).attr('id'));
        $('.subPdf').attr('action',$('.uriPage').attr('id')+'/'+ $('iframe').attr('id'));
        $.ajax({
   url:"exercice/"+$(this).attr('id'),
   method:"GET",
   dataType:"JSON",

success:function(data)
{
$('#listComment').empty();

    data['success'].forEach((mot)=>{
        $comment='  <div class="media my-2 border-bottom border-danger">'+
                              ' <img src="/images/aa.jpg" class="col-1 rounded-circle" height="20" width="20" alt="...">'+
                               ' <div class="media-body mt-1">'+
                                '  <h5 class="mt-0">'+mot['user']['name']+'</h5>'+
                               '   <p class="col-8">'+mot['message']+'</p> </div> </div>';

         $('#listComment').prepend($comment);
    })


}

        })



    });
    </script>



       @endsection

