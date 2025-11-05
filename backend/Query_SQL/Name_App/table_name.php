<?php
include './name_connection.php';
include './/../../include/header.php';
function e (string $str):string{
    return htmlspecialchars($str); 
}

$name =e( $_GET['name']);

if(!empty($name)){
    $stmt = $pdo->prepare('SELECT * FROM names WHERE name = :pattern;');
    $stmt->bindValue(':pattern',$name);
    $stmt ->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}


?>
<div class="container d-flex flex-column align-items-start">
    <h1 class="text-center"><?php echo $name ?></h1>

    <table class="table table-sm table-bordered w-50 text-center">
      <thead>
        <tr>
          <th scope="col">Year</th>
          <th scope="col">count</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach($result as $year):?>
        <tr>
          <td><?php echo"$year[year]"?></td>
          <td><?php echo"$year[count]"?></td>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
</div>


<?php
include './/../../include/footer.php';
?>