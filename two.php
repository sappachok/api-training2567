<h2>Workshop Two : Get JSON by PHP</h2>
<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost/firstapp/api/person_json.php");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);
?>