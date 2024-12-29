<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description" content="At Bhartiya Baazar, we pride ourselves on offering quality, comfort, and style for every member of the family. Whether you're attending a wedding, a festival, or a family gathering, our traditional dresses and footwear ensure you look and feel your best. Shop now and experience the perfect blend of tradition and trend!">
   <meta name="keywords" content="Traditional clothing online store
Buy traditional dresses online
Online store for traditional wear
Best traditional outfits for women, men, and kids
Traditional dress shopping for family
Category-Specific Keywords:
Women's Traditional Dresses:
Women's traditional dresses for special occasions
Buy Indian traditional dresses for women
Elegant women’s ethnic wear online
Designer sarees and lehengas for women
Traditional kurtis and anarkali dresses for women
Men's Traditional Dresses:
Men’s traditional clothing for weddings
Buy kurta and sherwani online
Ethnic wear for men
Indian men’s traditional outfits
Men’s wedding sherwanis and kurtas
Kid Girl Traditional Dresses:
Traditional dresses for little girls
Buy ethnic wear for girls online
Kids ethnic dresses for festivals
Traditional lehengas for girls
Indian dresses for girls online
Kid Boy Traditional Dresses:
Boys traditional clothing online
Kurta set for boys
Kids ethnic wear for boys
Buy Indian outfits for boys
Traditional dresses for boys online
Women's Footwear:
Women's traditional footwear online
Ethnic sandals for women
Buy juttis and mojris for women
Women’s bridal footwear
Comfortable traditional shoes for women
Men's Footwear:
Men’s ethnic footwear for weddings
Traditional juttis and mojris for men
Buy men’s footwear online for festivals
Comfortable traditional shoes for men
Wedding shoes for men
Kids Footwear:
Kids traditional footwear online
Comfortable sandals for kids
Ethnic footwear for boys and girls
Traditional shoes for kids
Buy kids’ sandals for festivals
Long-Tail Keywords:
Affordable traditional dresses for women and men
Shop traditional clothing for kids, boys, and girls
Best online store for traditional wedding attire
Comfortable ethnic footwear for family events
Buy kids traditional shoes and sandals for festivals">
   
   <title>Home</title>
   <link rel="icon" type="image/x-icon" href="images/fav.png">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/hero-img1.png" alt="">
         </div>
         <div class="content">
            <span>Best Collection Available Here</span>
            <h3></h3>
            
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      
   </div>

</section>

</div>

<section class="category">

   <h1 class="heading"><u>shop by category</u></h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Women Traditional Dresses" class="swiper-slide slide">
      <img src="images/icon1.png" alt="">
      <h3>Women's Traditional Dresses</h3>
   </a>

   <a href="category.php?category=Men Traditional Dresses" class="swiper-slide slide">
      <img src="images/category-2.png" alt="">
      <h3>Men's Traditional Dresses</h3>
   </a>

   <a href="category.php?category=Kid Girl Traditional Dresses" class="swiper-slide slide">
      <img src="images/category-3.png" alt="">
      <h3>Kid Girl Traditional Dresses</h3>
   </a>

   <a href="category.php?category=Kid Boy Traditional Dresses" class="swiper-slide slide">
      <img src="images/category-4.png" alt="">
      <h3>Kid Boy Traditional Dresses</h3>
   </a>

   <a href="category.php?category=Women Footwears" class="swiper-slide slide">
      <img src="images/category-5.png" alt="">
      <h3>Women's Footwear</h3>
   </a>

   <a href="category.php?category=Men Footwears" class="swiper-slide slide">
      <img src="images/category-15.png" alt="">
      <h3>Men's Footwear</h3>
   </a>

   <a href="category.php?category=Women Accesories" class="swiper-slide slide">
      <img src="images/category-13.png" alt="">
      <h3>Women's Accesories</h3>
   </a>

   <a href="category.php?category=Men Accesories" class="swiper-slide slide">
      <img src="images/category-10.png" alt="">
      <h3>Men's Accesories</h3>
   </a>

   <a href="category.php?category=Kid Girl Footwear" class="swiper-slide slide">
      <img src="images/category-12.png" alt="">
      <h3>Kid Girl Footwear</h3>
   </a>

   <a href="category.php?category=Kid Boy Footwear" class="swiper-slide slide">
      <img src="images/category-9.png" alt="">
      <h3>Kid Boy Footwear</h3>
   </a>

   <a href="category.php?category=Women Kurti" class="swiper-slide slide">
      <img src="images/kurti_category.jpg" alt="">
      <h3>Women's Kurtis </h3>
   </a>

   <a href="category.php?category=Women Top" class="swiper-slide slide">
      <img src="images/top_category.jpg" alt="">
      <h3>Women's Top</h3>
   </a>

   <a href="category.php?category=Men T-shirt" class="swiper-slide slide">
      <img src="images/t_category.jpg" alt="">
      <h3>Men's T-Shirt</h3>
   </a>

   <a href="category.php?category=Men Shirt" class="swiper-slide slide">
      <img src="images/s_category.jpg" alt="">
      <h3>Men's Shirts</h3>
   </a>

   <a href="category.php?category=Women pants & Trouser" class="swiper-slide slide">
      <img src="images/pp_category.png" alt="">
      <h3>Women's Pants & Trousers</h3>
   </a>

   <a href="category.php?category=Women Jeans & Skirt" class="swiper-slide slide">
      <img src="images/js_category.png" alt="">
      <h3>Women's Jeans & Skirts</h3>
   </a>
   </div>

   <div class="swiper-pagination"></div>
   </div>

</section>

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 16"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>

   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="name">Available Sizes : <?= $fetch_product['size']; ?></div>
      <div class="flex">
         <div class="price"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <!-- <input type="text" name="size"placeholder="size"  class="qty"> -->
         <select name="size" id="" label="Select Size">
            <option value="Select Size">Select Size</option>
            <optgroup label="Clothes">
            <!-- <option value="S">S</option> -->
            <option value="M">M</option>
               <option value="L">L</option>
               <option value="XL">XL</option>
               <option value="XXL">XXL</option>
            </optgroup>
            <optgroup label="Saree/Lehenga">
               <option value="L">Free Size</option>
               <option value="XL">Semi-stiched</option>
               <option value="XL">unstiched</option>
            </optgroup>
            <optgroup label="Men/Women Footwear">
               <option value="IND-4">IND-4</option>
               <option value="IND-5">IND-5</option>
               <option value="IND-6">IND-6</option>
               <option value="IND-7">IND-7</option>
               <option value="IND-8">IND-8</option>
               <option value="IND-9">IND-9</option>
               <option value="IND-10">IND-10</option>
            </optgroup>
         </select>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

// var swiper = new Swiper(".home-slider", {
//    loop:true,
//    spaceBetween: 20,
//    pagination: {
//       el: ".swiper-pagination",
//       clickable:true,
//     },
// });


 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>