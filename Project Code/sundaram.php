<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'movie_review');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO sundaram (name, email, rating, review) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $rating, $review);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();

        // Show pop-up message using JavaScript
        echo "<script>alert('Thank you for your review!'); window.location.href = 'work.html';</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Spering</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/gallery.css" rel="stylesheet" />

</head>
<style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bW92aWV8ZW58MHx8MHx8fDA%3D') repeat center center fixed;
      background-size: cover;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .review {
      background-color: rgb(230, 230, 230,0.9);
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .review h2 {
      margin-top: 0;
    }

    .review p {
      margin-top: 10px;
    }

    .review .rating {
      color: #ff9800;
      font-weight: bold;
    }

    .movie_image {
      width: 100%;
      height: auto;
      margin-bottom: 15px;
    }

    .user_review {
      margin-top: 20px;
    }

    .user_review form {
      margin-top: 20px;
    }

    .user_review form label {
      font-weight: bold;
    }

    .user_review form textarea {
      width: 100%;
      min-height: 150px;
      resize: vertical;
      margin-top: 5px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .user_review form button {
      background-color:  #1a2e35;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .user_review form button:hover {
      background-color: #1cbbb4;
    }

    .footer_section {
      background-color:  #1a2e35;
      color: #fff;
      text-align: center;
      padding: 20px 0;
     
    }

    .footer_section p {
      margin: 0;
    }

    .footer_section a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .footer_section a:hover {
      text-decoration: underline;
    }

  </style>


<body class="sub_page" >
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="home.html">
            <img src="images\projectlogo.jpg" alt="" />
            <span>
              Honest Review's
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="work.html">Review's </a>
              </li>
             
            </ul>
           
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- freelance section -->
   <div class="container">

    <div class="review">
      <div class="movie_info">
    <h2>Sundaram Master</h2>
    <img src="images\Sundarammaster.jpg" alt="Movie Poster"  class="movie_image" height="500" width="500 " ><br>
    <b>Release Date :</b> February 23, 2024<br>
    <b>Starring:</b>  Harsha Chemudu, Harsha Vardhan, Divya Sripada, Balakrishna Neelakantapu, Bhadram and others<br>
    <b>Director:</b> Kalyan Santosh<br>
    <b>Producer:</b> Ravi Teja and Sudheer Kumar Kurru<br>
    <b>Music Director:</b> Sricharan Pakala <br>
    <b>Cinematographer:</b> Deepak Yeragera<br>
    <b>Editor:</b> Karthik Vunnava<br>

    <p>Harsha Chemudu, popularly known as Viva Harsha, has made his debut as a lead actor in the movie Sundaram Master, which was released in theaters today. Read the review to find out how it is.</p>
  </div>
       
    </div>


 
  <div class="container">

    <div class="review">
        <h2>Story</h2><br>
        
        <p>In the remote village of Miryalametta, Sundar Rao (Harsha Chemudu) arrives as an English teacher with a mysterious mission beyond teaching English. How the English-speaking villagers treat him? Will he succeed in his mission? What happens eventually? These are the mysteries one would have to watch the movie to discover.
</p>
    </div>


    <!-- Add more reviews as needed -->

</div>


 <div class="container">

    <div class="review">
      <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Movie Critic Reviews
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                  Times of India
                  </h4>
                  <p>Sundaram Master emerges as a thought-provoking comedy-drama, directed by Kalyan Santhosh. Set against the picturesque backdrop of Paderu's hills and its environs, the film offers a delightful cinematic journey. Harsha Chemudu and Divya Sripada lead a narrative rich in humour and storytelling, supported by a cast that includes Chaitanya, Balakrishna Neelakantapuram, Harsha Vardhan, Bhadri and others. The movie serves as a poignant social commentary, juxtaposing two contrasting worldviews: one rooted in self-sufficiency and the other in greed.
                    

 </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    The Hindu
                  </h4>
                  <p>
                Sundaram is a social studies teacher in a government school who is deputed to this remote village since the villagers requested for an English teacher. A calculative MLA (Harshavardhan) sees this as an opportunity to make political and financial gains and sends Sundaram with a plan. Sundaram is no saint either. Early on, we see him crudely discussing dowry at a pelli choopulu. Everything boils down to money for him. What happens when he sets off into Miriyalametta with his own assumptions of the gullible people forms the rest of the story.

                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
               <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    IMDB
                  </h4>
                  <p>
                   "Sundaram Master" with simple yet serene story, subtle yet strong content and storyline as its hero. This film has no big bonanza events happening around it, rather was plain, simple, like a cool fresh light forest breeze that flowed through our soul on a stressless wonderful evening. Kudos to Mass Maharaja Ravi Teja, for picking gems like this and then giving them a life. A new age of Cinema is dawining into a wonderful young cherub, spreading wings across the spectrum of navarasas (9 states of emotional empowerment), without makeup, without artificial heroic stunts, without masala/ 'kurchi madata pedatti' songs, with plain simple stories that can touch our inner soul, again like the cool fresh light forest breeze from lush greenery covered mountains.
                 </p>


                  <img src="images/quote.png" alt="">
                </div>
              </div>
               <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Gulte
                  </h4>
                  <p>
                Sundaram Master has a message that was told many a time. In fact, Sundaram Master could not strongly convey the message it intended to. The village, dialogues, and English comedy did not help in bringing it all together for a proper conclusion. Though the director’s idea to emphasize a point could be understood, it is lost in the narrative. The background music is just fine. A few visuals and a very few dialogues are good.
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    The New Indian Express
                  </h4>
                  <p>
                  The surprise one feels at the way Sundar’s character is designed is in stark juxtaposition with the Miryalametta tribe’s overly predictable and simplistic ways. What came off as quirky and cute at first quickly reflects as naivete in the latter portions. Sundar’s intentions are obviously less than noble but why are the townsfolk so oblivious to his plans? It is not even like he is subtle about it. Sundar’s scam-like designs are as flimsy as they come and fall apart without much resistance, only to be left with an overdue coming-of-age story. As Sundaram Master wobbles its way to its 121-minute runtime mark, we get a hastily assembled final act where Sundar realises the follies in his character and gets inspired by the tribals’ goodness. We also get some overarching commentary on the evil of materialism, which makes this film a lot more interesting than what we initially expect it to be.
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
       
    </div>

    
   <div class="container">
    <div class="review">
        <h2>Recent Reviews</h2>
        <?php
        // Fetch and display reviews from the database
        $conn = new mysqli('localhost', 'root', '', 'movie_review');
        if ($conn->connect_error) {
            echo "$conn->connect_error";
            die("Connection Failed : " . $conn->connect_error);
        } else {
            $sql = "SELECT * FROM keeda ORDER BY id DESC LIMIT 10"; // Adjust the query as needed
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div>";
                    echo "<p>Name: " . $row['name'] . "</p>";
                    echo "<p>Email: " . $row['email'] . "</p>";
                    echo "<p>Rating: " . $row['rating'] . "</p>";
                    // Display the date&time column value
                    echo "<p>Date&Time: " . $row['date&time'] . "</p>";
                    echo "<p>Review: " . $row['review'] . "</p>";
                     // Adjust column name if needed
                    echo "</div><hr>";
                }
            } else {
                echo "No reviews yet.";
            }
            $conn->close();
        }
        ?>
    </div>
</div>

      
    </div>


    <!-- Add more reviews as needed -->

</div>


<div class="container">

    <div class="review">
      <div class="movie_info">
        <div class="user_review">
    <h3>Write Your Review</h3>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
       <div class="form-group">
            <label for="rating">Your Rating:</label>
            <div class="star-rating">
              <input type="radio" id="star1" name="rating" value="5" />
              <label for="star1" title="5 star">&#9733;</label>
              <input type="radio" id="star2" name="rating" value="4" />
              <label for="star2" title="4 star">&#9733;</label>
              <input type="radio" id="star3" name="rating" value="3" />
              <label for="star3" title="3 star">&#9733;</label>
              <input type="radio" id="star4" name="rating" value="2" />
              <label for="star4" title="2 star">&#9733;</label>
              <input type="radio" id="star5" name="rating" value="1" />
              <label for="star5" title="1 star">&#9733;</label>
            </div>
          </div><br><br>
      <div class="form-group">
        <label for="review">Your Review:</label>
        <textarea id="review" name="review" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Submit Review</button>
      </div>
      
       <script>
              // Check if a success parameter is present in the URL (you can pass this parameter when redirecting after a successful operation)
             const urlParams = new URLSearchParams(window.location.search);
               if (urlParams.has('success')) {
              // Display a success message to the user
                alert('Data saved successfully!');
                 }
            </script>
    </form>
  </div>

    
  </div>
       
    </div>
     

   
    


  

  <!-- Your JavaScript code can go here if needed -->



              

    <script src="./lightbox2/lightbox-plus-jquery.min.js"></script>
              
               
              
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->

  <!-- info section -->
 <section class="info_section">
  <div class="info_container layout_padding-top">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <img src="images\projectlogo.jpg" alt="" />
          <span>
            Honest Review's
          </span>
        </div>
        <div class="social_box">
          <!-- Simplified social media icons -->
          <a href="#"><img src="images/fb.png" alt=""></a>
          <a href="#"><img src="images/twitter.png" alt=""></a>
          <a href="#"><img src="images/instagram.png" alt=""></a>
            <a href="#"><img src="images/youtube.png" alt=""></a>
        </div>
      </div>
      <!-- Simplified info_main content -->
      <div class="info_main">
        <div class="row">
          <div class="col-md-3 col-lg-3">
            <div class="info_link-box">
              <h5>Useful Links</h5>
              <ul>
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="work.html">Review's</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Simplified contact information -->
      <div class="info_contact layout_padding2">
        <div class="row">
          <div class="col-md-3">
            <a href="#" class="link-box">
              <div class="img-box">
                <img src="images/location.png" alt="">
              </div>
              <div class="detail-box">
                <h6>Location</h6>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#" class="link-box">
              <div class="img-box">
                <img src="images/mail.png" alt="">
              </div>
              <div class="detail-box">
                <h6>honestreviews@gmail.com</h6>
              </div>
            </a>
          </div>
          <div class="col-md-5">
            <a href="#" class="link-box">
              <div class="img-box">
                <img src="images/call.png" alt="">
              </div>
              <div class="detail-box">
                <h6>Call +91 9398258609
                </h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        <a href="https://html.design/">Honest Review's</a>
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>



</body>
</body>

</html>