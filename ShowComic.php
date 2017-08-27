<html>
<head>
<title>Funky Cats</title>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
_reloadPage(true);
// -->
</script>
</head>

<?php
    //Get the page file nad the number
    
    
    $series = $_GET["series"];
    $issue = $_GET["issue"];
    $pageNumber = $_GET["page"];
    
    $folder = "Series/".$series."/Issue".$issue."/";
    $filename = "Series/".$series."/Issue".$issue."/".$_GET["page"].".jpg";
    $count = count(glob($folder."*"));
    
    $next = "ShowComic.php?series=".$series."&issue=".$issue."&page=".($pageNumber+1);
    $prev = "ShowComic.php?series=".$series."&issue=".$issue."&page=".($pageNumber-1);
    
    $previousButton = "PREVIOUS";
    if($pageNumber>1)
    {
        $previousButton = "<a href=\"ShowComic.php?series=".$series."&issue=".$issue."&page=".($pageNumber-1)."\">".$previousButton."</a>";
    }
    
    $nextButton = "NEXT";
    if($pageNumber<$count)
    {
        $nextButton = "<a href=\"ShowComic.php?series=".$series."&issue=".$issue."&page=".($pageNumber+1)."\">".$nextButton."</a>";
    }
    
    $firstButton = "FIRST";
    if($pageNumber>1)
    {
        $firstButton = "<a href=\"ShowComic.php?series=".$series."&issue=".$issue."&page=1\">".$firstButton."</a>";
    }
    
    $latestButton = "LATEST";
    if($pageNumber<$count)
    {
        $latestButton = "<a href=\"ShowComic.php?series=".$series."&issue=".$issue."&page=".$count."\">".$latestButton."</a>";
    }
    
    ?>

<?php
    include 'MenuBar.html';
    ?>


<div id="Layer17" style="position:absolute; left:202px; top:1756px; width:1000px; height:36px; z-index:29; background-color: #333333; layer-background-color: #333333; border: 1px none #000000"></div>
<div id="Layer15" style="position:absolute; left:202px; top:308px; width:1000px; height:41px; z-index:12; background-color: #333333; layer-background-color: #333333; border: 1px none #000000"></div>


<!-FIRST BUTTON->
<div id="first" style="position:absolute; left:310px; top:318px; width:90px; height:39px; z-index:25; background-color: #666666; layer-background-color: #666666; border: 1px none #000000; visibility: visible">
<div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><?php echo $firstButton;?></font></b></div>
</div>
<div id="Layer7" style="position:absolute; left:291px; top:1756px; width:82px; height:22px; z-index:34; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><b><font color="#999999" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $firstButton;?></font></b></div>
</div>


<!-PREVIOUS BUTTON->
<div disabled="true" id="Layer14" style="position:absolute; left:409px; top:318px; width:136px; height:28px; z-index:27; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
  <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><?php echo $previousButton;?></font></b></div>
</div>
<div id="Layer18" style="position:absolute; left:382px; top:1756px; width:141px; height:23px; z-index:30; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><?php echo $previousButton;?></font></b></div>
</div>

<!-NEXT BUTTON->
<div id="Layer8" style="position:absolute; left:908px; top:1756px; width:105px; height:24px; z-index:39; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><b><?php echo $nextButton;?></b></font></div>
</div>
<div id="Layer11" style="position:absolute; left:890px; top:317px; width:89px; height:41px; z-index:42; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><b><?php echo $nextButton;?></b></font></div>
</div><


<!-LATEST BUTTON->

<div id="Layer9" style="position:absolute; left:1022px; top:1757px; width:114px; height:24px; z-index:40; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" color="#999999"><b><?php echo $latestButton;?></b></font></div>
</div>
<div id="Layer10" style="position:absolute; left:1271px; top:1760px; width:27px; height:62px; z-index:46"></div>
<div id="Layer20" style="position:absolute; left:987px; top:317px; width:131px; height:37px; z-index:41; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
<div align="center"><font color="#999999" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $latestButton;?></b></font></div>
</div>


<div id="Layer16" style="position:absolute; left:585px; top:318px; width:265px; height:80px; z-index:23; background-color: #666666; layer-background-color: #666666; border: 1px none #000000">
  <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"><a href="bonkie_comics.html">ARCHIVE 
    FOR THIS COMIC</a></font></b></div>
</div
<div id="Layer17" style="position:absolute; left:202px; top:1756px; width:1000px; height:36px; z-index:29; background-color: #333333; layer-background-color: #333333; border: 1px none #000000"></div>
<div id="Layer19" style="position:absolute; left:571px; top:1756px; width:264px; height:22px; z-index:43; background-color: #666666; layer-background-color: #666666; border: 1px none #000000"> 
  <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"><a href="bonkie_comics.html">ARCHIVE 
    FOR THIS COMIC</a></font></b></div>
</div>


<div id="Layer12" style="position:absolute; left:202px; top:341px; width:974px; height:71px; z-index:44"><img src="
<?php
    echo $filename
?>" border="0"></div>

</body>
</html>
