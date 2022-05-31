<?php

    session_start();
    
    
?>
    
    
    
    
    <div class="boxed_wrapper ltr">
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logoIcon/logo.png" alt="site-logo"></a>
          
          <ul class="account-menu responsive-account-menu ml-3">
            <li class="icon"><a href="dashboard"><i class="las la-user"></i></a></li>
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
                    <li><a href="profile.html">Profile Settings</a></li>
                    <li><a href="transferbal.html">Transfer Balance</a></li>
                    <li><a href="change-password.html">Change Password</a></li>
                    <li><a href="support-ticket.html">Support Ticket</a></li>
                    <li><a href="promotional-tool.html">Promotional Tools</a></li>
                    <li><a href="twofactor.html">2FA Security</a></li>
                    <li><a href="logout"> Logout</a></li>
                  </ul>
              </li>

               <li><div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>

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
    </div>
    <!-- header__bottom end -->
  </header>