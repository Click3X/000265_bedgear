<div id="addedit" class="dialog">
</div>

<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/add" class="button" style="float:left; margin-right:5px;">Add Item</a>
<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/addthree" class="button" style="float:left; margin-right:5px;">Set Up Result</a>
<a href="<?php echo base_url()?><?php echo $this->uri->segment(1);?>/csv" class="button" style="float:left; margin-right:5px;">Export CSV</a>

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
		<th width="100"></th>
		<?php foreach( $fields as $field ): ?>
		<th width="100"><?php echo $field['label']?></th>
		<?php endforeach; ?>
		<th width="100"></th>
		<th width="100"></th>
	</tr>
	<?php if(isset($records) && is_array($records) && count($records)>0):?>
		<?php foreach($records as $record):?>
		<tr>
			<td><?php echo $record->$pk?></td>
			<?php foreach( $fields as $name=>$props ): ?>
			<?php if(substr_compare($name, 'Id', -2, 2) === 0): ?>
				<td class="join" ref="<?php echo base_url()?><?php echo substr($name, 0, -2);?>/detail/<?php echo $record->$name?>"><a href='<?php echo base_url()?><?php echo substr($name, 0, -2);?>/edit/<?php echo $record->$name?>' ><?php echo $record->$name?></a></td>
			<?php else: ?>
				<td><?php echo $record->$name?></td>
			<?php endif; ?>
			<?php endforeach; ?>
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
