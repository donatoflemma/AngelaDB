<?php include '../backend/api/db_connection.php'; ?>
<?php include './include/header.php';
NamePage("Delete"); ?>
<?php include './include/topnav.php';
topnav('Delete'); ?>


<form action="Delete.php" method="GET">
    <label>Wählen Sie eine Tabelle aus</label><br>
    <input type="text" name="table">
    <input type="submit" value="surch">
</form>

<?php include '../backend/Query_SQL/checkbox_table.php' ?>




<?php include "./include/footer.php" ?>