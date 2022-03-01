
<div class="first_header" id="bool">
  <div class="header_wrapper">
    <a href="index.php" class="text-white"><img id="logo_img" src="system_image/shop2.png" alt=""></a>
    <div id="user_mini_box" class="mini_box user_mini_box"  >
      <p><a class="premium btn-sm btn btn-outline-warning border-2" href="premium.php">Premium Plan</a></p>
      <?php
            if(isset($_GET['logout'])){
              session_destroy();
              unset($_SESSION['id']);
              unset($_SESSION['username']);
              unset($_SESSION['email']);
              unset($_SESSION['verified']);
              header('location: index.php');
              exit();
            }
            if(isset($_SESSION['username'])){
              $name = $_SESSION['username'];
              echo "
                <div id=\"user_product\" style=\"margin-top: -13px; z-index: 5;\" class=\"flex-shrink-0 dropdown\">
                  <a href=\"#\" class=\"d-block link-light text-decoration-none dropdown-toggle\" id=\"dropdownUser2\"
                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"system_image/user.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\" />
                  </a>
                  <ul style=\"z-index: 1; color: white;\" class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
                    <li><a class=\"dropdown-item text-primary\" style=\"font-weight: 600;\" href=\"#\">$name</a></li>
                    <li><a class=\"dropdown-item\" href=\"change_password.php\">Change Password</a></li>
                    <li><a class=\"dropdown-item\" href=\"insert_product.php\">Post New Add</a></li>
                    <li><a class=\"dropdown-item\" href=\"update_ads.php\">View Your Ads</a></li>
                    <li>
                      <hr class=\"dropdown-divider\" />
                    </li>
                    <li><a class=\"dropdown-item\" style=\"z-index: 600;\"  href=\"index.php?logout=1\">Sign out</a></li>
                  </ul>
                </div>
              ";
            }
            else{
              echo"<p id=\"\" class=\" btn-outline-transparent\"><a id=\"product_review_class\" style=\"font-weight: 500;\" class=\"signUp btn-outline-transparent text-white border-0\" href=\"register.php\">Sign Up</a></p>";
            }

          ?>

    </div>
  </div>
</div>
<!----------Navigation Section-------------->
<nav id="navigate-bar" style="z-index: ;" class="">
  <div class="wrapper">
    <input type="radio" name="slide" id="menu-btn" />
    <input type="radio" name="slide" id="cancel-btn" />
    <ul style="z-index: 20" class="nav-links">
      <label for="cancel-btn" style="color: white" class="btn cancel-btn"><i class="fas fa-times"></i></label>
      <li><a href="index.php">Home</a></li>
      <li>
        <a class="desktop-item" href="category.php">Category<i class="fas fa-caret-down"></i></a>
        <input type="checkbox" id="showMega" />
        <label id="boolover" style="position: relative; font-weight: 600" class="mobile-item"
          for="showMega">Category<span class="create_second" style="font-weight: 600" id="down_1">></span></label>
        <div class="mega-box">
          <div class="content">
            <div class="row-1">
              <header id="header-title" class="header-title all_category">
                <a style="font-weight: 500;" href="category.php">All Categories</a>
              </header>
              <header id="header-title" class="header-title">
                <i style="font-size: 18px; margin-right: 5px;" class="fas fa-wrench"></i>
                Electronics
              </header>
              <ul class="mega-links">
                <li><a href="phone_tablet.php">Phone & Tablet</a></li>
                <li><a href="computers.php">Computers</a></li>
                <li><a href="tv_video.php">TV & Videos</a></li>
                <li><a href="video_games.php">Video Games</a></li>
                <li><a href="electronics_access.php">Elec Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                <i style="font-size: 18px; margin-right: 5px;" class="fas fa-car"></i>
                Vehicles
              </header>
              <ul class="mega-links">
                <li><a href="vehicles.php">New Vehicles</a></li>
                <li><a href="second_hand.php">Second Hand</a></li>
                <li><a href="bicycles_bikes.php">Bicycles & Bikes</a></li>
                <li><a href="other_vehicles.php">Other Vehicles</a></li>
                <li><a href="vechicles_access">Vec. Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                <i style="font-size: 18px; margin-right: 5px;" class="fas fa-hat-cowboy-side"></i>
                Dress & Fashion
              </header>
              <ul class="mega-links">
                <li><a href="men_fashion.php">Men Fashion</a></li>
                <li><a href="women_fashion.php">Women Fashion</a></li>
                <li><a href="children_fashion.php">Children Fashion</a></li>
                <li><a href="bags_shoes.php">Bags & Shoes</a></li>
                <li><a href="fashion_access.php">Fas. Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                <i style="font-size: 18px; margin-right: 5px;" class="fas fa-football-ball"></i>
                Leisure
              </header>
              <ul class="mega-links">
                <li><a href="toys_film_books.php">Toys, Film, Books</a></li>
                <li><a href="sport_fitness">Sport & Fitness</a></li>
                <li><a href="music_instruments.php">Music Instruments</a></li>
                <li><a href="art_manga.php">Art & Manga</a></li>
                <li><a href="voyage_tourism.php">Voyage & Tourism</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                <i style="font-size: 18px; margin-right: 5px;" class="fas fa-home"></i>
                House Stuffs
              </header>
              <ul class="mega-links">
                <li><a href="decoration.php">Decoration</a></li>
                <li><a href="house_pets.php">House Pets</a></li>
                <li><a href="home_appliance.php">Home Appliance</a></li>
                <li><a href="furnitures.php">Furnitures</a></li>
                <li><a href="home_access.php">Other Accessories</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>
      <li style="display: none;">
        <a class="desktop-item" href="category.html">More<i class="fas fa-caret-down"></i></a>
        <input type="checkbox" id="showDrop" />
        <label id="crossover" style="position: relative; font-weight: 600" class="mobile-item" for="showDrop">More<span
            class="create_first" style="font-weight: 600" id="down_1">></span></label>
        <div class="mega-box drop-menu">
          <div class="content">
            <div class="row-1">
              <header id="header-title" class="header-title all_category">
                <a style="font-weight: 500;" href="category.html">All Categories</a>
              </header>
              <header id="header-title" class="header-title">
                co
              </header>
              <ul class="mega-links">
                <li><a href="">Phone & Tablet</a></li>
                <li><a href="">Computers</a></li>
                <li><a href="">TV & Videos</a></li>
                <li><a href="">Video Games</a></li>
                <li><a href="">Tech Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                Vehicles
              </header>
              <ul class="mega-links">
                <li><a href="">New Vehicles</a></li>
                <li><a href="">Second Hand</a></li>
                <li><a href="">Bicycles & Bikes</a></li>
                <li><a href="">Other Vehicles</a></li>
                <li><a href="">Mac. Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                Dress & Fashion
              </header>
              <ul class="mega-links">
                <li><a href="">Men Fashion</a></li>
                <li><a href="">Women Fashion</a></li>
                <li><a href="">Children Fashion</a></li>
                <li><a href="">Bags & Shoes</a></li>
                <li><a href="">Fas. Accessories</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                Leisure
              </header>
              <ul class="mega-links">
                <li><a href="">Toys, Film, Books</a></li>
                <li><a href="">Sport & Fitness</a></li>
                <li><a href="">Music Instruments</a></li>
                <li><a href="">Art & Manga</a></li>
                <li><a href="">Voyage & Tourism</a></li>
              </ul>
            </div>
            <div class="row-1">
              <header id="header-title" class="header-title">
                House Stuffs
              </header>
              <ul class="mega-links">
                <li><a href="">Decoration</a></li>
                <li><a href="">House Pets</a></li>
                <li><a href="">Home Appliance</a></li>
                <li><a href="">Furnitures</a></li>
                <li><a href="">Other Accessories</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>
      <li><a style="color: rgb(238, 173, 8);" href="premium_page.php">Premium</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact_me.php">Contact</a></li>
    </ul>
    <label for="menu-btn" class="btn menu-btn text-white"><i class="fas fa-bars"></i></label>
    
    <div id="product_search_bar" class="boom">
      <form autocomplete="off" method="POST" action="search_result.php" style="display: flex; padding: 0px" class="col-12 col-lg-auto mt-1 mb-lg-0 me-lg-3">
        <input style="display: block; margin-right: 10px" name="search_content" type="search" class="form-control mr-2"
          placeholder="Search..." aria-label="Search" required/>
        <button style="display: block; padding: 2px 12px; font-size: 16px" name="search" type="submit"
          class="btn btn-outline-warning">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </div>
</nav>