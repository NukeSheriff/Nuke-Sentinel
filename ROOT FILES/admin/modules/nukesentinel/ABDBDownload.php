<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
if(is_god($_COOKIE['admin'])) {
  $xdate = date ("Y-m-d");
  $xtime = date ("H:i:s");
  $client = getenv("HTTP_USER_AGENT");
  $xcrlf = "\n";
  if(ereg('[^(]*\((.*)\)[^)]*', $client, $regs)) {
    $os = $regs[1];
    if (eregi("Win", $os)) { $xcrlf="\r\n"; }
  }
  $xfilename1 = $dbname."_".$xdate.".sql";
  $xfilename2 = $dbname."_".$xdate.".zip";
  $cache_file = $ab_config['dump_directory'].$xfilename1;
  @unlink($ab_config['dump_directory'].$xfilename1);
  @unlink($ab_config['dump_directory'].$xfilename2);
  $tables = $db->sql_query("SHOW TABLES");
  $num_tables = $db->sql_numrows($tables);
  $fpwrite = @fopen($cache_file, 'a');
  $data  = '--'.$xcrlf;
  $data .= '-- '._AB_DATABASE.': `'.$dbname.'`'.$xcrlf;
  $data .= '-- '._AB_HOST.': `'.$dbhost.'`'.$xcrlf;
  $data .= '-- '._AB_TIME.': '.$xdate.' @ '.$xtime.$xcrlf;
  $data .= '--';
  fwrite($fpwrite, $data);
  $i = 0;
  while($i < $num_tables) {
    $table = mysql_tablename($tables, $i);
    $data = $xcrlf;
    $data .= $xcrlf;
    $data .= '-- --------------------------------------------------------'.$xcrlf;
    $data .= $xcrlf;
    $data .= '--'.$xcrlf;
    $data .= '-- '._AB_TABLESTRUCTURE.": `".$table."`".$xcrlf;
    $data .= '--'.$xcrlf;
    $data .= $xcrlf;
    fwrite($fpwrite, $data);
    $schema_create = 'DROP TABLE IF EXISTS `'.$table.'`;'.$xcrlf;
    $schema_create .= 'CREATE TABLE `'.$table.'` ('.$xcrlf;
    $result = $db->sql_query("SHOW FIELDS FROM `$table`");
    while($row = $db->sql_fetchrow($result)) {
      $schema_create .= '  `'.$row["Field"].'` '.$row["Type"].'';
      if(isset($row["Default"]) && (!empty($row["Default"]) || $row["Default"] == "0")) { $schema_create .= ' DEFAULT \''.$row["Default"].'\''; }
      if($row["Null"] != "YES") { $schema_create .= ' NOT NULL'; }
      if($row["Extra"] != "") { $schema_create .= ' '.$row[Extra]; }
      $schema_create .= ",".$xcrlf;
    }
    $schema_create = ereg_replace(",".$xcrlf."$", "", $schema_create);
    $result = $db->sql_query("SHOW KEYS FROM `$table`");
    while($row = $db->sql_fetchrow($result)) {
      $kname = $row['Key_name'];
      if(($kname != "PRIMARY") && ($row['Non_unique'] == 0)) { $kname = 'UNIQUE|'.$kname; }
      if(!isset($index[$kname])) { $index[$kname] = array(); }
      $index[$kname][] = $row['Column_name'];
    }
    while(list($x, $columns) = @each($index)) {
      $schema_create .= ",".$xcrlf;
      if($x == "PRIMARY") {
        $schema_create .= '  PRIMARY KEY (`'.implode($columns, "`, `").'`)';
      } elseif (substr($x,0,6) == "UNIQUE") {
        $schema_create .= '  UNIQUE `'.substr($x,7).'` (`'.implode($columns, "`, `").'`)';
      } else {
        $schema_create .= '  KEY `'.$x.'` (`'.implode($columns, "`, `").'`)';
      }
    }
    $schema_create .= $xcrlf.");".$xcrlf;
    $schema_create = stripslashes($schema_create);
    fwrite($fpwrite, $schema_create);
    $data = $xcrlf;
    $data .= '--'.$xcrlf;
    $data .= '-- '._AB_DUMPDATA.': `'.$table.'`'.$xcrlf;
    $data .= '--'.$xcrlf;
    $data .= $xcrlf;
    fwrite($fpwrite, $data);
    $num_fields = $db->sql_numrows($db->sql_query("SHOW FIELDS FROM `$table`"));
    $result = $db->sql_query("SELECT * FROM `$table`");
    while($row = $db->sql_fetchrow($result)) {
      $schema_insert = 'INSERT INTO `'.$table.'` VALUES (';
      for($j=0; $j<$num_fields; $j++) {
        if(!isset($row[$j])) {
          $schema_insert .= 'NULL, ';
        } elseif($row[$j] != "") {
          $schema_insert .= '\''.addslashes($row[$j]).'\', ';
        } else {
          $schema_insert .= '\'\', ';
        }
      }
      $schema_insert = substr($schema_insert, 0, -2);
      $schema_insert = $schema_insert.');';
      $sql_insert = trim($schema_insert);
      $sql_insert = str_replace("\n", "\\n", $sql_insert);
      $sql_insert = str_replace("\r", "\\r", $sql_insert);
      $sql_insert = $sql_insert.$xcrlf;
      fwrite($fpwrite, $sql_insert);
    }
    $i++;
  }
  fclose($fpwrite);
  $cf = base64_encode($xfilename1);
  $df = base64_encode($xfilename2);
  header("Location: ".$admin_file.".php?op=ABDBDownloadCompress&cf=$cf&df=$df");
} else {
  header("Location: ".$admin_file.".php?op=ABMain");
}

?>