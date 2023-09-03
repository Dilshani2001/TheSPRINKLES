<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="dash.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/logo.png" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="dash.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="index.html">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Shop</span>
        </a></li>
         <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1></h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Cart</h3>
          
          <a href="cart.html"><button>Info</button></a>
        </div>
        <div class="card">
          <i class="fab fa-wordpress"></i>
          <h3>Payment</h3>
          
          <button>Info</button>
        </div>
        <div class="card">
          <i class="fas fa-palette"></i>
          <h3>Orders</h3>
          
            <button>Info</button>
        </div>
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>Checkout</h3>
          
            <a href="checkout.html"><button>Info</button></a>
        </div>
      </div>

      <section class="main-course">
        <h1>Orders</h1>
        <div class="course-box">
          <ul>
            <li class="active">Pending Orders</li>
            <li>Delivery</li>
            <li>Response</li>
            
          </ul>
          <div class="course">
            <div class="box">
              <h3>Birthday Cake</h3>
			  <p>LKR 2500.00</p>
              <img src="img/icon01.png" align="right"><br>
              <button>Pending</button>
              
            </div>
            <div class="box">
                <h3>Anniversary Flower Bouquet</h3>
			  <p>LKR 6500.00</p>
              <img src="img/icon02.png" align="right"><br>
              <button>Pending</button>
            </div>
            <div class="box">
                <h3>Graduation Teddy</h3>
			  <p>LKR 8500.00</p>
              <img src="img/icon03.png" align="right"><br>
              <button>Pending</button>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>
