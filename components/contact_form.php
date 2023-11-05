<div class="container d-flex flex-column" id="contact-form">
  <div class="contact-form row d-flex justify-content-center mb-5 mt-5">
    <div class="title d-flex justify-content-center mb-5">
      <h1>Связаться с нами</h1>
    </div>
    <form action="./backend/main.php" method="post" class="needs-validation d-flex flex-column col-12 col-md-8 col-lg-6">
      <div class="mb-3">
        <label for="name" class="form-label">Ваше имя <span class="text-danger">*</span></label>
        <input name="name" type="text" placeholder="Имя" class="form-control" id="name" required>
        <div class="invalid-feedback">Пожалуйста, введите ваще имя.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Адрес электронной почты <span class="text-danger">*</span></label>
        <input name="email" type="email" placeholder="example@domain.com" class="form-control" id="phone" aria-describedby="emailHelp" required>
      </div>
      <label for="phone" class="form-label">Номер телефона <span class="text-danger">*</span></label>
      <div class="input-group mb-3">
        <span class="input-group-text">+7 </span>
        <input type="tel" id="phone" name="phone" placeholder="999 999 9999" maxlength="10" class="form-control" required pattern="[0-9]{10}">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
      </div>
      <button name="submit_form" type="submit" class="btn btn-primary w-50 mt-2 px-5">Отправить</button>
    </form>
  </div>
</div>