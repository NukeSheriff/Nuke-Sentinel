<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined("NSNST_IS_LOADED")) { header("Location: ../nsnst.php"); }
@set_time_limit(600);
$pagetitle = "IP to Country: Update Step 9";
include("header.php");
title("$pagetitle");
OpenTable();
echo 'Operation Status!<br />'."\n";
echo '<hr />'."\n";
echo '<a href="'.$_SERVER['PHP_SELF'].'">Go Back</a>'."\n";
echo '<hr />'."\n";

$wfilename = "nsnst_installer/data/ip2country_9.data";
if(file_exists($wfilename)) {
  $wfread = fopen($wfilename, 'r');
  $linecount = 0;
  while (!feof($wfread)) {
    $DataRead = fgets($wfread, 1024);
    list ($ip_lo, $ip_hi, $ip_date, $ip_c2c) = explode ("||", $DataRead);
    $ip_c2c = ereg_replace ("\r", "", $ip_c2c);
    $ip_c2c = ereg_replace ("\n", "", $ip_c2c);
    if($ip_lo > "") {
      $datainserted = False;
      $datainserted = $db->sql_query("INSERT INTO `".$prefix."_nsnst_ip2country` (`ip_lo`, `ip_hi`, `date`, `c2c`) VALUES ('$ip_lo', '$ip_hi', '$ip_date', '$ip_c2c')");
      if($datainserted) {
        echo long2ip($ip_lo).' - '.long2ip($ip_hi).': <font color="#00AA00"><strong>OK</strong></font><br />'."\n";
      } else {
        echo long2ip($ip_lo).' - '.long2ip($ip_hi).': <font color="#AA0000"><strong>FAILED</strong></font><br />'."\n";
      }
    }
  }
  fclose($wfread);
} else {
  echo '<font color="#AA0000">IP2Country file read <strong>FAILED</strong></font><br />'."\n";
}

echo '<hr />'."\n";
echo 'Operation Complete!<br />'."\n";
echo '<a href="'.$_SERVER['PHP_SELF'].'">Go Back</a>'."\n";
CloseTable();
include("footer.php");
?>