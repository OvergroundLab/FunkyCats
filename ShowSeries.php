<html>
<head>
<title>Funky Cats</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<?php
    $series = $_GET["series"];
    $folder = "Series/".$series."/";
    $count = count(glob($folder."*"));
    include 'MenuBar.html';
    ?>

<?php
    for ($i=0;$i<$count;$i++){
        $folder2 = "Series/".$series."/Issue".($i+1)."/";
        $pageCount = count(glob($folder2."*"));
        
        $string = file_get_contents($folder2."/info.json");
        $json_a = json_decode($string, true);
    ?>
<div id="SeriesBlock" style="position:absolute; left:264px; top:<?php echo (359+($i*453));?>px; width:935px; height:413px; z-index:10; background-color: #000000; layer-background-color: #000000; border: 1px none #000000; visibility: visible">

    <div id="Layer10" style="position:absolute; left:0px; top:-31px; width:935px; height:38px; z-index:11; background-color: #333333; layer-background-color: #333333; border: 1px none #000000"></div>
    <div id="Layer11" style="position:absolute; left:312px; top:-20px; width:308px; height:33px; z-index:45"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><b>ISSUE <?php echo ($i+1)." - ".$json_a["Title"]?></b></font></div>

    <div id="Layer9" style="position:absolute; left:294px; top:44px; width:612px; height:332px; z-index:47">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
<?php
    for ($p=0;$p<$pageCount;$p++){
        if($p%5==0)
        {
            if(p!=0)
            {
                echo "</tr>";
            }
            echo "<tr height=\"50\">";
        }
    ?>

                <td>
                    <div align="center"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><b><a href="ShowComic.php?series=<?php echo $series?>&issue=<?php echo $i+1?>&page=<?php echo $p+1?>">PAGE
                        <?php echo ($p+1)?></a></b></font></div>
                </td>
<?php
    }
    ?>
        </table>
    </div>

<div id="Layer7" style="position:absolute; left:37px; top:33px; width:251px; height:355px; z-index:46"><img src="astudyinscarscover.jpg" width="250" height="354"></div>
<div id="Layer14" style="position:absolute; left:305px; top:270px; width:586px; height:84px; z-index:49">
<p><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Credits:</b><p>
<?php echo $json_a["Credits"]?></font><br>
<font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="2">



</font></p>
</div>
</div>

<?php
    }
    ?>


</body>
</html>
