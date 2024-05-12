<link rel="stylesheet" href="./lib/bootstrap/dist/css/bootstrap.min.css" />

<!-- <div id="ac">
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Register Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Register</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" class="login">
            <input type="text" id="loginUsername" placeholder="Username">
            <input type="password" id="loginPassword" placeholder="Password">
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" onclick="login()">
            </div>
          </form>
          <form action="#" class="signup">
            <input type="text" id="regUsername" placeholder="Username">
            <input type="password" id="regPassword" placeholder="Password">
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Register" onclick="register()">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

  <style>
  .card.signin {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30vw;
    height: 40vh;
  }

  .card-body {
    position: relative;
    overflow-y: auto;
    overflow-x: hidden;
  }

  </style>
  <div class=" container p-5">

  <div class="d-flex option-control justify-content-center gap-2 py-5">
    <!-- signin -->
    <div>
      <button class="btn btn-dark" id="signin-btn">Signin</button>
    </div>

    <!-- signup -->
    <div>
    <button class="btn btn-dark" id="signup-btn">Signup</button>
    </div>
  </div>

  <!-- signin -->
    <div class="card signin shadow">
      <div class="card-body">
        <h4>Signin</h4>
        <div class="d-flex flex-column justify-content-center align-items-center">
          <form id="signin-form">
            <input type="text" placeholder="Username" name="username" class="form-control"/>
            <input type="text" placeholder="Password" name="password" class="form-control"/>
            <div class="d-flex justify-content-center mx-5">
              <button class="btn btn-dark">Signin</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- signup -->
    <!-- <div class="card">
      <div class="card-body">

      </div>
    </div>
  </div> -->