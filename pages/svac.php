<?php include('../components/header.php'); ?>
<?php include('../components/sidebar.php'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <center><h3>SVC AC Assigned 3s List</h3></center>
            </div>

            <!-- Button trigger modal -->
            <button type="button" style='width: 250px; margin: 15px' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Register New
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SVC AC Assigned 3s Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Area Contoller:</label>
            <input class="form-control" placeholder="Enter Pet Name Here" id="recipient-name">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Contact Number:</label>
            <input class="form-control" placeholder="Enter Model Code Here" id="recipient-name">
              
          </div>
          

          <div class="col-12 col-sm-12">
            <label for="year-published" class="col-form-label">List of Branches:</label>
            <input type="text" class="form-control" id="year-published" placeholder="Enter Model Name Here">
          </div>


         

        

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save data</button>
      </div>
    </div>
  </div>
</div>



            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0" style="margin: 15px">
              <table id="example" class="table align-items-center mb-0  table-striped">
        <thead style="background-color: #088395">
            <tr>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Area Controller</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7 ps-2">Area of Responsibility</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Number of 3s Shop</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Contact Number</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">List of Branches</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Action</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
        
                <td class="align-middle text-center text-sm">
                   Prince Almond Durin
                </td>
                <td class="align-middle text-center text-sm">
                    Nationwide
                </td>
                <td class="align-middle text-center text-sm">
                    13
                </td>
                <td class="align-middle text-center text-sm">
                    0917-XXX-XXXX
                </td>
                <td class="align-middle text-center text-sm">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>View</a>
                </td>
                <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
                
            </tr>
            <tr>
        
                <td class="align-middle text-center text-sm">
                   Jeremiah Gallardo
                </td>
                <td class="align-middle text-center text-sm">
                    GMA, CLZN, NLZN
                </td>
                <td class="align-middle text-center text-sm">
                   3
                </td>
                <td class="align-middle text-center text-sm">
                    0917-XXX-XXXX
                </td>
                <td class="align-middle text-center text-sm">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>View</a>
                </td>
                <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
    
      

        <?php include('../components/footer.php'); ?>


        <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>