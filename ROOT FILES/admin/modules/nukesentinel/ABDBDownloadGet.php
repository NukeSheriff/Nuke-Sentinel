<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
if(is_god($_COOKIE['admin'])) {
  $file = $ab_config['dump_directory'].$file;
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Content-Type: application/octet-stream");
  header("Content-Length: " . filesize($file));
  header("Content-Disposition: attachment; filename=" . basename($file) . "");
  readfile($file);
} else {
  header("Location: ".$admin_file.".php?op=ABMain");
}

?>