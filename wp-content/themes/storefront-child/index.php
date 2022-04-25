<?php
echo "Startsida";
?>

<form action='http://localhost/wordpress-5.9.2/wordpress/wp-admin/admin-ajax.php'>
    <input name="firstname" type="text">
    <input name="lastname" type="text">
    <button type="summit" value="skicka">skikca</button>
	<input type="hidden" name="action" value="skicka-form">

</form>
