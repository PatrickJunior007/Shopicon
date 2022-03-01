<?php
  function premiumcard($productimg, $productname, $productprice, $productdate, $productlocation, $productid){
    $element= "   
      <div class=\"col-6 col-lg-4 grid-item px-2\">
        <div id=\"premium_bundle\" class=\"card \">
          <a style=\"text-decoration: none\" href=\"product.php?product_review=$productname\">
            <div class=\"card-head\">
              <div style=\"
                    background-image: url(user_image/$productimg);
                  \" class=\"img-bkg\"></div>
            </div>
            <div class=\"product_info\">
              <div class=\"\">
                <p class=\"premium_name product_name\" style=\"color: #969696\">
                  $productname
                </p>
                <div class=\"premium_price product_price text-right\">
                $productprice<span>CFA</span>
                </div>
              </div>

              <div class=\"\" style=\"float: right\">
                <div class=\"rating\">
                  <i style=\"\" class=\"iconic fas fa-star\"></i>
                </div>

                <div class=\"product_view_details\">
                  <div class=\"premium_category product_category\">$productdate </div>
                  <div class=\"location_area\"> $productlocation</div>
                  <input type=\"hidden\" value=\"$productid\"/>
                </div>

              </div>
            </div>
          </a>
        </div>
      </div>
   ";
   echo $element;
  }

  function normalcard( $productimg, $productname, $productprice, $productdate, $productlocation, $productid){
    $element= "   
      <div class=\"col-6 col-lg-4 px-2 grid-item\">
        <div class=\"card\">
          <a style=\"text-decoration: none\" href=\"product.php?product_review=$productname\">
            <div class=\"card-head\">
              <div style=\"
                    background-image: url(user_image/$productimg);
                  \" class=\"img-bkg\"></div>
            </div>
            <div class=\"product_info\">
              <div class=\"\">
                <p class=\"product_name\" style=\"color: #969696\">
                  $productname
                </p>
                <div class=\"product_price text-right\">
                  $productprice<span>CFA</span>
                </div>
              </div>

              <div class=\"product_view_details\" style=\"float: right\">
                <div class=\"product_category\">$productdate</div>
                <div class=\"location_area\">$productlocation</div>
                <input type=\"hidden\" value=\"$productid\"/>
              </div>
            </div>
          </a>
        </div>
      </div>
   ";
   echo $element;
  }

  //Search Result Components
  function searchResult( $productimg, $productname, $productdate, $productlocation, $productid, $productprice ){
    $element = "
    <form action=\"details.php\" method=\"post\">
      <div class=\"game\">
        <a style=\"text-decoration: none; color: inherit;\" href=\"product.php?product_review=$productname\">
          <div class=\"game_bg\">
            <div class=\"game_photo\">
              <img src=\"user_image/$productimg\" alt=\"\">
            </div>
            <div class=\"game_message\">
              <h4 class=\"text-primary\">$productname</h4>
              <p style=\"font-weight: 600;\" class=\"message\"><span style=\"font-weight: 500;\">Posted On: </span>$productdate</p>
              <p class=\"message location\"><span style=\"font-weight: 500;\">In: </span>$productlocation</p>
              <input type='hidden' name='product_id' value='$productid'>
              <p class=\"price\">Price: <span style=\"font-weight: 600;\">$productprice</span>FCFA</p>
            </div>
          </div>
        </a>
      </div>
    </form>";
    echo $element;
  }
  //Search Result Components
    function premiumResult($productimg, $productname, $productdate, $productlocation, $productid, $productprice ){
      $element = "
      <form action=\"details.php\" method=\"post\">
        <div class=\" game\" id=\"premium_game\">
          <a style=\"text-decoration: none; color: inherit;\" href=\"product.php?product_review=$productname\">
            <div class=\"game_bg\">
              <div class=\"game_photo\">
                <img src=\"user_image/$productimg\" alt=\"\">
              </div>
              <div class=\"game_message\">
                <h4 class=\"\" id=\"premium_pack_name\">$productname</h4>
                <p style=\"font-weight: 600;\" class=\"message\"><span style=\"font-weight: 500;\">Posted On: </span>$productdate</p>
                <p class=\"message location\"><span style=\"font-weight: 500;\">In: </span>$productlocation</p>
                <i style=\"\" class=\"iconic fas fa-star rating_star\"></i>
                <input type='hidden' name='product_id' value='$productid'>
                <p class=\"price\">Price: <span style=\"font-weight: 600;\">$productprice</span>FCFA</p>
              </div>
            </div>
          </a>
        </div>
      </form>";
      echo $element;
  }

  function updateCard($productimg, $productname, $productprice, $productdate, $productlocation, $productid){
    $element= "   
      <div class=\"col-6 col-lg-4 px-2 grid-item\">
        <div class=\"card\">
          <a style=\"text-decoration: none\" href=\"product.php?product_review=$productname\">
            <div class=\"card-head\">
              <div style=\"
                    background-image: url(user_image/$productimg);
                  \" class=\"img-bkg\"></div>
            </div>
            <div class=\"product_info\">
              <div class=\"\">
                <p class=\"product_name\" style=\"color: #969696\">
                  $productname
                </p>
                <div class=\"product_price text-right\">
                  $productprice<span>CFA</span>
                </div>
              </div>

              <div class=\"product_view_details\" style=\"float: right\">
                <div class=\"product_category\">$productdate</div>
                <div class=\"location_area\">$productlocation</div>
                
              </div>
            </div>
          </a>
          <div class=\"edit_section\">
          <hr width=\"100%\" class=\"my-0\">
          <div class=\"col-md-12 mx-0 px-0\">
            <div class=\"row\">
  
            <div class=\"col-6 d-flex justify-content-center align-self-center\"
              style=\"border-right: 2px solid #d8d8d8;\">
              <button style=\"padding: 2px 0px;\" class=\"btn px-0 \"> <a href=\"delete_ads.php?deleteId=$productid \"><i class=\"fas fa-trash text-danger\"><span
                style=\"padding-left: 4px;\" id=\"update_btn\">Delete</span></i></a></button>

            </div>
  
              <div class=\"col-6  d-flex justify-content-center align-self-center\"
                style=\"border-right: 2px solid #d8d8d8;\"><button class=\"btn px-0 py-0\"> <a href=\"update_page.php?updateIdAd=$productid \"><i
                class=\"fas fa-edit text-success\"><span id=\"update_btn\" style=\"padding-left: 4px;\">Edit
                </span></i></a></button>
              </div>
              <hr width=\"100%\" class=\"my-0\">
              <div class=\"col-12 d-flex justify-content-center align-items-center my-2\">
                <button style=\"padding: 0px 0px;\" class=\"btn px-0 py-0\"> <a href=\"premium.php\"><i
                class=\"fas fa-rocket text-warning\"><span id=\"update_btn\" style=\"padding-left: 3px;\">Go Premium</span></i>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
   ";
   echo $element;
  }


  function pagination($productimg, $productname, $productprice, $productdate, $productlocation, $productid){
    $element= "
      <div class=\"d-flex justify-content-center\">
        <nav  id=\"containing \" aria-label=\"...\">
          <ul class=\"pagination table-dark\">
            <li  class=\"page-item disabled \">
              <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Previous</a>
            </li>
            <li  class=\"page-item bg-secondary\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item active\" aria-current=\"page\">
              <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
              <a class=\"page-link\" href=\"#\">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    ";
    echo $element;
  }






?>