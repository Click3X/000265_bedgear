<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/add" class="button" style="float:left; margin-right:5px;">Add Item</a>
<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/csv" class="button" style="float:left; clear:right;">Export CSV</a>

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

<strong  style="float:left; clear:both;">Total Records: <?php echo $total_rows?></strong>

<table border="1" cellpadding="4" style="float:left; clear:both;">
	<tr>
		<th width="100">Email</th>
		<th width="100">Password</th>
		<th width="100">Status</th>
		<th width="100"></th>
		<th width="100"></th>
	</tr>
	<?php if(isset($records) && is_array($records) && count($records)>0):?>
		<?php foreach($records as $record):?>
		<tr>
			<td><?php echo $record->userEmail?></td>
			<td><?php echo $record->userPassword?></td>
			<td><?php echo $record->userStatus?></td>
			<td><a href='<?php echo base_url()?><?php echo $this->uri->segment(1);?>/edit/<?php echo $record->$pk?>'>Edit</a></td>
			<td><a href='<?php echo base_url()?><?php echo $this->uri->segment(1);?>/delete/<?php echo $record->$pk?>'>Delete</a></td>
		</tr>
		<?php endforeach?>
	<?else:?>
		<tr>
			<td colspan="3">There are currently no records.</td>
		</tr>
	<?php endif?>
</table>