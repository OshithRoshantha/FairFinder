<?php
include '../db_config.php';

$locationQuery = "
    select line1 as locations from normalbusdb
    union
    select line2 from normalbusdb
    union
    select line3 from normalbusdb
    union
    select line4 from normalbusdb
    union
    select line5 from normalbusdb
    union
    select line6 from normalbusdb
    union
    select line7 from normalbusdb
    union
    select line8 from normalbusdb
    union
    select line9 from normalbusdb
    union
    select line10 from normalbusdb
    union
    select line11 from normalbusdb
    union
    select line12 from normalbusdb
    union
    select line13 from normalbusdb
    union
    select line14 from normalbusdb
    union
    select line15 from normalbusdb
    union
    select line16 from normalbusdb
    union
    select line17 from normalbusdb
    union
    select line18 from normalbusdb
    union
    select line19 from normalbusdb
    union
    select line20 from normalbusdb
    union
    select line21 from normalbusdb
    union
    select line22 from normalbusdb
    union
    select line23 from normalbusdb
    union
    select line24 from normalbusdb
    union
    select line25 from normalbusdb
    union
    select line26 from normalbusdb
    union
    select line27 from normalbusdb
    union
    select line28 from normalbusdb
    union
    select line29 from normalbusdb
    union
    select line30 from normalbusdb
    union
    select line31 from normalbusdb
    union
    select line32 from normalbusdb
    union
    select line33 from normalbusdb
    union
    select line34 from normalbusdb;
";

$output = mysqli_query($dbConnection, $locationQuery);
$locationsArray = [];
while ($row = mysqli_fetch_assoc($output)) {
    $locationsArray[] = $row['locations'];
}
echo json_encode($locationsArray);
?>
