<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

@set_time_limit(300);
define('ADMIN_FILE', true);
define('NSNST_IS_LOADED', true);
require_once("mainfile.php");
if(!defined("NUKESENTINEL_IS_LOADED")) { include("includes/nukesentinel.php"); }
global $admin_file;
if(!isset($admin_file)) { $admin_file = "admin"; }
if(is_admin($_COOKIE['admin'])) {
    $adm = st_clean_string(base64_decode($_COOKIE['admin']));
    if (preg_match(REGEX_UNION, $adm)) { block_ip($blocker_array[1]); }
    if (preg_match(REGEX_UNION, base64_decode($adm))) { block_ip($blocker_array[1]); }
    $adm = explode(":", $adm);
    $aname = addslashes($adm[0]);
}
$index=1;
if (!isset($op)) $op='';
$adm_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_authors` WHERE `aid`='$aname' LIMIT 0,1"));
if($adm_info['radminsuper']==1 OR $adm_info['super_user']==1) {
  $checkip = $db->sql_numrows($db->sql_query("SHOW TABLES FROM `".$dbname."` LIKE '%_nsnst_ip2country'"));
  $checkns = $db->sql_numrows($db->sql_query("SHOW TABLES FROM `".$dbname."` LIKE '%_nsnst_%'"));
  $pagename = "NukeSentinel(tm)";
  switch($op) {
    default:include("nsnst_installer/default.php");break;
    case "remove":include("nsnst_installer/remove.php");break;
    case "install":include("nsnst_installer/install.php");break;
    case "ip2country_01":include("nsnst_installer/ip2country_01.php");break;
    case "ip2country_02":include("nsnst_installer/ip2country_02.php");break;
    case "ip2country_03":include("nsnst_installer/ip2country_03.php");break;
    case "ip2country_04":include("nsnst_installer/ip2country_04.php");break;
    case "ip2country_05":include("nsnst_installer/ip2country_05.php");break;
    case "ip2country_06":include("nsnst_installer/ip2country_06.php");break;
    case "ip2country_07":include("nsnst_installer/ip2country_07.php");break;
    case "ip2country_08":include("nsnst_installer/ip2country_08.php");break;
    case "ip2country_09":include("nsnst_installer/ip2country_09.php");break;
    case "up25xx-26xx":include("nsnst_installer/up25xx-26xx.php");break;
  }
} else {
  include("nsnst_installer/error.php");
}

?>