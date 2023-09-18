<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading" style = " min-height:40vh; background: url(heading-bg.webp) no-repeat;
   background-size: cover;
   background-position: center;
   text-align:center;">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>When you opt our site instead of a physical store, you can save yourself from the hard work of searching for an ideal store at an ideal location and evaluating the space for your collection.In addition to saving your sweat for finding an ideal store, you will eventually save thousands of dollars indirectly. </p>
         <p>Another benefit that you will get by setting up an online bookstore is that you get to be your own boss.you can keep your love for the books alive. You can grow in the community of your own taste and preferences and you can do what you love.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I got the chills so many times by the end of this book. It completely blew my mind. It managed to surpass my high expectations AND be nothing at all like I expected. Or in Newspeak "Double Plus Good." Let me preface this with an apology. If I sound stunningly inarticulate at times in this review, I can't help it.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>George Orwell’s 1984 on Goodreads</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>In Doane's debut novel,
An unnamed protagonist (The Narrator) is dealing with heartbreak. His love, determined to see the world, sets out for Portland, Oregon. But he’s a small-town boy who hasn’t traveled much.Until one day, he takes a leap; he packs his bike and a few belongings and heads out to find the Girl.   
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Doane's The Crossing on Reedsy Discovery</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I am still dipping my toes into the literally fiction pool,Books like The Care and Feeding of Ravenously Hungry Girls by Anissa Gray are definitely my cup of tea.
Althea and Proctor Cochran had been pillars of their economically disadvantaged community for years – with their local restaurant/small market and their charity drives.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>The Care and Feeding of Ravenously Hungry Girls</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Goodnight Moon by Margaret Wise Brown is one of the books that followers of my blog voted as a must-read for our Children's Book August 2018 Readathon. Come check it out and join the next few weeks!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Margaret Wise Brown’s Goodnight, Moon on Goodreads</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>This funny, thoroughly accomplished debut opens with two words: “I’m moving.” They’re spoken by the title character while she swoons across her family’s ottoman, and because Geraldine is a giraffe, her full-on melancholy mode is quite a spectacle.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elizabeth Lilly’s Geraldine</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>“The Girl in Room 105” is a thrilling and engaging novel written by Chetan Bhagat, one of India’s most popular authors. The book tells the story of Keshav, a young man who is struggling to come to terms with his past and move on with his life.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>The Girl in Room 105</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/aut-1.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>William shakespeare</h3>
      </div>

      <div class="box">
         <img src="images/Agatha_Christie.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Agatha Christie</h3>
      </div>

      <div class="box">
         <img src="images/chethan bhagat.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chethan bhagat</h3>
      </div>

      <div class="box">
         <img src="images/RK-Narayan.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RK Narayan</h3>
      </div>

      <div class="box">
         <img src="images/Ruskin-Bond.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ruskin Bond</h3>
      </div>

      <div class="box">
         <img src="images/aravind-adiga.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Aravind Adiga</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>