
<!DOCTYPE html>
<html>
<head>
  <title> Side Menu</title>
  <base href="/tncorona/">
</head>
<body>

  <div class="kt-grid kt-grid--hor kt-grid--root" >
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                       
          <div class="kt-aside__brand kt-grid__item" id="kt_aside_brand">
            <div class="kt-aside__brand-logo">
                <a href="info/dashboard.php">
                <img src=" ./assets/media/company-logos/whistle.png" alt="" width="100px" height="100px" />
              </a>
                                                                 
            </div>  
          </div>

          <!-- end:: Aside -->

          <!-- begin:: Aside Menu -->
          <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
       
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
       
              <ul class="kt-menu__nav ">
         
             <!--    <li class="kt-menu__item " aria-haspopup="true"><a href="case/dashboard.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Case Analyst</span></a>
                </li> -->
             
                <li class="kt-menu__item " aria-haspopup="true"><a href="info/dashboard.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text">Info Analyst</span></a>
                </li>
                  <li class="kt-menu__item " aria-haspopup="true"><a href="reviewer/dashboard.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-mail-1"></i><span class="kt-menu__link-text">Reviewer</span></a>
                </li>
                 
                  <li class="kt-menu__item " aria-haspopup="true"><a href="tracking.php" class="kt-menu__link "><i class="kt-menu__link-icon la la-comment"></i><span class="kt-menu__link-text">Tracking</span></a>
                </li>

                <li class="kt-menu__item " aria-haspopup="true"><a href="logistics.php" class="kt-menu__link "><i class="kt-menu__link-icon fa flaticon-customer"></i><span class="kt-menu__link-text">Logistics</span></a>
                </li>
              </ul>
           
         
                  </div>
           

  </div>
</body>
</html>
