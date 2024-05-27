<?php
function startPage(){
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blockchain Technology Symposium 2022</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0;">
  <style>
  @import url(common/style3.css);
  @import url(common/all.css);
  </style>
</head>

<body>

<?php
}
  
function includeBanner()
{
?>

<div class="container">
  <!--<div class="title">-->
  <!--  <table width="100%"  border="0" cellspacing="0" cellpadding="0">-->
  <!--   <tr>-->
  <!--       <td><img align="left" src="images/banner/banner_bts2.jpg"></td>-->
  <!--   </tr>-->
  <!--  </table>-->
  <!--</div>-->
  
  <div class="title">
      <img src="images/banner/banner_bts2.jpg" alt="banner" style="width:100%;">
      <div class="bottom-right"><a href="https://twitter.com/search?q=%23bts22&src=typed_query" style="color:white">#bts22</a></div>
  </div>

<?php
}

function includeMenu()
{
?>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="organization.php">Organization</a>
  <a href="cfp.php">Call for Presentation</a>
  <div class="dropdown">
    <button class="dropbtn">Technical Program 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="program.php">Schedule</a>
        <a href="talks.php">Keynotes</a>
        <a href="invited.php">Invited talks</a>
        <a href="panels.php">Panels</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Attend
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="registration.php">Registration</a>
        <a href="codeofconduct.php">Code of conduct</a>
    </div>
  </div>
  <a href="sponsors.php">Sponsors</a>
  <a href="contact.php">Contact</a>
</div>

<?php
}

function includeFooter()
{
?>
<div class="footer">
<p><i class="fa fa-envelope"></i> <font color=#003366 size="+0.5">bts2022calgary@gmail.com</font></p>
</div>
<?php } ?>
