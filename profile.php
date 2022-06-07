<?php

require 'dbhandler.inc.php';

$sql = mysqli_query($conn, "SELECT * FROM users ORDER BY usersId DESC LIMIT 1");
$transactions = mysqli_fetch_row($sql);
// echo $transactions[1];


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="9WeLemPzhjVmqyRZbHFJlYk2NyqMGedMCz8GsY1D">
    <title>Wisetech Global - Deposit Methods</title>
    <meta name="description" content="Wisetech Global Company is at your service with its user-friendly features, secure infrastructure, and applications that make a difference. A firm for profitable investment solution, your financial stability, and freedom is our priority, join us to make your financial dreams come true">
    <meta name="keywords" content="Wisetech Global Company,Most Trusted Cryptocurrency Platform,mutualassets.net">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Wisetech Global - Deposit Methods">
   
    <meta itemprop="name" content="Wisetech Global - Deposit Methods">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616fc12563d871634713893.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wisetech Global Company">
    <meta property="og:description" content="Wisetech Global Company">
    <meta property="og:image" content="assets/images/seo/616fc12563d871634713893.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="user/deposit">
    
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
  
  <?php

  require 'something.php';

  ?>
  <!-- header-section end  -->

        <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/templates/bit_gold//assets/images/banner/pictures519.jpg);">
        <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
        <div class="auto-container">
            <div class="content-box clearfix"  style = "padding-top:30%;">
                
                <h1>Profile Setting</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>profile setting</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="cmn-section mt-5 mb-5">
        <div class="container">
                <div class="card">


                    <form action="profile.inc.php" method="post" > 
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' name="image" id="imageUpload" class="upload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload" class="imgUp"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div class="imagePreview" style="background-image: url(assets/images/default.png)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" class="form-control form-control-lg" placeholder="First Name" value=" <?php echo $transactions[1]; ?>">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Last Name" value="<?php echo $transactions[3]; ?> ">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control form-control-lg" placeholder="Username" value=" <?php echo $transactions[2]; ?>" >        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="country" class="form-control form-control-lg" placeholder="Email" value="">        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile </label>
                                            <input type="text" name="mobile" class="form-control form-control-lg" placeholder="Mobile" value="" >        
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" name="state" class="form-control form-control-lg" placeholder="BTC Address" value="">        
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control form-control-lg" placeholder="Usdt" value="">        
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control form-control-lg" placeholder="eth" value="">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="text" name="zip" class="form-control" value="" >    
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>BTC Address</label>
                                            <input type="text" name="btc" class="form-control form-control-lg" placeholder="optional" value="">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Usdt Address</label>
                                            <input type="text" name="usdt" class="form-control form-control-lg" placeholder="optional" value="">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ETH Address</label>
                                            <input type="text" name="eth" class="form-control form-control-lg" placeholder="optional" value="">        
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control form-control-lg" placeholder="City" value="">        
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-md w-100 cmn-btn">Update</button>
                    </div>
                    </form>
                </div>
            </div>
    </section>
    




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
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:wisetechglobal@gmail.com">wisetechglobal@gmail.com</a></li>
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
                                        <li><a href="180.html">Privacy &amp; Policy</a></li>
                                        <li><a href="181.html">Terms &amp; Condition</a></li>
                                        <li><a href="profile-setting.html">Profile Settings</a></li>
                                        <li><a href="contact.html">Reach Us</a></li>
                                        <li><a href=" ">View Referred Users</a></li>
                                        <li><a href=" ">Withdraw Profit</a></li>
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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
        $(document).ready(function(){
            "use strict";
            $('.deposit').on('click', function () {
                var id = $(this).data('id');
                var result = $(this).data('resource');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "USD";
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');

                var depositLimit = `Deposit Limit: ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `Charge: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').text(`Payment By  ${result.name}`);
                $('.currency-addon').text(baseSymbol);

                $('.edit-currency').val(result.currency);
                $('.edit-method-code').val(result.method_code);
            });
        });
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

</body>
</html>