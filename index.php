<?php
include("header.php");
?>
<!-- NavBar section Started -->
<div class="container-fluid">
  <div class="row navelement">
    <div class="col-3 active">
      <a href="index.php">
        <h4>INSERT</h4>
      </a>
    </div>
    <div class="col-3">
      <a href="delete.php">
        <h4>DELETE</h4>
      </a>
    </div>
    <div class="col-3">
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
<?php include("connection.php"); ?>

<div class="container mycon">
  <div class="formbox my-5">
    <form action="add.php" method="POST">
      <div class="form-group my-2">
        <label for="name">Name</label>
        <input type="text" class="form-control" placeholder="First name" id="name" name="sname">
      </div>
      <div class="form-group my-2">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Address" name="saddress">
      </div>
      <div class="form-group my-2">
        <label for="address">Class</label>
        <select class="form-select" name="sclass" aria-label="Default select example">
          <option selected disabled>Open this select menu</option>

          <?php
          $query = "SELECT * from studentclass;";
          $result = mysqli_query($conn, $query);

          if ($num = mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

          ?>
              <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>

          <?php
            }
          }
          ?>
        </select>
      </div>

      <div class="form-group my-2">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" id="mobile" placeholder="Mobile number" name="smobile">
      </div>
      <button type="submit" class="btn button">Submit</button>
    </form>
  </div>
</div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="/javaScript/index.js"></script>
</body>

</html>