<script type="text/javascript">
function GetResult(){
	var bitTotal = 0;
	$.each($('.selanswer'),function(idx,item){
		try{
			bitTotal += parseInt($(item).val(),10);
			console.log($(item).val());
		}catch(exception){

		}
	});
	console.log('bitTotal',bitTotal);
	$.get('jsonapi/result/'+bitTotal,HandleResult);
}

function HandleResult(response){
	console.log(response);
	$('#resultgroup .products').empty();
	$.each(response.data,function(idx, product){
		$('#resultgroup .products').append($('<li/>').append(product.productName));
	});
	$('#resultgroup').show();
}
</script>

<div id="resultgroup" style="float:right;">
	<h1>Your ideal Bedgear:</h1>
	<ol class="products"></ol>
</div>

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

<?php $this->load->view('testr/testr_questionblock', array('questions'=>$questions,'answerId'=>0)); ?>
