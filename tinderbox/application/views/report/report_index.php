
<a href="<?=base_url()?><?=$this->uri->segment(1);?>/csv" class="button" style="float:right; margin-right:5px;">Export to Excel</a>

<?if($this->session->flashdata('flashError')):?>
<div class='flashError'>
	Error! <?=$this->session->flashdata('flashError')?>
</div>
<?endif?>

<?if($this->session->flashdata('flashConfirm')):?>
<div class='flashConfirm'>
	Success! <?=$this->session->flashdata('flashConfirm')?>
</div>
<?endif?>
<div style="clear:both; width:100%;"></div>
<?php $this->load->view('report/report_questionblock', array('questions'=>$questions,'answerId'=>0)); ?>
