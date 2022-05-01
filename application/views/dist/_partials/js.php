<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

<?php
if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
<?php
}else if($this->uri->segment(1) == "admindashboard"){

	?>
	<script src="<?php echo base_url(); ?>assets/js/examination.js"></script>

	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<?php }else if($this->uri->segment(1) == "guestdashboard"){

	?>
	<script src="<?php echo base_url(); ?>assets/js/guestdashboard.js"></script>

	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<?php }?>
  
  
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>
</html>