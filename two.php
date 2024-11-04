<h2>Workshop Two : Get JSON by PHP</h2>
<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost/firstapp/api/person_json.php");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);

var_dump($response);

echo "<b>JSON Data</b>";
echo "<pre>".$response."</pre>";

$data =  json_decode($response);

echo "<b>JSON Decode</b>";
echo "<pre>";
var_dump($data);
echo "</pre>";

echo "<b>Table Data</b>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Occupation</th>";
echo "</tr>";

foreach($data as $no => $val) {
    echo "<tr>";
    echo "<td>".$val->name."</td>";
    echo "<td>".$val->age."</td>";
    echo "<td>".$val->occupation."</td>";
    echo "</tr>";
}

echo "</table>";
?>