

@component('post.exercice', ['data'=>$data])


@slot('sup')

@if(is_null($data->first()))
<p>not fund</p>
@else
@foreach($data as $dat)

<li id={{$dat->id}} class="px-0 list-group-item list-item d-flex justify-content-between align-items-center mt-2">
    <label>موضوع{{$dat->id}}</label>
    <span class="badge badge-pill"><i class="fas fa-heart fa-2x"></i></span>
  </li>
  @if(Auth::check())
  @if(auth()->guard('web')->user()->type==1)
<button class='btn btn-danger col-12'><a href="/{{str_replace('_', '/', $dat->categori)}}/delete/{{$dat->id}}">suprimer</a></button>

@endif
@endif
@endforeach



@endif
@endslot

@slot('ifram')
@if(is_null($data->first()))
<p>not fund</p>
@else
@if(Auth::check())
@if(auth()->guard('web')->user()->type==1)
<div>
    <div class='display-non uriPage' id='/{{Request::path() }}/update'></div>
    <div class='row'>
        <div class='col-12 text-center' > تغيير التخصص </div>
    <div class='col-12'>
<form  class='mt-4 row subPdf' method="POST" action='/{{str_replace('_', '/', $data->first()->categori)}}/update/{{$data->first()->id}}'>
    @csrf
        <div class="form-group text-right col-6">
                <label for="exampleInputEmail1">اختر تخصص</label>
                <select  class="form-control"  name='selectB'>
                        <option value='math'>رياضيات</option>
                        <option value='sienc'>علوم تجريبية</option>
                        <option value='lang'>لغات</option>
                        <option value='itterar'>اداب و فلسة</option>
                      </select>
        </div>

        <div class="form-group text-right col-6">
                <label for="exampleInputEmail1">اختر مادة</label>
                <select  class="form-control"  name='selectM'>
                  <option value="math">رياضيات</option>
                  <option value='physics'>فزياء</option>
                  <option value='arab'>عربية</option>
                  <option value="french">فرنسسية</option>
                  <option value='englch'>انكليزية</option>
                </select>
              </div>
              <div class="form-group text-right col-6">
                    <label for="exampleInputEmail1">اختر نوع</label>
                    <select  class="form-control"  name='selectT'>
                      <option value="bac">باكالوريا</option>
                      <option value='exercice'>تمرين</option>

                    </select>
                  </div>
<div class='col-12 text-center'>
        <input type="submit" class="btn btn-xs btn-primary" value="envoiyer">
</div>

</form>
</div>
</div>
</div>
@endif
@endif
<div class="embed-responsive embed-responsive-16by9 pdf">

    <iframe id={{$data->first()->id}} style=" width:100%; margin:auto;" src="{{asset('pdf/'.$data->first()->id)}}"></iframe></div>

    @endif
@endslot
@endcomponent

