<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
if(is_god($_COOKIE['admin'])) {
  $cache_file = $ab_config['dump_directory'].base64_decode($cf);
  $dump_file = $ab_config['dump_directory'].base64_decode($df);
  // ZIP Class
  $zip = new ZipArchive();
  if ($zip->open($dump_file, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$dump_file>\n");
  }
  $zip->addFile($cache_file);
  $zip->close();
  // ZIP Class
  @unlink($cache_file);
  $pagetitle = _AB_NUKESENTINEL.": "._AB_DBDOWNLOAD." - ".$dbname;
  include("header.php");
  OpenTable();
  OpenMenu(_AB_DBDOWNLOAD." - ".$dbname);
  mastermenu();
  CarryMenu();
  databasemenu();
  CloseMenu();
  CloseTable();
  echo '<br />'."\n";
  OpenTable();
  echo '<center class="title">'._AB_OPERATIONCOMPLETED.'</center><br />'."\n";
  echo '<center>'._AB_CANDOWNLOAD.' <a href="'.$admin_file.'.php?op=ABDBDownloadGet&amp;file='.base64_decode($df).'">'._AB_HERE.'</a>.</center><br />'."\n";
  echo '<center>'._AB_ONCEDOWNLOADED.' <a href="'.$admin_file.'.php?op=ABDBDownloadDelete&amp;file='.base64_decode($df).'">'._AB_DELETEFILE.'</a>.</center>'."\n";
  CloseTable();
  include("footer.php");
} else {
  header("Location: ".$admin_file.".php?op=ABMain");
}

?>