<?php
include './/../../include/header.php';
include 'da eliminare .php';
$city = null;
if (!empty($_GET['city'])) {
    $city = e($_GET['city']);
}

if (!empty($city)) {
    $cities = json_decode(file_get_contents('Flag.json'), true);
}

$file = null;
foreach ($cities as $currentcity) {
    if ($currentcity['city'] === $city) {
        $file = $currentcity['filename'];
        break;
    }
}

if (!empty($file)) {
    $results = json_decode(file_get_contents('compress.bzip2://' . $file), true)['results'];
}// seleziono solo i sati che m´ineressano richiamando la key results   
$counter = 0;
$data_month_value = [];
foreach ($results as $result) {
    if ($result['parameter'] !== 'pm25')
        continue;
    $month = substr($result['date']['local'], 0, 7);
    if (!isset($data_month_value[$month])) {
        $data_month_value[$month] = [];
        $counter = 0;
    }
    $data_month_value[$month][$counter] = $result['value'];
    $counter++;
}
//var_dump($data_month_value);
?>
<a href='Udemy.php' class='btn btn-primary btn-lg'>back</a>

<div class="container  text-center ">
    <table class="table" style="width: 200px ; height: 100px;">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">pm25</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_month_value as $month => $measurements): ?>
                <tr>
                    <th><?php echo e($month) ?></th>
                    <td><?php echo e(round(array_sum($measurements) / count($measurements), 2)); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>






<?php

include './/../../include/footer.php';
?>