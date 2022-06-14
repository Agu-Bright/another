<?php

session_start();
require 'functions.inc.php';
require 'dbhandler.inc.php';

$query = "SELECT * FROM `users` WHERE `usersUsername` = '$_SESSION[useruid]'";
$result = mysqli_query($conn, $query);
$result_fetch = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisetech Global - Dashboard</title>
    <meta name="description" content="Wisetech Global is at your service with its user-friendly features, secure infrastructure, and applications that make a difference. A firm for profitable investment solution, your financial stability, and freedom is our priority, join us to make your financial dreams come true">
    <meta name="keywords" content="Wisetech Global,Most Trusted Cryptocurrency Platform,wisetechglobal.com">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Wisetech Gloabl - Dashboard">
    
    <meta itemprop="name" content="WiseTech Global - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616fc12563d871634713893.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wisetech Global">
    <meta property="og:description" content="Wisetech Global">
    <meta property="og:image" content="assets/images/seo/616fc12563d871634713893.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="user/dashboard">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/templates/bit_gold//css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/templates/bit_gold//css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/templates/bit_gold//css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/templates/bit_gold//css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/bit_gold//css/vendor/slick.css">
  <link rel="stylesheet" href="assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/color.php?color=cc5454&secondColor=000000">
   <link rel="stylesheet" href="assets/templates/bit_gold//assets/css/style.css">
   
   
  <style type="text/css">
  #copyBoard{
    cursor: pointer;
  }
</style>
</head>
  <body>

    
      <style>
      .scroll-to-top{
          left:50px!important;
      }
      
      .cmn-btn{
          color:#fff!important;
      }
      
      .base--color{
          color:#fff!important;
      }
      
      .caption{
          color:#fff!important;
      }
      
      .currency-amount{
          color:#fff!important;
      }
      
      .currency-addon{
          color:#fff!important;
      }
  </style>
  
  
     
  
  
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="boxed_wrapper ltr">
    <!-- header-section start  -->

  <header class="header">

    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logoIcon/logo.png" alt="site-logo"></a>
          <ul class="account-menu responsive-account-menu ml-3">
              <li class="icon"><a href="user/dashboard"><i class="las la-user"></i></a></li>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">

              <li> <a href="dashboard.html">Dashboard</a></li>
              <li><a href="investment.html">Investment</a></li>
              <li><a href="deposite.html">Deposit</a></li>
              <li><a href="withdraw.html">Withdraw</a></li>
              <li><a href="transaction.html">Transactions</a></li>
              
              <li class="menu_has_children"><a href="#0">Referrals</a>
                <ul class="sub-menu">
                  <li><a href="refuser.html">Referred Users</a></li>
                  <li><a href="refcom.html">Referral Commissions</a></li>
                </ul>
              </li>

              <li class="menu_has_children"><a href="#0">Account</a>

                <ul class="sub-menu">
                  <li><a href="profile.php">Profile Settings</a></li>
                  <li><a href="transferbal.html">Transfer Balance</a></li>
                  <li><a href="change-password.html">Change Password</a></li>
                  <li><a href="support-ticket.html">Support Ticket</a></li>
                  <li><a href="promotional-tool.html">Promotional Tools</a></li>
                  <li><a href="twofactor.html">2FA Security</a></li>
                  <li><a href="logout.inc.php"> Logout</a></li>
                </ul>

              </li>
               <li>
                 <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
                </li>
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                  <li class="icon"><a href="dashboard.html"><i class="las la-user"></i></a></li>
              </ul>  
          
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- header__bottom end -->
  </header>
  
  <!-- header-section end  -->

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/templates/bit_gold/assets/images/banner/pictures1015.jpg);">
        <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
        <div class="auto-container">
            <div class="content-box clearfix"  style = "padding-top:30%;">
                
                <h1>Dashboard</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
            <div class="row mb-none-30">

              <div class="col-md-12 mb-4">
                <label>Referral Link</label>
                <div class="input-group">

                  <input type="text" 
                         name="text" 
                         class="form-control" 
                         id="referralURL"
                         value="<?php echo "Your referral code: $result_fetch[referral_code]" ?>"
                  readonly>

                  <div class="input-group-append">

                    <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>

                  </div>
                </div>

              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Deposit Wallet Balance</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div>
                <!-- d-widget-two end -->
              </div>


              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Interest Wallet Balance</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div>
                <!-- d-widget-two end -->
              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Investment</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div>
                <!-- d-widget-two end -->
              </div>


              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div>
                <!-- d-widget-two end -->
              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Withdrawal</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div>
                <!-- d-widget-two end -->
              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Referral Earnings</span>
                    <h4 class="currency-amount">$0</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>

            </div>
            <!-- row end -->


            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Details</th>
                        <th>Post Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan="100%" class="text-center">No Transaction Found</td></tr>
                    </tbody>

                  </table>

                </div>
              </div>
            </div>

            <!-- row end -->
          </div>
        </div>
      </div>
    </div>

    

    <!-- footer section start -->
                        
    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">

                                <figure class="footer-logo">
                                  <a href="index.html"><img src="assets/images/logoIcon/logo.png" alt="" style="width:250px;"></a>
                                </figure>
                      
                                <div class="text">
                                  <p>We are a business inclined profitable investment company we all the right tools and experts to help you grow your investment.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>74 O'Riordan St, Alexandria NSW, Australlia</li>
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:wisetechglobals@gmail.com">Support@wisetechglobals.com</a></li><!--<li><i class="fas fa-headphones"></i>Phone: +1833MAESTR0 <a href="tel:+1833-623-7870">+1833-623-7870</a></li>-->
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">

                                      <li><a href="links/privacy-amp-policy/180">Privacy &amp; Policy</a></li>
                                      <li><a href="links/terms-amp-condition/181">Terms &amp; Condition</a></li>
                                      <li><a href="user/profile-setting">Profile Settings</a></li>
                                      <li><a href="contact.html">Reach Us</a></li>
                                      <li><a >View Referred Users</a></li>
                                      <li><a >Withdraw Profit</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright"><p>&copy; 2022 <a href="index.html">Wisetech Global</a> - Investment. All rights reserved.</p></div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/templates/bit_gold//js/app.js"></script>

  <!--Personal scripts-->
<script src="assets/templates/bit_gold//assets/js/jquery.countTo.js"></script>
<script src="assets/templates/bit_gold//assets/js/scrollbar.js"></script>
<script src="assets/templates/bit_gold//assets/js/nav-tool.js"></script>
<script src="assets/templates/bit_gold//assets/js/TweenMax.min.js"></script>
<!--<script src="assets/templates/bit_gold//assets/js/jquery.nice-select.min.js"></script>-->
<script src="assets/templates/bit_gold//assets/js/script.js"></script>



<link rel="stylesheet" href="assets/templates/bit_gold/css/iziToast.min.css">
<script src="assets/templates/bit_gold/js/iziToast.min.js"></script>
<script src="//code.tidio.co/t7mzg1ep9jvjhkg4yq74l3eaetjmfclw.js" async></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

  
  
    <!-- <script>
      $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script> -->

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "change/" + $(this).val();
        });
    })();
    
</script>

</body>
</html>

  </body>
</html> 