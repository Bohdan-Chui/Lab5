@extends ('background')

@section('content')


<main class="mail-about_us">
   <div class="contaimer">
     <div class="row">
       <div class="col">
        <img src="img/certificate_1.png" class= "img-thumbnail certificates" alt="...">
       </div>
       <div class="col">
        <img src="img/certificate_2.png" class= "img-thumbnail certificates" alt="...">
       </div>
       <div class="col">
        <img src="img/certificate_3.png" class= "img-thumbnail certificates" alt="...">
       </div>
       <div class="col">
        <img src="img/certificate_4.png" class= "img-thumbnail certificates" alt="...">
       </div>
       </div>
     </div>
   </div>
   <div class="accordion" id="accordionExample">
    <div class="accordion-item main-about_us-dropdown">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Lorem ipsum — класичний варіант умовного беззмістовного тексту
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body dropdown-text">
          <strong>Lorem ipsum — класичний варіант умовного беззмістовного тексту</strong><br> Це допомагає намітити візуальні елементи в документ або презентацію, наприклад, друкарня, шрифт, або макет. 
        </div>
      </div>
    </div>
    <div class="accordion-item main-about_us-dropdown">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Lorem ipsum — класичний варіант умовного беззмістовного тексту
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body dropdown-text">
          <strong>Lorem ipsum — класичний варіант умовного беззмістовного тексту</strong><br> Це допомагає намітити візуальні елементи в документ або презентацію, наприклад, друкарня, шрифт, або макет. 
        </div>
      </div>
    </div>
    <div class="accordion-item main-about_us-dropdown">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Lorem ipsum — класичний варіант умовного беззмістовного тексту
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body dropdown-text">
          <strong>Lorem ipsum — класичний варіант умовного беззмістовного тексту</strong><br> Це допомагає намітити візуальні елементи в документ або презентацію, наприклад, друкарня, шрифт, або макет. 
        </div>
      </div>
    </div>
    <div class="accordion-item main-about_us-dropdown">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Lorem ipsum — класичний варіант умовного беззмістовного тексту
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body dropdown-text">
          <strong>Lorem ipsum — класичний варіант умовного беззмістовного тексту</strong><br> Це допомагає намітити візуальні елементи в документ або презентацію, наприклад, друкарня, шрифт, або макет. 
        </div>
      </div>
    </div>
  </div>
  <div class="col-6">
    <img src="img/FAQ.png" class= "img-thumbnail main-FAQ" alt="...">
   </div>
 </main>  

@endsection