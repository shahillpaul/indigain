$(document).ready(function() {
  $('button [data-index]').on('click', function(){
    var index = $(this).attr('data-index');
    // console.log(index);
    saveToCart(index);
  })

  // scroll
  $('a[href^="#"]').on('click', function(e){
    e.preventDefault();
    const t = $(this).attr('href').substring(1);
    const te = $('#' + t);

    if(te.length){
      $('html, body').animate({
        scrollTop: te.offset().top
      }, 1000)
    }
  })
})

// storing the selected product id to the cart
// var cart = []
function saveToCart(productID){
  localStorage.setItem('cart',productID)
  // cart.push(productID)
  // console.log(JSON.stringify(cart))
  $.ajax({
    url: './php/ajax.php?act=addToCart',
    method: 'POST',
    data: {
      id: productID,
    },
    success: function(response) {
      if (response) {
        showAlert(response + ' - added suuccesfully');
        // console.log(response)
      }
    }
  })
  // showAlert()
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

