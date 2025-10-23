<?php
include './/../../include/header.php';
$counter_row_table = 1;
$city = null;
if(!empty($_GET['city'])){
    $city = $_GET['city'];
}

if (!empty($city)){
    $cities= json_decode(file_get_contents(  'Flag.json'),true);
}

$file = null;
foreach($cities AS $currentcity){
    if($currentcity['city']=== $city){
        $file= $currentcity['filename'];
        break;}}
        
if(!empty($file)){
    $results = json_decode(file_get_contents('compress.bzip2://'.$file),true)['results'];
}// seleziono solo i sati che m´ineressano richiamando la key results   
/*
foreach($results AS $result){
    if($result['parameter'] !== 'pm25')continue;
    var_dump($result);
    //break;
}
*/
?>
<a href='Udemy.php' class='btn btn-primary btn-lg'>back</a>

<div class="container  text-center ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">pm25</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($results AS $result){
                if($result['parameter'] !== 'pm25') continue;?>
                <tr>
                    <th scope="row"><?php echo $counter_row_table?></th>       
                    <td><?php echo $result["value"]; ?></td>
                    <td><?php  echo substr($result["date"]['local'],0,10);?></td>
                </tr>
                <?php $counter_row_table++;}?>
        </tbody>
    </table>

</div>






<?php
include './/../../include/footer.php';
?>