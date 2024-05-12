<?php
    if(isset($_SESSION['login_id']))
    header('location: ?page=home');
  ?>
<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css" />
<style>
  .card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .card.signin {
    width: 30vw;
    height: 50vh;
  }

  .card.signup {
    width: 65vw;
    height: 65vh;
  }

  .card.signup-account {
    width: 30vw;
    height: 50vh;
  }

  .card-body {
    position: relative;
    overflow-y: auto;
    overflow-x: hidden;
  }

  .card h4 {
    margin-bottom: 40px;
  }

  .form-group {
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
  }

  .buttons .btn {
    width: 20%;
  }

  .signup-account .btn {
    width: 40%;
  }
</style>

<div class=" container p-2">

  <div class="d-flex option-control justify-content-center gap-2 pt-3">
    <!-- signin -->
    <div>
      <button class="btn btn-dark" id="signin-btn">Signin</button>
    </div>

    <!-- signup -->
    <div>
      <button class="btn btn-outline-dark" id="signup-btn">Signup</button>
    </div>
  </div>

  <!-- signin -->
  <div class="card signin shadow">
    <div class="card-body">
      <h4>Signin</h4>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <form id="signin-form">
          <input type="text" placeholder="Username" name="username" class="form-control" />
          <input type="text" placeholder="Password" name="password" class="form-control" />
          <div class="d-flex justify-content-center mx-5">
            <button class="btn btn-outline-dark mt-4" id="signin-cmd">Signin</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- signup -->
  <div class="card signup shadow visually-hidden">
    <div class="card-body">
      <h4>Signup</h4>
      <div class="">
        <form id="signup-form-1" class="">
          <div class="form-group">
            <input type="text" placeholder="First name" name="first_name" class="form-control" />
            <input type="text" placeholder="Last name" name="last_name" class="form-control" />
          </div>
          <div class="form-group">
            <input type="text" placeholder="Email" name="email" class="form-control" />
            <input type="text" placeholder="Phone" name="phone" class="form-control" />
          </div>
          <div class="form-group">
            <input type="text" placeholder="State" name="state" class="form-control" />
            <input type="text" placeholder="City" name="city" class="form-control" />
            <input type="text" placeholder="Postal code" name="pin" class="form-control" />
          </div>
          <div class="d-flex justify-content-center buttons">
            <button class="btn btn-outline-dark" id="next-cmd">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card signup-account shadow visually-hidden">
    <div class="card-body">
      <h4>Set up account</h4>
      <div>
        <form id="signup-form-2">
          <div class="form-group flex-column">
            <input type="text" placeholder="Username" name="username" class="form-control" />
            <input type="text" placeholder="Password" name="password" class="form-control" />
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-outline-dark" id="signup-cmd">Signup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  let methodBtnContainer = $('.option-control')
  let methodBtns = ['#signin-btn', '#signup-btn']
  let methodCards = ['.signin', '.signup', '.signup-account']
  let methodForms = ['#signin-form', '#signup-form-1', '#signup-form-2']
  let vh = 'visually-hidden'
  let bto = 'btn-outline-dark'
  let btd = 'btn-dark'
  let cmdBtns = ['#signin-cmd','#next-cmd','#signup-cmd']


  // signin form
  $(methodForms[0]).on('submit', function(e){
    e.preventDefault()
    let data = $(this).serialize()
    console.log(data)
    $.ajax({
      url: `./php/ajax.php?a=signin`,
      data: data,
      method: 'POST',
      success: function(res){
        console.log(res)
        if(res){
          location.href = '?page=home'
        }
      },
      error: function(err){
        console.log(err)
      }
    })
  })

  // signup form 1
  $(methodForms[1]).on('submit', function(e){
    e.preventDefault()
    // show form-2 and hide this form
    $(methodCards[2]).removeClass(vh)
    $(methodCards[1]).addClass(vh)
    methodBtnContainer.addClass(vh)

    let data = $(this).serialize()
    console.log(data)
    // sendRequest('signup-1',data)
    $.ajax({
      url: `./php/ajax.php?a=signup_1`,
      data: data,
      method: 'POST',
      success: function(res){
        console.log(res)
        // location.href = '?page=home'
      },
      error: function(err){
        console.log(err)
      }
    })
  })

  // signup form 2
  $(methodForms[2]).on('submit', function(e){
    e.preventDefault()
    let data = $(this).serialize()
    console.log(data)
    // sendRequest('signup-2',data)
    $.ajax({
      url: `./php/ajax.php?a=signup_2`,
      data: data,
      method: 'POST',
      success: function(res){
        console.log(res)
        if(res){
          location.href = '?page=home'
        }
      },
      error: function(err){
        console.log(err)
      }
    })
  })

  // signin option
  $(methodBtns[0]).on('click', function () {
    $(this).removeClass(bto).addClass(btd)
    $(methodBtns[1]).removeClass(btd).addClass(bto)
    $(methodCards[0]).removeClass(vh)
    $(methodCards[1]).addClass(vh)
  })

  // signup option
  $(methodBtns[1]).on('click', function () {
    $(this).removeClass(bto).addClass(btd)
    $(methodBtns[0]).removeClass(btd).addClass(bto)
    $(methodCards[1]).removeClass(vh)
    $(methodCards[0]).addClass(vh)
  })

  function sendRequest (cmd, data) {
    $.ajax({
      url: `./php/ajax.php?a=${cmd}`,
      data: data,
      method: 'POST',
      success: function(res){
        console.log(res)
        // location.href = '?page=home'
      },
      error: function(err){
        console.log(err)
      }
    })
  }
</script>