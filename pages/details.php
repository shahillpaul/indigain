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
      background-color: #212121;
    }
    img{
      width: 120px;
      height: auto;
    }
    .card-title{
      color: #000000;
      font-weight: 800;
      font-size: 1.5em;
    }
    .card-text {
      padding: 0 40px 0 40px;
    }
    .cp {
      color: red;
      text-decoration: line-through;
      font-style: italic;
      font-size: 1em;
    }
    .sp {
      display: flex;
      justify-content: center;
    }
    .sp span {
      font-size: 2em;
      font-weight: bold;
    }
    .back i {
      height: 10px;
      width: 40px
    }
    .btn.btn-warning {
      width: 60px;
      /* position: absolute; */
      /* right: 40px */
    }
    .btn.btn-warning i {
    scale: 1.4
    }

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield; /* Firefox */
        width: 40px;
        text-align: center;
    }
  </style>


  <div class="container">
    <div class="row justify-content-center align-content-center">
<?php
  $pid = isset($_GET['item']) ? $_GET['item'] : "";
  $product = $conn->query("SELECT * FROM product WHERE id = '$pid'");
  while($row = $product->fetch_assoc()):
?>
      <div class="card">
        <div class="card-body">
          <div class="d-flex me-auto back">
            <a href="?page=home" type="button" class="btn btn-danger"><i class="ion ion-arrow-left-a"></i></a>
          </div>
          <div class="d-flex justify-content-center align-content-center mb-5">
            <img src="<?php echo $row['image']?>" alt=""/>
          </div>
            <h5 class="card-title text-center"><?php echo $row['name'] ?></h5>
            <div class="sp">
              <span>Rs. <?php echo $row['price']?></span> <i class="cp"><?php echo $row['cross_price'] ?></i>
            </div>
            <p class="card-text"><?php echo $row['description']?></p>

            <div class="d-flex gap-2 justify-content-center">
              <?php 
              $weightArray = explode(",", $row['weight']);

              // format weight
              $formattedWeight = array();
              foreach($weightArray as $weight) {
                $weight = trim($weight);
                if($weight < 1000){
                  $formattedWeight[] = $weight . " g";
                } else {
                  $formattedWeight[] = ($weight / 1000) . " kg";
                }
              }

              foreach($formattedWeight as $w) {
              ?>
              <button class="btn btn-dark m-2" href="" style="max-width: 80px;"><?php echo $w ?></button>
              <?php
              }
              ?>
            </div>
            <div class="d-flex mt-4 justify-content-around align-items-center">
              <div class="d-flex align-items-center gap-2">
                <label>Quantity</label>
                <input type="number" name="qty" value="1" id="qtyInput"/>
                <div class="d-flex flex-column ms-1 gap-2">
                  <i class="ion ion-plus" id="p"></i>
                  <i class="ion ion-minus" id="m"></i>
                </div>
              </div>
              <a href="#" class="btn btn-success">Buy Now</a>
              <a href="#" class="btn btn-warning"><i class="ion ion-ios-cart fw-bold"></i></a>
            </div>
        </div>
      </div>
      <?php
endwhile;
?>
    </div>
  </div>

  <script>
    $(document).ready(function() {
        $('#p').click(function() {
            var qtyInput = $('#qtyInput');
            var currentQty = parseInt(qtyInput.val());
            if (currentQty < 10) { // Limit to 10
                qtyInput.val(currentQty + 1);
            }
        });

        $('#m').click(function() {
            var qtyInput = $('#qtyInput');
            var currentQty = parseInt(qtyInput.val());
            if (currentQty > 1) {
                qtyInput.val(currentQty - 1);
            }
        });
    });
</script>
