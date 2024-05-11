$(document).ready(function() {
  $('.add-to-cart').on('click', function(){
    var index = $(this).attr('data-index');
    // console.log(index);
    saveToCart(index);
  })

  // buy
  $('.buy-now').on('click', function(){
    var index = $(this).attr('data-index');
    // console.log(index);
    buyNow(index);
  })

  // scroll
  $('a[href^="#"]').on('click', function(e){
    e.preventDefault();
    const t = $(this).attr('href').substring(1);
    const te = $('#' + t);

    if(te.length){
      $('html, body').animate({
        scrollTop: te.offset().top - 140
      }, 1000)
    }
  })

  // slidercontrols
  const sections = ['page3', 'page4', 'page5', 'page6', 'page7']
  sections.forEach(section => {
    const left = $(`#${section} .sliderControls #leftBtn`)
    const right = $(`#${section} .sliderControls #rightBtn`)
    const slider = $(`#${section} .${section}-scroll`)

    left.on('click',function(){
      slider.animate({
        scrollLeft:  '-=800',
      }, 500)
      console.log('left')
    })

    right.on('click',function(){
      slider.animate({
        scrollLeft:  '+=800',
      }, 500)
      console.log('right')
    })

  })

$('#scrollTop').fadeOut()

  
})

// storing the selected product id to the cart
// var cart = []
function saveToCart(productID){
  localStorage.setItem('cart',productID)
  // cart.push(productID)
  // console.log(JSON.stringify(cart))
  $.ajax({
    url: './php/ajax.php?a=addToCart',
    method: 'POST',
    data: {
      id: productID,
    },
    success: function(response) {
      if (response) {
        showAlert(response + ' - added suuccesfully');
        setTimeout(function() {
          location.reload();
      },1000)
        // console.log(response)
      }
    }
  })
  // showAlert()
}

function buyNow(productID){
  var id = productID
  location.href = `?page=checkout&id=${id}`
}

function showAlert(msg){
  Swal.fire({
    iconHtml: '<i class="ion ion-ios-cart-outline" style="color: green"></i>',
    text: msg,
    showConfirmButton: false,
    toast: true,
    position: 'top-end',
    timer: 1500,
    // backdrop: true,
    color: '#ffffff',
    background: '#212121'
  })
}

// Scroll to the top of the page
function scrollToTop() {
  $('html, body').animate({
      scrollTop: 0
  }, 'slow')
}

// Add scroll event listener
$(window).scroll(function() {
  // Check if the user has scrolled down 500px
  if ($(this).scrollTop() > 500) {
      // If scrolled down, show the button
      $('#scrollTop').fadeIn();
  } else {
      // If not scrolled down, hide the button
      $('#scrollTop').fadeOut();
  }
});


// let pages = ['page2','page3', 'page4', 'page5', 'page6', 'page7']
// pages.forEach(page=>{
//   $(`#${page}`).css({
//     background: '#fff'
//   })
// })
