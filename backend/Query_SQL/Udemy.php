
<form action="Udemy.php" method="GET">
    <select name="piatto" >
        <option value=""> Seleziona </option>
        <option value="Risotto" <?php if (isset($_GET['piatto']) && !empty($_GET['piatto'] && $_GET['piatto'] === 'Risotto')) echo 'selected' ; ?>> Risotto </option>
        <option value="Pasta" <?php if (isset($_GET['piatto']) && !empty($_GET['piatto'] && $_GET['piatto'] === 'Pasta')) echo 'selected' ; ?>> Pasta </option>
        <option value="Pizza" <?php if ( isset($_GET['piatto']) && !empty($_GET['piatto'] && $_GET['piatto'] === 'Pizza')) echo 'selected' ; ?>> Pizza </option>
        <option value="Ravioli" <?php if (isset($_GET['piatto']) && !empty($_GET['piatto'] && $_GET['piatto'] === 'Ravioli')) echo 'selected' ; ?>> Ravioli </option>
        <option value="Gnummariedd" <?php if (isset($_GET['piatto']) && !empty($_GET['piatto'] && $_GET['piatto'] === 'Gnummariedd')) echo 'selected' ; ?>> Gnummariedd </option>
    </select>
    <input type="submit" value="Seleziona uno">
</form>

<?php if(!empty($_GET['piatto']) ){
    echo $_GET['piatto'] ;
    }else 
    {echo"vuoto";}
    ?>

<form action= "Udemy.php" method = "POST">  
    <input type = "text" name = "username" />  
    <input type = "password" name = "password"/> 
    <input type = "submit" value = "Login!"/> 
</form>

<?php if(!empty($_POST['username']) && !empty($_POST['password'])){
    echo $_POST['username'] . " " . $_POST['password'];
    }else 
    {echo"vuoto";}
    ?>