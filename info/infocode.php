<?php
 
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email='$email' and password='$password'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             {    
             
             
               if($rows['email']=='tncoronaspeak@nixwhistle.com'&& $rows['password'] == 'tncoronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/officeops/info/dashboard.php");
               // break;
               }
             
           
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
}
?>

<?php
 include '../php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
   
      $sql="SELECT ran FROM `case` where ran='$ran' ";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran )
               {
                  echo "Sucessfully";
                header("location:/officeofops/case/followup.php?ran=".$rows['ran']);
               }
             }
            
               else
               {
                 $sql="SELECT ran FROM `info` where ran='$ran' ";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran )
               {
                  echo "Sucessfully";
                header("location:/officeofops/info/followup.php?ran=".$rows['ran']);
               }
             }
               }
  }
?>
<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title></title>
        <meta name="description" content="Wizard examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin:: Global Mandatory Vendors -->
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                    
                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

        <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
          <style type="text/css">
    #banner{
    /*background-image: url('png/front.png');*/
    /*height: 450px;*/
    box-sizing:cover;
/*    background-position: right;
*/      background-repeat: no-repeat;
align-items: center;
  }
  @media only screen and (max-width: 767px) {
  #banner{
 /*background-image: url('png/front.png');*/
        height: 250px;
/*        width:100%;
*/  
 box-sizing:cover;
      background-repeat: no-repeat;
  }

  }
.banner-container {
    width: 50%;
    /*position: relative;*/
  /*  top: 190px;
    left: 100px;*/
}
@media only screen and (max-width: 767px)
{
.banner-container {
   
    top: 0!important;
    left: 0!important;
    width: 100%!important;
}
}
.banner-container .heading {
    text-align: left;
    margin-bottom: 20px;
    line-height: 60px;
    font-size:42px;
  color:#2d2d2d;
  font-family: "Open Sans";
}
.sub-heading
{
      font-size:22px;
      color: #2d2d2d;
}
.text
{
  color: #252525;
  margin: 15px auto;
   font-size:18px;
}
.hl-help {
    width: 70%;
    margin: 0 auto 200px;
}
.hl-help .title {
    text-align: center;
    color: #171717;
    font-size: 35px;
    margin-bottom: 40px;
    font-weight: 300;
}

div {
    display: block;
}
.hl-help .help-container .content-container {
    text-align: left;
    padding-left: 1em;
}
.hl-help .help-container span:first-child {
    color: #bababa;
    font-size: 70px;
    font-weight: 600;
    margin-right: 7px;
}
.hl-help .help-container .details {
    color: #2d2d2d;
    font-size: 18px;
    font-weight: 600;
    width: 60%;
    display: inline-block;
}
@media only screen and (max-width: 767px)
{
.hl-help .help-container .details {
    font-size: 14px!important;
    width: 68%!important;
    margin-bottom: 8px;

}
}
@media only screen and (max-width: 767px)
{
#details {
  margin-top: -300px;

}
}
.hl-help .help-container .desc {
    color: #444;
    font-size: 15px;
    line-height: 26px;
    margin: 14px 0;
    width: 85%;
}
.hl-experts .title {
    background-color: #f4f6f8;
    text-align: center;
    padding-top: 150px;
}
@media only screen and (max-width: 767px)
{
.hl-experts .title {
    padding-top: 255px!important;
}
}
#shadow
{
display: inline-block;
  box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
  width:90%;
  margin-left: 80px;
 
}
@media only screen and (max-width: 767px)
{
  #shadow
{
display: inline-block;
 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
margin-left: -1px;
width:100%;


}
}
/*@media only screen and (max-width: 767px)
{
.card-body
 {
 position: fixed;
 }
}*/
.tab button:hover {
  background-color: #afd135;

}
.banner-container .home-actions {
    margin-bottom: 15px;
}
.banner-container .home-actions span {
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;
}
.banner-container .chat {
    background: #034ea2;
  }
.banner-container .appointment {
    background: #afd135;
  }
  /*#head1:hover
  {
    background-color: #034ea2;

  }
   #head2:hover
  {
    background-color: #afd135;
   
  }*/

#mental, #anonymous{
  font-size:35px;
  color:#ffffff;
  background-color: #034EA2;
  box-shadow: 0px 0px 4px #494848;
  border-radius: 50%;
  padding: 0.1em 0.3em;
}
#tracksub {
  font-size: 35px;
  color: #ffffff;
  border-radius: 50%;
  box-shadow: 0px 0px 5px #494848;
  padding: 0.1em 0.3em;
  background-color: #AFD135;
}
</style>
<style>
.zoom {

  transition: transform .2s; /* Animation */

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
#disc
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
#content
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
.kt-font-transform-u
{

    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 18px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;

}
</style>
    <style type="text/css">
          .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom:solid white 1px;
        padding: 3px 10px;
        width: 700px;
        font-size: 16px;
    }
     .wid{
      position: relative;
      height: 40px;
    }
      .image {
      position: absolute;
      right: 24px;
      bottom: 149px;
    }

.imageandtext {
  position: relative;
}
.image_grid {
  display: inline-block;
  padding-left: 5px;
}
.image_grid img {                       /*  added rule  */
  display: block;
}

.image_grid input {
  display: none;
}
.image_grid input:checked + .caption {
  background: rgba(0,0,0,0.5);
}
.image_grid input:checked + .caption::after {
  content: '✔';    
  position: absolute;
  top: 60%; left: 51%;
  width: 30px; height: 30px;
  transform: translate(-50%,-50%);
  color: #CB3A29;
  font-size: 20px;
  text-align: center;
  border: 3px solid #CB3A29;
  border-radius: 50%;
}
@media screen and (min-width: 1024px) {
  .resp {
    position: absolute;
    margin-left: 1140px;
    margin-top: 100px;
  }
  .sub {
    margin-left: 100%;
  }
}
 </style>
    </head>
<!-- <script type="text/javascript">
  function closeWin()
  {
    Swal.fire({
      title:'Good job!',
  text:'Your Case has been created!',
  type:'success'
  }).then(function() {
      window.location="/officeofops/intro.php";
  });
  }
</script> -->
<?php
  include "../new_nav_header.html";
?>
  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"> <br><br>
   
<?php

$sql = "SELECT ran,district from info order by id DESC limit 1";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result))
{

?>

<div class="container">
<button type="button" class="btn btn-info" onclick="window.location.href='/officeofops/intro.php'" style="float: right;background-color: #034ea2;"> << Back</button>
</div>


          <div class="container">

          <div class="container" style="padding-left: 20%;">
            <div>
<!--                 <div class="" style="text-align: center;font-size: 20px;"><strong>WhistleBlower - Remember this is for future use</strong></div> -->
              <div class="modal-body" style="text-align:center;">
               <div class="form-group">
                <h3 style="color: red">We have received your assistance requirement submission. <br> Our Task force will review and revert to you at the earliest. <br>
                  <br>
In case of emergency, Please contact your <br> District Control Room Number- <br> District STD Code-1077<br></h3><br>
                <label style="font-size: 20px;"><b>Info Number</b></label><br>
                <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color:black;font-size: 36px;"><?php echo substr($row['ran'], 0, 4) . "  " . substr($row['ran'], 4, 4) . "  " . substr($row['ran'],8,4) . "  " . substr($row['ran'], 12, 4);?></span>
                <input type="text" id="copy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['ran']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="cpybtn" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
            </div>

             

            <div>
                <div class="form-group" style="text-align: center;">
                  <label style="font-size: 16px;"><span style="color: black; font-size: 34px;">Please note this down for status tracking.</span></label>
                </div>
              </div>
            </div>
          </div>
<?php
}
  }
?>
<?php include '../new_footer.html'?>
<script type="text/javascript">
  const myInp = document.getElementById("copy");
  const btnCopy = document.getElementById("cpybtn");

  btnCopy.onclick= function() {
    myInp.select();

    document.execCommand("Copy");
  }

 

</script>
<script type="text/javascript">
  const myInp1 = document.getElementById("secCopy");
  const btnCopy1 = document.getElementById("cpySec");

  btnCopy1.onclick= function() {
    myInp1.select();

    document.execCommand("Copy");
  }

</script>
<script type="text/javascript">
  const myInp2 = document.getElementById("together");
  const btnCopy2 = document.getElementById("tog");

  btnCopy2.onclick= function() {
    myInp2.select();

    document.execCommand("Copy");
  }
</script>

<script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
   
    <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            </body>
    <!-- end::Body -->
</html>

</body>
</html>


<!-- Modified on 24-04-2019 -->