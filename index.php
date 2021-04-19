<?php
    //New arrivals interface
    require "./server/database.php";
    $query = "SELECT * FROM `products` ORDER BY `product_id` desc LIMIT 6";
    $result = mysqli_query($conn,$query);
    $goods = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/aos_min.css">
    <title>I&J | Welcome</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./"><img src="./images/logo.png" height="47" width="166.66" alt=""></a>
            
        </div>

        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="./pages/shop/">Products</a></li>
            </ul>
        </nav>
    </header>





    <main>
        <div class="intro">
            <p>A closet </p>
            <span class="txt-type" data-wait="1000" data-words='["Like you  never seen before " , "With a taste of class "]'></span>
        </div>

        <a href="#" class="action-btn">Order Now</a>

    </main>

    <section class="section-one" id="products">
        <h1>Newest Arrivals</h1>
        
        <div class="products-container" >
        <?php foreach($goods as $product):?>
            <?php
                $img_URL = "./admin/products/".$product['product_image'];
                ?>
            <div class="product-card"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="<?php echo $img_URL; ?>" alt="">
                <p><?php echo $product['product_name']; ?></p>
                <div class="border"></div>
                <p><?php echo $product['price'];?></p>
                <span><?php echo $product['availability']; ?></span>
                <?php
                $_SESSION['secure_id'] = rand(10000,2558897970000);
                $secureID = $product['product_id']*$_SESSION['secure_id'];
                
                ?>
                <a href="./pages/order/index.php?id=<?php echo $secureID; ?>&auto=<?php echo $_SESSION['secure_id'] ?>" class="red-btn">order</a>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
    <section class="blog" id="blog">
        <h1>Our latest posts</h1>

        <div class="posts" >
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="1000" data-aos-delay="0">
                <img src="./images/pexels-godisable-jacob-965324.jpg" alt="">
                <p>Best dress codes 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="1000" data-aos-delay="900">
                <img src="./images/pexels-torsten-dettlaff-437037.jpg" alt="">
                <p>Best watches for men 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="1000" data-aos-delay="1500">
                <img src="./images/pexels-jordan-hyde-1032110.jpg" alt="">
                <p>Best shoes 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="1000" data-aos-delay="2000">
                <img src="./images/pexels-melvin-buezo-2529147.jpg" alt="">
                <p>Most expensive shoes</p>
                <div class="border"></div>
                <a href="#" class="red-btn">view post</a>
            </div>

            
        </div>

    </section>
    <section class="contact" id="contact">
        <h1 data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="500">Reach us today !</h1>
        <div class="form-container">
            <form action="#" method="post">
                <label>Your Name</label> <br>
                <input type="text" name="name" id="" required> <br>
                <label>Your Email</label> <br>
                <input type="email" name="email" id="" required> <br>
                <label>Phone Number</label> <br>
                <input type="number" name="phone" id="" required placeholder="start with 07"> <br>
                <label>Message</label> <br>
                <textarea name="message" id="" cols="30" rows="10" required></textarea> <br>
                <input type="submit" value="send message" name="submit" class="red-btn">
            </form>
        </div>
        
    </section>

    <footer>

        <div class="logo">
            <img src="./images/logo.png" height="47" width="166.66" alt="">
        </div>
        <div class="links">
            <h4>Quick links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="./pages/shop/">Products</a></li>
            </ul>
        </div>
        <div class="categories">
            <h4>Categories</h4>
            <ul>
                <li>clothing</li>
                <li>footwear</li>
                <li>jewellery</li>
                <li>Bags</li>
                <li>Makeup</li>
                <li>Hats</li>
            </ul>
        </div>
        <div class="newsletter">
            <h4>Subscribe to our newsletter</h4>
            <form action="" method="post">
                <input type="email" placeholder="Enter your email here" name="nws_email" required class="input">
                <input type="submit" value="Join" class="submit">
            </form>
        </div>
    </footer>
    <script src="./js/scroll_min.js"></script>
    <script src="./js/type_min.js"></script>
    <script src="./js/ops.js"></script>
</body>
</html>