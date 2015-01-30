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

<ul>
<?php foreach($questions as $question): ?>
	<li style="margin:25px; list-style:none;">
		<label><?=$question->questionText?></label>
		<select class="selanswer">
			<?php foreach($question->answers as $answer): ?>
				<option value="<?=$answer->answerBitpos?>"><?=$answer->answerText?></option>
			<?php endforeach; ?>
		</select>
	</li>
<?php endforeach; ?>
	<li style="margin:25px; list-style:none;">
		<button onclick="GetResult();">Submit</button>
	</li>
</ul>
