<div class="container d-flex flex-column">
  <div class="contact-form row d-flex justify-content-center mb-5 mt-5" id="contact-form">
    <div class="title d-flex justify-content-center mb-5">
      <h1>Связаться с нами</h1>
    </div>
    <form action="" method="post" class="d-flex flex-column col-12 col-md-8 col-lg-6">
      <div class="mb-3">
        <label for="InputName" class="form-label">Ваше имя</label>
        <input name="name" type="text" class="form-control" id="InputName" required>
      </div>
      <div class="mb-3">
        <label for="InputEmail1" class="form-label">Адрес электронной почты</label>
        <input name="email "type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" required>
        <!-- <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-50 mt-2">Отправить</button>
    </form>
  </div>
</div>