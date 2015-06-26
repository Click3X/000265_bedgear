<h2>Edit Item</h2>
<?php $hidden = array('ID' => $record->$pk); ?>
<?php echo form_open($this->uri->segment(1).'/edit/'.$record->$pk, '', $hidden)?>
<fieldset>
	<ul>
		<li>
			<label>Email <span>(Required)</span></label>
			<?php echo form_input('userEmail', set_value('userEmail', $record->userEmail))?>
			<?php echo form_error('userEmail')?>
		</li>
		<li>
			<input type="submit" value="Save" name="" class="button">
		</li>
	</ul>
	<ul>
		<li>

		</li>
		
	</ul>
</fieldset>
<?php echo form_close()?>