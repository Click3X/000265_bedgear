<ul>
    <?php foreach($questions as $idx=>$question): ?>
    <?php if( $question->answerId == $answerId && $answerId == 0 ): ?>
	<li style="margin:25px; list-style:none;">
		<label><?php echo $question->questionText?></label>
		<select class="selanswer">
			<?php foreach($question->answers as $answer): ?>
				<option value="<?php echo $answer->answerBitpos?>"><?php echo $answer->answerText?></option>
			<?php endforeach; ?>
		</select>
        <?php foreach($question->answers as $answer): ?>
        <?php $this->load->view('testr/testr_questionblock', array('questions'=>$questions,'answerId'=>$answer->answerId)); ?>
        <?php endforeach; ?>
	</li>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php if( $answerId == 0 ): ?>
	<li style="margin:25px; list-style:none;">
		<button onclick="GetResult();">Submit</button>
	</li>
    <?php endif; ?>
</ul>
