<!DOCTYPE html>
<html lang="en-us">
<head>
<!-- <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
<title>SaulCross.com</title>
</head>      
<link href="https://fonts.googleapis.com/css?family=Hind:300" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-2.1.4.js"
  integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
  crossorigin="anonymous"></script>    
<style>
h1#brand-title {font-family: 'Hind', sans-serif;} 
a {text-decoration: none;}    
/* @media only screen and (max-width: 400px) {#content-grid {margin: 1% 1% 6% 2%; width: 94%;}}     */

ul#accordion {width:750px; margin: 0px auto; padding:0px;}  
    
@media only screen and (max-width: 800px) {ul#accordion {width:96%; margin: 0px auto;}}
    
    
ul#accordion li {list-style-type: none; margin-bottom:3px; font-family: sans-serif;}
ul#accordion li:hover {list-style-type: none;}     
ul#accordion li h1 {height: 92px; line-height: 92px; margin:0px; background-color: #9e38b0; border-bottom: solid 6px #6f277d; padding: 2px 0px 0 19px;  color: white;}  
ul#accordion li h1.highlight {padding: 2px 0px 0 28px; background-color: #6844b7; border-bottom: solid 6px #4c3185; -moz-transition: all .4s ease-in; -o-transition: all .4s ease-in; -webkit-transition: all .4s ease-in; transition: all .4s ease-in;}      
ul#accordion li div.panel {margin-bottom: 4px; padding: 0 8px; background-color: white; display: block; border-bottom: solid 3px #ebebeb; border-right: solid 4px #ebebeb; border-left: solid 4px #ebebeb;}     
ul#accordion li div.panel p {font-family: 'Hind', sans-serif; padding:20px 10px 20px 10px; margin:0px; font-size: 24px; line-height: 29px;}      
img.arrow {float: right; margin: 35px 20px 0 0; -moz-transition: transform .2s; -webkit-transition: transform .2s; transition: transform .2s;}
img.arrow.arrow-up {
-webkit-transform: rotate(180deg); 
-moz-transform: rotate(180deg); 
-ms-transform: rotate(180deg); 
-o-transform: rotate(180deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);}       
</style> 
     

<script> 
$(document).ready(function() { 
function a(el){
   $(el).find("div.panel").show(200);
   $(el).find("img").addClass("arrow-up"); 
   $(el).find("h1").addClass("highlight");
   $(el).siblings().find("img").removeClass("arrow-up"); 
   $(el).siblings().find("h1").removeClass("highlight");
   $(el).siblings().find("div.panel").hide(200);    
}

function b(el){
   $(el).find("div.panel").hide(200); 
   $(el).find("img").removeClass("arrow-up"); 
   $(el).find("h1").removeClass("highlight");
}
  
$("ul#accordion li").click(function() {
  var el = this;
  return (el.tog^=1) ? a(el) : b(el);
});    
    
});  // end document ready,      
</script>

<body>
<a href="index.html"><h1 id="brand-title">SaulCross<span>.com</span></h1></a>
<?php 
$json_url = "http://design.propcom.co.uk/buildtest/accordion-data.json";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
$data = $data["blocks"];
echo "<ul id='accordion'>";
foreach ($data as $row) 
    {//echo "<li><h1>. $row["heading"] .  <img class='arrow' src='http://saulcross.com/arrow-down.png'></h1><div class='panel' style='display:none;'><p>. $row["content"] . </p></div></li>";
    echo "<li>"; 
    echo "<h1>" . $row["heading"] . "<img class='arrow' src='http://saulcross.com/arrow-down.png' alt='arrow'></h1>";
    echo "<div class='panel' style='display:none;'>";
    echo "<p>" . $row["content"] . "</p>";
    echo "</div>";
    echo "</li>";
    }  

echo "</ul>";
?>

</body>
</html>