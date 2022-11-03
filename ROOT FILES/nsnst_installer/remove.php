<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined("NSNST_IS_LOADED")) { header("Location: ../nsnst.php"); }
$pagetitle = $pagename.": Removal";
$mess1 = '<font color="#AA0000"><strong>FAILED</strong></font><br />'."\n";
$mess2 = '<font color="#00AA00"><strong>OK</strong></font><br />'."\n";
include("header.php");
title($pagetitle);
OpenTable();
echo 'Operation Status!<br />'."\n";
echo '<hr />'."\n";
echo 'Remove '.$prefix.'_nsnst_admins: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_admins`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_blocked_ips: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_blocked_ips`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_blocked_ranges: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_blocked_ranges`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_blockers: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_blockers`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_cidrs: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_cidrs`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_config: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_config`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_countries: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_countries`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_excluded_ranges: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_excluded_ranges`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_harvesters: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_harvesters`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_ip2country: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_ip2country`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_protected_ranges: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_protected_ranges`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_referers: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_referers`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_strings: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_strings`");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Remove '.$prefix.'_nsnst_tracked_ips: ';
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_tracked_ips`");
if(!$result) { echo $mess1; } else { echo $mess2; }
if($db->sql_numrows($db->sql_query("SHOW TABLES LIKE '".$prefix."_nsnst_flood'")) > 0) {
  echo 'Remove '.$prefix.'_nsnst_flood: ';
  $result = $db->sql_query("DROP TABLE `".$prefix."_nsnst_flood`");
  if(!$result) { echo $mess1; } else { echo $mess2; }
}
echo '<hr />'."\n";
echo 'Operation Complete!<br />'."\n";
echo '<a href="'.$_SERVER['PHP_SELF'].'">Go Back</a>'."\n";
CloseTable();
include("footer.php");

?>