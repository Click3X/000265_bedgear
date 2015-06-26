<ul>
<?php foreach($questions as $idx=>$question): ?>
    <?php if( $question->answerId == $answerId ): ?>
    <li style="">
        <p><?php echo $question->questionNumber?>. <?php echo $question->questionText?></p>
        <ul style="list-style: none;">
            <?php foreach($question->answers as $jdx=>$answer): ?>
                <li style="padding:5px 20px; background:<?php echo ($jdx%2 == 0)?"#ddd;":""?>" value="<?php echo $answer->answerBitpos?>"><label><?php echo $answer->answerText?></label> <strong>[ <?php echo $answer->answerCount?> ]</strong></li>
                <?php $this->load->view('report/report_questionblock', array('questions'=>$questions,'answerId'=>$answer->answerId)); ?>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
