<?php
$biodata            = new \stdClass();
$biodata->name      = "Yusuf Eko Anggoro";
$biodata->address   = "Bengong";
$biodata->hobbies   = array("Play Football", "Swimming");
$biodata->is_married= false;
$biodata->school    = [
    "highSchool" => "SMKN 24 Jakarta",
    "university" => " - "
];
$biodata->skill     = [
    [
        "name" => "PHP",
        "score" => "50"
    ],
    [
        "name" => "VUE",
        "score" => "50"
    ],
];
$json = json_encode($biodata);
echo $json;
?>