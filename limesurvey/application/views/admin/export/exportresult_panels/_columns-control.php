Column control
<div class="card mb-4" id="panel-6">
    <div class="card-header">
        <div class="">
            <?php eT("Columns"); // Display localized title ?>
        </div>
    </div>
    <div class="card-body">
        <form action="your_process_file.php" method="post">
            <input type='hidden' name='sid' value='<?php echo $surveyid; ?>'>

            <?php if ($SingleResponse): ?>
                <input type='hidden' name='response_id' value="<?php echo $SingleResponse; ?>">
            <?php endif; ?>

            <label for='colselect' class="col-md-12 form-label">
                <?php eT("Select columns:"); // Display localized label ?>
            </label>

            <div class="col-md-12">
                <?php
                // Additional fields to be added
                $aAddition = array(
                    'Served_By' => 'Served By',
                    'survey_sent_date' => 'Survey Sent Date',
                    'survey_submitted_status' => 'Survey Submitted Status',
                    'whatsapp_number' => 'WhatsApp Number',
                    'chat_id' => 'Chat ID',
                    'customer_name' => 'Customer Name',
                    'chat_start_datetime' => 'Chat Start Datetime',
                    'service_inquiries' => 'Service Inquiries',
                    'agent_id' => 'Agent ID',
                    'agent_name' => 'Agent Name',
                );

                // Combine the existing fields with the additional fields
                $combinedFields = array_merge($aFields, $aAddition);

                // Generate the list box (select element) with multiple selection
                echo CHtml::listBox(
                    'colselect[]',
                    array_keys($combinedFields),
                    $combinedFields,
                    [
                        'multiple' => 'multiple',
                        'size' => '20',
                        'options' => $aFieldsOptions,
                        'class' => 'form-control'
                    ]
                );

             
                ?>
            </div>
            <div class="col-md-12">
         