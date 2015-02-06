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
		<p><?=$question->questionNumber?>. <?=$question->questionText?></p>
		<ul style="list-style: none;">
			<?php foreach($question->answers as $jdx=>$answer): ?>
				<li style="padding:5px 0px; background:<?=($jdx%2 == 0)?"#eee;":""?>" value="<?=$answer->answerBitpos?>"><label><?=$answer->answerText?></label> <strong>[ <?=$answer->answerCount?> ]</strong></li>
			<?php endforeach; ?>
		</ul>
	</li>
<?php endforeach; ?>
	<li style="margin:25px; list-style:none;">
		<button onclick="GetResult();">Submit</button>
	</li>
</ul>
