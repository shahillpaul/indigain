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
         <i class="ion ion-search"></i>
         <i class="ion ion-ios-cart" id="cart"></i>
         <i class="ion ion-person"></i>
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
       <div class="pre-workout-items" id="pre-workout">
        <?php
        $products = $conn->query("SELECT * FROM product WHERE category = 0 ORDER BY id ASC");
        while($row = $products->fetch_assoc()):
        ?>
        <div class="item">
          <div class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </div>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?> <i><?php echo number_format($row['cross_price'],2) ?></i></h3>
          <button data-index="<?php echo $row['id'] ?>" class="btn pre-workout"> 
          <h4 data-index="<?php echo $row['id'] ?>" class="pre-workout">
            Add to cart
          </h4>
          </button>
        </div>
        <?php
        endwhile;
        ?>
       </div>
     </div>
   </div>
   <div id="page4">
     <h1>Creatine</h1>
     <div class="page4-scroll">
       <div class="creatine-items" id="creatine">
       <?php
        $creatine = $conn->query("SELECT * FROM product WHERE category = 0 ORDER BY id ASC");
        while($row = $creatine->fetch_assoc()):
        ?>
        <div class="item">
          <div class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </div>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?> <i><?php echo number_format($row['cross_price'],2) ?></i></h3>
          <button data-index="<?php echo $row['id'] ?>" class="btn creatine-powder"> 
          <h4 data-index="<?php echo $row['id'] ?>" class="creatine-powder">
            Add to cart
          </h4>
          </button>
        </div>
        <?php
        endwhile;
        ?>
       </div>
     </div>
   </div>
   <div id="page5">
     <h1>Whey Protein</h1>
     <div class="page5-scroll">
       <div class="whey-items" id="whey">
       <?php
        $whey = $conn->query("SELECT * FROM product WHERE category = 0 ORDER BY id ASC");
        while($row = $whey->fetch_assoc()):
        ?>
        <div class="item">
          <div class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </div>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?> <i><?php echo number_format($row['cross_price'],2) ?></i></h3>
          <buutton data-index="<?php echo $row['id'] ?>" class="btn whey-workout"> 
          <h4 data-index="<?php echo $row['id'] ?>" class="whey-workout">
            Add to cart
          </h4>
          </buutton>
        </div>
        <?php
        endwhile;
        ?>
       </div>
     </div>
   </div>
   <div id="page6">
     <h1>BCAA</h1>
     <div class="page6-scroll">
       <div class="bcaa-item" id="bcaa">
       <?php
        $bcaa = $conn->query("SELECT * FROM product WHERE category = 0 ORDER BY id ASC");
        while($row = $bcaa->fetch_assoc()):
        ?>
        <div class="item">
          <div class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </div>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?> <i><?php echo number_format($row['cross_price'],2) ?></i></h3>
          <button data-index="<?php echo $row['id'] ?>" class="btn bcaa"> 
          <h4 data-index="<?php echo $row['id'] ?>" class="bcaa">
            Add to cart
          </h4>
          </button>
        </div>
        <?php
        endwhile;
        ?>
       </div>
     </div>
   </div>
   <div id="page7">
     <h1>Weight Gainer</h1>
     <div class="page7-scroll">
       <div class="weight-item" id="weight">
       <?php
        $weight = $conn->query("SELECT * FROM product WHERE category = 0 ORDER BY id ASC");
        while($row = $weight->fetch_assoc()):
        ?>
        <div class="item">
          <div class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </div>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?> <i><?php echo number_format($row['cross_price'],2) ?></i></h3>
          <button data-index="<?php echo $row['id'] ?>" class="btn weight-gainer"> 
          <h4 data-index="<?php echo $row['id'] ?>" class="weight-gainer">
            Add to cart
          </h4>
          </button>
        </div>
        <?php
        endwhile;
        ?>
       </div>
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
 </div>

 <script src="./js/main.js"></script>