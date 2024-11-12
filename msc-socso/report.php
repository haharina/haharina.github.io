<?php
require('db.php');
include("private.php");
include("header.php");

$searchDate = isset($_GET['searchDate']) ? $_GET['searchDate'] : null;

$sql = "SELECT s.staff_id, s.staff_name, d.dept_name, 
       (SELECT COUNT(*) FROM attendance a WHERE a.staff_id = s.staff_id AND a.att_date = '$searchDate') AS is_present
FROM staff s
INNER JOIN dept d ON s.staff_dept = d.dept_id";

$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $arr_users[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<body class="">
  <div class="wrapper ">
  <?php 
	include("sidebar.php");
	?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php 
	include("navbar.php");
	?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Attendance List</h4>
              </div>
              <div class="card-body">
              <div class="row">
            <div class="col-md-3">
                <input type="date" id="myInput" class="form-control mb-3" placeholder="Search by Date">
            </div>
        </div>
                <div class="table-responsive">
                  <table class="table">
                  <thead>
                <th>Staff ID</th>
                <th>Staff Name</th>
                <th>Department Name</th>
                <th>Attendance</th>
            </thead>
            <tbody>
                <?php if (!empty($arr_users)) { ?>
                    <?php foreach ($arr_users as $user) { ?>
                        <tr>
                            <td><?php echo $user['staff_id']; ?></td>
                            <td><?php echo $user['staff_name']; ?></td>
                            <td><?php echo $user['dept_name']; ?></td>
                            <td><?php echo $user['is_present'] > 0 ? 'Y' : 'N'; ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#usetTable').DataTable();

            $('#myInput').on('change', function() {
                var searchDate = $(this).val();

                if (searchDate) {
                    // Redirect to the same page with a search parameter
                    window.location.href = "?searchDate=" + searchDate;
                } else {
                    // Reload the page without search parameter (optional)
                    window.location.href = "";
                }
            });
        });
    </script>
</body>

</html>