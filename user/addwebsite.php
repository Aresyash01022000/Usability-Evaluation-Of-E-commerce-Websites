<!DOCTYPE html>

<html lang="en">

<head>
    <title>Add a WebSite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/jquery.caret.min.js"></script>
    <script src="../js/jquery.tag-editor.min.js"></script>
    <link rel="stylesheet" href="../css/jquery.tag-editor.css?v5282">

    <style>
        .body-cont {
            margin-right: 2%;
            margin-left: 2%;
            padding-top : 2%;
        }

        /* Remove the navbar's default margin-bottom and rounded borders */

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */

        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
            body {
                max-width: 700px;
            }
        }

        .iii {
            position: absolute;
            background: #f00;
            width: 100%;
            height: 100%;
            opacity: 0;
        }
        #website{
            padding:30px;
            font-size:30px;
        }

        .width-edit{
            width:100%;
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


    <div class="container-fluid text-center body-cont">
        <div class="row content">
            <div class="col-sm-6 width-edit">

                <form class="well form-horizontal" id="formss">
                    <fieldset>
                        <legend>
                            <center>
                                <h2>
                                    <b>Add a website</b>
                                </h2>
                            </center>
                        </legend>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                            <h3>
                                    <b>Website Name</b>
                                </h3>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-globe"></i>
                                    </span>
                                    <input placeholder="http://www.example.com" class="form-control input-lg" type="url" id="website" name="website" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                            <h3>
                                    <b>For Keywords</b>
                                </h3>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </span>
                                    <textarea id="tag-in" name="tags" required></textarea>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-6 control-label"></label>
                            <div class="col-md-12">
                                <br>

                                <button type="submit" class="btn btn-lg btn-primary" id="addWebsite">Add WebSite</button>

                            </div>
                        </div>


                    </fieldset>
                </form>


            </div>
            <div class="col-sm-6 width-edit">
                <div class="col text-center">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe id="if" class="embed-responsive-item" src="https://google.co.in/"></iframe>
                        <div class="embed-responsive  iii">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div>
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
                  <li><a href="register.php">Register</a></li>
                  <li><a href="userlogin.php">User Login</a></li>
                  <li><a href="contactus.html">Contact</a></li>
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


<script>
    var website;
    $(function () {
        $(".my-nav").load("nav.php");
        $('#tag-in').tagEditor({
            placeholder: 'Add keywords here.seperate by  comma(,)/enter'
        });
    });

    $("#formss").on('submit', function (e) {

        e.preventDefault();
         website = $("#website").val();


        if (website == "")
            $("#website").focus();
        else {
    
                $("#if").attr('src', website);
                // console.log($('#tag-in').val());

            $("#addWebsite").html("Adding..");
            $("#addWebsite").attr("disabled", true);
           
           
            $.post("userinput.php",{
                addweb : 1,
                website : website,
                tags:$('#tag-in').val()
            },function(data){
                console.log(data);

                if(data == "exists"){
                    alert("website already exist");
                }
                else if(data == "success")
                    alert("added");
                else
                alert(data);
            }

            );

            // console.log(website);
            $("#addWebsite").html("Add WebSite");
            $("#addWebsite").attr("disabled", false);
           

        }


    });


</script>

</html>