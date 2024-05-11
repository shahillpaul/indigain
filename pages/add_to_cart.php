<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css" />
<style>
  .card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60vw;
    height: 80vh;
  }

  .card-body {
    position: relative;
    overflow-y: auto;
    overflow-x: hidden;
  }

  html,
  body {
    background-color: #212121;
  }

  img {
    width: 80px;
    height: auto;

  }

  .cart-item {
    margin: 20px 20px;
  }

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type="number"] {
    -moz-appearance: textfield;
    /* Firefox */
    width: 24px;
    height: 24px;
    text-align: center;
    border: 1px solid black;
    margin: 0px 5px
  }

  .total {
    color: red;
    font-weight: 800;
  }

  #checkout {
    max-width: 100px;
  }

  .noItems {
    margin: 0px 40px;
    margin-top: 20vh;
  }

  .noItems h3 {
    text-align: center;
  }

  .noItems .diBtn button {
    width: 200px;
  }

  .ion {
    cursor: pointer;
  }
</style>

<div class="card">
  <h2 class="text-center border-2 border-bottom border-dark">Cart</h2>
  <div class="card-body">
    <div>
      <?php
      $total = 0;
      $cartItems = $conn->query("
      SELECT cart.*, product.*, COUNT(cart.product_id) AS quantity
      FROM cart 
      INNER JOIN product ON cart.product_id = product.id
      GROUP BY cart.product_id
    ");

    if($cartItems->num_rows == 0){
      $isCartEmpty = true;
    ?>
      <div class="noItems">
        <h3 class="fw-bold p-4">No items in the cart</h3>
        <div class="d-flex gap-4 diBtn justify-content-center">
          <button class="btn btn-primary" id="continue">Continue Shopping</button>
          <button class="btn btn-primary" id="goBack">Go Back</button>
        </div>
      </div>
      <?php
    }

    while($row = $cartItems->fetch_assoc()): 
      $qty = $row['quantity'];
      $qtyText = ($qty > 1) ? $qty : 1;
      $price = $row['price'] * $qty;
      $total += $price;

      ?>
      <div class="d-flex cart-item align-items-center">
        <img src="<?php echo $row['image']?>" alt="" />
        <div class="d-flex flex-column ms-4">
          <h5 class="mb-1 fw-bold"><?php echo $row['name']?></h5>
          <h4 class="text-danger">Rs. <?php echo $price?></h4>
        </div>

        <div class="ms-auto d-flex flex-column justify-content-center align-items-center">
          <div class="qtySelect">
            <i class="ion ion-minus"></i>
            <input data-item-uid="<?php echo $row['uid']?>" id="qtyin" type="number" name="qty"
              value="<?php echo $qtyText ?>" max="10" />
            <i class="ion ion-plus"></i>
          </div>

          <button class="btn btn-secondary mt-2 removeItem" data-item-id="<?php echo $row['id'] ?>">Remove Item</button>
        </div>
        <!-- Add more product details as needed -->
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div
    class="d-flex justify-content-around border-top border-dark border-2 p-1 align-items-center <?php if($isCartEmpty) echo 'visually-hidden' ?>">
    <h5 class="total ms-4"> Total Price: Rs. <?php echo $total?></h5>
    <div class="d-flex gap-2">
      <a href="#" class="btn btn-success" id="checkout">Checkout</a>
      <a href="?page=home" class="btn btn-danger">Go Back</a>
    </div>
  </div>
</div>

<script>
  let arrayBtn0 = ['#goBack', '#continue']
  arrayBtn0.forEach(btn => {
    $(btn).on('click', function () {
      location.href = '?page=home'
    })
  })

  $('.removeItem').on('click', function () {
    // console.log($(this).data('item-id'))
    var id = $(this).data('item-id');
    var name = $(this).closest('.cart-item').find('h5').text();
    $.ajax({
      url: './php/ajax.php?a=removeCartItem',
      data: {
        id: id
      },
      method: 'POST',
      success: function (res) {
        if (res == 1) {
          // console.log('Success')
          // location.reload()
          Swal.fire({
            iconHtml: '<i class="ion ion-ios-cart-outline" style="color: green"></i>',
            text: `Removed ${name}`,
            showConfirmButton: false,
            toast: true,
            position: 'top-end',
            timer: 1500,
            // backdrop: true,
            color: '#ffffff',
            background: '#212121'
          })
          setTimeout(() => {
            location.reload()
          }, 1000);
        }
        // console.log(res)
      }
    })
  })

  let qi = ['.ion-plus', '.ion-minus']
  let qtyInput = $('#qtyin')
  var count;

  $(qi[0]).on('click', function () {
    // 1 = add, 0= minus
    var qty = qtyInput.data('item-uid')
    var count = 1
    sendCount(qty, count)
  })

  $(qi[1]).on('click', function () {
    // 1 = add, 0= minus
    var qty = qtyInput.data('item-uid')
    var count = 0
    sendCount(qty, count)
  })

  function sendCount(uid, count) {
    $.ajax({
      url: './php/ajax.php?a=updateCount',
      data: {
        uid: uid,
        count: count
      },
      method: 'POST',
      success: function (res) {
        if (res) {
          // console.log('Success')
          location.reload()
        }
        // console.log(res)
      }
    })
  }
</script>