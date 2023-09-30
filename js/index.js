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