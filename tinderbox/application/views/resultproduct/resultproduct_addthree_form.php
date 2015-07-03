<h2>Add Item</h2>
<?php echo form_open_multipart($this->uri->segment(1).'/addthree/'.$format)?>
<fieldset>
	<ul>
		<li>
			<label>Bit Int</label>
			<?php echo form_input('resultproductBitint', set_value('resultproductBitint'))?>
			<?php echo form_error('resultproductBitint')?>
		</li>
		<li>
			<label>First</label>
			<select name="productId1">
				<option value="0"></option>
				<?php foreach( $lookups['productId'] as $lookup ): $lookup = array_values($lookup);?>
				<option value="<?php echo $lookup[0]?>"><?php echo $lookup[1]?></option>
				<?php endforeach; ?>
			</select>
		</li>
		<li>
			<label>Second</label>
			<select name="productId2">
				<option value="0"></option>
				<?php foreach( $lookups['productId'] as $lookup ): $lookup = array_values($lookup);?>
					<option value="<?php echo $lookup[0]?>"><?php echo $lookup[1]?></option>
				<?php endforeach; ?>
			</select>
		</li>
		<li>
			<label>Third</label>
			<select name="productId3">
				<option value="0"></option>
				<?php foreach( $lookups['productId'] as $lookup ): $lookup = array_values($lookup);?>
					<option value="<?php echo $lookup[0]?>"><?php echo $lookup[1]?></option>
				<?php endforeach; ?>
			</select>
		</li>
		<li>
			<input type="submit" value="Save" name="" class="button">
		</li>
	</ul>
</fieldset>
<?php echo form_close()?>
