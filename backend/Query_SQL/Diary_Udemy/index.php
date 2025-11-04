<?php
//http://localhost:8081/DBMS/backend/Query_SQL/Diary_Udemy/new_entry.php
include './Diary_db_connection.php';
include './/../../include/header.php';
include './/../../include/topnav_Udemy.php';
topnav('Diary');
include './SQL_query.php';


$stmt = $pdo->query('SELECT * FROM week');
$stmt ->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// SPIEGAZIONE Se nella URL esiste il parametro page, 
// allora prendi il suo valore e convertilo in intero. 
// Altrimenti, usa 1 come valore di default.
$start = ($page - 1) * 4;
$end = $start + 4;

$weekpage = count($result)/4;

?>

<div class="container text-center ">
    <h1>MONTH</h1>

<!-- COSTRUZIONE DEI BOCCHI PER LE SETTIMANE--> 
<?php for ($n = $start; $n < $end && $n < count($result); $n++):?> 
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8 d-flex" style="background-color: #d4a120ff;border-radius: 5%;">
            <div class="row bg-warning rounded-4 align-items-center">
                <!-- Immagine  -->
                <div class="col-md-5 ">
                    <img src="<?php  echo 'uploads_img/' . $result[$n]['Path_img'];?>" class="img-fluid rounded-4"
                        style="width: auto; height: auto;" alt="Music Studio">
                </div>
                <!-- Testo a destra  --> 
                <div class="col-md-7 d-flex flex-column justify-content-center align-items-center gap-3">
                    <h5 class="text-success fw-bold"><?php echo $result[$n]['Date'];?></h5>
                    <h2 class="text-dark fw-bold"><?php echo $result[$n]['Title'];?></h2>
                    <p class="text-center text-dark">
                       <?php echo $result[$n]['Text'];?>
                    </p>
                </div>

            </div>
        </div>
    <div class="col-2"></div>
</div>

<?php endfor;?>
 

<!--pagination -->
<div class="row d-flex mt-3">
    <div class="col-8"></div>
    <div class="col-2">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="index.php?page=<?php if(!$page <=0):$page;endif?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($n = 1 ; $n< $weekpage +1;$n++):?>
                <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $n?>"><?php echo $n;?></a></li>
                <!-- come vedi nell href sto inviando un get con la pagina in modo da avere gia il mese che mi serve !!!
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item"> -->
                    <?php endfor;?>
                    <a class="page-link" href="index.php?page=<?php if(!$page >= $weekpage):$page;else:'#';endif;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>






<?php
include './/../../include/footer.php';
?>

/*
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = ceil(count($result) / 4);

$prevPage = max(1, $page - 1);
$nextPage = min($totalPages, $page + 1);

<!-- Previous 
<li class="page-item <?php //if ($page <= 1) echo 'disabled'; ?>">
  <a class="page-link" href="index.php?page=<?php //echo $prevPage; ?>" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
  </a>
</li>

<!-- Page numbers 
<?php //for ($n = 1; $n <= $totalPages; $n++): ?>
  <li class="page-item <?php //if ($n == $page) echo 'active'; ?>">
    <a class="page-link" href="index.php?page=<?php echo $n; ?>"><?php echo $n; ?></a>
  </li>
<?php //endfor; ?>

<!-- Next 
<li class="page-item <?php// if ($page >= $totalPages) echo 'disabled'; ?>">
  <a class="page-link" href="index.php?page=<?php// echo $nextPage; ?>" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
  </a>
</li>-->


*/ 