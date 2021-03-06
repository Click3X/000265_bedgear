<h2>Add Item</h2>
<?php echo form_open_multipart($this->uri->segment(1).'/add/'.$format)?>
<fieldset>
	<ul>
		<?php foreach( $fields as $name=>$props ): ?>
		<li>
			<label><?php echo $props['label']?></label>
			<?php if( isset($lookups[$name]) ): ?>
			<select name="<?php echo $name?>">
				<option value="0"></option>
				<?php foreach( $lookups[$name] as $lookup ): $lookup = array_values($lookup);?>
				<option value="<?php echo $lookup[0]?>"><?php echo $lookup[1]?></option>
				<?php endforeach; ?>
			</select>
			<?else:?>
			<?php echo form_input($name, set_value($name))?>
			<?php echo form_error($name)?>
			<?php endif;?>
		</li>
		<?php endforeach; ?>
		<li>
			<input type="submit" value="Save" name="" class="button">
		</li>
	</ul>
</fieldset>
<?php echo form_close()?>
