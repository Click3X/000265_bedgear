<h2>Builder</h2>
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
<?php echo form_open('admin/builder')?>
<fieldset>
	<ul>
		<li>
			<label>Select a Model</label>
			<?php echo form_dropdown('model', $loneModels);?>
		</li>
		<li>
			<?php echo form_submit('submit', 'Generate Scaffold');?>
		</li>
	</ul>
</fieldset>
<?php echo form_close()?>
