<?php

require 'dbhandler.inc.php';

$sql = mysqli_query($conn, "SELECT * FROM usdt_histroy ORDER BY id DESC LIMIT 1");
$transactions = mysqli_fetch_row($sql);


    
    
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisetech GLobal - Deposit Wallet Transactions</title>
    <meta name="description" content="Wisetech Global Company is at your service with its user-friendly features, secure infrastructure, and applications that make a difference. A firm for profitable investment solution, your financial stability, and freedom is our priority, join us to make your financial dreams come true">
    <meta name="keywords" content="Wisetech Global Company,Most Trusted Cryptocurrency Platform, wisetechglobal.com">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Wisetech Global - Deposit Wallet Transactions">
    
    <meta itemprop="name" content="Wisetech Global - Deposit Wallet Transactions">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616fc12563d871634713893.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wisetech Global Company">
    <meta property="og:description" content="Wisetech Global Company">
    <meta property="og:image" content="assets/images/seo/616fc12563d871634713893.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="user/transactions/deposit-wallet">
    
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
              <li><a href="deposit.html">Deposit</a></li>
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
                  <li><a href="user/profile-setting">Profile Settings</a></li>
                  <li><a href="user/transfer-balance">Transfer Balance</a></li>
                  <li><a href="user/change-password">Change Password</a></li>
                  <li><a href="ticket">
                    Support Ticket</a></li>
                  <li><a href="user/promotional-tool">Promotional Tools</a></li>
                  <li><a href="user/twofactor">2FA Security</a></li>
                  <li><a href="logout"> Logout</a></li>
                </ul>
              </li>
               <li>
                 <div id="ytWidget">
                 
               </div>
               <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>

               </li>
          </ul>


            <div class="nav-right">
              <ul class="account-menu ml-3">
                  <li class="icon"><a href="user/dashboard"><i class="las la-user"></i></a></li>
              </ul>  
          
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/templates/bit_gold//assets/images/banner/pictures519.jpg);  ">
        <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
        <div class="auto-container">
            <div class="content-box clearfix"  style = "padding-top:30%;">
                
                <h1>Payment Review</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Payment Review</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->



   

    <center>
    <section class="cmn-section">

    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group text-center" style= "align-items: center;">

                            <li style = "width:500px; height: 500px; overflow: hidden; border: none;" class="list-group-item p-prev-list mt-5 mb-5">
                                <img src="data:image/png;base64,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"/>
                            </li>
                            
                            <!-- <p class="list-group-item">
                                Amount:
                                <strong>1000 </strong> USD
                            </p>
                            <p class="list-group-item">
                                Charge:
                                <strong>0</strong> USD
                            </p>
                            <p class="list-group-item">
                                Payable: <strong> 1000</strong> USD
                            </p>
                         
                            <p class="list-group-item">
                                In DOLLARS:
                                <strong>1000</strong>
                            </p> -->

                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Amount: <?php echo $transactions[3];?> usdt</li>
                              <li class="list-group-item">Charge: 0 usdt</li>
                              <li class="list-group-item">Payable: <?php echo $transactions[3];?> usdt</li>
                              <li class="list-group-item">In Dollars: <?php echo $transactions[3];?> </li>
                          </ul>
                        </ul><a href="usdt-deposit-confirm.php"  class="btn btn-block py-3 font-weight-bold mt-4 cmn-btn">Confirm</a>
                                                
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    </center>



    
     



    

    <!-- footer section start -->
                        
    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/logoIcon/logo.png" alt="" style="width:250px;"></a></figure>
                                <div class="text">
                                    <p>We are a business inclined profitable investment company we all the right tools and experts to help you grow your investment.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>Wordsworth Street, Sydenham, , New Zealand</li>
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:wisetechglobal@gmail.com">support@wisetechglobal@gmail.com</a></li>
                                    
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
                                        <li><a href="contact">Reach Us</a></li>
                                        <li><a href="user/referral/users">View Referred Users</a></li>
                                        <li><a href="user/withdraw">Withdraw Profit</a></li>
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
  <!-- <script src="assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <!-- <script src="assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- slick slider js -->
  <script src="assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <!-- <script src="assets/templates/bit_gold//js/vendor/wow.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- dashboard custom js -->
  <script src="assets/templates/bit_gold//js/app.js"></script>

  
  <!--Personal scripts-->
<script src="assets/templates/bit_gold//assets/js/jquery.countTo.js"></script>
<script src="assets/templates/bit_gold//assets/js/scrollbar.js"></script>
<script src="assets/templates/bit_gold//assets/js/nav-tool.js"></script>
<script src="assets/templates/bit_gold//assets/js/TweenMax.min.js"></script>
<script src="assets/templates/bit_gold//assets/js/script.js"></script>
<script src="//code.tidio.co/44wnsett5q987nispfzelf3u6gvrc6ah.js" async></script>



  <link rel="stylesheet" href="assets/templates/bit_gold/css/iziToast.min.css">
<script src="assets/templates/bit_gold/js/iziToast.min.js"></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

  
  


<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "change/" + $(this).val();
        });
    })();
    
</script>
<!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="810bb48a-ded2-4e67-b2db-53129045fa2b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->
</body>
</html>

  </body>
</html> 