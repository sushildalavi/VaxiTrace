<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="recent-news-boxes.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="welcome.css">
<span class="glyphicon glyphicon-name"></span>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            background: #ab0e0e;
            color: #c9d93b;
            border: 1px solid #c9d93b;
        }
        
        .marquee p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 20s linear infinite;
        }
        
        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }
        
        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }
        
        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <header>
   <div class="topnav">
            <a href="welcome.php">COVtracker</a>
            <a href="aboutUS.html">About Us</a>
  <a href="graphs.php">Graphs</a>
  <a href="faqq.html">FAQ</a>
  </div>
        <!--<div class="glif">-->
                <a href ="#"><i class="fa fa-commenting"></i></a>
                <a href ="https://www.instagram.com/kidsgalaxy.co.in/"><i class="fa fa-instagram"></i></a>
                <a href ="#"><i class="fa fa-facebook"></i></a>
                <a href ="#"><i class="fa fa-twitter"></i></a> 
        <!--</div>-->
        </header>
    <br><br>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    
    <div class="marquee">
        <p>|| You can register as a foreign national on COVtracker and get vaccinated || Check your eligibility for Dose 2 on COVtracker  || Download your vaccination certificate || </p>
    </div>
    <h1>Register for vaccination</h1>
    <div class="w3-container">
        <a href="registration.php" class="w3-button w3-black">Register</a>
    </div>
    <br><br>
    <section class="recentNews">
  <div class="container">
    <h2 class="news-title">Recent News</h2>
    <div class="row">
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.hindustantimes.com/lifestyle/health/covid-will-india-see-a-third-wave-in-winter-101633360600884.html"><img alt="News Entry" src="https://images.hindustantimes.com/img/2021/10/04/550x309/56439402-2517-11ec-97ad-def1feb12b09_1633360267126_1633360651084.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>2</strong>
            </div>
            <h3 class="ct-blog-header">
              Covid: Will India see a third wave in winter?
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.hindustantimes.com/cities/mumbai-news/covid-has-mumbai-reached-the-endemicity-stage-101633882859765.html"><img alt="News Entry" src="https://images.hindustantimes.com/img/2021/10/10/550x309/5384f0c0-29e1-11ec-8390-9108a6051a41_1633882858768.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>10</strong>
            </div>
            <h3 class="ct-blog-header">
              Covid: Has Mumbai reached the endemicity stage?
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.financialexpress.com/lifestyle/health/coronavirus-covid-19-india-live-news-as-festivals-begin-govt-urges-states-uts-to-accelerate-pace-of-vaccination-adherence-to-covid-protocols-amid-third-wave-fear/2347203/"><img alt="News Entry" src="https://images.financialexpress.com/2021/10/covid-19-vaccine3.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>12</strong>
            </div>
            <h3 class="ct-blog-header">
              Coronavirus India Highlights: Amid Durga Pooja rush, daily caseload in Bengal nears 1,000
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.ndtv.com/india-news/coronavirus-13-596-fresh-covid-19-cases-in-india-lowest-daily-rise-in-nearly-eight-months-2578891"><img alt="News Entry" src="https://c.ndtvimg.com/2021-04/7j69edn_mumbai-coronavirus-pti_625x300_08_April_21.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>18</strong>
            </div>
            <h3 class="ct-blog-header">
             13,596 Fresh Covid Cases In India, Lowest Daily Rise In Nearly 8 Months
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.ndtv.com/india-news/coronavirus-india-live-updates-3-39-crore-covid-cases-in-india-so-far-4-50-lakh-deaths-2569228"><img alt="News Entry" src="https://c.ndtvimg.com/2021-10/lede6fm_coronavirus-india-reuters-2021_650x400_08_October_21.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>5</strong>
            </div>
            <h3 class="ct-blog-header">
             Coronavirus India Highlights: Active COVID-19 Cases In India Lowest In 206 Days
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.news18.com/news/india/coronavirus-mumbai-kerala-covid-vaccine-covisheild-covaxin-uk-india-covid-19-tamilnadu-pfizer-astrazeneca-3-livenews-4284521.html"><img alt="News Entry" src="https://images.news18.com/ibnlive/uploads/2021/08/kerala-coronavirus-india-covid-16298055843x2.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>18</strong>
            </div>
            <h3 class="ct-blog-header">
              Over 92 Crore Vaccine Doses Administered in India So Far, Says Health Ministry
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-news btn-contests">
      <a href="#">VIEW ALL NEWS</a>
    </div>
  </div>
</section>
     
</body>
</html>