@extends ('background')

@section('content')


<main class="mail_sing_up">
   <div class="container">
      <div class="col-md-12">
        <img src="img/sign_up_md.png" class= "img-thumbnail sing_up_img-md" alt="...">
       </div>
     <div class="row sing_up_img">
       <div class="col-xl-6 col-md-12">
        <img src="img/sing_up_img.png" class= "img-thumbnail sing_up_img-xl" alt="...">
       </div>
       <div class="col-xl-6 col-md-12">
       <form action="{{ route('sign') }}" method="post">
        @csrf
         <h1>Записатися на зустріч</h1>
         <label for="exampleDataList" class="form-label">Лікар <span class="sing_up_doctor">(опціонально)</span></label>
         <select name="doctor" class="form-select" aria-label="Default select example">
          <option selected>Оберіть ім'я лікаря</option>
          <option value="Басанько">Басанько</option>
          <option value="Колесник">Колесник</option>
          <option value="Корчака">Корчака</option>
          <option value="Лізогуб">Лізогуб</option>
        </select>
         </datalist>
         <label for="exampleDataList" class="form-label">Дата</label>
            <input name="date" type="date" class="form-control">
         </datalist>
         <label for="exampleDataList" class="form-label">Тип фінансування</label>
         <select name="oplata" class="form-select" aria-label="Default select example">
          <option value="Оплата">Оплата</option>
          <option value="Страховка">Страховка</option>
        </select>
      
      <button type="submit" class="btn btn-outline-primary">Записатись</button>
      <?php 
    
  if (isset($request['doctor']) and isset($request['date']) and isset($request['oplata'])){
  echo 'Отримані дані: '.$request['doctor'].' '.$request['date'].' '.$request['oplata'];
}
  ?>
</div>
    </div>
</form>

  </div>
  </div>
   </div>
  <div class="col-6">
    <img src="img/Form.png" class= "img-thumbnail" alt="...">
  </div>
</main>  

@endsection