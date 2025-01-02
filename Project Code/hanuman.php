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
        $stmt = $conn->prepare("INSERT INTO hanuman (name, email, rating, review) VALUES (?, ?, ?, ?)");
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
    <h2>Hanu-Man</h2>
    <img src="images\hanuman.jpg" alt="Movie Poster"  class="movie_image" height="500" width="500 " ><br>
    <b>Release Date :</b> January 12, 2024<br>
    <b>Starring:</b> Teja Sajja, Varalaxmi Sarathkumar, Amritha Aiyer, Vinay Rai, Samuthirakani, Vennela Kishore, Raj Deepak Shetty, Getup Srinu, Satya <br>
    <b>Director:</b> Prasanth Varma<br>
    <b>Producer:</b> Niranjan Reddy<br>
    <b>Music Director:</b>  Gowra Hari, Anudeep Dev, Krishna Saurabh<br>
    <b>Cinematographer:</b> Shivendra<br>
    <b>Editor:</b> Saibabu Talari<br>

    
  </div>
       
    </div>


 
  <div class="container">

    <div class="review">
        <h2>Story</h2><br>
        
        <p>Hanumanthu (Teja Sajja), hailing from Anjanadhri, is a petty thief. He has an elder sister, Anjamma (Varalaxmi Sarathkumar), who takes immense care of him. Hanumanthu loves Meenakshi (Amritha Aiyer), who also belongs to the same place. Gajapathi (Raj Deepak Shetty) pretends to be the savior of Anjanadhri from bandits, but he exercises control over the villagers. One day, Meenakshi revolts against Gajapathi, which makes the latter attack the former. While trying to save Meenakshi, Hanumanthu lands in trouble. This is when Hanumanthu finds a precious stone through which he gets superpowers. What happened next? How did Hanumanthu use his superpower
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
                  Subramanya V
                  </h4>
                  <p>
                    This year starts with a Blockbuster What does an cinema need fun, emotion, action, drama, entertainment, story etc It doesn't miss a thing each and every scene one after another keeps you entertained, some scenes are literally goosebumps! Terrific and unique story. A start for his universe. No words about the cast each and every person have justified their roles even the child artists. I mainly appreciate getup sreenu timing and his character. Even Teja sajja, Satya and samuthirakani played their role very well.They take you to past those visuals at last about the war happening in future is next level Main element is that is the VFX it makes you feel night budget movie it's worth Varma! Those places are mind-blowing. Cinematography and DOP every member of the crew needs a apprection because of this perfect recepie they have made.At last  prashanth Varma and his crew did a perfection.If they gets support I am sure they gonna be make this greater than Marvel or DC 
No doubt in it.At last remember the name PRASHANT VARMA

                    

 </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Ketan Kanha
                  </h4>
                  <p>
                 It's really an entertaining and great film especially for kids and even adults can enjoy where VFX and visuals are really beautiful and outstanding to experience visual appealing in every mass and goosebumps moment of Hanuman. what a vision and direction of Prashant Verma really can't wait to see him in future of Indian Cinema and can't wait for Jai Hanuman in 2025 sequel for Hanuman. Only South Indian filmmaker can only show pure Hindu God in such cherish and beautiful way. There were also great comedy moments in the movie and it becomes perfect superhero comedy movie. Performance by Teja Sajja as Hanumanth was really great and he looked perfect for this role, Amritha Aiyer was really great and looked so beautiful and gorgeous in the movie, Vara lakshmi sarath Kumar was really excellent in her role, Vinay Rai as Super villain Michael was really brilliant, Deepak Raj Shetty, Vennela Kishore , Getup srinu, etcetera was really good in their roles. Music, songs and soundtrack was really fantastic in the movie literally goosebumps. Only negative point was routine storyline and too much long duration. Rest movie is really enjoyable and great to watch.

                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
               <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Avinash jadhav
                  </h4>
                  <p>
                    This movie doesn't feel like it was made with a mere budget of 25Cr+ just like 'Kantara' this film outshines any biggy film. No way this film is perfect but the attempt by the makers, artists involved in this film deserve a big applaud to pull it off. Having 24x times less budget than lord "ADIPURUSH" film what Prashanth has achieved is nothing less than extraordinary. I see this film along with "Minnal-Murali" as stepping stones for what is going to come in future years in our Indian Cinema. Heartily grateful to all the filmmakers from southern India who gave the confidence to every filmmaker in India including Bollywood(though they lack soul in movies). Big shout out to Sir S S Rajamouli, he is the one who started it all when nobody dared/thought. Indian rooted historical stories are much more richer than any other stories you can read/find anywhere. If filmmakers in India don't capitalize on this then the day is not far that Hollywood and others filmmakers around the world will dig deep in our culture and make it their own just like "Game of Thrones" inspired heavily from "Mahabharata" just the treatment is different. A must watch film for those who are not familair with Indian culture... Facts might be wrong which is not the intention of the film but the depiction of fiction/story/history is great... Looking forward for "Jai Hanuman" movie
                   </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
               <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Times of India 
                  </h4>
                  <p>
                 Director Prasanth Varma, who shot to fame with films like Awe and Zombie Reddy, has once again teamed up with young actor Teja Sajja to bring us HanuMan, a Telugu-language superhero film, as part of the Prasanth Varma Cinematic Universe. The Sankranti release, also starring Amritha Aiyer, Varalaxmi Sarathkumar, and Vinay Rai, intricately weaves together elements of Indian mythology with a contemporary narrative. The film presents a classic confrontation between two central characters: Hanumanthu, the deserving bearer of divine power, and Michael, the antagonist driven by his desperate pursuit of the same supernatural abilities. Prasanth skilfully integrates familiar elements from various sources, blending them with CGI, thereby enhancing the protagonist's supernatural presence in the village setting. The story also delves into the rural dynamics and struggles of Anjanadri, including a love story and the challenges faced by villagers under oppressive practices.


                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Hindustan Times
                  </h4>
                  <p>
                  Director Prasanth Varma, who shot to fame with films like Awe and Zombie Reddy, has once again teamed up with young actor Teja Sajja to bring us HanuMan, a Telugu-language superhero film, as part of the Prasanth Varma Cinematic Universe. The Sankranti release, also starring Amritha Aiyer, Varalaxmi Sarathkumar, and Vinay Rai, intricately weaves together elements of Indian mythology with a contemporary narrative. The film presents a classic confrontation between two central characters: Hanumanthu, the deserving bearer of divine power, and Michael, the antagonist driven by his desperate pursuit of the same supernatural abilities. 


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
            $sql = "SELECT * FROM hanuman ORDER BY id DESC LIMIT 10"; // Adjust the query as needed
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