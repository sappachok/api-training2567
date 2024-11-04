<h2>Workshop One : JSON Encode / Decode</h2>
<?php
    $data = '{"name":"John", "age":30, "car":"Toyota"}';

    echo "<b>JSON Data</b>";
    echo "<pre>";
    echo $data;
    echo "</pre>";

    $decode = json_decode($data);
    echo "<b>JSON Decode</b>";
    echo "<pre>";
    var_dump($decode);
    echo "</pre>";
?>