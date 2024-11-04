<h2>Workshop Two : Get JSON by PHP</h2>
<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost/firstapp/api/student.php");

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
echo "<th>Code</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Tel</th>";
echo "<th>Picture</th>";
echo "</tr>";

foreach($data as $no => $val) {
    echo "<tr>";
    echo "<td>".$val->code."</td>";
    echo "<td>".$val->name."</td>";
    echo "<td>".$val->email."</td>";
    echo "<td>".$val->tel."</td>";
    echo "<td><img src='".$val->picture."' width='120'/></td>";
    echo "</tr>";
}
echo "</table>";
?>