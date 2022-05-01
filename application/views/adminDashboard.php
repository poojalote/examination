<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 ">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>All Users</h4></div>

              <div class="card-body">
				<table class="table table-bordered" id="UserTable" style="    color: black;">
                           <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Score</th>
                               <th>Result</th>
                           </tr>
                           </thead>
						   </table>
               
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <div class="modal fade" id="ResultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Result</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id='ResultDIv'></div>
      
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('dist/_partials/js'); ?>
<script>
 // var baseURL ='<?=  base_url(); ?>';
</script>