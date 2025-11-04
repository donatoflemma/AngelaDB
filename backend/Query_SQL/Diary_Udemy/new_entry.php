<?php
include './/../../include/header.php';
include './/../../include/topnav_Udemy.php';
topnav('Diary1');
?>
<div class="container-fluid  text-center flex-column p-5">
    <h1>NEW ENTRY</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="txt" class="form-control"  name="Title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control"  name="Date" placeholder="Date">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" name="file" >
                </div>
                <div class="mb-3">
                    <textarea class="form-control"  name="txt" rows="10"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
        <div class="col-3"></div>
    </div>



</div>



<?php
var_dump($_POST);
var_dump($_FILES);

include './/../../include/footer.php';
?>