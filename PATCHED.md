Patched 2.7 and below uses checks as follows:
[code]if ($forum_admin == 1) {
    require_once("../../../config.php");
    require_once("../../../db/db.php");
} elseif ($inside_mod == 1) {
    require_once("../../config.php");
    require_once("../../db/db.php");
} else {
    require_once("config.php");
    require_once("db/db.php");
}[/code]

Patched 2.8 uses checks as follows:
[code]if (defined('FORUM_ADMIN')) {
    require_once("../../../config.php");
    require_once("../../../db/db.php");
} elseif ($inside_mod == 1) {
    require_once("../../config.php");
    require_once("../../db/db.php");
} else {
    require_once("config.php");
    require_once("db/db.php");
}[/code]

Patched 2.9/3.0/early 3.1 uses checks as follows:
[code]if (defined('FORUM_ADMIN')) {
    @require_once("../../../config.php");
    @require_once("../../../db/db.php");
} elseif (defined('INSIDE_MOD')) {
    @require_once("../../config.php");
    @require_once("../../db/db.php");
} else {
    @require_once("config.php");
    @require_once("db/db.php");
}[/code]

Patched later 3.1 and up uses checks as follows:
[code]if(defined('FORUM_ADMIN')) {
  define('INCLUDE_PATH', '../../../');
} elseif(defined('INSIDE_MOD')) {
  define('INCLUDE_PATH', '../../');
} else {
  define('INCLUDE_PATH', './');
}
@require_once(INCLUDE_PATH."config.php");
@require_once(INCLUDE_PATH."db/db.php");
@require_once(INCLUDE_PATH."includes/sql_layer.php");[/code]

As you can see we have coded NukeSentinel to use the checks system of 2.9 because it the
one that is still in use(modified for 3.2 but functionally the same). To use NukeSentinel(tm)
with a patched version lower then 2.9 you will need to search and replace the forum admin
and inside mod checks with your versions checks.