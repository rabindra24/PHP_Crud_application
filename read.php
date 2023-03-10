<?php
include("header.php");
?>

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
    <div class="col-3">
      <a href="update.php">
        <h4>UPDATE</h4>
      </a>
    </div>
    <div class="col-3 active">
      <a href="read.php">
        <h4>READ</h4>
      </a>
    </div>
  </div>
</div>
<!-- NavBar section End -->

<div class="container-fluid my-3">
  <div class="table-responsive">
    <table class="table table-dark table-striped">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
      </thead>
      <tbody>

        <?php
        
        include("connection.php");

        $query = "SELECT * from student Join studentclass where student.sclass = studentclass.cid and mystatus = 1 ORDER BY sid Asc;";
        $result = mysqli_query($conn, $query);

        if ($num = mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
              <td><?php echo $row['sid'] ?></td>
              <td><?php echo $row['sname'] ?></td>
              <td><?php echo $row['saddress'] ?></td>
              <td><?php echo $row['cname'] ?></td>
              <td><?php echo $row['sphone'] ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['sid'] ?>" class="btn btn-warning my-2"><i class="bi bi-pen-fill"></i></a>
                <a href="deletedata.php?id=<?php echo $row['sid'] ?>" class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
        <?php
          }
        }
        ?>

      </tbody>
    </table>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="/javaScript/index.js"></script>
</body>

</html>