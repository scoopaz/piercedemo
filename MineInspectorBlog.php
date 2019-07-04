<?php require_once( 'couch/cms.php' ); ?>

<cms:template title = 'mineinspectorblog' clonable ='1' commentable ='1'>
  <cms:editable name='blog_content' type='richtext'/>
  <cms:editable name ='blog_image' crop='1' width='800' height ='300' type='image'/>
<cms:editable name='my_blog_author' type ='text' />

</cms:template>
<!-- couch virtual folders - do not change here -->

<cms:folder name="events" title = "Events" />
<cms:folder name="news" title = "News" />
<cms:folder name="campaign" title = "Campaign Info" />
<cms:folder name="thoughts" title = "Thoughts and Musings" />
<cms:folder name="mining" title = "Mining" />
<cms:folder name="safety" title = "Safety and Inspection" />
<cms:folder name="environment" title = "Environment" />
<cms:if k_is_page>

<!-- End couch Header code -->

<!DOCTYPE html>
<html >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/128px-liftarn-adventurer-hat.svg-128x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title><cms:show k_page_title /></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
  
</head>
<body>

<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115016310-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115016310-4');
</script>
<!-- /Google Analytics -->


  <section class="menu cid-qOWlimD8Yb" once="menu" id="menu2-0">

    
    

<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="index.html">
                    <img src="assets/images/black-logo-166x51.png" alt="Mobirise" title="" style="height: 3.8rem;">
                </a>
            </span>
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle text-danger display-4" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="false">About Bill</a><div class="dropdown-menu"><a class="text-danger dropdown-item display-4" href="WhyVoteforBill.html" aria-expanded="false">Why Vote for Bill</a><a class="dropdown-item text-danger display-4" href="FamilyLife.html">Family Life</a><a class="dropdown-item text-danger display-4" href="MineInspectorInfo.html" aria-expanded="false">Mine Inspector Info</a><a class="dropdown-item text-danger display-4" href="MyQualifications.html" aria-expanded="false">My Qualifications</a><a class="text-danger dropdown-item display-4" href="Endorsements.html" aria-expanded="false">Endorsements</a></div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-danger dropdown-toggle display-4" href="index.html#gallery1-2" data-toggle="dropdown-submenu" aria-expanded="false">The Issues</a><div class="dropdown-menu"><a class="text-danger dropdown-item display-4" href="Accountability.html" aria-expanded="false">Accountability</a><a class="text-danger dropdown-item display-4" href="Compliance.html" aria-expanded="false">Compliance</a><a class="text-danger dropdown-item display-4" href="Environment.html" aria-expanded="false">Environment</a><a class="text-danger dropdown-item display-4" href="InspectingMines.html" aria-expanded="false">Inspecting Mines</a><a class="text-danger dropdown-item display-4" href="Safety.html">Safety</a><a class="text-danger dropdown-item display-4" href="SecuringAbandonedMines.html" aria-expanded="false">Securing Abandoned<br>Mines</a><a class="text-danger dropdown-item display-4" href="UraniumMining.html" aria-expanded="false">Uranium Mining</a></div>
                </li><li class="nav-item dropdown open"><a class="nav-link link text-danger dropdown-toggle display-4" href="index.html#gallery1-2" aria-expanded="true" data-toggle="dropdown-submenu">News &amp; Media</a><div class="dropdown-menu"><a class="text-danger dropdown-item display-4" href="Photo.html" aria-expanded="false">Photo Gallery<br></a><a class="text-danger dropdown-item display-4" href="Videos.html" aria-expanded="false">Video Gallery</a><a class="text-danger dropdown-item display-4" href="MineInspectorBlog.php" aria-expanded="false">Blog</a><a class="text-danger dropdown-item display-4" href="FortheMedia.html" aria-expanded="false">For Media<br></a></div></li><li class="nav-item"><a class="nav-link link text-danger display-4" href="Calendar.html" aria-expanded="false">Calendar</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md btn-secondary-outline display-4" href="Volunteer.html" target="_blank">Volunteer</a></div>
      </div>
    </nav>
</section>


<section class="header4 cid-qWFpgLnPZi mbr-parallax-background" id="header4-1y">
    
    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div> 
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-10 content">
                <h1 class="mbr-section-title mbr-light pb-3 mbr-white mbr-fonts-style display-2">Pierce for Arizona Mine Inspector Blog</h1>
                
            </div>
        </div>
    </div>
    
</section>

<div id="custom-html-3i" custom-code="true" data-rv-view="213" class="mbr-after-navbar"></div>
 <!-- Page Content -->
<div class="container cid-qWFp8apJiX" id="content2-1x" data-rv-view="1144">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><cms:show k_page_title /></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><cms:show my_blog_author /></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <cms:if k_page_foldertitle>
                  <cms:set my_category=k_page_foldertitle/>
                <cms:else />
                  <cms:set my_category='Uncategorized' />
                </cms:if>

                <p><a href="#"><cms:show my_category /></a> &bull; <span class="far fa-clock"></span> Posted on <cms:date k_page_date format='F jS, Y'/> &bull; <a href='#'> <cms:show k_comments_count /> Comments</a></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid" src="<cms:show blog_image />" alt=""/>
          <hr>

          <!-- Post Content -->
          <cms:show blog_content/>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <cms:embed 'comments_form.html' /> 
          </div>

          <!-- Single Comment -->
          
          <cms:comments page_id=k_page_id order = 'asc' >
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="" media-simple="true">
            <div class="media-body">
              <h5 class="mt-0"><cms:show k_comment_author />
                <small><cms:date k_comment_date format 'F j, Y' /></small>
              </h5>
              <cms:show k_comment />           
             </div>
          </div>
        </cms:comments>

          <!-- Comment with nested comments -->
          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget 
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          
          <cms:embed 'blog_sidebar.html' />
          
          <!-- Side Widget -->
          <div class="card my-4">
           
            
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>


<!-- end blog content -->


<div id="custom-html-1z" custom-code="true" data-rv-view="35">
 <section class="mbr-section" data-rv-view="41">
   <!-- <div class="mbr-section__container container mbr-section__container-isolated"> -->
             
           <div class="clearbox"><p>Paid for by Pierce for Mine Inspector, Authorized by William "Bill" Pierce</p></div>   
  <!--  </div> -->
</section>


</div>

<section class="cid-qZfTaQHKy9" id="footer1-43">

    

    
       <div class="container text-center">
            <div class="col-md-12 col-sm-12">
              
            </div>
            
            <div class="row justify-content-center">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><p>&nbsp;&nbsp;&nbsp;&nbsp;<br></p></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="assets/files/Pierce for Mine Inspector - Terms & Conditions.pdf" class="text-danger">
                        
                            TERMS AND CONDITIONS
                        
                        </a><div class="rhombus"></div><a href="assets/files/Pierce for Mine Inspector - Terms & Conditions.pdf">
                    </a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="assets/files/Pierce for Mine Inspector - Privacy Policy.pdf" class="text-danger">
                        
                            PRIVACY POLICY
                        
                        </a><div class="rhombus"></div><a href="assets/files/Pierce for Mine Inspector - Privacy Policy.pdf">
                    </a></li><li class="foot-menu-item mbr-fonts-style display-7"><br><br>
                    </li><li class="foot-menu-item mbr-fonts-style display-7"><br><br>
                    </li></ul>
            </div>
            <div class="row">
                <p class="footer-text col-md-12 col-sm-12 mbr-fonts-style mbr-text display-7"><a href="https://www.whitehattechnology.com" class="text-danger">Copyright (c) 2018 White Hat Technology LLC</a></p>
            </div>
       </div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
<input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience. Read our privacy and cookie policy">
  </body>
</html>

<cms:else />
<cms:embed 'blog_list_new.html' />
</cms:if>
  <?php COUCH::invoke(); ?>