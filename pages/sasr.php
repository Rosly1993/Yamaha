<?php include('../components/header.php'); ?>
<?php include('../components/sidebar.php'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
         
              <center><h3>SR/SA Masterfile</h3></center>
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
        <h5 class="modal-title" id="exampleModalLabel">SR/SA Masterfile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-6 col-sm-6">
            <label for="year-published" class="col-form-label">SR/SA Name:</label>
            <input type="text" class="form-control" id="year-published" placeholder="Enter Year Here">
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Head Office</label>
            <input class="form-control" placeholder="Enter Model Here" id="recipient-name">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Branch Name</label>
            <input class="form-control" placeholder="Enter Model Here" id="recipient-name">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Area</label>
            <input class="form-control" placeholder="Enter Model Here" id="recipient-name">
             
          </div>

          <div class="col-12 col-sm-12">
            <label for="recipient-name" class="col-form-label">Training</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Model Code Here">
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

<script>
  document.getElementById('confidential-toggle').addEventListener('change', function () {
    const label = this.nextElementSibling;
    if (this.checked) {
      label.textContent = 'Confidential';
    } else {
      label.textContent = 'Not Confidential';
    }
  });
</script>



            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0" style="margin: 15px">
              <table id="example" class="table align-items-center mb-0  table-striped">
        <thead style="background-color: #088395">
            <tr>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">sa/sr name</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7 ps-2">head office</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">branch name</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">area</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">status</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7"> training</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Action</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
        
                <td class="align-middle text-center text-sm">
                KIMBERLY ESCOBAR
                </td>
                <td class="align-middle text-center text-sm">
                   YAMAHA
                </td>
                <td class="align-middle text-center text-sm">
                   YMPH FSS
                </td>
                <td class="align-middle text-center text-sm">
                   GMA
                </td>
                <td class="align-middle text-center text-sm">
                <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-check"></i>&nbsp;<a style='color: black'>Active</a></button>
                </td>
                <td class="align-middle text-center text-sm" style='color: blue'>
                    <i class="fa fa-trophy"></i> <br>
                    <b style='color: black'>1 Training Completed</b>
                </td>
               
                <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
                
            </tr>

            <tr>
        
        <td class="align-middle text-center text-sm">
        BEVERLY HERNANDEZ
        </td>
        <td class="align-middle text-center text-sm">
           YAMAHA
        </td>
        <td class="align-middle text-center text-sm">
           YMPH FSS
        </td>
        <td class="align-middle text-center text-sm">
           GMA
        </td>
        <td class="align-middle text-center text-sm">
        <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-check"></i>&nbsp;<a style='color: black'>Active</a></button>
        </td>
        <td class="align-middle text-center text-sm" style='color: blue'>
            <i class="fa fa-trophy"></i> <br>
            <b style='color: black'>1 Training Completed</b>
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