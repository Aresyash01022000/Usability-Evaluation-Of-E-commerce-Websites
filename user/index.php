<!DOCTYPE html>
<html lang="en">
    <head>
        <title>home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/parallax.min.js"></script>


        <style>
            .parallax-window {
            margin-top: -12px;
            min-height: 600px;
            background: transparent;
            }
            /* .body-cont{
                margin-right : 30px;
                margin-left : 30px;
            } */
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            /* .row.content {height: 450px} */

            /* Set gray background color and 100% height */
            /* .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            } */

            /* Set black background color, white text and some padding */
            /* footer {
                background-color: #555;
                color: white;
                padding: 15px;
            } */

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }
            .infos {
            z-index: 10;
            position: relative;
            text-align: center;
            padding-top: 100px;



        }

        .infos>h1 {
            z-index: 10;
            color: white;
            /* background: rgba(54, 25, 25, .6); */
            /* border: 3px solid whitesmoke; */


            display: inline;
            padding: 10px;
            font-size: 50px;


        }

        .sec {
            padding: 15px;
            z-index: 5;
            font-family: sans-serif;
            font-size: 3em;
            border: 2px solid black;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }

        .secdark {
            padding: 15px;
            color: white;
            background-color: rgb(42, 48, 48);
            font-family: sans-serif;

            font-size: 3em;
            border: 2px solid white;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }
        .site-footer {
        padding: 4em 0;
        background: #333333; }
        @media (min-width: 768px) {
            .site-footer {
            padding: 2em 0; } }
        .site-footer p {
            color: #737373; }
        .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5 {
            color: #fff; }
        .site-footer a {
            color: #999999; }
            .site-footer a:hover {
            color: white; }
        .site-footer ul li {
            margin-bottom: 10px; }
        .site-footer .footer-heading {
            font-size: 20px;
            color: #fff; }
        </style>
    </head>
    <body>

        <div class="my-nav"></div>
        <script>
            $(function(){
                $(".my-nav").load("nav.php");
            });
        </script>

        <div class="">
        <div class="parallax-window" data-parallax="scroll" data-z-index='0' data-image-src="../img/bg102.jpg" data-bleed="10">
            <div class="infos">
                <h1>Welcome to ReviewZilla A place to rate and review various E-commerce Websites</h1>
            </div>
        </div>
        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>We provide a platform to rate websites and provide an overall analysis of the data through sematic analysis</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0" style="margin-left: 390px;">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="addwebsite.php">Add Website</a></li>
                  <li><a href="rateit.php">Rate It</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                </ul>
              </div>
              
            </div>

            

          </div>

                    
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>
          
        </div>
      </div>
    </footer>
        </div>



    </body>
</html>
