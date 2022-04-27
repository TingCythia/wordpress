<?php
echo "Startsida";
?>

<form action='http://localhost/labb2-Ting/wp-admin/admin-ajax.php'>
    <input name="firstname" type="text">
    <input name="lastname" type="text">
    <button type="summit" value="skicka">skicka</button>
	<input type="hidden" name="action" value="skicka-form">

</form>
