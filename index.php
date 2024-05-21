<?php 
require 'function.php';

$blog = query("SELECT * FROM blog_posts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width==, initial-scale=1.0">
    <title>Animated Portofolio Website HTML CSS JS Codehal</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <header class="header">
            <a href="#" class="logo">Kerennn</a>
            <nav class="navbar">
                <a href="#home" style="--i:1;" class="active">Home</a>
                <a href="#about"style="--1:2;" class="active">About</a>
                <a href="#blog"style="--1:3;" class="active">Blog</a>
                <a href="#gallery"style="--1:4;" class="active">Gallery</a>
                <a href="#contact"style="--1:5;" class="active">Contact</a>        
            </nav>
    </header>

    <!-- home -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's me</h3>
            <h1>Kerenhapukh Waworuntu</h1>
            <h3>And I'm a student <span class="multiple-text"></span><h3>
            <p>Success is not final, failure is not fatal, it is the courage to continue that counts.</p>
        </div>
        <div class="home-img">
            <img src="images/bulat1.png" alt="">
        </div>
    </section>


    <!-- about -->
   <section class="main" id="about">
        <div class="img">
            <img src="images/sea.jpeg" alt="" srcset="">
        </div>
   <div class="about-text">
        <h1>About Me</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas delectus quisquam laborum vero modi dicta iste totam tenetur pariatur beatae nulla aliquam consequatur repellat animi culpa in, ducimus dolorum.
            <br><br>
            I am currently in the fourth semester of an informatics engineering college. I Love Music, When I'm sleeping, doing assignments, upset, happy I always listen to music. music is my healing. n Sleep for life
        </p>
        </div>
    </section>

    <!-- blog -->
     <section class="blog" id="blog">
        <div class="blog-heading">
            <h1>Article</h1>
        </div>  <br><br>
        
        <div class="blog-container">

        <?php foreach ( $blog as $row): ?>
        <article class="blog-box">
                <div class="blog-img">
                <img src="<?= $row["image_url"]; ?>" alt="<?= $row["alt_text"]; ?>">
                </div>
                <h2><?= $row["title"]; ?></h2>
                <div class="blog-text">
                    <p>
                    <?= $row["content"]; ?>
                    </p>
                    <a href="<?= $row["link"]; ?>">Read More</a>
                </div>
            </article><br>
            <?php endforeach; ?>
        </div>
    </section>  

 <!--Gallery-->
 <section class="gallery" id="gallery">
    <div class="gallery-heading">
        <h2>Gallery</h2>
    </div>

    <br><br>

    <div class="responsive">
        <div class="gallery">
            <img src="images/Gambar1.jpg" alt="">
                <div class="desc">
                    <div class="text">photos of those whom God helps a.k.a Azariah</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/Gambar2.jpg" alt="">
                <div class="desc">
                    <div class="text">photos of friends from high school</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar3.jpg" alt="">
                <div class="desc">
                    <div class="text">We went to karaoke to relax and heal</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar4.jpg" alt="">
                <div class="desc">
                    <div class="text">Cool People</div>
                </div>
        </div>
        <br>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar5.jpg" alt="">
                <div class="desc">
                    <div class="text">Me n Ma Gurl's </div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar6.jpg" alt="">
                <div class="desc">
                    <div class="text">Ma Nineteen Party</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar7.jpg" alt="">
                <div class="desc">
                    <div class="text">I Love U n Me</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/gambar8.jpg" alt="">
                <div class="desc">
                    <div class="text">The Sunset Is Beautiful, Isn't It?</div>
                </div>
        </div>
      </div>

      <div class="clearfix"></div>
    </section>
    <!--Gallery-->

    <br><br><br>

    <!-- Contact -->
        <section class="contact" id="contact">
            <div class="contact-heading">
                <h2>Contact Me!</h2>
            </div>
            
            <br><br>

            <p class="contact-text">
                If you want to contact me, you can contact me via email or Instagram. 
                I will reply as soon as possible. Thank you!
            </p>

            <br><br>

            <div class="contact-info">
                <div class="card">
                    <div class="contact-icon">
                        <img src="images/Email.jpg" alt="Email" width="50" height="50">
                    </div>
                    <p>wkerenhapukh@gmail.com</p>
                </div>
    
                <div class="card">
                    <div class="contact-icon">
                        <img src="images/Instagram.jpg" alt="Instagram" width="50" height="50">
                    </div>
                    <p>@kerenwrntu_</p>
                </div>
            </div>
            <br><br>

            <footer>
                <p style="text-align:center;">&copy; 2024 made with love ❤️ Kerenhapukh Waworuntu</p>
            </footer>
            <br><br>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script.js"></script>
</body>
</html>