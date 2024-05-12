<?php
include './php/auth.php';
?>
<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css" />

<style>
  .card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50vw;
    height: 80vh;
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
    height: auto;
    margin-right: 20px;
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
    margin: 0px 5px;
    cursor: not-allowed;
  }
  .ion {
    cursor: pointer;
  }

  #f_name, #l_name {
    width: 100%;
    height: 24px;
  }
  input {
    text-transform: capitalize;
  }
  .form-label {
    font-size: 14px;
    color: gray;
  }
  .address input {
    width: 100%;
    height: 24px;
  }
  #pin {
    width: 30%;
  }
  #email {
    text-transform: none !important;
  }
  .contact-form {
    width: calc(10ch + 20%)
  }
  .email-form {
    width: 100%;
  }
  .contact-container input {
    height: 24px
  }
  .buttons button {
    width: 100px
  }
  .product-title {
    font-size: 18px
  }
</style>

<?php
$user_id = isset($_SESSION['login_id']) ? $_SESSION['login_id'] : '';
$user = $conn->query("SELECT * FROM customer WHERE id = '$user_id'");

while($row = $user->fetch_assoc()){
  $f_name = $row['first_name'];
  $l_name = $row['last_name'];
  $email = $row['email'];
  $phone = $row['contact_number'];
  $state = $row['state'];
  $city = $row['city'];
  $pin = $row['pin_code'];
  $ss = $row['gender'];
}
?>

<div class="card">
  <div class="card-body">
    <h4>Profile</h4>

    <div class="container mt-4 px-4 chcon">
      <div class="row p-2 justify-content-center gap-4">
        <!-- shipping info -->
        <div class="col">
          <div>
            <!-- name -->
            <div class="d-flex p-2 justify-content-center align-items-center gap-4">
              <div class="">
                <label for="name" class="form-label">First name</label>
                <input type="text" name="f_name" id="f_name" maxlength="30" class="form-control" 
                value="<?php echo $f_name?>" />
              </div>
              <div>
                <label for="name" class="form-label">Last name</label>
                <input type="text" name="l_name" id="l_name" maxlength="30" class="form-control"
                 value="<?php echo $l_name?>" />
              </div>
            </div>

            <!-- address -->
            <div class="address">
              <!-- <h6>Address</h6> -->
              <div class="d-flex justify-content-center gap-4">
                <!-- state -->
                <div>
                  <label for="state" class="form-label">State</label>
                  <input type="text" name="state" id="state" maxlength="50" class="form-control" 
                  value="<?php echo $state?>"/>
                </div>
                <!-- city -->
                <div>
                  <label for="city" class="form-label">City</label>
                  <input type="text" name="city" id="city" maxlength="50" class="form-control"
                  value="<?php echo $city?>" />
                </div>
              </div>
              <!-- pin -->
              <div class="pin">
                <label for="pin" class="form-label">Pin</label>
                <input type="text" name="pin" id="pin" maxlength="6" class="form-control" pattern="[0-9]*"
                value="<?php echo $pin?>"/>
              </div>
            </div>

            <!-- contact -->
            <div class="d-flex gap-4 justify-content-start contact-container">
              <div class="contact-form">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10" class="form-control"
                pattern="[0-9]*"
                value="<?php echo $phone?>"/>
              </div>
              <div class="email-form">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" maxlength="50" class="form-control"
                value="<?php echo $email?>"/>
              </div>
            </div>
          </div>
        </div>

        <!-- order summary -->
        <div class="col-2 p-4">
          <?php
          $image;
          if($ss == 0){
            $image = "./assets/female.jpg";
          } else {
            $image = "./assets/male.png";
          }
          ?>
          <img src ="<?php echo $image ?>"/>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex p-4 justify-content-end align-items-center gap-4 buttons">
    <button class="btn btn-back btn-danger">Go back</button>
    <button class="btn btn-checkout btn-primary">Checkout</button>
  </div>
</div>

<script>
  $('#price').text($('#price').data('price'))

  let qCon = ['.ion-plus', '.ion-minus']
  let output = $('#quantity')
  var itemID = output.data('item-uid')
  var count = 1

  $(qCon[0]).on('click', function(){
    if(count < 10) {
      count = count+1
    }
    output.val(count)
  })

  $(qCon[1]).on('click', function(){
    if(count > 1) {
      count = count-1
    }
    output.val(count)
  })

  $('.btn-back').on('click', function(){
    location.href = '?page=home'
  })

  $('.btn-checkout').on('click', function(){
    Swal.fire({
      text: "Order confirmed!",
      icon: 'success',
      confirmButtonColor: '#3085d6',
    }).then(res=>{
      location.href = '?page=home'
    })
  })
</script>