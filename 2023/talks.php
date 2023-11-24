<?php
require "common/include.php";
startPage();
includeBanner();
includeMenu();
?>
  
<div class="content">
    <font color=#003366 size=+2.5><b>Keynotes</b></font>
    
<!-- Speakers -->

<br><br>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/a.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Andrew Miller" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Kostas Chalkias</b></font><br>
        <font color=#003366 size=+1.5><i>Mysten Labs</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            			<p><b>Abstract: </b> TBD </p>
                    	<p><b>Bio:</b> TBD </p>
        </div>
    </div> 
</div>

<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/a.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Andrew Miller" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Jill Gunter</b></font><br>
        <font color=#003366 size=+1.5><i>Espresso Systems</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            			<p><b>Abstract: </b> TBD </p>
                    	<p><b>Bio:</b> TBD </p>
        </div>
    </div> 
</div>

<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/a.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Andrew Miller" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>David Jao</b></font><br>
        <font color=#003366 size=+1.5><i>University of Waterloo</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            			<p><b>Abstract: </b> TBD </p>
                    	<p><b>Bio:</b> TBD </p>
        </div>
    </div> 
</div>

<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/a.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Andrew Miller" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Elaine Shi</b></font><br>
        <font color=#003366 size=+1.5><i>Carnegie Mellon University</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            			<p><b>Abstract: </b> TBD </p>
                    	<p><b>Bio:</b> TBD </p>
        </div>
    </div> 
</div>



<script>
var coll = document.getElementsByClassName("collapsible-radius");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>

</div>

<?php
includeFooter();
?>
</div>
</body>
</html>
