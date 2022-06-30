
<?php
session_start();
$username = $_SESSION["useruid"];

require 'dbhandler.inc.php';
// require 'mailer.inc.php';

// $sql = mysqli_query($conn, "SELECT * FROM history ORDER BY id DESC LIMIT 1");
// $transactions = mysqli_fetch_row($sql);
// echo $transactions[0];
// echo $transactions[1];
// echo $transactions[2];
// echo $transactions[3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Firmcedar - Investment Histroy</title>
    <meta name="description" content="Firmcedar Company is at your service with its user-friendly features, secure infrastructure, and applications that make a difference. A firm for profitable investment solution, your financial stability, and freedom is our priority, join us to make your financial dreams come true">
    <meta name="keywords" content="Firmcedar Company,Most Trusted Cryptocurrency Platform, wisetechglobal.com">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Firmcedar - Deposit Wallet Transactions">
    
    <meta itemprop="name" content="Firmcedar - Deposit Wallet Transactions">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616fc12563d871634713893.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Firmcedar Company">
    <meta property="og:description" content="Firmcedar Company">
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
              <li> <a href="dashboard.php">Dashboard</a></li>
              <li><a href="investment.html">Investment</a></li>
              <li><a href="deposit.html">Deposit</a></li>
              <li><a href="withdraw.html">Withdraw</a></li>
              <!-- <li><a href="transaction.html">Transactions</a></li> -->
              
              <li class="menu_has_children"><a href="#0">Referrals</a>
                <ul class="sub-menu">
                  <li><a href="refuser.html">Referred Users</a></li>
                  <li><a href="refcom.html">Referral Commissions</a></li>
                </ul>
              </li>
              <li class="menu_has_children"><a href="#0">Account</a>
                <ul class="sub-menu">
                  <li><a href="profile.html">Profile Settings</a></li>
                  <!-- <li><a href="transferbal.html">Transfer Balance</a></li>
                  <li><a href="change-password.html">Change Password</a></li>
                  <li><a href="support-ticket.html">Support Ticket</a></li>
                  <li><a href="promotional-tool.html">Promotional Tools</a></li>
                  <li><a href="twofactor.html">2FA Security</a></li> -->
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
                  <li class="icon"><i class="las la-user"></i></li>
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
                
                <h1>Investment History</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Deposite History</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->




<div class="container">
        <!-- <h2>Deposit Requests</h2> -->
       <table class="table">
          <thead>
            <tr>
              <th>Transaction Id</th>
              <th>Gateway</th>
              <th>Amount</th>
              <!-- <th>Date</th> -->
              <th>Earning</th>


            </tr>
          </thead>
          <tbody>
            <?php

                $query = "SELECT * FROM `investments` WHERE `username` = '$_SESSION[useruid]' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $query);
               while ($rows = mysqli_fetch_assoc($result)) {

            ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['Gateway'] ?></td>
                    <td><?php echo $rows['Amount'] ?></td>
                    
                    <td>
                        <?php 
                            $capital = $rows['Amount'];
                            $percentageincrease = 5;
                            //echo $x + $y; 



                            $startday = new DateTime(date("Y/m/d"));
                            $today = new DateTime();
                            $days  = $today->diff($startday)->format('%a');
                            $enddate = Date('Y/m/d', strtotime('+3 days'));
                        
                            
                        
                            // echo "<br><br>";
                        
                            //$capital = 20000;
                            $percentageincrease = 5;
                            $percentage= ($capital / 100) * $percentageincrease;
                            // $roi = $capital + $percentage;
                        
                            echo $value = $capital + $days*$percentage." "."(Increases after 24hrs)";



                        ?>
                    </td>
                </tr>
            <?php
               }
            ?>
            
          </tbody>
        </table>
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
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/logoIcon/logo.png" alt="" style="width:250px;"></a></figure>
                                <div class="text">
                                    <p>We are a business inclined profitable investment company we all the right tools and experts to help you grow your investment.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>Wordsworth Street, Sydenham, , New Zealand</li>
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:wisetechglobals@gmail.com">Support@wisetechglobals.com</a></li>
                                    
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
                <div class="copyright"><p>&copy; 2022 <a href="index.html">Firmcedar</a> - Investment. All rights reserved.</p></div>
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

// function approve() {
//   document.getElementById("approve").innerHTML = "Approved";
// }

// </script>
<!-- <button onclick="approve()" type="button" class="btn btn-primary" >Approve</button> -->


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