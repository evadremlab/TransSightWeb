<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Page Result</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/transsight.css" rel="stylesheet">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->


    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a href="./">&nbsp;</a>
                    </h1>
                </div>
                <nav class="navbar navbar-default navbar-static-top ">
                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="about-us.html">Company</a>
                            <ul class="dropdown-menu dropdown-menu-company">
                                <li>
                                    <a href="about-us.html">About</a>
                                </li>
                                <li>
                                    <a href="news.html">News</a>
                                </li>
                                <li>
                                    <a href="history.html">History</a>
                                </li>
                                <li>
                                    <a href="customers.html">Customers</a>
                                </li>
                                <li>
                                    <a href="leadership.html">Leadership</a>
                                </li>
                                <li>
                                    <a href="careers.html">Careers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="services.html">Services</a>
                            <ul class="dropdown-menu dropdown-menu-services">
                                <li>
                                    <a href="consulting.html">Consulting</a>
                                </li>
                                <li>
                                    <a href="systems-integration.html">System Integration</a>
                                    <!--<ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Latest</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>-->
                                </li>
                                <li>
                                    <a href="data-analytics.html">Data Analytics</a>
                                </li>
                                <li>
                                    <a href="managed-services.html">Managed Services</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li>
                            <a href="blog.html">Blog</a>
                        </li>-->
                        <li>
                            <a href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well8 bg-lighter">
        <div class="container">

                        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                            <label class="search-form_label">
                                <input class="search-form_input" type="text" name="s" autocomplete="off"
                                       placeholder=""/>
                                <span class="search-form_liveout"></span>
                            </label>
                            <button class="search-form_submit fa-search text-primary" type="submit"></button>
                        </form>
            <h3 class="text-center">Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

    <!--========================================================
                            FOOTER
  =========================================================-->
    <footer>
        <section class="footer-wr">
            <div class="container">
                <div class="copyright">
                    &#169; <span id="copyright-year"></span> TransSight. 7599 Balmoral Way, San Ramon, CA 94582 | <a href="contact-us.html">Contact Us</a>
                </div>
            </div>
        </section>
    </footer>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/tm-scripts.js"></script>
 <!-- </script> -->


 </body>
 </html>
