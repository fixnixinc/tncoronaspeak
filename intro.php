<?php
 include 'php/common/config.php';
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
                header("location:/tncorona/info/dashboard");
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
 include 'php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
 
      $sql="SELECT ran FROM `case` where ran='$ran' ";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran)
               {
                  echo "Sucessfully";
                header("location:/tncorona/case/followup?ran=".$rows['ran']);
               }
             }
           
               else
               {
                 $sql="SELECT ran FROM `info` where ran='$ran' ";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran)
               {
                  echo "Sucessfully";
                header("location:/tncorona/info/followup?ran=".$rows['ran']);
               }
             }
               }
  }
?>

<?php
   $target_dir = "./documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['login']))
   {
     $category=$_POST['info'];
      $category1=$_POST['selimg'];
          $district=$_POST['district'];
           $Description1=htmlspecialchars($_POST['Description1']);
           $name1=$_POST['name1'];
           $email1=$_POST['email1'];
           $phone1=$_POST['phone1'];
               $ran1=$_POST['tipno1'];
                $secretkey1=$_POST['passkey1'];
               
                 $status1="created";
                $Artifacts=$_FILES['Artifacts']['name'];


 $sql1="INSERT INTO `info` (category,district,Description,name,email,phone,ran,secretkey,Artifacts,status)
     values('$category1','$district','$Description1','$name1','$email1','$phone1','$ran1','$secretkey1','$Artifacts','$status1')";

        if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:./info/infocode");
        }
        else
        {
           echo "Error: " . $sql1 . "<br>" . $link->error;
          }
   
     
     
      }
 
?>


<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/"><!--end::Base Path -->
        <meta charset="utf-8"/>

       <title>Corona Speak | Coronavirus Prevention and Updated News</title>
        <meta name="description" content="Support center home example">
   

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="assets/css/demo2/pages/support-center/home-2.css" rel="stylesheet" type="text/css" />
     <link href="./assets/css/demo2/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
 
        <link rel="stylesheet" href="./assets/flags/country-flag.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="./assets/flags/country-flag.js"></script>
        <script src="assets/static/country_to_code.json"></script>
        <script src="assets/static/code_to_country.json"></script>
        <script src="assets/static/latlng.json"></script>
        <script src="assets/data/data.json"></script>
        <script src="https://d3js.org/d3.v4.js"></script>
        <script src="assets/js/today.js"></script>

    </head>
    <?php include 'new_nav_header.html'; ?>
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


    <body  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--transparent kt-page--loading">
        <div class="kt-portlet__body" id="banner">
   <div class="">
    <div class="heading" style="text-align: center;font-size: 28px;">
Welcome to the online Corona Helpdesk
</div>
<!-- <div class="heading">

  Get help. Get better.
</div> -->
<!-- <div class="sub-heading">
No matter what's troubling you, get the support you need, right now from Tamilnadu government. We’re in This together
</div><br> -->

<!-- <div class="home-actions"> -->

<!-- <span class="appointment button"><a href="https://telegra.ph/TN-Corona-Speak-03-27" style="color: white;">CHAT NOW</a></span> -->
<!-- </div> -->

</div>
 
</div>

<br>
<p style="text-align: center;font-size: 18px;">
  Please Submit the form below for assistance.
 </p>
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                      <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

 <div class="kt-grid__item kt-grid__item--fluid" style="margin-top: -30px;" >
    <!-- begin:: Hero -->
<div class="kt-portlet">

<!-- SpeakUp  start -->

 <div class="kt-container  kt-grid__item kt-grid__item--fluid" id="content" style="margin-top:30px;">
                                         <div class="kt-portlet">
           <!--  <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    TITLE
                    </h3>
                </div>
            </div> -->
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <!-- <li class="nav-item" >
                        <a class="" data-toggle="tab" href="#kt_tabs_1_1">
                            <i class="la la-comment" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:20px;font-weight: 500;color: black;">CASE</label>
                        </a>
                    </li>
                -->
                    <li class="nav-item">
                        <a class="">
                            <i class="flaticon-presentation" style="font-size: 50px; color: #afd135;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">Assistance Required</label>
                        </a>
                    </li>
             
                </ul>
                <div class="tab-content">
                   
 <div class="tab-pane active" id="kt_tabs_1_3" role="tabpanel">
      <form class="kt-form" method="post" enctype="multipart/form-data" onsubmit="valid_phone()">
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" style="padding-left: 10%; padding-right: 10%;">
                        <div class="kt-heading kt-heading--md" style="font-size: 18px; font-weight: 300"></div>
                        <div class="kt-form__section kt-form__section--first">
                            <div class="kt-wizard-v1__form">
                                <div class="form-group">
                                 <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Subject:</label>
                    </div>  

                              <div class="row">
                                   <div class="grid-two imageandtext">
<div class="imageandtext image_grid">
    <label for="selimg6" style="text-align: center;">Medical Assistance <br><br>
     <i class="flaticon-network" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg6" value="Medical Assistance">
    <div class="caption">
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg1" style="text-align: center;">Death <br><br>
     <i class="flaticon-bus-stop" style="font-size: 50px; color: #4b830d;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg1" value="Death">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="imageandtext image_grid">
    <label for="selimg3" style="text-align: center;">Emergency Travel Needs<br><br>
       <i class="fa fa-bus-alt" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg3" value="Emergency Travel Needs">
    <div class="caption">
     
    </div>
  </div>
<div class="imageandtext image_grid">
    <label for="selimg2" style="text-align: center;">Neighbourhood Alert<br><br>
    <i class="fa fa-hands-helping" style="font-size: 50px; color: #4b830d;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg2" value="Neighbourhood Alert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <div class="imageandtext image_grid">
    <label for="selimg5" style="text-align: center;">Others <br><br>
      <i class="fa fa-ambulance" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg5" value="Others">
    <div class="caption">
     
    </div>
  </div>

</div>
           
                                  <!--   <span class="form-text text-muted">Please enter your Address.</span> -->
                                </div>
                                        <div class="form-group">
                                               <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">District:</label>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                                                                                       
<select id="district" name="district" class="form-control" style="border-color:#B8B8BB;background:transparent;">
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Kauru'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Peramabalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>
         <option value="Others" data-title="Others">Others</option>
</select>                     </div>
                                  </div>
                                </div>
                                   
                                    <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Brief Note On Assistance Required:</label>
                    </div>  
                         <textarea type="text" rows="8" class="form-control" name="Description1" id="Description1"></textarea>
                                </div>
                               <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Relevant Attachments (If any):</label>
                    </div>  
                     <div class="form-group">
       
          <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
            <div class="dropzone-msg dz-message needsclick">
                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                <label for="Artifacts" aria-hidden="true">
        <i class="fa fa-cloud-upload-alt" style="font-size: 30px;"></i>
                 <input type="file" name="Artifacts" id="Artifacts" style="display: none;">
               </label>
            </div>
          </div>
        </div>
      </div>

                                        <div class="form-group">
                                 
                     <div class="form-group">
             
   
      </div>
     </div>
           <div id="details1" style="margin-top: 52px;">
            <div class="row">
         <div class="col-md-4">
           <input type="name" placeholder="FullName" id="name" name="name1" class="form-control" required="" style="font-size: 30px;height: 60px;">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="tel" placeholder="Phone" id="phone" name="phone1" class="form-control" required="" maxlength="10"style="font-size: 30px;height: 60px;">&nbsp;
      </div>
      <div class="col-md-4">

        <input type="email"  placeholder="Email" id="email" name="email1" class="form-control" style="font-size: 30px;height: 60px;">

      </div>


  </div>
</div>




                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="passkey1" id="passkey1">
          <input type="hidden" name="tipno1" id="tipno1">
                   <div style="text-align:center">  
    <input type="submit" name="login" id="info" value="submit" class="btn btn-success" style="display: inline-block;border-radius: 8px solid transparent;border:2px solid #afd135;color:#fff;background:#afd135;width: 30%;" >
</div>  
                </form>


 </div>

 
             
              </div>
            </div>
          </div>
        </div>
<!-- SpeakUp end  -->
      


    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div>
<div class="kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="step-first">
     
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper" style="background-image:url('png/backimg4.jpg');">
        <!--begin: Form Wizard Form-->
        <form class="kt-form" id="kt_form" >
          <div id="current" >
          <!--begin: Form Wizard Step 1-->
          <!-- <div class="kt-wizard-v2__content" data-ktwizard-type="step-content" data-ktwizard-state="current" > -->
            <!-- <div class="kt-heading kt-heading--md">Enter your Account Details</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v2__form">
                 <div class="row">
                  <div class="col-md-12" id="worldmap">
                
 <script type='text/javascript'>                    
           var divElement = document.getElementById('viz1587030737912');                    
         var vizElement = divElement.getElementsByTagName('object')[0];                  
          vizElement.style.minWidth='420px';vizElement.style.maxWidth='820px';vizElement.style.width='100%';vizElement.style.minHeight='587px';vizElement.style.maxHeight='887px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                  
            var scriptElement = document.createElement('script');                  
             scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';              
                  vizElement.parentNode.insertBefore(scriptElement, vizElement);      </script>
                                                        </div>
                                                       
                                                </div>

               

              </div>
            </div>
          </div>
        </div>
          <!--end: Form Wizard Step 1-->



          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v2__content" data-ktwizard-type="step-content" id="map">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v2__form">
         
               <div class="col-md-12" id="corona_logo">
                 <div class="card" style=" box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;">
                      <div class="header" style="background: #afd135;height: 6px;">
                                   </div>
          
          </div>
      
          <div class="kt-form__actions">
        
          </div>
          <!--end: Form Actions -->
        </form>
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
</div>
</div>


       <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

      <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<!-- <script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>

<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>


<script src="assets/js/table.js"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->
          <script src="./assets/js/demo2/pages/wizard/wizard-2.js" type="text/javascript"></script>


<script src="assets/js/anna.js"></script>

<script src="assets/js/ready.min.js"></script>
<!-- <script src="assets/js/demo.js"></script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <script src="assets/js/graph.js"></script> -->
<script src="assets/js/graph2.js"></script>
<script>
        $(".th").css("width",document.getElementById("corona_logo").clientWidth)
        $(".anna").css("height","450px");
        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
        console.log(document.getElementById("corona_logo").clientHeight + "ANNA ");
        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);

        $(window).resize(
                function resize_my(){
            // console.log("BETI");
            console.log("HIHIHI")
                        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
                        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
                        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);
                        console.log($("#regions_div").css("width"));
                        drawRegionsMap();
                        // $("#my_dataviz_1").css("height","400");//document.getElementById("corona_logo").clientHeight*0.28)
                }
        )
</script>
<script src="assets/js/tn_table.js"></script>
<script>
        $(".th").css("width",document.getElementById("corona_logo").clientWidth)
        $(".anna").css("height","450px");
        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
        console.log(document.getElementById("corona_logo").clientHeight + "ANNA ");
        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);

        $(window).resize(
                function resize_my(){
            // console.log("BETI");
            console.log("HIHIHI")
                        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
                        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
                        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);
                        console.log($("#regions_div").css("width"));
                        drawRegionsMap();
                        // $("#my_dataviz_1").css("height","400");//document.getElementById("corona_logo").clientHeight*0.28)
                }
        )
</script>
<script>
    $("#Layer_1").css("width",window.innerWidth*0.8 + "px");
    $("#Layer_1").css("height",window.innerHeight*0.9 + "px");
    $("#strip").css("width",document.getElementsByClassName("container-fluid").clientWidth)//window.innerWidth + "px");
    $("#strip").css("height","200" + "px");
    $("#joinus").css("margin-left",window.innerWidth*0.2 + "px");
    $("#joinus").css("margin-right",window.innerWidth*0.2 + "px");

    // $("#joinus").css("height",window.innerHeight*0.5 + "px");
    $(".th").css("width",document.getElementById("corona_logo").clientWidth)
    $(".anna").css("height","450px");
    $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
    $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
    $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);
    document.getElementById("confirmed_cases").innerHTML = total[0];
    document.getElementById("recovered_cases").innerHTML = total[3];
    document.getElementById("active_cases").innerHTML = total[2];
    document.getElementById("death_cases").innerHTML = total[1];
    $("#database_button").css("width",window.innerWidth*0.25);
    $("#submit_button").css("width",window.innerWidth*0.25);
    $("#connect_button").css("width",window.innerWidth*0.25);
    $("#facebook").css("left",window.innerWidth*0.32)
    $("#linkedinra").css("left",window.innerWidth*0.37)
    $("#twitter").css("left",window.innerWidth*0.42)
    $("#instagram").css("left",window.innerWidth*0.47)
    console.log(document.getElementById("joinus").clientHeight + document.getElementById("database_button").clientHeight + "ALLAH!!!")
    if( window.innerWidth < 765 || window.matchMedia("(max-width: 700px)").matches){
      $("#my_icons").css("display","block");
      $("#icon_speak").css("left",window.innerWidth*0.23);    
      $("#icon_speak").css("top","-55px");    
      $("#icon_chat").css("left",window.innerWidth*0.39);  
      $("#icon_chat").css("top","-55px");  
      $("#icon_database").css("left",window.innerWidth*0.55);  
      $("#icon_database").css("top","-55px");  

      $("#facebook").css("left",window.innerWidth*0.15)
      $("#facebook").css("top","35px")

      $("#linkedinra").css("left",window.innerWidth*0.27)
      $("#linkedinra").css("top","35px")

      $("#twitter").css("left",window.innerWidth*0.39)
      $("#twitter").css("top","35px")

      $("#instagram").css("left",window.innerWidth*0.51)
      $("#instagram").css("top","35px")

      $("#faaltu").css("display","none");
      console.log("ANNANNANANAN");
      $("#strip").css("height",document.getElementById("joinus").clientHeight*1.2 + "px");
      $("#Layer_1").css("width",window.innerWidth + "px");
      $("#Layer_1").css("height",window.innerHeight*0.8 + "px");
      $("#database_button").css("display","none");
      $("#submit_button").css("display","none");
      $("#connect_button").css("display","none");
      //$("body").css("display","none");
    }
    console.log("HIHIHIHIIH" + window.innerWidth + "Fusgiudguirdg u")
   
    $(window).resize(
      function resize_my(){
        console.log("BETO" + window.innerWidth);
        if(window.innerWidth < 765 || window.matchMedia("(max-width: 700px)").matches){
          $("#my_icons").css("display","block");
          $("#icon_speak").css("left",window.innerWidth*0.23);    
          $("#icon_speak").css("top","-55px");    
          $("#icon_chat").css("left",window.innerWidth*0.39);  
          $("#icon_chat").css("top","-55px");  
          $("#icon_database").css("left",window.innerWidth*0.55);  
          $("#icon_database").css("top","-55px");  



          $("#facebook").css("left",window.innerWidth*0.15)
          $("#facebook").css("top","35px")

          $("#linkedinra").css("left",window.innerWidth*0.27)
          $("#linkedinra").css("top","35px")

          $("#twitter").css("left",window.innerWidth*0.39)
          $("#twitter").css("top","35px")

          $("#instagram").css("left",window.innerWidth*0.51)
          $("#instagram").css("top","35px")
          $("#faaltu").css("display","none");

          $("#strip").css("height","200" + "px");
          $("#Layer_1").css("width",window.innerWidth + "px");
          $("#Layer_1").css("height",window.innerHeight*0.8 + "px");
          $("#database_button").css("display","none");
          $("#submit_button").css("display","none");
          $("#connect_button").css("display","none");
          //$("body").css("display","none");
        }
        else if(window.innerWidth > 765)
        {
          $("#my_icons").css("display","none");
          $("#facebook").css("left",window.innerWidth*0.32)
          $("#linkedinra").css("left",window.innerWidth*0.37)
          $("#twitter").css("left",window.innerWidth*0.42)
          $("#instagram").css("left",window.innerWidth*0.47)
          $("#faaltu").css("display","block");
          console.log("BETA");
          $("#database_button").css("width",window.innerWidth*0.33);
          $("#submit_button").css("width",window.innerWidth*0.33);
          $("#connect_button").css("width",window.innerWidth*0.33);
          $("#strip").css("width",window.innerWidth + "px");
          $("#strip").css("height","200" + "px");
          $("#database_button").css("display","block");
          $("#submit_button").css("display","block");
          $("#connect_button").css("display","block");

        }
        $("#Layer_1").css("width",window.innerWidth*0.8 + "px");
        $("#Layer_1").css("height",window.innerHeight*0.9 + "px");
        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);
        // console.log($("#regions_div").css("width"));
        $("#strip").css("width",window.innerWidth + "px");
        $("#joinus").css("margin-left",window.innerWidth*0.2 + "px");
        $("#joinus").css("margin-right",window.innerWidth*0.2 + "px");
        drawRegionsMap();
      }
    )
    var color1 = "rgb(256,0, 0)";
    var color2 = "rgb(256, 256, 0)";
    function interpolateColor(factor) {
      if (arguments.length < 3) {
        factor = 0.5;
      }
      var result = color1.slice();
      for (var i = 0; i < 3; i++) {
        result[i] = Math.round(result[i] + factor * (color2[i] - color1[i]));
      }
      return result;
    };  
    var color = "";
    var deathval = 1;
    var confirmedval = 10;
    var variants = ["yellow","orange","red"];
    var g = 0;
    for(g = countries.length-1; Data[countries[g]][today][0]; g--){var ll = 1;}
    console.log(g + "ONETHING I FIND");
    for(var i = 0; i < countries.length; i++) {
      if( i > g + 2*(countries.length - 1 - g)/3 && Data[countries[i]][today][0] > 0) {
        $("." + countries[i]).css("fill",variants[2])
      }
      else if( i > g + (countries.length - 1 - g)/3 && Data[countries[i]][today][0] > 0)   {
        $("." + countries[i]).css("fill",variants[1])
      }
      else if(Data[countries[i]][today][0] > 0) {
        $("." + countries[i]).css("fill",variants[0])
      }
    }
    // document.getElementById("Virudhnagar_title").innerHTML = "POP";
    function high(item) {
      var classname = $(item).attr("class");
      var replace_color = "";
      $("."+classname).css("cursor","pointer");
      if ($(item).attr("class").split("_").length > 1) {
          color = $("."+$(item).attr("class").split("_")[0]).css("fill");
          $("."+$(item).attr("class").split("_")[0]).css("fill","grey");
          $("."+classname).css("fill","#d9d9d9");
          $("#"+$(item).attr("class").split("_")[0]+"_table").css("color","red");
          console.log( Data[countries[ (Math.floor((countries.length-1)/3)) ]])//[today][0], Data[countries[ 2*(Math.floor((countries.length-1)/3)) ]][today][0],$(item).attr("class").split("_")[0]][today][0] )
          if( Data[ $(item).attr("class").split("_")[0]][today][0] > Data[countries[ 2*(Math.floor((countries.length-1)/3)) ]][today][0] ) {
            replace_color = "pink";
          }
          else if ( Data[ $(item).attr("class").split("_")[0]][today][0] >= Data[countries[ (Math.floor((countries.length-1)/3)) ]][today][0] ){
            replace_color = "#d98f57";
          }
          // console.log( Data[ $(item).attr("class").split("_")[0]][today][0])
          // console.log( Math.floor((countries.length-1)/3))
          $("."+$(item).attr("class").split("_")[0]).css("fill",replace_color);
          if(countries.includes( $(item).attr("class").split("_")[0]))
          {
            document.getElementById("death_cases_na").innerHTML = Data[ $(item).attr("class").split("_")[0]][today][1];
            document.getElementById("confirmed_cases_na").innerHTML = Data[ $(item).attr("class").split("_")[0]][today][0];
          }
          else
          {
            document.getElementById("death_cases_na").innerHTML = "0";
            document.getElementById("confirmed_cases_na").innerHTML = "0";
          }
          document.getElementById("district_na").innerHTML = $(item).attr("class").split("_")[0];
      }
      else
      {
        // console.log(Data[classname][today][0]);
        $("#"+classname+"_table").css("color","red");
        color = $("."+classname).css("fill");
        $("."+classname).css("fill","grey");        
          if( Data[ classname][today][0] > Data[countries[2* (Math.floor((countries.length-1)/3)) ]][today][0] ) {
            replace_color = "pink";
          }
          else if ( Data[ classname][today][0] >= Data[countries[ (Math.floor((countries.length-1)/3)) ]][today][0] ){
            replace_color = "#d98f57";
          }

        $("."+classname).css("fill",replace_color);
          if(countries.includes( classname))
          {
            document.getElementById("death_cases_na").innerHTML =Data[ classname][today][1];
            document.getElementById("confirmed_cases_na").innerHTML = Data[ classname][today][0];
          }
          else
          {
            document.getElementById("death_cases_na").innerHTML = "0";
            document.getElementById("confirmed_cases_na").innerHTML = "0";
          }

        document.getElementById("district_na").innerHTML =  classname;
      }
      $("."+classname).css("cursor","pointer")
    }
    function unhigh(item) {
      var classname = $(item).attr("class");  
      if ($(item).attr("class").split("_").length > 1)
      {
        $("."+$(item).attr("class").split("_")[0]).css("fill",color);  
        $("."+classname).css("fill","black");
        $("#"+$(item).attr("class").split("_")[0]+"_table").css("color","black");    
      }
      else
      {
        $("#"+classname+"_table").css("color","black");
        $("."+classname).css("fill",color);
      }
      document.getElementById("death_cases_na").innerHTML = "-";
      document.getElementById("confirmed_cases_na").innerHTML = "-";
      document.getElementById("district_na").innerHTML =  "-";
    }
    console.log("BETI");
    console.log(Data["Chennai"][today]);
    console.log(countries[1]);
    console.log("GETi");
    var lef_countries = ["Vellore","Thiruvallur","Krishnagiri","Dharmapuri","Salem","Erode","Nilgiris","Tiruppur","Coimbatore","Theni","Dindigul","Virudhnagar","Kanniyakumari","Thirunelveli"];
    for(var i = 0; i < countries.length; i++) {
      if (!lef_countries.includes(countries[i]))
      {
        // console.log("YAYA");
        $("."+countries[i]).qtip({
          content:{
            text: 'Confirmed : ' + Data[countries[i]][today][0] + '<br> Death     : ' + Data[countries[i]][today][1] + '<br> Active    : ' + Data[countries[i]][today][2] + '<br> Recovered  : ' + Data[countries[i]][today][3]
          },
          style:{
            classes: "qtip-bootstrap qtip-rounded qtip-shadow"
          },
          position:{
            my: 'top right',  // Position my top left...
            at: 'bottom right', // at the bottom right of...
            target: $("."+countries[i]) // my target    
          }
        });
        $("."+countries[i]+"_text").qtip({
          content:{
            text: 'Confirmed : ' + Data[countries[i]][today][0] + '<br> Death     : ' + Data[countries[i]][today][1] + '<br> Active    : ' + Data[countries[i]][today][2] + '<br> Recovered  : ' + Data[countries[i]][today][3]
          },
          style:{
            classes: "qtip-bootstrap qtip-rounded qtip-shadow"
          },
          position:{
            my: 'top right',  // Position my top left...
            at: 'bottom right', // at the bottom right of...
            target: $("."+countries[i]) // my target    
          }
        });  
      }
      else{    
        $("."+countries[i]).qtip({
          content:{
            text: 'Confirmed : ' + Data[countries[i]][today][0] + '<br> Death     : ' + Data[countries[i]][today][1] + '<br> Active    : ' + Data[countries[i]][today][2] + '<br> Recovered  : ' + Data[countries[i]][today][3]
          },
          style:{
            classes: "qtip-bootstrap qtip-rounded qtip-shadow"
          },
          position:{
            my: 'bottom left',  // Position my top left...
            at: 'bottom left', // at the bottom right of...
            target: $("."+countries[i]) // my target    
          }
        });
        $("."+countries[i]+"_text").qtip({
          content:{
            text: 'Confirmed : ' + Data[countries[i]][today][0] + '<br> Death     : ' + Data[countries[i]][today][1] + '<br> Active    : ' + Data[countries[i]][today][2] + '<br> Recovered  : ' + Data[countries[i]][today][3]
          },
          style:{
            classes: "qtip-bootstrap qtip-rounded qtip-shadow"
          },
          position:{
            my: 'bottom left',  // Position my top left...
            at: 'bottom left', // at the bottom right of...
            target: $("."+countries[i]) // my target    
          }
        });    
      }
    }
    
  </script>
 

<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 100000000) + 1080000);
  var text = "OPS/2020/";
  var y = Math.floor((Math.random() * 100000) + 100008000);
  document.getElementById("tipno1").value=x;
  
   document.getElementById("passkey1").value= text + y ;
     
});


</script>
<?php include 'new_footer.html'?>

      </body>
      </html>



<!-- changes made at 25-04-2020-->
<!-- Map removed  pic-->
<!-- Text centered -->

-