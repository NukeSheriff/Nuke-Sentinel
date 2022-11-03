CURRENT FEATURES:
· Improved Scripting Attack filters.
· Repaired a couple of missing </form> tags in admin pages.
· Updated Blocks for titles and compliance.
· Moved "Country List" link to main menu.
· 100% W3C HTML 4.01 Transitional Compliant.
· The administrator can define the ability to have blocked users either:
  a) to be forwarded to a default page (or)
  b) to be forwarded to an administrator defined URL.
· Enhanced Administration Functions.
· Writes information to Apache's .htaccess file (for increased security on blocking).
· Cleaned up coding and variables.
· Can now remove blocked ip's from Apache's .htaccess file while removing them from the db.
· Can alter blocked ip's in Apache's .htaccess file while altering them in the db.
· Improved paging system in the Administration area.
· Added Remote IP and User Agent to the "blocked" page display.
· Added CLIKE protection with an on/off switch.
· Added UNION protection with an on/off switch.
· Added Harvester protection with an on/off switch.
· Added AUTHORS table protection with on/off switch.
· Improved speed relating to blocked ip checking.
· Added Page Sorting options for blocked ip pages.
· Added PC Killer option.
· Repaired PC Killer loop problem.
· Added "Last 10 Blocked IPs" block.
· Reconfigured the nsnst_config table.
· Repaired language file loading.
· Updated the lang-english.php file.
· Updated blockers to allow email only, block and email, and off.
· Repaired "Edit Blocked IP" routine.
· Repaired NukeSentinel(tm) Configuration.
· Now clears user sessions from both Nuke as well as Forums tables.
· Added a new block that shows ip lookups to the public as well as to admins.
· Added "blocker type" specific responses.
· Added the ability for block settings to now show ip lookup link and reason.
· Enabled Multiple email addresses for notifications. (may need work).
· Will match db stored IP addresses of xxx.*.*.* as global blocks.
  When blocking IP's it will use .* as the global range.
· Enabled Blocker specific information to be written to Apache's .htaccess file
  (if your server supports it).
· Enabled Blocker specific forwarding.
· Enabled "Protected Admins" functions (Can only be setup by the "God" level Administrator)
· Enabled "HTTP Auth" function (If your server has PHP compiled as an Apache Module,
  but not if your server has PHP compiled in CGI Mode).
· Enabled "Proxy Blocker" capabilities with on/off switch.
· Enabled DOS (Denial Of Service) Attack Protection.
· Enabled Mouse-over & Mouse-clicks Options in Help System.
· Enabled Mouse-clicks for Info System.
· Corrected problem with sites pulling your backend.php news feed.
· Reordered blockers for better trapping of attacks.
· Corrected a bad case for IP2C Searching.
· Corrected the is_god function. Around line 801 you can allow super users in but as
  default it requires GOD status.
· Corrected the blockers error of an empty set.
· Corrected a missing HELP define.
· Added Santy Worm protection (Thanks to NSN France)
· Added check box so you can return to the Add IP/Range screens faster
· Added test switch for HTTPAuth and register_globals. Helps prevent admins being
  locked out of admin.php .
· Added switch for Santy Worm protection.
· NEW import system for adding IP 2 Country data and importing Blocked Ranges.
· Created master globals in includes/nukesentinel.php for easier and faster processing.
  · You can use the new master global by adding $nsnst_const to your global lines throughout
    PHP-Nuke.
· Adapted for 7.7 WYSIWYG editor. (Thanks to WD-40)
· Enclosed table and field names with ` marks on SQL queries.
· Improved the Add IP 2 Country Range failure report page.
· includes/nukesentinel.php checks for the $admin_file var and sets it if it isn't set.
· Added Country Listing page in IP 2 Country management. Now you can easily find the
  c2c codes.
· Changed the IP Tracking from a max number of lines to a max number of days.
· Added the gfx=gfx_little clause to prevent from being tracked and wasting db space.
· Removed unused code and language defines.
· Corrected a Search Results error.
· Re-ordered the lang file to prevent Undefined error.
· ChatServ updates to replace $x == "" to empty($x) in many locations.
· Updated Edit Instructions (Includes updates by ChatServ for Patched 3.1).
· Moved import directory out of the admin directory structure so it can be deleted
  after importing data easier.
· Added routines to check range database table for overlaps.
· Updated import data (ip2country data from the NukeScripts site).
· Flood Protection on GET and POST requests. (Thanks to Manuel)
· Added global for SERVER_ADDR as $nsnst_const['server_ip'] . Can be useful in
  other scripts to check if the request comes from your server or from a client.
· XHTML compliant.