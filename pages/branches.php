<?php include('../components/header.php'); ?>
<?php include('../components/sidebar.php'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <center><h3>3s Branch List</h3></center>
            </div>

            <!-- Button trigger modal -->
            <button type="button" style='width: 250px; margin: 15px' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add 3s Branch
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">3s Branch List Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Head Office:</label>
            <input class="form-control" placeholder="Enter Pet Name Here" id="recipient-name">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Dealer Code:</label>
            <input class="form-control" placeholder="Enter Model Code Here" id="recipient-name">
              
          </div>
          

          <div class="col-6 col-sm-6">
            <label for="year-published" class="col-form-label">Dealer Name:</label>
            <input type="text" class="form-control" id="year-published" placeholder="Enter Model Name Here">
          </div>


          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Shop Type:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Category Here">
             
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Date Opened:</label>
            <input type="date" class="form-control" id="recipient-name" placeholder="Enter Category Here">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Area:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Category Here">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Region:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Category Here">
              
          </div>
          <div class="col-6 col-sm-6">
            <label for="recipient-name" class="col-form-label">Cluster/Provinces:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Category Here">
              
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
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Head Office</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7 ps-2">Dealer Code</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Dealer Name</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Shop Type</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Date Opened</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Area</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Region</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Cluster/Provinces</th>
                <th  class="text-center text-uppercase text-white text-xs font-weight-bolder opacity-7">Action</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
        
                <td class="align-middle text-center text-sm">
                   DES MARKETING
                </td>
                <td class="align-middle text-center text-sm">
                    204014
                </td>
                <td class="align-middle text-center text-sm">
                    YAMAHA DES MKTG CABADBARAN
                </td>
                <td class="align-middle text-center text-sm">
                    B
                </td>
                <td class="align-middle text-center text-sm">
                    08-MAY-2008
                </td>
                <td class="align-middle text-center text-sm">
                    MIN
                </td>
                <td class="align-middle text-center text-sm">
                    XIII
                </td>
                <td class="align-middle text-center text-sm">
                   AGUSAN DEL NORTE
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