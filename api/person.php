<?php
    $person = array(
        array(
            "name" => "Johny Dev",
            "age" => 30,
            "occupation" => "Programmer"
        ),
        array(
            "name" => "Sarah Connor",
            "age" => 42,
            "occupation" => "Scientist"
        ),
        array(
            "name" => "Bruce Wayne",
            "age" => 35,
            "occupation" => "Bat man"
        ),
    );

    echo json_encode($person);
?>