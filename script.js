var cart = []


function prework(){
    var preWorkout = [
        {name: "MUSCLE ASYLUM F9 pre-workout (500g)", price:  "&#x20B9; 1,249", crossprice:"1,599", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.30.02 PM.jpeg"},
        {name: "BIG MUSCLES NUTRITION freak (500g)", price: "&#x20B9; 1,149", crossprice:"1,499", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.30.26 PM.jpeg"},
        {name: "GNC PRO performance pre-workout (500g)", price: "&#x20B9; 1,249", crossprice:"1,499", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.31.01 PM.jpeg"},
        {name: "BIG MUSCLE NUTRITION Karnage (500g)", price: "&#x20B9; 1,349" , crossprice:"1,599", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.31.44 PM.jpeg"},
        {name: "MUSCLE BLAZE pre-workout extreme (500g)", price: "&#x20B9; 1,599", crossprice:"2099", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.32.21 PM.jpeg"},
        {name: "WELLCORE warrior pre-workout (500g)", price: "&#x20B9; 1,049", crossprice:"1,399", image: "assets/preworkout/WhatsApp Image 2024-04-30 at 2.33.01 PM.jpeg"},
        
    
    ]
    
    clutter = ""
    preWorkout.forEach(function(image, index){
        clutter += `<div class="item">
        <div class="item-img">
            <img src="${image.image}" alt="">
        </div>
        <h2>${image.name}</h2>
        <h3>${image.price} <i>${image.crossprice}</i></h3>
        <div data-index="${index}" class="btn pre-workout">
            <h4 data-index="${index}" class="pre-workout">Add to Cart</h4>
        </div>
    </div>`
    
     document.querySelector(".pre-workout-items").innerHTML = clutter
    })
    document.querySelector("#pre-workout").addEventListener("click", function(dets){
        if(dets.target.classList.contains('pre-workout')){
            cart.push(preWorkout[dets.target.dataset.index])
            // console.log(dets.target.dataset.index)
        }
    })
}
function creat(){
    var creatine = [
        {name: "WELLCORE creatine monohydrate (100g)", price: "&#x20B9; 499", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.16.05 PM.jpeg"},
        {name: "AVVATAR micronized creatine monohydrate (100g)", price: "&#x20B9; 499", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.16.51 PM.jpeg"},
        {name: "NAKPRO creatine monohydrate (100g) ", price: "&#x20B9; 399", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.17.30 PM.jpeg"},
        {name: "MUSCLE BLAZE CREAMP creatine monohydrate (100g) ", price: "&#x20B9; 699", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.18.17 PM.jpeg"},
        {name: "NUTRABAY creatine (100g)", price: "&#x20B9; 356", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.19.11 PM.jpeg"},
        {name: "BIG MUSCLES creatine (100g)", price: "&#x20B9; 499", image: "assets/creatine/WhatsApp Image 2024-04-30 at 2.19.47 PM.jpeg"},
    
    ]
    
    clutter = ""
    creatine.forEach(function(image, index){
        clutter += `<div class="item">
        <div class="item-img">
            <img src="${image.image}" alt="">
        </div>
        <h2>${image.name}</h2>
        <h3>${image.price} <i>${image.crossprice}</i></h3>
        <div data-index="${index}" class="btn creatine-powder">
            <h4 data-index="${index}" class="creatine-powder">Add to Cart</h4>
        </div>
    </div>`
    
     document.querySelector(".creatine-items").innerHTML = clutter
    })
    document.querySelector("#creatine").addEventListener("click", function(dets){
        if(dets.target.classList.contains('creatine-powder')){
            cart.push(creatine[dets.target.dataset.index])
            // console.log(dets.target.dataset.index)
        }
    })
}
function wheyProtein(){
    var whey = [
        {name: "BIG MUSCLES gold whey (1kg) ", price:  "&#x20B9; 2,349", crossprice:"2,599", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.22.51 PM.jpeg"},
        {name: "optimum nutrition gold standard whey (1kg) ", price: "&#x20B9; 1,989", crossprice:"2,199", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.23.24 PM.jpeg"},
        {name: "MUSCLE BLAZE raw whey protein (1kg)", price: "&#x20B9; 2,549", crossprice:"2,999", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.23.56 PM.jpeg"},
        {name: "avvatar whey protein (1kg)", price: "&#x20B9; 2,159" , crossprice:"2,599", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.24.25 PM.jpeg"},
        {name: "GNC PRO 100% whey (1kg )", price: "&#x20B9; 1,799", crossprice:"2,099", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.24.57 PM.jpeg"},
        {name: "FUEL ONE whey max (1kg)", price: "&#x20B9; 1,699", crossprice:"1,899", image: "assets/whey/WhatsApp Image 2024-04-30 at 2.25.24 PM.jpeg"},
    
    ]
    
    clutter = ""
    whey.forEach(function(image, index){
        clutter += `<div class="item">
        <div class="item-img">
            <img src="${image.image}" alt="">
        </div>
        <h2>${image.name}</h2>
        <h3>${image.price} <i>${image.crossprice}</i></h3>
        <div data-index="${index}" class="btn whey-workout">
            <h4 data-index="${index}" class="whey-workout">Add to Cart</h4>
        </div>
    </div>`
    
     document.querySelector(".whey-items").innerHTML = clutter
    })
    document.querySelector("#whey").addEventListener("click", function(dets){
        if(dets.target.classList.contains('whey-workout')){
            cart.push(whey[dets.target.dataset.index])
            // console.log(dets.target.dataset.index)
        }
    })
}
function bcaaPowder(){
    var bcaa = [
        {name: "XTEND BCAA (1kg) ", price:  "&#x20B9; 1,499", crossprice:"1,999", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.11.43 PM.jpeg"},
        {name: "GNC Gold Series BCAA (1kg)", price: "&#x20B9; 1,799", crossprice:"2,499", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.12.20 PM.jpeg"},
        {name: "NUTRABAY Gold BCAA(1kg)", price: "&#x20B9; 1,599", crossprice:"1,899", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.13.18 PM.jpeg"},
        {name: "BIG MUSCLES NUTRITION BCAA (1kg)", price: "&#x20B9; 1,649" , crossprice:"1,899", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.13.51 PM.jpeg"},
        {name: "MUSCLE BLAZE BCAA pro (1kg)", price: "&#x20B9; 1,999", crossprice:"2099", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.14.20 PM.jpeg"},
        {name: "Optimum nutrition BCAA(1kg) ", price: "&#x20B9; 1,756", crossprice:"1,999", image: "assets/bcaa/WhatsApp Image 2024-04-30 at 2.15.05 PM.jpeg"},
        
    
    ]
    
    clutter = ""
    bcaa.forEach(function(image, index){
        clutter += `<div class="item">
        <div class="item-img">
            <img src="${image.image}" alt="">
        </div>
        <h2>${image.name}</h2>
        <h3>${image.price} <i>${image.crossprice}</i></h3>
        <div data-index="${index}" class="btn bcaa">
            <h4 data-index="${index}" class="bcaa">Add to Cart</h4>
        </div>
    </div>`
    
     document.querySelector(".bcaa-item").innerHTML = clutter
    })
    document.querySelector("#bcaa").addEventListener("click", function(dets){
        if(dets.target.classList.contains('bcaa')){
            cart.push(bcaa[dets.target.dataset.index])
            // console.log(dets.target.dataset.index)
        }
    })
}
function weightGainer(){
    var weightgain = [
        {name: "NUTRELA weight gain (1kg)", price:  "&#x20B9; 1,299", crossprice:"1,599", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.26.14 PM.jpeg"},
        {name: "BOLT mass gainer (1kg)", price: "&#x20B9; 1,697", crossprice:"1,799", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.26.35 PM.jpeg"},
        {name: "BIG MUSCLES NUTRITION real mass gainer (1kg)", price: "&#x20B9; 1,899", crossprice:"1,999", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.27.02 PM.jpeg"},
        {name: "OPTIMUM NUTRITION serious mass (1kg)", price: "&#x20B9; 1,899" , crossprice:"1,999", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.27.32 PM.jpeg"},
        {name: "MUSCLE BLAZE weight gainer (1kg) ", price: "&#x20B9; 2,159", crossprice:"2599", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.28.02 PM.jpeg"},
        {name: "GNC PRO weight gainer (1kg)", price: "&#x20B9; 1,659", crossprice:"1,899", image: "assets/weight/WhatsApp Image 2024-04-30 at 2.28.44 PM.jpeg"},
        
    
    ]
    
    clutter = ""
    weightgain.forEach(function(image, index){
        clutter += `<div class="item">
        <div class="item-img">
            <img src="${image.image}" alt="">
        </div>
        <h2>${image.name}</h2>
        <h3>${image.price} <i>${image.crossprice}</i></h3>
        <div data-index="${index}" class="btn weight-gainer">
            <h4 data-index="${index}" class="weight-gainer">Add to Cart</h4>
        </div>
    </div>`
    
     document.querySelector(".weight-item").innerHTML = clutter
    })
    document.querySelector("#weight").addEventListener("click", function(dets){
        if(dets.target.classList.contains('weight-gainer')){
            cart.push(weightgain[dets.target.dataset.index])
            // console.log(dets.target.dataset.index)
        }
    })
}
prework()
creat()
wheyProtein()
bcaaPowder()
weightGainer()




var cart = []
function addToCart(){
    document.querySelector("#creatine").addEventListener("click", function(dets){
        if(dets.target.classList.contains('creatine')){
          
            cart.push(creatine[dets.target.dataset.index])
        }
    })  
}
addToCart()



function showCart(){
    var exp = document.querySelector("#expand")
document.querySelector("#close-cart").addEventListener("click", function(){
    exp.style.display = "none"
})
document.querySelector("#cart").addEventListener("click", function(){
    exp.style.display = "block";

    var clutter = "";
    cart.forEach(function(prod, index){
        clutter += `<div id="flex-item">
        <div class="cart-item">
             
            <img src="${prod.image}" alt="">
             <div class="item-dets">
             <h4>${prod.name}</h4>
             <h4>${prod.price}</h4>
             </div>
             
        </div>
         </div>`
    })
    document.querySelector(".cart-item").innerHTML = clutter
})

}

showCart()












document.querySelector("#order").addEventListener("click",function(){
    alert("order placed")
})


  
  
  
  
  
  
function register() {
    var regUsername = document.getElementById('regUsername').value;
    var regPassword = document.getElementById('regPassword').value;
  
    // Check if username already exists
    if (localStorage.getItem(regUsername)) {
        // alert("Username already exists!");
        // return;
        console.log("hi")
    }
  
    // Store username and password in local storage
    localStorage.setItem(regUsername, regPassword);
    alert("Registration successful!");
  }
  
  function login() {
    var loginUsername = document.getElementById('loginUsername').value;
    var loginPassword = document.getElementById('loginPassword').value;
  
    // Check if username exists
    if (!localStorage.getItem(loginUsername)) {
        alert("Username not found!");
        return;
    }
  
    // Check if password matches
    if (localStorage.getItem(loginUsername) === loginPassword) {
        alert("Login successful!");
        // document.getElementById("ac").style.display = "none";
        //     document.getElementById("main").style.display = "block";
        setTimeout(function() {
            document.getElementById("ac").style.display = "none";
            document.getElementById("main").style.display = "block";
        }, 2000);
    } else {
        alert("Incorrect password!");
    }
  }
  
  const loginText = document.querySelector(".title-text .login");
  const loginForm = document.querySelector("form.login");
  const loginBtn = document.querySelector("label.login");
  const signupBtn = document.querySelector("label.signup");
  const signupLink = document.querySelector("form .signup-link a");
  signupBtn.onclick = (()=>{
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
  });
  loginBtn.onclick = (()=>{
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
  });
  signupLink.onclick = (()=>{
    signupBtn.click();
    return false;
  });
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

