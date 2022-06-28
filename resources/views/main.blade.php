@extends ('background')

@section('content')

<main class="main-about">
<div class="container">
      <div class="row">
          <div class="col">
              <div class="col-xl-6 col-md-12">
              <p class="h1">
                Вітаємо у
                <span class="header-span">MediСentrum</span>
             </p>
              <p class="header-p">
                Наш медичний центр може забезпечити якісне 
                медичне обстеження та професійну консультацію 
                від сертифікованих лікарів. Економте свій час та 
                запишіться на прийом онлайн.
              </p>
              <a href="{{url('/sign-up')}}">
                  <button type="button" class="btn btn-outline-primary button-header" title="подсказка" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Записатись
                  </button>  
              </a>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <img src="img/h_img.png" class="img-fluid" alt="hero-5">
      </div>
      </div>
    </div>
  <div class="container">
      <div class="row">
          <div class="col">
            <p class="h1">
              Пам'ятай про <br> 
              <span class="header-span">COVID-19</span>
           </p>
            <div class="col-xl-8 main-icons">
             <div class="col-2">
              <img src="img/Sanitizer.png" class= "img-thumbnail" alt="...">
              <img src="img/temperature.png" class= "img-thumbnail"  alt="...">
              <img src="img/track.png" class= "img-thumbnail"  alt="...">
             </div>
             <div class="col main-icons-text">
              <p class="ppp" >Використовуй антисептики</p>
              <p class="ppp" >Стеж за температуро</p>
              <p class="ppp" >Остерігайся&nbsp;інфікованих&nbsp;людей</p>
             </div>
           </div>
      </div>
      <div class="col-xl-6 col-md-12 ">
        <img src="img/m-img.png" class="img-fluid about-lg-version" alt="hero-5">
    </div>
    <div class="div">
      <div class="col">
        <img src="img/about_md.png" class="img-fluid about-md-version" alt="hero-5">
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
      <div class="col">
          <p class="h1">
           Про
            <span class="header-span">нас</span>
         </p>
          <p class="header-p-about">
            MediСentrum пропонує Вам повний спектр лікування педіатрії та хірургічної медицини.<br><br>
            Ми гарантуємо високу та ретельну оцінку ваших скарг і даємо нейтральні поради щодо консервативних та оперативних підходів до лікування.<br><br>
            Вам пропонується якісний сервіс у найсучасніших палатах.
          </p>
          <ul class="list-about">
            <li class="list-item">Ми застосовуємо найкращі способи лікування</li>
            <li class="list-item">Ми Ваша можливість на здорове життя</li>
          </ul>
      </div>
      <div class="col-xl-6 col-md-12">
          <img src="img/m_about.png" class="img-fluid" alt="hero-5">
      </div>
  </div>
</div>

    <div class="row">
      <h1 class="text-center h1">
        Наші  
        <span class="header-span">лікарі</span>
        <div class="container">
        
          <div class="row">
          @if (count($doctors)>0)
        @foreach($doctors as $doctor)
            <div class="col ">
              <div class="card main-card">
              <img src="{{url('img/'.'doctor'.$doctor->id.'.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text">{{$doctor->name}}</p>
              <p class="card-text doctor-profession">{{$doctor->profession}}</p>
              <p class="card-text doctor-discription">{{$doctor->description}}</p>
            </div>
          </div>
          </div>
          @endforeach
        @endif
          </div>
    </h1>
</main> 

@endsection