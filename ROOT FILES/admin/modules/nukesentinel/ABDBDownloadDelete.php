<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
if(is_god($_COOKIE['admin'])) {
  if($file > "") {
    $file = $ab_config['dump_directory'].$file;
    @unlink($file);
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
    echo '<center>'._AB_FILEDELETED.'.</center>'."\n";
    CloseTable();
    include("footer.php");
  } else {
    header("Location: ".$admin_file.".php?op=ABDBMaintence");
  }
} else {
  header("Location: ".$admin_file.".php?op=ABMain");
}

?>