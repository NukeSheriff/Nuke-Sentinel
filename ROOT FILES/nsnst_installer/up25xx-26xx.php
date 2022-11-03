<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined("NSNST_IS_LOADED")) { header("Location: ../nsnst.php"); }
@set_time_limit(600);
$pagetitle = $pagename.": Upgrade 2.5.xx to 2.6.00";
$mess1 = '<font color="#AA0000"><strong>FAILED</strong></font><br />'."\n";
$mess2 = '<font color="#00AA00"><strong>OK</strong></font><br />'."\n";
$mess3 = '<font color="#0000AA"><strong>N/A</strong></font><br />'."\n";
$mess4 = '<font color="#0000AA"><strong>ERROR</strong></font><br />'."\n";
include("header.php");
title($pagetitle);
OpenTable();
echo 'Operation Status!<br />'."\n";
echo '<hr />'."\n";
if($ab_config['version_number'] < '2.5.01') { echo '2.5.00 to 2.5.01:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.02') {
  // 2501-2502
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_countries` VALUES ('02', 'UnAllocated')");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_ip2country` DROP `country`");
  echo '2.5.01 to 2.5.02:'.$mess2."\n";
}
if($ab_config['version_number'] < '2.5.03') {
  //2502-2503
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD `refered_from` TEXT NOT NULL AFTER `user_agent`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `ip_addr`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `ip_long`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `user_id`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `username`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `user_agent`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `refered_from`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `date`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `page`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` DROP INDEX `c2c`");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `ip_addr` (`ip_addr`)");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `ip_long` (`ip_long`)");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `user_id` (`user_id`)");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `username` (`username`)");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `user_agent` (`user_agent`(255))");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `refered_from` (`refered_from`(255))");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `date` (`date`)");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `page` (`page`(255))");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_tracked_ips` ADD INDEX `c2c` (`c2c`)");
  $db->sql_query("UPDATE `".$prefix."_nsnst_tracked_ips` SET `refered_from`='Before NukeSentinel(tm)'");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_tracked_ips`");
  echo '2.5.02 to 2.5.03:'.$mess2."\n";
}
if($ab_config['version_number'] < '2.5.04') { echo '2.5.03 to 2.5.04:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.05') { echo '2.5.04 to 2.5.05:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.06') { echo '2.5.05 to 2.5.06:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.07') { echo '2.5.06 to 2.5.07:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.08') {
  //2507-2508
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_countries` VALUES ('rs', 'Serbia')");
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_countries` VALUES ('me', 'Montenegro')");
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_countries` VALUES ('su', 'Soviet Union')");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Brunei' WHERE `c2c` = 'bn'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Czechoslovakia (Former)' WHERE `c2c` = 'cs'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Cocos (Keeling) Islands' WHERE `c2c` = 'cc'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Congo, Republic Of The' WHERE `c2c` = 'cg'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Gambia, The' WHERE `c2c` = 'gm'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Micronesia, Federated States Of' WHERE`c2c` = 'fm'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Pitcairn Islands' WHERE `c2c` = 'pn'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'South Georgia and The Islands' WHERE `c2c` = 'gs'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_countries` SET `country` = 'Svalbard' WHERE `c2c` = 'sj'");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_countries` ORDER BY `c2c`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_countries`");
  echo '2.5.07 to 2.5.08:'.$mess2."\n";
}
if($ab_config['version_number'] < '2.5.09') { echo '2.5.08 to 2.5.09:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.10') { echo '2.5.09 to 2.5.10:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.11') { echo '2.5.10 to 2.5.11:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.12') { echo '2.5.11 to 2.5.12:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.13') { echo '2.5.12 to 2.5.13:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.14') { echo '2.5.13 to 2.5.14:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.15') { echo '2.5.14 to 2.5.15:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.16') {
  // 2515-2516
  $db->sql_query("DELETE FROM `".$prefix."_nsnst_config` WHERE `config_name`='version_check'");
  $db->sql_query("DELETE FROM `".$prefix."_nsnst_config` WHERE `config_name`='version_newest'");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_config` ORDER BY `config_name`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_config`");
  echo '2.5.15 to 2.5.16:'.$mess2."\n";
}
if($ab_config['version_number'] < '2.5.17') { echo '2.5.16 to 2.5.17:'.$mess3."\n"; }
if($ab_config['version_number'] < '2.5.18') {
  // 2517-2518
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_config` VALUES ('dump_directory', 'cache/')");
  $db->sql_query("ALTER TABLE `".$prefix."_nsnst_config` ORDER BY `config_name`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_config`");
  echo '2.5.17 to 2.5.18:'.$mess2."\n";
}
echo '<u>2.5.18 to 2.6.00:</u><br />'."\n";
// 2.6.00
// UPDATE nsnst_config
echo 'Update '.$prefix.'_nsnst_config: ';
$result = $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='2.6.00' WHERE `config_name`='version_number'");
if(!$result) { echo $mess1; } else { echo $mess2; }
// INSERT INTO TABLE nsnst_config
echo 'Insert into '.$prefix.'_nsnst_config: ';
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_config` VALUES ('list_harvester', '')");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Insert into '.$prefix.'_nsnst_config: ';
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_config` VALUES ('list_referer', '')");
if(!$result) { echo $mess1; } else { echo $mess2; }
echo 'Insert into '.$prefix.'_nsnst_config: ';
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_config` VALUES ('list_string', '')");
if(!$result) { echo $mess1; } else { echo $mess2; }
$db->sql_query("ALTER TABLE `".$prefix."_nsnst_config` ORDER BY `config_name`");
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_config`");
// CREATE TABLE nsnst_harvesters
echo 'Create '.$prefix.'_nsnst_harvesters: ';
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnst_harvesters` (`hid` int(2) NOT NULL auto_increment, `harvester` varchar(255) NOT NULL default '', PRIMARY KEY (`harvester`), KEY `hid` (`hid`))");
if(!$result) { echo $mess1; } else { echo $mess2; }
if($result) {
  // POPULATE TABLE nsnst_harvesters
  $hvmess = $mess2;
  echo 'Populate '.$prefix.'_nsnst_harvesters: ';
  list($hvlist) = $db->sql_fetchrow($db->sql_query("SELECT `list` FROM `".$prefix."_nsnst_blockers` WHERE `block_name`='harvester'"));
  if($hvlist) {
    $harvesterlist = explode("\r\n", $hvlist);
    sort($harvesterlist);
    $i = 0;
    while($i < count($harvesterlist)) {
      if($harvesterlist[$i] == $harvesterlist[$i+1]) { $harvesterlist[$i+1] = ""; }
      if($harvesterlist[$i] > "") {
        if(!get_magic_quotes_runtime()) { $harvesterlist[$i] = addslashes($harvesterlist[$i]); }
        $result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_harvesters` (`harvester`) VALUES ('".$harvesterlist[$i]."')");
        if(!$result) { $hvmess = $mess4; }
      }
      $i++;
    }
    $list_harvester = implode("\r\n", $harvesterlist);
    $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='".$list_harvester."' WHERE `config_name`='list_harvester'");
    $db->sql_query("UPDATE `".$prefix."_nsnst_blockers` SET `list`='' WHERE `block_name`='harvester'");
  } else {
    $hvmess = $mess3;
  }
  echo $hvmess;
}
// CREATE TABLE nsnst_referers
echo 'Create '.$prefix.'_nsnst_referers: ';
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnst_referers` (`rid` int(2) NOT NULL auto_increment, `referer` varchar(255) NOT NULL default '', PRIMARY KEY (`referer`), KEY `rid` (`rid`))");
if(!$result) { echo $mess1; } else { echo $mess2; }
if($result) {
  // POPULATE TABLE nsnst_referers
  $rfmess = $mess2;
  echo 'Populate '.$prefix.'_nsnst_referers: ';
  list($rflist) = $db->sql_fetchrow($db->sql_query("SELECT `list` FROM `".$prefix."_nsnst_blockers` WHERE `block_name`='referer'"));
  if($rflist) {
    $refererlist = explode("\r\n", $rflist);
    sort($refererlist);
    $i = 0;
    while($i < count($refererlist)) {
      if($refererlist[$i] == $refererlist[$i+1]) { $refererlist[$i+1] = ""; }
      if($refererlist[$i] > "") {
        if(!get_magic_quotes_runtime()) { $refererlist[$i] = addslashes($refererlist[$i]); }
        $result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_referers` (`referer`) VALUES ('".$refererlist[$i]."')");
        if(!$result) { $rfmess = $mess4; }
      }
      $i++;
    }
    $list_referer = implode("\r\n", $refererlist);
    $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='".$list_referer."' WHERE `config_name`='list_referer'");
    $db->sql_query("UPDATE `".$prefix."_nsnst_blockers` SET `list`='' WHERE `block_name`='referer'");
  } else {
    $rfmess = $mess3;
  }
  echo $rfmess;
}
// CREATE TABLE nsnst_strings
echo 'Create '.$prefix.'_nsnst_strings: ';
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnst_strings` (`sid` int(2) NOT NULL auto_increment, `string` varchar(255) NOT NULL default '', PRIMARY KEY (`string`), KEY `sid` (`sid`))");
if(!$result) { echo $mess1; } else { echo $mess2; }
if($result) {
  // POPULATE TABLE nsnst_strings
  $sgmess = $mess2;
  echo 'Populate '.$prefix.'_nsnst_strings: ';
  list($sglist) = $db->sql_fetchrow($db->sql_query("SELECT `list` FROM `".$prefix."_nsnst_blockers` WHERE `block_name`='string'"));
  if($sglist) {
    $stringlist = explode("\r\n", $sglist);
    sort($stringlist);
    $i = 0;
    while($i < count($stringlist)) {
      if($stringlist[$i] == $stringlist[$i+1]) { $stringlist[$i+1] = ""; }
      if($stringlist[$i] > "") {
        if(!get_magic_quotes_runtime()) { $stringlist[$i] = addslashes($stringlist[$i]); }
        $result = $db->sql_query("INSERT INTO `".$prefix."_nsnst_strings` (`string`) VALUES ('".$stringlist[$i]."')");
        if(!$result) { $sgmess = $mess4; }
      }
      $i++;
    }
    $list_string = implode("\r\n", $stringlist);
    $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='".$list_string."' WHERE `config_name`='list_string'");
    $db->sql_query("UPDATE `".$prefix."_nsnst_blockers` SET `list`='' WHERE `block_name`='string'");
  } else {
    $sgmess = $mess3;
  }
  echo $sgmess;
}
echo '<hr />'."\n";
echo 'Operation Complete!<br />'."\n";
echo '<a href="'.$_SERVER['PHP_SELF'].'?op=ip2country_01">Update IP 2 Country Data</a> or '."\n";
echo '<a href="'.$_SERVER['PHP_SELF'].'">Go Back</a>'."\n";
CloseTable();
include("footer.php");

?>