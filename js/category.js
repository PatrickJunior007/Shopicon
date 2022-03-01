

(function(){
  var sortingButtons = $("ul .item_sorting_btn");

  if ($(".grid").length) {
    var grid = $(".grid").isotope({
      
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
        horizontalOrder: true, 
      },

      sortAscending:{
        maxprice: false,
        date: false,
      },
      getSortData: {
        price: function (itemElement) {
          var priceEle = $(itemElement)
            .find(".product_price")
            .text()
            .replace("F", "");
          return parseFloat(priceEle);
        },
        date: function (itemContent) {
          var dateEle = $(itemContent)
            .find(".product_category")
            .text()
            .replace("-", "0");
          return (dateEle);
        },
        name: ".product_name",
        maxprice: function (itemElement) {
          var priceMax = $(itemElement)
            .find(".product_price")
            .text()
            .replace("F", "");
          return parseFloat(priceMax);
        },
        premium: function (itemElement) {
          var priceMax = $(itemElement)
          .find(".premium_name")
          .text()
        return parseFloat(priceMax);
        },
        


      },
    });

    sortingButtons.each(function () {
      $(this).on("click", function () {
        var parent = $(this)
          .parent()
          .parent()
          .find("#dropdownMenuButton span");
        parent.text($(this).text());
        var option = $(this).attr("data-isotope-option");
        option = JSON.parse(option);
        grid.isotope(option);
      });
    });
  }

})(jQuery);
