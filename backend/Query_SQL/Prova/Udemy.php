<?php
include './/../../include/header.php';
$prova= json_decode(file_get_contents(  'Flag.json'),true);
?>



<ul>
    <?php foreach($prova AS $city):?>
    <li><?php echo $city['city'];?>,
        <?php echo $city['country'];?>(
        <?php echo $city['flag'];?> )
    </li>
    <?php endforeach;?>
</ul>





<?php
include './/../../include/footer.php';
?>