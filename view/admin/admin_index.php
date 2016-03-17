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
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../../assets/css/scrolling-nav.css" rel="stylesheet">    
        <link href="../../assets/css/app.css" rel="stylesheet">
        <link href="../../assets/css/style.css" rel="stylesheet">


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
                            <a class="page-scroll" href="#">Hi <span class="text-green-lt"> Admin</span></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services"><span class="text-danger">Logout</span></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#">Home</a></li>
                        <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#addstudent"> Add Student</a></li>
                        <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#addteacher">Add Teacher</a></li>
                        <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#assign">Assign Teacher</a></li>
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
                        <h3 class="modal-title text-center" id="myModalLabel">Add Student</h3>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <label><strong>Student Name</strong></label>
                            <input class="form-control" name="stname" type="text" /><br/>
                            <label><strong>Password</strong></label>
                            <input class="form-control" name="stpass" type="password" /><br/>
                            <label><strong>Email</strong></label>
                            <input class="form-control" name="stemail" type="email" /><br/>
                            <label><strong>Gender</strong></label>
                            <select class="form-control" name="stsex" >
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">female</option>
                            </select> <br/>
                            <label><strong>Phone No</strong></label>
                            <input class="form-control" name="stnum" type="number" /><br/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal for Teacher -->
        <div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close text-xxl" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center" id="myModalLabel">Add Teacher</h3>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <label><strong>Teacher Name</strong></label>
                            <input class="form-control" name="tcname" type="text" /><br/>
                            <label><strong>Password</strong></label>
                            <input class="form-control" name="tcpass" type="password" /><br/>
                            <label><strong>Email</strong></label>
                            <input class="form-control" name="tcemail" type="email" /><br/>
                            <label><strong>Gender</strong></label>
                            <select class="form-control" name="tcsex" >
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">female</option>
                            </select> <br/>
                            <label><strong>Phone No</strong></label>
                            <input class="form-control" name="tcnum" type="number" /><br/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Teacher</button>
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
                        <h3 class="modal-title text-center" id="myModalLabel">Add Teacher</h3>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <label><strong>Teacher ID</strong></label>
                            <input class="form-control" name="tcid" type="text" /><br/>
                            <label><strong>Student ID</strong></label>
                            <input class="form-control" name="stid" type="password" /><br/>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Teacher</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            Admin Details
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
        <div class="bg-glow">
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

