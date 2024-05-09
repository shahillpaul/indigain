 <div id="ac">
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
  </div>

  <div id="main">
    <div id="page1">
      <div id="nav">
        <img src="assets/WhatsApp_Image_2024-04-30_at_2.44.15_PM-removebg-preview.png" alt="" />
        <div class="nav-menu">
          <h3>Home</h3>
          <h3>Catagories</h3>
          <h3>About</h3>
          <h3>More+</h3>
        </div>
        <div class="nav-icon">
          <i class="ri-search-line"></i>
          <i class="ri-shopping-cart-fill" id="cart"></i>
          <i class="ri-user-line"></i>
        </div>

        <div class="cart-exp" id="expand">
          <div class="cross" id="close-cart"></div>

          <div class="cart-item">
            <img src="assets/preworkout/WhatsApp Image 2024-04-30 at 2.31.01 PM.jpeg" alt="">
            <h4>Name</h4>
            <h4>Price</h4>

          </div>
          <div class="btn-buy" id="order">Order Now</div>
        </div>
      </div>
      <div class="landing">
        <div class="heading">
          <h1>Unlock Your Potential with Indigain</h1>
        </div>
        <div class="heading">
          <h1>
            Your Ultimate Destination for Protein, Creatine, Pre-Workout and
            Weight Gainer
          </h1>
        </div>
        <h3>We believe in transpary and quality</h3>
        <div class="btn" id="btn" data-index="${index}">
          <h4>Start Shopping</h4>
        </div>
        <!-- <div class="vid-scroll">
                    <div class="vids" id="vids">

                       </div>
                </div> -->
      </div>
    </div>
    <div id="page2">
      <h1>Catagories</h1>
      <div class="cat-item">
        <div class="item1">
          <div class="cat-img">
            <img src="assets/istockphoto-491851412-1024x1024-transformed.jpeg" alt="" />
          </div>
          <h2>BCAA</h2>
        </div>
        <div class="item1">
          <div class="cat-img">
            <img
              src="https://maskblogspot.com/wp-content/uploads/2020/04/Top-Full-Shoulder-Workouts-or-Exercises-in-Gym.jpg"
              alt="" />
          </div>
          <h2>Creatine</h2>
        </div>
        <div class="item1">
          <div class="cat-img">
            <img src="https://img.freepik.com/premium-photo/bodybuilder-doing-ez-bar-bicep-curls_754108-1222.jpg"
              alt="" />
          </div>
          <h2>Whey Protein</h2>
        </div>
        <div class="item1">
          <div class="cat-img">
            <img
              src="https://www.wallpapertip.com/wmimgs/178-1782701_photo-wallpaper-man-workout-gym-working-man-work.jpg"
              alt="" />
          </div>
          <h2>Weight Gainer</h2>
        </div>
        <div class="item1">
          <div class="cat-img">
            <img src="https://www.womenfitness.net/wp/wp-content/uploads/2019/03/hiit1-1000x667.jpg" alt="" />
          </div>
          <h2>Pre workout</h2>
        </div>
      </div>
    </div>
    <div id="page3">
      <h1>Pre Workout</h1>
      <div class="page3-scroll">
        <div class="pre-workout-items" id="pre-workout"></div>
      </div>
    </div>
    <div id="page4">
      <h1>Creatine</h1>
      <div class="page4-scroll">
        <div class="creatine-items" id="creatine"></div>
      </div>
    </div>
    <div id="page5">
      <h1>Whey Protein</h1>
      <div class="page5-scroll">
        <div class="whey-items" id="whey"></div>
      </div>
    </div>
    <div id="page6">
      <h1>BCAA</h1>
      <div class="page6-scroll">
        <div class="bcaa-item" id="bcaa"></div>
      </div>
    </div>
    <div id="page7">
      <h1>Weight Gainer</h1>
      <div class="page7-scroll">
        <div class="weight-item" id="weight"></div>
      </div>
    </div>
    <div id="page8">
      <img src="/assets/WhatsApp_Image_2024-04-30_at_2.44.15_PM-removebg-preview.png" alt="">
      <p>Welcome to INDIGAIN ,where we’re dedicated to providing premium supplements for your health and wellness needs.
        Founded in 2024,our journey began with a passion for promoting healthy lifestyles. We believe in transparency
        and quality, offering a curated selection of supplements backed by rigorous testing and certifications. Our
        customer-focused approach ensures that you receive exceptional service every step of the way. Explore our range
        of supplements and join us in our mission to support your wellness journey</p>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <!-- <div class="footer-col">
              <h4>online shop</h4>
              <ul>
                <li><a href="#">watch</a></li>
                <li><a href="#">bag</a></li>
                <li><a href="#">shoes</a></li>
                <li><a href="#">dress</a></li>
              </ul>
            </div> -->
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <script src="jquery.min.js"></script>
  <script src="ss.js"></script>