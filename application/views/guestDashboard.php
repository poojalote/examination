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
              <div class="card-header">
			  <h4 id="h4_exam" class="questionDIv" style="display:none;color:#6777ef;    font-weight: 900;
    font-size: 19px;">Examination</h4>
			  <h4 id="h4_result" class="ResultDIv" style="display:none; color:#6777ef;   font-weight: 900;
    font-size: 19px;">Result</h4>
			  </div>

              <div class="card-body">
			  <form method="post" id="questionAnswerForm">
				<div id="questionDIv"class="questionDIv" style="display:none"></div>
				<div id="ResultDIv" class="ResultDIv" style="display:none;">
				
				</div>
               <button type="button" style="float:right" class="btn btn-primary questionDIv" onclick="SaveData()">Save</button>
			</form>
			 </div>
			  
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('dist/_partials/js'); ?>
<script>
 // var baseURL ='<?=  base_url(); ?>';
</script>