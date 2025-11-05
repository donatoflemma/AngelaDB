<?php //http://localhost:8081/DBMS/backend/Query_SQL/Diary_Udemy/new_entry.php
include './name_connection.php';
include './/../../include/header.php';
include './/../../include/topnav_Udemy.php';
topnav('name');
function e (string $str):string{
    return htmlspecialchars($str); 
}



if(!empty($_GET['letter'])){
    $letter = e($_GET['letter']);
    $stmt = $pdo->prepare('SELECT * FROM names WHERE name LIKE :pattern;');
    $stmt->bindValue(':pattern',$letter.'%');
    $stmt ->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $only_name=[];
    foreach($result as $name){
        $only_name[]=$name['name'];
    }
    $only_name= array_unique($only_name);
   
    echo"   <div class='container text_center'>
                <h1> Most common names:</h1>
                
                <ul>";
                foreach($only_name as $name){
                    echo"<li><a href='table_name.php?name=$name'>$name</li>";
                }
                    
            echo "</ul>
        </div>";
}?>

 


<?php
$perPage = 16;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Numero totale di nomi
$totalNames = count($only_name);
$totalPages = ceil($totalNames / $perPage);
?>

<!-- Pagination -->
<div class="row d-flex mt-3 justify-content-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">

            <!-- Previous -->
            <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="index.php?page=<?= max($page-1,1) ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <!-- Pagine numerate -->
            <?php for($n = 1; $n <= $totalPages; $n++): ?>
                <li class="page-item <?= ($n == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="index.php?page=<?= $n ?>"><?= $n ?></a>
                </li>
            <?php endfor; ?>

            <!-- Next -->
            <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
                <a class="page-link" href="index.php?page=<?= min($page+1,$totalPages) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

        </ul>
    </nav>
</div>



<?php
include './/../../include/footer.php';
?>