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
            <form action="index.php" method="get">
                <div class="mb-3">
                    <input type="txt" class="form-control" id="Title" name="Title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="Date" name="Date" placeholder="Date">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" name="file" id="formFile">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="txt" rows="10"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
        <div class="col-3"></div>
    </div>



</div>



<?php
include './/../../include/footer.php';
?>