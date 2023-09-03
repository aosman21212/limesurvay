<ul class="dropdown-menu">

    <!-- Export results to application -->
    <li>
        <a class="dropdown-item"
           href='<?php echo Yii::App()->createUrl("admin/export/sa/exportresults/surveyid/$oSurvey->sid"); ?>'>
            <?php eT("Export responses"); ?>
        </a>
    </li>

</ul>
