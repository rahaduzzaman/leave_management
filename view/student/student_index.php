<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Student | LM</title>

        <!-- Bootstrap -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../../assets/css/scrolling-nav.css" rel="stylesheet">    
        <link href="../../assets/css/app.css" rel="stylesheet">
        <link href="../../assets/css/admin.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">LM</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#">Hi <span class="text-green-lt"> Rahad</span></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services"><span class="text-danger">Logout</span></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#">Home</a></li>
                        <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#addstudent"> Leave Application</a></li>
                        <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#assign">Leave Status</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <!-- Modal for Student -->
        <div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info">
                        <button type="button" class="close text-xxl" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center" id="myModalLabel">Leave Application</h3>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <label><strong>Teacher id</strong></label>
                            <select class="form-control" name="tid" >
                                <option>Select id</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                            </select> <br/>
                            <label><strong>Subject</strong></label>
                            <input class="form-control" name="subject" type="text" /><br/>
                            <label><strong>Description</strong></label>
                            <textarea class="form-control" name="stnum"></textarea><br/>
                            <label><strong>Leave Start date</strong></label>
                            <input class="form-control" name="stdate" type="date" /><br/>
                            <label><strong>Leave End date</strong></label>
                            <input class="form-control" name="endate" type="date" /><br/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal for Teacher -->
        <div class="modal fade" id="assign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close text-xxl" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center" id="myModalLabel">Leave Status</h3>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <label><strong>Leave Status for</strong></label>
                            <select class="form-control" name="tid" >
                                <option>Select subject...</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                            </select> <br/>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Show</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Intro Section -->
    <section id="intro" class="intro-section bg-none">
        <div class="container">
            <div class="row m-t-lg">
                <div class="col-md-12 bg-white">
                    <div class="row p-lg">
                        <div class="col-md-8 text-left">
                            <h1>Student Page</h1>
                            <p class="text-sm">This is Student Page</p>
                            <p class="text-sm">Student and apply and check their leave status here</p>
                        </div>
                        <div class="col-md-4">
                            <div class="img-responsive">
                                <img class="img-circle" style="width: 200px;" src="../../assets/img/Admin-icon.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--         About Section 
            <section id="about" class="about-section">
    
            </section>
    
             Services Section 
            <section id="services" class="services-section">
    
            </div>
        </section>
    
         Contact Section 
        <section id="contact" class="contact-section">
    
        </section>-->
   

    <footer class="footer">
        <div class="">
            <p class="text-ash-lt text-center">Created By us</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="../../assets/js/jquery.easing.min.js"></script>
    <script src="../../assets/js/scrolling-nav.js"></script>
    <script src="../../assets/js/script.js"></script>

</body>
</html>

