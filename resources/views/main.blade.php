<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gomac Knowledgebase</title>
    <!-- LOADING STYLESHEETS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid featured-area-white-border">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box border-right-1">
                        <a href="#">
                            <i class="fa fa-key"></i> Login</a>
                    </div>
                    <div class="login-box border-left-1 border-right-1">
                        <a href="#">
                            <i class="fa fa-pencil"></i> Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO -->
    <div class="container">
        <div class="row">
            <div class="header">
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGO-->
    <!-- TOP NAVIGATION -->
    <div class="container-fluid">
        <div class="navigation">
            <div class="row">
                <ul class="topnav">
                    <li></li>
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="knowledge-base.html">
                            <i class="fa fa-book"></i> Knowledge Base</a>
                    </li>
                    <li>
                        <a href="articles.html">
                            <i class="fa fa-file-text-o"></i> Articles</a>
                    </li>
                    <li>
                        <a href="faq.html">
                            <i class="fa fa-lightbulb-o"></i> FAQ</a>
                    </li>
                    <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- SEARCH FIELD AREA -->
    <div class="searchfield bg-hed-six">
        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="row text-center margin-bottom-20">
                <h1 class="white"> Knowledge Base</h1>
                <span class="nested"> Learn to use gomac </span>
            </div>
            <br>
            <div class="row search-row">
                <input type="text" class="search" placeholder="What do you need help with?">
                <a class="buttonsearch btn btn-info btn-lg" href="search-results.html">Search</a>
            </div>
        </div>
    </div>
    <!-- END SEARCH FIELD AREA -->
   

    @yield('content')



    <!-- FOOTER -->
    <div class="container-fluid footer marg30">
        <div class="container">
            <!-- FOOTER COLUMN ONE -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">How it works</div>
                    <div class="footer-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                            ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>
            <!-- END FOOTER COLUMN ONE -->
            <!-- FOOTER COLUMN TWO -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">Categories</div>
                    <div class="footer-body">
                        <ul>
                            <li>
                                <a href="single-category.html">General</a>
                            </li>
                            <li>
                                <a href="single-category.html">Getting Started</a>
                            </li>
                            <li>
                                <a href="single-category.html">Account Support</a>
                            </li>
                            <li>
                                <a href="single-category.html">Guides</a>
                            </li>
                            <li>
                                <a href="single-category.html">Payment &amp; Billing</a>
                            </li>
                            <li>
                                <a href="single-category.html">Misc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END FOOTER COLUMN TWO -->
            <!-- FOOTER COLUMN THREE -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">Popular Articles</div>
                    <div class="footer-body">
                        <ul>
                            <li>
                                <a href="single-article.html">How to change account password</a>
                            </li>
                            <li>
                                <a href="single-article.html">How to edit order details</a>
                            </li>
                            <li>
                                <a href="single-article.html">Add new user</a>
                            </li>
                            <li>
                                <a href="single-article.html">Change customer details</a>
                            </li>
                            <li>
                                <a href="single-article.html">Lookup existing customer in order form</a>
                            </li>
                            <li>
                                <a href="single-article.html">How do I reset my password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END FOOTER COLUMN THREE -->
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- COPYRIGHT INFO -->
    <div class="container-fluid footer-copyright marg30">
        <div class="container">
            <div class="pull-left">
                Copyright © 2018 Sunny Gohil</a>
            </div>
            <div class="pull-right">
                <i class="fa fa-facebook"></i> &nbsp;
                <i class="fa fa-twitter"></i> &nbsp;
                <i class="fa fa-linkedin"></i>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT INFO -->

    <!-- LOADING MAIN JAVASCRIPT -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
</body>

</html>