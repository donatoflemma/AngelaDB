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
            endswitch;

            echo "</div></nav>"; // chiusura unica per tutti i casi
        }
        ?>