<?php
include '../db_config.php';

$start = $_GET['start_location']; 
$end = $_GET['end_location'];

$sql = "
with matchingrows as (
    select 
        t1.ticketno as startticketno,
        t2.ticketno as endticketno,
        col.column_name,
        abs(t2.ticketno - t1.ticketno) as ticketdifference
    from 
        normalbusdb t1
    join 
        normalbusdb t2
    on 
        t1.ticketno != t2.ticketno
    cross join 
        (select 'line1' as column_name union all
         select 'line2' union all
         select 'line3' union all
         select 'line4' union all
         select 'line5' union all
         select 'line6' union all
         select 'line7' union all
         select 'line8' union all
         select 'line9' union all
         select 'line10' union all
         select 'line11' union all
         select 'line12' union all
         select 'line13' union all
         select 'line14' union all
         select 'line15' union all
         select 'line16' union all
         select 'line17' union all
         select 'line18' union all
         select 'line19' union all
         select 'line20' union all
         select 'line21' union all
         select 'line22' union all
         select 'line23' union all
         select 'line24' union all
         select 'line25' union all
         select 'line26' union all
         select 'line27' union all
         select 'line28' union all
         select 'line29' union all
         select 'line30' union all
         select 'line31' union all
         select 'line32' union all
         select 'line33' union all
         select 'line34') as col
    where 
        (t1.line1 = '$start' and t2.line1 = '$end')
        or (t1.line2 = '$start' and t2.line2 = '$end')
        or (t1.line3 = '$start' and t2.line3 = '$end')
        or (t1.line4 = '$start' and t2.line4 = '$end')
        or (t1.line5 = '$start' and t2.line5 = '$end')
        or (t1.line6 = '$start' and t2.line6 = '$end')
        or (t1.line7 = '$start' and t2.line7 = '$end')
        or (t1.line8 = '$start' and t2.line8 = '$end')
        or (t1.line9 = '$start' and t2.line9 = '$end')
        or (t1.line10 = '$start' and t2.line10 = '$end')
        or (t1.line11 = '$start' and t2.line11 = '$end')
        or (t1.line12 = '$start' and t2.line12 = '$end')
        or (t1.line13 = '$start' and t2.line13 = '$end')
        or (t1.line14 = '$start' and t2.line14 = '$end')
        or (t1.line15 = '$start' and t2.line15 = '$end')
        or (t1.line16 = '$start' and t2.line16 = '$end')
        or (t1.line17 = '$start' and t2.line17 = '$end')
        or (t1.line18 = '$start' and t2.line18 = '$end')
        or (t1.line19 = '$start' and t2.line19 = '$end')
        or (t1.line20 = '$start' and t2.line20 = '$end')
        or (t1.line21 = '$start' and t2.line21 = '$end')
        or (t1.line22 = '$start' and t2.line22 = '$end')
        or (t1.line23 = '$start' and t2.line23 = '$end')
        or (t1.line24 = '$start' and t2.line24 = '$end')
        or (t1.line25 = '$start' and t2.line25 = '$end')
        or (t1.line26 = '$start' and t2.line26 = '$end')
        or (t1.line27 = '$start' and t2.line27 = '$end')
        or (t1.line28 = '$start' and t2.line28 = '$end')
        or (t1.line29 = '$start' and t2.line29 = '$end')
        or (t1.line30 = '$start' and t2.line30 = '$end')
        or (t1.line31 = '$start' and t2.line31 = '$end')
        or (t1.line32 = '$start' and t2.line32 = '$end')
        or (t1.line33 = '$start' and t2.line33 = '$end')
        or (t1.line34 = '$start' and t2.line34 = '$end')
)
select price
from normalbusdb
where ticketno in (select ticketdifference from matchingrows);
";

$result = $dbConnection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["price"];
} else {
    echo "0";
}
?>
