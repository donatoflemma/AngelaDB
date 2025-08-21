<?php include '../backend/api/db_connection.php'; ?>
<?php include './include/header.php';
NamePage("Home"); ?>
<?php include './include/topnav.php';
topnav('Home'); ?>

<div id="table">
  <form action="Home.php" method="GET">
    <input type="text" name="table">
    <input type="submit" value="surch">
  </form>

<?php include '../backend/Query_SQL/Select_table.php';
//Select("table"); ?>


</div>

<?php include "./include/footer.php" ?>