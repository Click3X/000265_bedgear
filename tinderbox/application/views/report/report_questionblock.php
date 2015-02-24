<ul>
<?php foreach($questions as $idx=>$question): ?>
    <?php if( $question->answerId == $answerId ): ?>
    <li style="">
        <p><?=$question->questionNumber?>. <?=$question->questionText?></p>
        <ul style="list-style: none;">
            <?php foreach($question->answers as $jdx=>$answer): ?>
                <li style="padding:5px 20px; background:<?=($jdx%2 == 0)?"#ddd;":""?>" value="<?=$answer->answerBitpos?>"><label><?=$answer->answerText?></label> <strong>[ <?=$answer->answerCount?> ]</strong></li>
                <?php $this->load->view('report/report_questionblock', array('questions'=>$questions,'answerId'=>$answer->answerId)); ?>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
