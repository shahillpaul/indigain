<div id="ac" class="vh">
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