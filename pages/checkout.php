<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css" />

<style>
  .card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80vw;
      height: 90vh;
    }
    .card-body {
      position: relative;
    }

    html,
    body {
      background-color: gray;
    }
    img {
      width: 80px;
      height: 80px;
      margin-right: 10px;
    }
</style>

<div class="card">
  <div class="card-body">
    <h4>Checkout</h4>
     
    <div class="container">
      <div class="row p-2">
        <!-- shipping info -->
        <div class="col"></div>

        <!-- order summary -->
        <div class="col-6 border border-2 border-dark rounded-2 p-4">
          <h5>Order summary</h5>
          <div class="">
            <?php
            $pid = isset($_GET['id']) ? $_GET['id'] : "";
            $product = $conn->query("SELECT * FROM product WHERE id = '$pid'");
            while($row = $product->fetch_assoc()):
            ?>
            <div class="d-flex align-items-center">
              <img src="<?php echo $row['image']?>">
              <div>
                <h5><?php echo $row['name']?></h5>
                <span><?php echo $row['id']?></span>
                <div class="d-flex">
                  <span>Rs. <?php echo $row['price']?></span>
                  <div>
                    <input type="number" value="<?php echo $row['']?>">
                  </div>
                </div>
              </div>
            </div>
            <?php
            endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>