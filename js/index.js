const contactModal = document.getElementById('contactModal')
const myOffcanvas = document.getElementById('offcanvasNavbar')

myModal.addEventListener('shown.bs.modal', () => {
  myOffcanvas.addEventListener('hidePrevented.bs.offcanvas')
})

$(".carousel-partners").owlCarousel({
  autoWidth: true,
  items:4,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:1000,
  autoplayHoverPause:true
});

function restoreDefaultValue(event) {
  const input = event.target;
  if (input.value !== "+7") {
      input.value = "+7";
  }
}

// document.getElementById('phone').addEventListener('input', function() {
//   var input = document.getElementById('phone');
//   var phoneNumber = input.value;

//   // Пытаемся разобрать номер телефона с использованием libphonenumber
//   try {
//       var parsedNumber = libphonenumber.parsePhoneNumberFromString(phoneNumber);
//       if (parsedNumber) {
//           // Если разбор успешен, подставляем код страны
//           input.value = '+' + parsedNumber.countryCallingCode + phoneNumber;
//       }
//   } catch (error) {
//       console.error(error);
//   }
// });