<div id="main">
   <div id="page1">
     <div id="nav">
       <img src="assets/WhatsApp_Image_2024-04-30_at_2.44.15_PM-removebg-preview.png" alt="" />
       <div class="nav-menu">
         <h3><a href="#page1">Home</a></h3>
         <h3><a href="#page2">Catagories</a></h3>
         <h3><a href="#page8">About</a></h3>
         <h3><a href="#footer">More+</a></h3>
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
       <a href="#page6" class="item1">
         <div class="cat-img">
           <img src="./assets/istockphoto-491851412-1024x1024-transformed.jpeg" alt="" />
         </div>
         <h2>BCAA</h2>
       </a>
       <a href="#page4" class="item1">
         <div class="cat-img">
           <img
             src="./assets/44.jpg"
             alt="" />
         </div>
         <h2>Creatine</h2>
       </a>
       <a href="#page5" class="item1">
         <div class="cat-img">
           <img src="./assets/22.jpg"
             alt="" />
         </div>
         <h2>Whey Protein</h2>
       </a>
       <a href="#page7" class="item1">
         <div class="cat-img">
           <img
             src="./assets/11.jpg"
             alt="" />
         </div>
         <h2>Weight Gainer</h2>
       </a>
       <a href="#page3" class="item1">
         <div class="cat-img">
           <img src="./assets/33.jpg" alt="" />
         </div>
         <h2>Pre workout</h2>
       </a>
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
          <a href="?page=details&item=<?php echo $row['id'] ?>" class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </a>
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
     <div class="sliderControls">
      <button id="leftBtn"><i class="ion ion-chevron-left"></i></button>
      <button id="rightBtn"><i class="ion ion-chevron-right"></i></button>
     </div>
   </div>
   <div id="page4">
     <h1>Creatine</h1>
     <div class="page4-scroll">
       <div class="creatine-items" id="creatine">
       <?php
        $creatine = $conn->query("SELECT * FROM product WHERE category = 1 ORDER BY id ASC");
        while($row = $creatine->fetch_assoc()):
        ?>
        <div class="item">
          <a href="?page=details&item=<?php echo $row['id'] ?>" class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </a>
          <h2 class="text-uppercase"><?php echo $row['name']?></h2>
          <h3><?php echo number_format($row['price'],2)?></h3>
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
     <div class="sliderControls">
      <button id="leftBtn"><i class="ion ion-chevron-left"></i></button>
      <button id="rightBtn"><i class="ion ion-chevron-right"></i></button>
     </div>
   </div>
   <div id="page5">
     <h1>Whey Protein</h1>
     <div class="page5-scroll">
       <div class="whey-items" id="whey">
       <?php
        $whey = $conn->query("SELECT * FROM product WHERE category = 2 ORDER BY id ASC");
        while($row = $whey->fetch_assoc()):
        ?>
        <div class="item">
          <a href="?page=details&item=<?php echo $row['id'] ?>" class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </a>
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
     <div class="sliderControls">
      <button id="leftBtn"><i class="ion ion-chevron-left"></i></button>
      <button id="rightBtn"><i class="ion ion-chevron-right"></i></button>
     </div>
   </div>
   <div id="page6">
     <h1>BCAA</h1>
     <div class="page6-scroll">
       <div class="bcaa-item" id="bcaa">
       <?php
        $bcaa = $conn->query("SELECT * FROM product WHERE category = 3 ORDER BY id ASC");
        while($row = $bcaa->fetch_assoc()):
        ?>
        <div class="item">
          <a href="?page=details&item=<?php echo $row['id'] ?>" class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </a>
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
     <div class="sliderControls">
      <button id="leftBtn"><i class="ion ion-chevron-left"></i></button>
      <button id="rightBtn"><i class="ion ion-chevron-right"></i></button>
     </div>
   </div>
   <div id="page7">
     <h1>Weight Gainer</h1>
     <div class="page7-scroll">
       <div class="weight-item" id="weight">
       <?php
        $weight = $conn->query("SELECT * FROM product WHERE category = 4 ORDER BY id ASC");
        while($row = $weight->fetch_assoc()):
        ?>
        <div class="item">
          <a href="?page=details&item=<?php echo $row['id'] ?>" class="item-img">
            <img src="<?php echo $row['image'] ?>" alt=""/>
          </a>
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
     <div class="sliderControls">
      <button id="leftBtn"><i class="ion ion-chevron-left"></i></button>
      <button id="rightBtn"><i class="ion ion-chevron-right"></i></button>
     </div>
   </div>
   <div id="page8">
     <img src="./assets/WhatsApp_Image_2024-04-30_at_2.44.15_PM-removebg-preview.png" alt="">
     <p>Welcome to INDIGAIN ,where we’re dedicated to providing premium supplements for your health and wellness needs.
       Founded in 2024,our journey began with a passion for promoting healthy lifestyles. We believe in transparency
       and quality, offering a curated selection of supplements backed by rigorous testing and certifications. Our
       customer-focused approach ensures that you receive exceptional service every step of the way. Explore our range
       of supplements and join us in our mission to support your wellness journey</p>
   </div>
 </div>
 <?php include './footer.php' ?>

 <script src="./js/main.js"></script>