<?php
 include '../php/common/config.php';
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
                header("location:/tncorona/info/dashboard.php");
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
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit']))
   {
     $category=$_POST['selimg'];
     
          $district=$_POST['district'];
           $Description=htmlspecialchars($_POST['Description']);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
               $ran=$_POST['ran'];
                $secretkey=$_POST['secretkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];
                $taking_test=$_POST['taking_test'];
                 $age=$_POST['age'];

                  $gender=$_POST['gender'];
                  $fever=$_POST['fever'];
                  $drycough=$_POST['drycough'];
                   $feelingsmell=$_POST['feelingsmell'];

                 $throatpain=$_POST['throatpain'];
                  $bodyweak=$_POST['bodyweak'];

 $nohunger=$_POST['nohunger'];

 $coughrange=$_POST['coughrange'];

 $shortness=$_POST['shortness'];

 $breathing=$_POST['breathing'];

 $drowsy=$_POST['drowsy'];

 $chestpain=$_POST['chestpain'];

 $weaknessbody=$_POST['weaknessbody'];

 $visitedoutside=$_POST['visitedoutside'];

 $contactaffect=$_POST['contactaffect'];

 $infectedcountry=$_POST['infectedcountry'];

 $familycontact=$_POST['familycontact'];

 $healthcondition=$_POST['healthcondition'];

 $diseasesymptoms=$_POST['diseasesymptoms'];
 $city=$_POST['city'];
 $zipcode=$_POST['zipcode'];
 if($coughrange=="")
 {
    $heat="low";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";


     
        }
        
     else if($coughrange!=""||$shortness!=""||$breathing!==""||$drowsy!=""||$chestpain!=""||$weaknessbody!="")
        {
         $heat="medium";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";

        }
       else if($visitedoutside!=""||$contactaffect!=""||$infectedcountry!=""||$familycontact!=""||$healthcondition!=""||$diseasesymptoms!="")                                 
        {
    $heat="high";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";

        
        }
 if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:casecode.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $link->error;
        } 
        }
 
?>


<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['login']))
   {
     $category=$_POST['info'];
      $category1=$_POST['selimg'];
          $countries1=$_POST['district2'];
           $Description1=htmlspecialchars($_POST['Description1']);
           $name1=$_POST['name1'];
           $email1=$_POST['email1'];
           $phone1=$_POST['phone1'];
               $ran1=$_POST['tipno1'];
                $secretkey1=$_POST['passkey1'];
               
                 $status1="created";
                $Artifacts1=$_FILES['Artifacts']['name1'];


 $sql1="INSERT INTO `info` (category,countries,Description,name,email,phone,ran,secretkey,Artifacts,status)
     values('$category1','$countries1','$Description1','$name1','$email1','$phone1','$ran1','$secretkey1','$Artifacts1','$status1')";

        if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:../info/infocode.php");
        }
        else
        {
           echo "Error: " . $sql1 . "<br>" . $link->error;
          }
   
     
     
      }
 
?>


<?php

 include '../php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
    $secretkey=$_POST['secretkey'];
      $sql="SELECT secretkey,ran FROM `case` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/tncorona/case/followup.php?ran=".$rows['ran']);
               }
             }
            
               else
               {
                 $sql="SELECT secretkey,ran FROM `info` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/tncorona/info/followup.php?ran=".$rows['ran']);
               }
             }
               }
  }
?>
<?php
 include '../php/common/config.php';
if(isset($_POST['emotion']))
{
$city3=$_POST['city3'];
$zipcode3=$_POST['zipcode3'];
$category3=$_POST['category3'];
$email=$_POST['email'];
$phone=$_POST[''];
$address=$_POST['address'];
$category=$_POST['category'];
$quite_trivial=$_POST['quite_trivial'];
$dryness=$_POST['dryness'];
$positive_feeling=$_POST['positive_feeling'];
$breathing_difficulty=$_POST['breathing_difficulty'];
$seem=$_POST['seem'];
$over_react=$_POST['over_react'];
$shakiness=$_POST['shakiness'];
$difficult_relax=$_POST['difficult_relax'];
$anxious=$_POST['anxious'];
$look_forward=$_POST['look_forward'];
$upset=$_POST['upset'];
$nervous=$_POST['nervous'];
$depressed=$_POST['depressed'];
$delayed=$_POST['delayed'];
$faintness=$_POST['faintness'];
$faintness_interest=$_POST['faintness_interest'];
$worth=$_POST['worth'];
$rather_touchy=$_POST['rather_touchy'];
$noticeably=$_POST['noticeably'];
$scared=$_POST['scared'];
$worthwhile=$_POST['worthwhile'];
$wind_down=$_POST['wind_down'];
$swallowing=$_POST['swallowing'];
$enjoyment=$_POST['enjoyment'];
$absence=$_POST['absence'];
$down_hearted=$_POST['down_hearted'];
$irritable=$_POST['irritable'];
$panic=$_POST['panic'];
$unfamiliar=$_POST['unfamiliar'];
$enthusiastic=$_POST['enthusiastic'];
$interruptions=$_POST['interruptions'];
$tension=$_POST['tension'];
$worthless=$_POST['worthless'];
$intolerant=$_POST['intolerant'];
$terrified=$_POST['terrified'];
$hopeful=$_POST['hopeful'];
$meaningless=$_POST['meaningless'];
$agitated=$_POST['agitated'];
$fool_myself=$_POST['fool_myself'];
$trembling=$_POST['trembling'];
$initiative=$_POST['initiative'];
$ran3=$_POST['ran3'];
$secretkey3=$_POST['secretkey3'];

$sql4="INSERT INTO well_ness(city,zipcode,category,quite_trivial,dryness,positive_feeling,breathing_difficulty,seem,over_react,shakiness,difficult_relax,anxious,look_forward,upset,nervous,depressed,delayed,faintness,faintness_interest,worth,rather_touchy,noticeably,scared,worthwhile,intolerant,swallowing,enjoyment,absence,down_hearted,irritable,panic,unfamiliar,enthusiastic,interruptions,tension,worthless,intolerant,terrified,hopeful,meaningless,agitated,fool_myself,trembling,initiative,ran,secretkey3)VALUES('$city3','$zipcode3','$category3','$quite_trivial','$dryness','$positive_feeling','$breathing_difficulty','$seem','$over_react','$shakiness','$difficult_relax','$anxious','$look_forward','$upset','$nervous','$depressed','$delayed','$faintness','$faintness_interest','$worth','$rather_touchy','$noticeably','$scared','$worthwhile','$wind_down','$swallowing','$enjoyment','$absence','$down_hearted','$irritable','$panic','$unfamiliar','$enthusiastic','$interruptions','$tension','$worthless','$intolerant,'$terrified','$hopeful','$meaningless','$prettyworthless','$intolerant','$terrified','$hopefulabout','$meaningless','$agitated,'$panic','$trembling','$agitated','$fool_myself','$trembling','$initiative','$secretkey3')";
if(mysqli_query($link,$sql4))
{
         echo "successfully";
         header("location:casecode.php");
}
else
{
     echo "Error: " . $sql4 . "<br>" . $link->error;
}


}


     

?>
<style type="text/css">
  .nav-item:hover{
    border-bottom:3px solid #024da0;


  }
   .nav-item
   {
    border:2px solid transparent;
   }
</style>
<!DOCTYPE html>
<html>
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/">
        <meta charset="utf-8"/>

        <title>TNCoronaSpeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="./assets/css/demo2/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />

</head>
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
<?php include '../siteheader.php'; ?>

 <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: white;">

    <!-- begin:: Page -->
    <br>
<br>
 <div class="kt-container  kt-grid__item kt-grid__item--fluid" >
        <div class="row">
    <div class="col">
        <div class="zoom">
<!--         <div class="alert alert-light alert-elevate fade show" role="alert" id="disc">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
            Do not hesitate to share your symptoms about Covid 19 (Corona). TN Corona County Medical Association will make best effort to reach out through the near by testing center, clinic or hospital based on your criticality.
You can stay anonymous and choose to followup with us also
            </div>
        </div> -->
    </div>
    </div>
</div>
</div>


 <div class="kt-container  kt-grid__item kt-grid__item--fluid" id="content">
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
                        <a class="" data-toggle="tab" href="#kt_tabs_1_3">
                            <i class="flaticon-presentation" style="font-size: 50px; color: #afd135;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">INFO</label>
                        </a>
                    </li>
               <!--      <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_4">
                            <i class="fa flaticon-customer" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">Emotinal Wellness</label>
                        </a>
                    </li>
                  -->
                </ul>
                <div class="tab-content">
                    
 <div class="tab-pane active" id="kt_tabs_1_3" role="tabpanel">
      <form class="kt-form" method="post">
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" style="padding-left: 10%; padding-right: 10%;">
                        <div class="kt-heading kt-heading--md" style="font-size: 18px; font-weight: 300">Setup Your Current Info:</div>
                        <div class="kt-form__section kt-form__section--first">
                            <div class="kt-wizard-v1__form">
                                <div class="form-group">
                                 <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Info:</label>
                    </div>  

                              <div class="row">
                                   <div class="grid-two imageandtext" >

  <div class="imageandtext image_grid">
    <label for="selimg1" style="text-align: center;">Death <br><br>
     <i class="fa fa-user-shield" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg1" value="death">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg2" style="text-align: center;">Neighborhood Alert<br><br>
    <i class="fa fa-hands-helping" style="font-size: 50px; color: #4b830d;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg2" value="NeighborhoodAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg3" style="text-align: center;">Travel Alert<br><br>
       <i class="fa fa-bus-alt" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg3" value="travelAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg4" style="text-align: center;">Feed<br><br>
      <i class="la la-feed" style="font-size: 50px; color: #4b830d;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg4" value="feed">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg5" style="text-align: center;">Operation<br><br>
      <i class="fa fa-ambulance" style="font-size: 50px; color: #005eaa;"></i>
    </label>
    <input type="radio" name="selimg" id="selimg5" value="operation">
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
                                                                                       
<select id="district2" name="district2" class="form-control" style="border-color:#B8B8BB;background:transparent;">
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
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
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

</select>
                                    </div>
                                  </div>
                                </div>
                                   
                                    <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Description:</label>
                    </div>  
                         <textarea type="text" rows="8" class="form-control" name="Description1" id="Description1"></textarea>
                                </div>
                               <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Artifacts:</label>
                    </div>  
                     <div class="form-group">
       
          <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
            <div class="dropzone-msg dz-message needsclick">
                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                <label for="Artifacts1" aria-hidden="true">
         <img src="csv.svg" title="Upload File" width="35" height="35" >
                 <input type="file" name="Artifacts1" id="Artifacts1" style="display: none;">
               </label>
            </div>
          </div>
        </div>
      </div>

                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Your Details:</label>
                    </div>  
                     <div class="form-group">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;font-size: 14px;">
         <input type="radio" name="radio1" value="Anonymous1"  checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black; font-size: 14px;">
             <input type="radio" name="radio1" value="disclose1" id="disclose1"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
           <div id="details1">
            <div class="row">
         <div class="col-md-4">
           <input type="text" placeholder="FullName" id="name" name="name1" class="form-control">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email1" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">

        <input type="text" placeholder="Phone" id="phone" name="phone1" class="form-control" >

      </div>


  </div>
</div>

                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="passkey1" id="passkey1">
          <input type="hidden" name="tipno1" id="tipno1">
                   <div style="text-align:center">  
    <input type="submit" name="login" id="info" value="submit" class="btn btn-success" style="display: inline-block;border-radius: 8px solid transparent;border:2px solid #afd135;color:#fff;background:#afd135;width: 30%;">
</div>  
                </form>


 </div>



             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
          
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
     <!--      <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
          
                 <input type="submit" name="emotion" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;">
            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue1()">
              Next Step
            </button>
          </div> -->
          <!--end: Form Actions -->
        </form>
       
        <!--end: Form Wizard Form-->
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
<br><br>
 
<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
   

});

</script>

 <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/wizard/wizard-3.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <!-- end::Body -->
</body>
</html>
<script type="text/javascript">
  function showvalue(){
  var district = document.getElementById('district').value;
  document.getElementById('district1').innerHTML = district;
  var zipcode = document.getElementById('zipcode').value;
  document.getElementById('zipcode1').innerHTML = zipcode;
  var test = document.querySelector('input[name=taking_test]:checked').value;
  document.getElementById('result1').innerHTML = test;
  var age = document.querySelector('input[name=age]:checked').value;
  document.getElementById('result2').innerHTML = age;
  var gender = document.querySelector('input[name=gender]:checked').value;
  document.getElementById('result3').innerHTML = gender;
  var fever = document.querySelector('input[name=fever]:checked').value;
  document.getElementById('result4').innerHTML = fever;
  var drycough = document.querySelector('input[name=drycough]:checked').value;
  document.getElementById('result5').innerHTML = drycough;
  var feelingsmell = document.querySelector('input[name=feelingsmell]:checked').value;
  document.getElementById('result6').innerHTML = feelingsmell;
  var throatpain = document.querySelector('input[name=throatpain]:checked').value;
  document.getElementById('result7').innerHTML = throatpain;
  var bodyweak = document.querySelector('input[name=bodyweak]:checked').value;
  document.getElementById('result8').innerHTML = bodyweak;
  var nohunger = document.querySelector('input[name=nohunger]:checked').value;
  document.getElementById('result9').innerHTML = nohunger;
  var coughrange = document.querySelector('input[name=coughrange]:checked').value;
  document.getElementById('result10').innerHTML = coughrange;
  var shortness = document.querySelector('input[name=shortness]:checked').value;
  document.getElementById('result11').innerHTML = shortness;
  var breathing = document.querySelector('input[name=breathing]:checked').value;
  document.getElementById('result12').innerHTML = breathing;
  var drowsy = document.querySelector('input[name=drowsy]:checked').value;
  document.getElementById('result13').innerHTML = drowsy;
  var chestpain = document.querySelector('input[name=chestpain]:checked').value;
  document.getElementById('result14').innerHTML = chestpain;
  var weaknessbody = document.querySelector('input[name=weaknessbody]:checked').value;
  document.getElementById('result15').innerHTML = weaknessbody;
  var visitedoutside = document.querySelector('input[name=visitedoutside]:checked').value;
  document.getElementById('result16').innerHTML = visitedoutside;
  var contactaffect = document.querySelector('input[name=contactaffect]:checked').value;
  document.getElementById('result17').innerHTML = contactaffect;
  var infectedcountry = document.querySelector('input[name=infectedcountry]:checked').value;
  document.getElementById('result18').innerHTML = infectedcountry;
  var familycontact = document.querySelector('input[name=familycontact]:checked').value;
  document.getElementById('result19').innerHTML = familycontact;
  var healthcondition = document.querySelector('input[name=healthcondition]:checked').value;
  document.getElementById('result20').innerHTML = healthcondition;
  var diseasesymptoms = document.querySelector('input[name=diseasesymptoms]:checked').value;
  document.getElementById('result21').innerHTML = diseasesymptoms;
  var description = document.getElementById('Description').value;
  document.getElementById('result22').innerHTML = description;
  var artifact = document.getElementById('Artifacts').value;
  document.getElementById('result23').innerHTML = artifact;

}
</script>
<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>
<script>
$(document).ready(function(){
  $("#details1").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous1")
{
$("#details1").hide();
}
if($(this).val()=="disclose1")
{
$("#details1").show();
}
});
});
</script>

<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno1").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey1").value=result;
     
});


</script>
<?php include '../footer.php'; ?>


<!-- Modified on 24-04-2019 -->
