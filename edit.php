<?php include("header.php"); ?>
<?php include("connection.php"); ?>

<!-- NavBar section Started -->
<div class="container-fluid">
    <div class="row navelement">
        <div class="col-3">
            <a href="index.php">
                <h4>INSERT</h4>
            </a>
        </div>
        <div class="col-3">
            <a href="delete.php">
                <h4>DELETE</h4>
            </a>
        </div>
        <div class="col-3 ">
            <a href="update.php">
                <h4>UPDATE</h4>
            </a>
        </div>
        <div class="col-3">
            <a href="read.php">
                <h4>READ</h4>
            </a>
        </div>
    </div>
</div>
<!-- NavBar section End -->

<?php

$sid = (int)$_GET['id'];

$query = "SELECT * from student where sid = $sid;";

echo $query;
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>
<div class="container mycon">
    <div class="formbox my-3">
        <form  action="updatedata.php" method="POST" >
            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="hidden" class="form-control"  id="name" name="sid" value="<?php echo $row['sid'] ?>">
                <input type="text" class="form-control" placeholder="Name" id="name" name="sname" value="<?php echo $row['sname'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address" name="saddress" value="<?php echo $row['saddress'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="address">Class</label>
                <select class="form-select" name="sclass" aria-label="Default select example">
                    <?php
                    $query = "SELECT * from studentclass;";
                    $result = mysqli_query($conn, $query);

                    if ($num = mysqli_num_rows($result) > 0) {

                        while ($nrow = mysqli_fetch_assoc($result)) {

                            if ($row['sclass'] == $nrow['cid']) {


                    ?>
                                <option selected value="<?php echo $nrow['cid']?>"><?php echo $nrow['cname'] ?></option>

                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $nrow['cid'] ?>"><?php echo $nrow['cname'] ?></option>





                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group my-2">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" placeholder="Mobile number" name="smobile" value="<?php echo $row['sphone'] ?>">
            </div>
            <button type="submit" class="btn button red"  onclick="return confirm('Are You Sure ?')">Update</button>
        </form>
    </div>
</div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="/javaScript/index.js"></script>
</body>

</html>