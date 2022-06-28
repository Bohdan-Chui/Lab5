
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
      <a href="{{url('/')}}">
        <img src="img/logo_nav.jpg" class="img-thumbnail" alt="...">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active nav-menu" aria-current="page" href="{{url('/')}}">Про клініку</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu" href="{{url('/about')}}">Наша команда</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu " href="{{url('/sign-up')}}">FAQ</a>
            </li>
            <li class="nav-item">
              <a href="{{url('/sign-up')}}">
              <button type="button" class="btn btn-outline-primary">Записатись</button>
</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>

@yield ('content')

<footer  class="footer">
  <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="row">
            <div class="col-12">
              <img src="img/logo_white.png" class="logo-wtite" alt="...">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4 class="footer-h">Посилання</h4>
              <ul class="footer-list">
                <a href="{{url('/')}}">
                <li class="footer-list-item">Про клініку</li>
                </a>
                <a href="{{url('/about')}}">
                <li class="footer-list-item">Наша команда</li>
                </a>
                <a href="{{url('/sign-up')}}">
                <li class="footer-list-item">FAQ</li>
                </a>
              </ul>
            </div>
            <div class="col">
              <h4 class="footer-h">Документація</h4>
              <a href="#" class="link-light footer-link">Отримати прайс-лист (PDF) 👈  </a><br>
              <a href="{{url('/about')}}" class="link-light footer-link">Нагороди</a>
              <a class="nav-link dropdown-toggle dropdown-lang" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                English
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Ukrainian</a></li>
                <li><a class="dropdown-item" href="#">Russian</a></li>
                <li><a class="dropdown-item" href="#">Deutsh</a></li>
              </ul>
            </div>
            <div class="col ">
              <h4 class="footer-h">Місце розташування</h4>
              <a href="#" class="link-light">вул. Велика Васильківська 100,<br>Київ, Україна</a><br>
              <p class="footer-schedule">Пн - Пт    08:00-20:00<br>Сб - Нд    10:00-16:00</p>
              <img src="img/f_map.png" class="img-fluid img-map" alt="...">
            </div>
          </div>
        </div>  
        <div class="col-3 footer-contact">
          <div class="card footer-card-top" style="width:18em;">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted ">Контакти</h6>
              <a href="#" class="link-light footer-card-tel">+3806331297054</a><br>
              <a href="#" class="link-light footer-card-email">info@medizentrum.ua</a><br>
            </div>
          </div>
          <div class="card footer-card-down" style="width:18em;">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted ">Запис на прийом</h6>
              <a href="{{url('/sign-up')}}">
              <button type="button" class="btn btn-outline-primary footer-button">Записатись</button>
</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 footer-md">
          <div class="row footer-md-block">
            <p class="footer-md-tel">+3806331297054</p>
            <p class="footer-md-emil">info@medizentrum.ua</p>
          </div>
          <div class="row footer-md-but">
          <a href="{{url('/sign-up')}}">
            <button type="button" class="btn btn-outline-primary footer-md-button">Записатись</button>
</a>
          </div>
          <div class="row footer-md-block">
            <p class="footer-md-emil">Copyright ©2022</p>
          </div>
        </div>
      </div>
    </div>  
</footer>
</body>
</html>
