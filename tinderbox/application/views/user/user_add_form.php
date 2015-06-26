<h2>Add Item</h2>
<?php echo form_open($this->uri->segment(1).'/add/'.$format)?>
<fieldset>
	<ul>
		<li>
			<label>Email <span>(Required)</span></label>
			<?php echo form_input('userEmail', set_value('userEmail'))?>
			<?php echo form_error('userEmail')?>
		</li>
		<li>
			<input type="submit" value="Save" name="" class="button">
		</li>
	</ul>
	<ul>
		<li>
			<label>Password</label>
			<?php echo form_input('userPassword', set_value('userPassword'))?>
			<?php echo form_error('userPassword')?>
		</li>
		
	</ul>
</fieldset>
<?php echo form_close()?>