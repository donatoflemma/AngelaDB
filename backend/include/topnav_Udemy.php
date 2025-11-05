<nav class='navbar navbar-expand-lg bg-dark border-bottom border-body' data-bs-theme='dark' style='margin-bottom: 5vh;'>
    <div class='container-fluid d-flex justify-content-between align-items-center'>
        <?php
        function topnav($page)
        {
            switch ($page):
                case 'Diary':
                    echo "
                    <i class='fa-solid fa-book' style='font-size:30px;color: #C1440E;'></i>
                    <a href='new_entry.php' class='btn btn-outline-primary'>NEW ENTRY</a>
                ";
                    break;

                case 'Diary1':
                    echo "
                    <i class='fa-solid fa-book' style='font-size:30px;color: #C1440E;'></i>
                ";
                    break;

                case 'statistiche':
                    echo "<a href='Udemy.php' class='btn btn-primary btn-lg'>back</a>";
                    break;
                case'name':
                    function alphabet ():array{                        //ASII UPPER CASE
                        $a = 65;
                        $z = 90;
                        $alpha = [];  
                        for ($a ; $a<$z+1;$a++ ){
                            $alpha[] = chr($a);     
                            }
                        return $alpha;}
                    echo"
                    <nav class='container-fluid  bg-dark d-flex flex-column border-bottom border-body align-items-center' data-bs-theme='dark' style='margin-bottom: 5vh;'>
                        <h1 style='color:blue;font-size: 3rem;'>Name explorer</h1>
                            <h6 style='color:white; font-size: 1.2rem;'>Explore and find names</h6>
                            <div class='container d-flex flex-wrap justify-content-center gap-2'>";
                            foreach (alphabet() as $letter) {
                                echo"
                                  <a href='index.php?letter=$letter' class='btn btn-outline-light m-1'>$letter</a>";
                                            }
                                echo'</div>';


                     break;   
            endswitch;

            echo "</div></nav>"; // chiusura unica per tutti i casi
        }
        ?>
        