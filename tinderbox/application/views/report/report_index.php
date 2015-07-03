
<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/csv" class="button" style="float:right; margin-right:5px;">Export to Excel</a>

<?php if($this->session->flashdata('flashError')):?>
<div class='flashError'>
	Error! <?php echo $this->session->flashdata('flashError')?>
</div>
<?php endif?>

<?php if($this->session->flashdata('flashConfirm')):?>
<div class='flashConfirm'>
	Success! <?php echo $this->session->flashdata('flashConfirm')?>
</div>
<?php endif?>
<div style="clear:both; width:100%;"></div>
<?php $this->load->view('report/report_questionblock', array('questions'=>$questions,'answerId'=>0)); ?>
