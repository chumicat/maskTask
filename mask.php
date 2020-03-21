<?php


# import
require_once('vendor/autoload.php');
require_once('colorToStr.php');
$clmt = new League\CLImate\CLImate;

$data = [["sas", "sdf", "aaa"], ["sfa", "sdf", "sgh"], ["ggg", "<light_red>gasg</light_red>", "kkk"]];
$clmt->table($data);

$clmt->out(colorToStr("red", "holy Red"));

$fp = fopen("maskdata.csv", "r");
$titles = array_map(trim, fgetcsv($fp, 1000));
print_r($titles);

for ($rowid=0; ($row = fgetcsv($fp, 1000)) !== false; ++$rowid) {
    foreach ($titles as $idx => $title) {
        $data[$rowid][$title] = $row[$idx];
    }
}
//print_r($data);
echo "data import finish\n";
