
<?php
include './/../../include/header.php';
$prova= json_decode(file_get_contents(  'Flag.json'),true);
?>



<ul>
    <?php foreach($prova AS $city):?>
    <li>
        <a href="./statistiche.php?<?php echo http_build_query(['city' => $city['city']]);?>">
        <?php echo $city['city'];?>,
        <?php echo $city['country'];?>(
        <?php echo $city['flag'];?> )
        </a>
    </li>
    <?php endforeach;?>
</ul>





<?php
include './/../../include/footer.php';
?>