<?php include('../components/header.php'); ?>
<?php include('../components/sidebar.php'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
         
              <center><h3>Service Manual</h3></center>
            </div>

            <!-- Button trigger modal -->
            <button type="button" style='width: 250px; margin: 15px' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Service Manual
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Service Manual Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Model:</label>
            <select class="form-select" placeholder="Enter Model Here" id="recipient-name">
              <option value="">Please Select Model</option>
              <option value="">Model1</option>
              <option value="">Model2</option>
            </select>
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Model Code:</label>
            <select class="form-select" placeholder="Enter Model Here" id="recipient-name">
              <option value="">Please Select First</option>
              <option value="">1001</option>
              <option value="">1002</option>
            </select>
          </div>

          <div class="col-6 col-sm-6">
            <label for="year-published" class="col-form-label">Year Published:</label>
            <input type="text" class="form-control" id="year-published" placeholder="Enter Year Here">
          </div>

          <!-- <script>
            document.getElementById('year-published').addEventListener('focus', function (e) {
              this.type = 'month';
            });

            document.getElementById('year-published').addEventListener('blur', function (e) {
              this.type = 'date';
              const [year,] = this.value.split('-');
              this.value = year;
            });

            document.getElementById('year-published').addEventListener('input', function (e) {
              const [year,] = this.value.split('-');
              this.value = year;
            });
          </script> -->

          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Attachment:</label>
            <input type="file" class="form-control" id="recipient-name" placeholder="Enter Model Code Here">
          </div>

          <div class="col-6 col-sm-6">
            <label for="confidential-toggle" class="col-form-label">Document Type:</label>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="confidential-toggle">
              <label class="form-check-label" for="confidential-toggle">Not Confidential</label>
            </div>
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
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Model</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7 ps-2">Model Code</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Year Published</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">View Attachment</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Download Attachment</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Action</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
        
                <td class="align-middle text-center text-sm">
                    Model Test1
                </td>
                <td class="align-middle text-center text-sm">
                    Code -0001
                </td>
                <td class="align-middle text-center text-sm">
                    2020
                </td>
                <td class="align-middle text-center">
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </td>
                <td class="align-middle text-center">
                <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                </td>

                <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
                
            </tr>
            <tr>
        
                <td class="align-middle text-center text-sm">
                    Model Test2
                </td>
                <td class="align-middle text-center text-sm">
                    Code -0002
                </td>
                <td class="align-middle text-center text-sm">
                    2021
                </td>
                <td class="align-middle text-center">
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </td>
                <td class="align-middle text-center">
                <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                </td>
                <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
                
            </tr>
            <tr>
        
          <td class="align-middle text-center text-sm">
              Model Test3
          </td>
          <td class="align-middle text-center text-sm">
              Code -0003
          </td>
          <td class="align-middle text-center text-sm">
              2022
          </td>
          <td class="align-middle text-center">
          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
          </td>
          <td class="align-middle text-center">
          <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
          </td>
          <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
          
      </tr>
      <tr>
        
        <td class="align-middle text-center text-sm">
            Model Test4
        </td>
        <td class="align-middle text-center text-sm">
            Code -0004
        </td>
        <td class="align-middle text-center text-sm">
            2023
        </td>
        <td class="align-middle text-center">
        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
        </td>
        <td class="align-middle text-center">
        <button class="btn btn-icon-only btn-rounded btn-success mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
        </td>
        <td class="align-middle text-center">
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                </td>
        
    </tr>
    <tr>
        
        <td class="align-middle text-center text-sm">
            Model Test5
        </td>
        <td class="align-middle text-center text-sm">
            Code -0005
        </td>
        <td class="align-middle text-center text-sm">
            2025
        </td>
        <td class="align-middle text-center">
        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
        </td>
        <td class="align-middle text-center">
        <button class="btn btn-icon-only btn-rounded btn-danger mb-0 me-3 btn-sm  align-items-center justify-content-center"><i class="fas fa-times"></i></button>
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