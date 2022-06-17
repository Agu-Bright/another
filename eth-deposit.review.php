<?php

require 'dbhandler.inc.php';

$sql = mysqli_query($conn, "SELECT * FROM history ORDER BY id DESC LIMIT 1");
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
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxESEhIQExIVFhUVFxcVFhUSEA8XFxUWFRUWGBUSGhcYHSggGBolGxcXITEhJikrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0NDi0ZFRktKystLSsrKysrLSsrKysrKysrKystKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAMgAyAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAECBQYHAwj/xAA4EAACAgACBgYIBgIDAAAAAAAAAQIDBBEFBiExQXESEzJRYYEHFCIjM1JysUJikcHR8EOhgpLh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFhEBAQEAAAAAAAAAAAAAAAAAABEB/9oADAMBAAIRAxEAPwDuIAAAAAAUbAqUbPGy/uPGU2wlSZXJHlLEHiCi92vvLW2UAAqpMoAi9WvvL1iGeICpcbky9Mgl0ZtEKmg8K7+89kwqoAAAAAAAAAAAFs55AJzSItlrZbOWZQqAACAAAAHhjcVGqErJPZFZv9lzYGva+aalRRKFcsrJRbzW+MVx5trL9SZqbrBHHYaFyy6a9m2K/DYlt8nvXM55rBjJXK+2W+UZeSy2R5JGvejvWX1LErpv3NuULe5fLZ5P/TYV9AAonntRUIAAAX12tFgCpsJplxBhLImQnmQXAAKAAAAGwLZyyRDlLMvunmzzKgAAgAAAAAGj66aV6c+oi/Zhtl4z7vL7mx6xaU9Xqcl25ezDnxl5fwc1bz2sKj6Q+FZ9Evsc9OhaQ+FZ9Evsc9IrtXom1m6+n1SyXvaV7Lb2zq4c3HdyyN/PmTQelbMLfXiK37UHnlwkvxQfg1sPo/RGkq8TTXiK3nCyKku9d8X4p7ComAAIAAAVjJooAJsJZouIdM8mTEyNAAAHhiJ8D2bIdjzYTVoAKgAAAAAFJSSTbeSW1vuS4lTVtddK9GKw8Xtltnlwjwj5/bmFa3p/SbxFrn+FezBfl7/PeY0ACPpD4Vn0S+xz06FpD4Vn0S+xz0ih0T0R6zdTa8FZL3dzzrb/AA2/L4KX3S7znZWMmmmnk1tTW9NbmB9UA1rUHWRY7CxnJ+9ryhavzJbJ8pLbzzNlKyAAAAABIw8+BHLq3kwqaCiYIqy6WSIh7Yl8DxKgAAgAAAAAi6Txsaa5Wy3RWxd7e6Jy/FYiVk5WSecpPN/xyM3rhpXrbOqi/YreX1T4vy3fqa+FAABH0h8Kz6JfY56b9pa+EKrOlJLOLyze/YaAmRVQABsGpGsTwOKjbt6uXsWrvg32ucd68z6HqsUoqUWnGSTTW5prNNeR8sHXvRBrN04PAWP2q05VN8a+MOcd/J+ATXSwAVAAAAABLolmih54aXD+/wB2AjSy57WWFZPaUKgAAgAABhNatK9RV0Yv255qPgvxS/vEzF1sYRc5PJRTbfckcw0zpB32yse7dFfLFbl+4VCBjcbpumvZn0pd0f3e4wGN09bPNJ9CPdHf/wBgNmxukaqu1JZ/Ktsv0MDjdY5yzVa6K73tl/CMG2UIpi7ZSUnJtvJ7W8zB12OO55GZu7MuTMIBNqx3zLzRLhYnueZhysW1uAzJJ0bjp0W131vKdclKL8Vwfg9xhqsa1v2/cmVXxluflxA+m9XdMV4zD14mG6a2rjGa2Sg+TMkcO9Fes3quI9XseVN7S27oWboy5Psvy7juJUAAEAABfS9qBbHeAqgKy3lAgAAAAA0z0l6Svppiq6Zzre2yccsllujLLalx3ZHGsbpW23tSyXyx2L/0+l33f3I0jWn0b4bE52UZUW+C93J+MV2X4oK4kDJ6d0BicHPoX1uOfZlvhLxjJbHy3mMIoAALLuzLkzCGbu7MuTMIAAAAA2rVHULGaQalCHV08brE1H/it83y2eIGvUYmaaSzl3Lbn5ZbT6a1ExWKswVLxVUq7Uuj7eXSnFdmxrem1392fEi6o6g4PAZShHrLuN1iTkn+RboLltNpTW3w3+BUVAAQAAAFY7wFXXLayw9sTHj/AH+7DxAAAIAACDpbByshnXJwtjthJf7i+9MwmjNbFn1eIj0JJ5OSWzNfMuBtJqWuehs16zBbV8RLivn8uIVsmIoqvrcJxhZXJbmlKLOa60+i3tW4KXj1E3/qE39n+pdovS92HecJbOMXti/Lh5G66H1lpuyjL3c/lk9jf5Xx5AfPmMwllU3XZCUJx3xmmmvI8T6R07q/hsZDoX1qWXZktk4+MZLb+xybWn0b4nDZ2UZ31flXvIrxit68V+iINEu7MuTMIZu/sy5MxOFw07ZxrrhKc5PKMYRcpN9ySCvIyegdAYnG2dVh6pTlxa2Rgu+UnsijpGp3ofnLo24+XQW9UVy9p+E5rs8lt8UdcwOCowtXV1whVVBbklGKS4t8ebCVoWp/olw2H6NuLaxFu/oZPqYvk9s3z2eBvmktJUYWvrLrI1wWxZ7P+MUt/JGja1elGqrOvCJWz3OyWfVx+njP7czlWktJYjF2dO2c7ZyeSz2790YxWxckB0zE684nSF6wWj4uuMu1fJZzUF2rEt0F+r2rcdF0ZgIUVRqhm1FbZSbcpyfanJvfJva2a96PNVVgaM5pdfak7H8q3qpcuPibWUAAEAABfStqBfhlxBFx63xzREJzRDsWTBq0AFQAAAo1nsZUAc51m0P6vZnFe7ntj4d8P7wMMdV0lgY31yqlue59z4SRzHH4SdNkq5rbF+TXBrwYVldD6zXU5Rl7yHdJ7Vyl+zN00Zpem9Zwlt4xeyS8v3OXl1dji1KLaa3NNprzA3TWnUTCY1OTi6rX/lqSTf1R3S57ydqzqphMBDo4epKT7VkvaslzlwXgthg9Ha6OuL9YTlGKb6cUulsXFcTRNavSRicTnXTnRU/lfvJL801u5L9WB0bWrX3CYPOCfW3L/HW17L/PLdHlvOQay63YrHP3s8q+FUM1Bc1+J+LMCCKHUPRLql0mtIXR2L4EWt743cluXjtNU1E1Xlj8QovNUwylbLw4QT+aX2zPoGmqMIxhFKMYpRjFLJJJZJJd2QReACoAAAAXVrNgSaI5IoeiQI0qeGIhxPcNAQAX3QyZYVkAAAAADBa1aG6+vpxXvILZ+aPGP8GdAHIAbRrjoboS9YgvZk/bS/DJ/i5P7mrhUfSHwrPol9jnp0LSHwrPol9jnpFCTo3A2X2woqj0pzfRiv3fclvfIjHbfRbql6tV61bH31sdie+ut7UvCT2N+SA2XVbQNeCw8KIbWts58Zzfal+y8DLgFZAAAAAAkYeHE86YZslpEXAABQAAWzjmiHKOROLZwzAhArOORQrIAAAAAsuqjOLhJZxksmnxTOaad0XLD2uG+L2wl3x/lHTjH6c0ZHEVOD2SW2Eu6X8MK5RpD4Vn0S+xz06LpemUIXQkspRjJNPg0jUtVNAWY7EQohsXasnwhBb5c+CXeRWzeizVL1m31u2Puan7Kf8AksW5fTHe/HJHayNo7A10VQprj0YQioxXguL7297feySVAABAAACsY5iMcyXXDIKrCOSLgCKAAAAAAAAtnBMi2VNEwo0BBBIso7jxlBoqLQAEAABqevegZXVTtqjnZ0XFxW+ayyXmvsSdRdWI4DDqDyds8pWyXzcIJ/LHd+rNjAUAAQALowbAtL66mz1ro7z3SIsWwgkXABQAAAAAAAAAAAAAKNAAWSpTPKWHYAFjqfcWuLAKihXosAC5VPuL1h2AQj1jSkXpABVQAAAAAAAAAB//2Q=="/>
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
                              <li class="list-group-item">Amount: <?php echo $transactions[3];?> eth</li>
                              <li class="list-group-item">Charge: 0 eth</li>
                              <li class="list-group-item">Payable: <?php echo $transactions[3];?> eth</li>
                              <li class="list-group-item">In Dollars: <?php echo $transactions[3];?> </li>
                          </ul>
                        </ul><a href="eth-deposit-confirm.php"  class="btn btn-block py-3 font-weight-bold mt-4 cmn-btn">Confirm</a>
                                                
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