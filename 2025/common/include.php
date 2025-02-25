<?php
function startPage(){
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blockchain Technology Symposium 2025</title>
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
  <div class="title">
      <img src="../stuff/banner.png" alt="banner" style="width:100%;">
  </div>

<?php
}

function includeMenu()
{
?>

<div class="navbar">
  <a href="index.html">BTS 2025</a>
  <a href="organization.html">Organization</a>
  <a href="cfp.html">Call for Presentation</a>
  <a href="registration.html">Registration</a>
  <a href="program.html">Program</a>
  <a href="codeofconduct.html">Code of Conduct</a>
  <a href="https://blockchainsymposium.ca/index.html">Past Editions</a>
</div>


<?php
}

function includeFooter()
{
?>
<div class="footer">
<p><i class="fa fa-envelope"></i> <font color=#003366 size="+0.5"><a href="https://us17.list-manage.com/contact-form?u=035b4f2cae77109307daea454&form_id=2fbc0d4db11d8b5abce08bb98d708a5d">Contact Us</a></font></p>
</div>
<?php } ?>
