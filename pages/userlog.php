<?php include('../components/header.php'); ?>
<?php include('../components/sidebar.php'); ?>

<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <center><h3>History Logs</h3></center>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">History Logs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- <div class="col-6 col-sm-6">
                    <label for="recipient-name" class="col-form-label">Area Controller:</label>
                    <input class="form-control" placeholder="Enter Pet Name Here" id="recipient-name">
                  </div>
                  <div class="col-6 col-sm-6">
                    <label for="recipient-name" class="col-form-label">Contact Number:</label>
                    <input class="form-control" placeholder="Enter Model Code Here" id="recipient-name">
                  </div> -->
                  <div class="col-12 col-sm-12">
                    <!-- <label for="year-published" class="col-form-label">List of Branches:</label> -->
                    <table id="branchesTable" class="table table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>User</th>
                          <th>Activity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Add your rows here -->
                        <tr>
                          <td>07-08-2024 06:02</td>
                          <td>PL10954</td>
                          <td>Logged-in</td>
                        </tr>
                        <tr>
                          <td>07-08-2024 06:07</td>
                          <td>PL10954</td>
                          <td>Download Service Manual File</td>
                        </tr>
                        <tr>
                          <td>07-08-2024 08:02</td>
                          <td>PL10954</td>
                          <td>Add User</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-success">Save data</button> -->
              </div>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $('#branchesTable').DataTable({
              dom: 'Bfrtip',
              buttons: [
                'excelHtml5'
              ]
            });
          });
        </script>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0" style="margin: 15px">
            <table id="example" class="table align-items-center mb-0 table-striped">
              <thead style="background-color: #088395">
                <tr>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Username</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7 ps-2">Name</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Roles</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">History</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle text-center text-sm">PL10954</td>
                  <td class="align-middle text-center text-sm">Art Alban</td>
                  <td class="align-middle text-center text-sm">Admin</td>
                  <td class="align-middle text-center text-sm">
                    <a class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   <i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>View
                    </a>
                  </td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('../components/footer.php'); ?>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
