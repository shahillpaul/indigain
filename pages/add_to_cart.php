<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css"/>
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
      overflow-x: hidden ;
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
        -moz-appearance: textfield; /* Firefox */
        width: 24px; height: 24px;
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

</style>

<div class="card">
  <h2 class="text-center border-2 border-bottom border-dark">Cart</h2>
  <div class="card-body">
    <div>
      <?php
      $total = 0;
      $cartItems = $conn->query("
      SELECT cart.product_id, product.*, COUNT(cart.product_id) AS quantity
      FROM cart 
      INNER JOIN product ON cart.product_id = product.id
      GROUP BY cart.product_id
    ");

    while($row = $cartItems->fetch_assoc()): 
      $qty = $row['quantity'];
      $qtyText = ($qty > 1) ? $qty : 1;
      $price = $row['price'] * $qty;
      $total += $price;
      ?>
      <div class="d-flex cart-item align-items-center">
        <img src="<?php echo $row['image']?>" alt=""/>
        <div class="d-flex flex-column ms-4">
          <h5 class="mb-1 fw-bold"><?php echo $row['name']?></h5>
          <h4 class="text-danger">Rs. <?php echo $price?></h4>
        </div>
        
        <div class="ms-auto d-flex flex-column justify-content-center align-items-center">
          <div class="qtySelect">
            <i class="ion ion-minus"></i>
            <input type="number" name="qty" value="<?php echo $qtyText ?>" max="10"/>
            <i class="ion ion-plus"></i>
          </div>

          <button class="btn btn-secondary mt-2">Remove Item</button>
        </div>
        <!-- Add more product details as needed -->
      </div>
<?php endwhile; ?>
    </div>
  </div>
  <div class="d-flex justify-content-around border-top border-dark border-2 p-1 align-items-center">
    <h5 class="total ms-4"> Total Price: Rs. <?php echo $total?></h5>
    <div class="d-flex gap-2">
      <a href="#" class="btn btn-success" id="checkout">Checkout</a>
      <a href="?page=home" class="btn btn-danger">Go Back</a>
    </div>
  </div>
</div>