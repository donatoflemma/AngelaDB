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
//$prova = json_decode(file_get_contents('compress.bzip2://' . 'mumbai.json.bz2'),true);
//var_dump($prova);
$index_city = 0;
$file = null;
foreach ($cities as $currentcity) {

    if ($currentcity['city'] === $city) {
        $file = $currentcity['filename'];
        break;
    }
    $index_city++;
}

if (!empty($file)) {
    $results = json_decode(file_get_contents('compress.bzip2://' . $file), true)['results'];
}// seleziono solo i sati che m´ineressano richiamando la key results   
###########################  UNIT ################################################
$unit = ['pm25' => null, 'pm10' => null];
foreach ($results as $result) {
    if (!empty($unit['pm25']) && !empty($unit['pm10']))
        break;
    if ($result['parameter'] == 'pm25') {
        $unit['pm25'] = $result['unit'];
    }
    if ($result['parameter'] == 'pm10') {
        $unit['pm10'] = $result['unit'];
    }
}

############################### Values and manth ###############################
$counter = 0;
$data_month_value = [];
foreach ($results as $result) {
    if ($result['parameter'] !== 'pm25' & $result['parameter'] !== 'pm10')
        continue;
    $month = substr($result['date']['local'], 0, 7);
    if (!isset($data_month_value[$month])) {
        $data_month_value[$month] = [];
        $counter = 0;
    }
    if ($result['parameter'] == 'pm25') {
        $data_month_value[$month]['pm25'][$counter] = $result['value'];
        //var_dump('pm25');
    } elseif ($result['parameter'] == 'pm10') {
        $data_month_value[$month]['pm10'][$counter] = $result['value'];
        //var_dump('pm10');
    }
    $counter++;
}
//var_dump($results);
?>
<a href='Udemy.php' class='btn btn-primary btn-lg'>back</a>




<div class="container d-flex flex-column align-items-center text-center mb-5">
    <h1><?php echo $cities[$index_city]["city"] . ' ' . $cities[$index_city]["flag"] ?></h1>
    <table class="table" style="width: 300px ; height: 100px;">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <?php if (isset($data_month_value[$month]['pm25'])) {
                    echo "<th scope='col'>pm25</th>";
                } else {
                    echo "<p>No Data for mp25</p>";
                } ?>
                <?php if (isset($data_month_value[$month]['pm10'])) {
                    echo "<th scope='col'>pm10</th>";
                } else {
                    echo "<p>No Data for mp10</p>";
                } ?>
            </tr>
        </thead>
        <tbody>
            <?php ksort($data_month_value);
            foreach ($data_month_value as $month => $measurements): ?>
                <tr>
                    <th><?php echo e($month) ?></th>
                    <?php if (isset($data_month_value[$month]['pm25'])) {
                        echo "<td>" . e(round(array_sum($measurements['pm25']) / count($measurements['pm25']), 2)) . ' ' . $unit['pm25'] . "</td>";
                    } ?>
                    <?php if (isset($data_month_value[$month]['pm10'])) {
                        echo "<td>" . e(round(array_sum($measurements['pm10']) / count($measurements['pm10']), 2)) . ' ' . $unit['pm10'] . "</td>";
                    } ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr style="border: 2px solid blue; width: 100%;">


    <div style="height: 600px;width:600px">
        <canvas id="myChart"></canvas>
    </div>
</div>

<script src="script/chart.umd.js"></script>
<?php
// dati per il convas

$month = [];
$wert_pm25 = [];
$wert_pm10 = [];
foreach ($data_month_value as $key => $value) {
    $month[] = $key;
    $wert_pm25[] = round(array_sum($value['pm25']) / count($value['pm25']), 2);
    if (isset($value['pm10'])) {
        $wert_pm10[] = round(array_sum($value['pm10']) / count($value['pm10']), 2);
    }

}



?>

<script>
    //document.addEventListener('DOMContentLoaded',function()){}
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'line',
        data:
        {
            labels: <?php echo json_encode($month); ?>,
            datasets: [{
                label: 'pm25',
                data: <?php echo json_encode($wert_pm25); ?>,
                borderColor: 'rgba(30, 143, 199, 1)',
                borderWidth: 1
            }, <?php
            if (!empty($wert_pm10)) {
                echo "{
        label: 'pm10',
        data: " . json_encode($wert_pm10);
                echo ",
        borderColor: 'rgba(50, 238, 12, 1)',
        borderWidth: 1
      }";
            } ?>]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>








<?php

include './/../../include/footer.php';
?>