
include_once("../../Account.php");
mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysql_select_db(SQL_DB);
if ($session->access < ADMIN) die("Access Denied: You are not Admin!");
mysql_query("UPDATE ".TB_PREFIX."users SET cp = cp + ".$_POST['cp']." WHERE id = ".$id."");
mysql_query("Insert into ".TB_PREFIX."admin_log values (0,$admid,'Added ".$_POST['cp']." Cultural Points to user <a href=\'admin.php?p=player&uid=$id\'>$name</a> ',".time().")");
?>