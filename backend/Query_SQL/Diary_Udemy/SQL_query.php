<?php
include_once __DIR__ . '/Diary_db_connection.php';
if(isset($_POST) && isset($_FILES) ){
    if(!empty($_POST) && !empty($_FILES)){
        $title = $_POST['Title'];
        $date = $_POST['Date'];
        $txt = $_POST['txt'];
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name']; // percorso temporaneo dove viene salvato il file !!!!
        $Serverimg_path = __DIR__.'/uploads_img/'.basename($name);

        if(move_uploaded_file($tmp_name,$Serverimg_path)){// controlla se il salvataggio é andato a buon fine 
            
            $stmt = $pdo->prepare('INSERT INTO week (Title,Date,Path_img,Text) VALUES(:Title,:Date,:Path_img,:Text);');
            $stmt->bindValue('Title',$title);
            $stmt->bindValue('Date',$date);
            $stmt->bindValue('Path_img',$name);
            $stmt->bindValue('Text',$txt);
            $stmt->execute();
            echo"  
            <div class='alert alert-success' role='alert'>
                erfolgreich eingefügt
            </div>"; 
            exit();     
        }else{
            echo"
             <div class='alert alert-danger' role='alert'>
                Fehlende Daten oder Datei nicht korrekt hochgeladen.
            </div>";
        }
    }
}
?>