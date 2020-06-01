
@extends('post.default_comp')
@section('content')
    <div class='row'>
    <div class='flex-grow-1 col-md text-center text-changa pt-80 text-white'><h5 class='font-60'> BAC مرحبا بكم في موقع </h5>
    <h5 class='font-45 mt-3'> يتيح لكم الموقع منصة سهلة للاستعداد و مراجعة للباكالوريا </h5>
  <button class='btn btn-success text-changa text-white font-18 mt-5' id='log'>انظم لنا</button>
  <button class='btn btn-warning text-changa  mt-5'><a href='#site' class='text-white font-18'>نبدة عن موقع</a></button>
  </div>

  <div class='col-md-6 collapse log'>



   @yield("content1")
  </div>
    </div>
    </div>
    <div>

        <div class="jumbotron mt-4 text-center">
          <h5 class='display-4 line font-weight' id='site'>عن موقع</h5>
          <div class='w-50 m-auto'>
          <p class='font-20 lead mt-5'>
              ان الموقع  تم تصميمه ليكون سهل استعمال و ولوج الي محتوي
حيت تم تقسيمه الي تلاتة محاور أساسية اولي وهي مواضيع باكالوريا سابقة وتاني مواضيع
 مقترحة مع قدرة علي إضافة مقترحات اما محور تالث و هي منصة تفاعلية عن طريق  للمشاركة في أفكار
</div>
          </p>
          </div>
     </div>

     <div class='d-flex justify-content-around content text-center '>
       <div class='col-sm-12 col-md-3 border border-success rounded'>
      <h5 class='lead mt-5'>مواضيع باكالوريا سابقة </h5>
      <p>
        يتيح لك مواضيع باكالوريا سابقة مع حلول
      </p>
      <button class='btn btn-warning text-changa text-white font-18 my-5'><a href='/index'>زيارة صفحة</a></button>
       </div>
       <div class='col-sm-12 col-md-3 border border-success rounded'>
          <h5 class='lead mt-5'> تمارين للباكالوريا </h5>
          <p>
        يتيح لك مجموعة من تمارين و مقترحات للباكالوريا
          </p>
          <button class='btn btn-warning text-changa text-white font-18 my-5'><a href='/index'>زيارة صفحة</a></button>
           </div>
           <div class='col-sm-12 col-md-3 border border-success rounded'>
              <h5 class='lead mt-5'>موقع للتفاعل</h5>
              <p>
                    هي منصة من مجموعة من اشرطة لخلق تفاعل لرفع معنويات و تبادل افكار ما بعد باكالوريا
                </p>
              <button class='btn btn-warning text-changa text-white font-18 my-5'>قريبا</button>
               </div>
     </div>





      @endsection
