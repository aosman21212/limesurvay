<!-- Add the date range filter inputs below the response summary -->
<div class="card mb-4 <?= $SingleResponse ? 'd-none' : ''?>" id="panel-2">
    <div class="card-header ">
        <div class="">
            <?php eT("Range"); ?>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <!-- From -->
            <label for='export_from' class=" form-label">
                <?php eT("From:"); ?>
            </label>
            <div class="">
                <?php printf(
                    '<input min="%s" max="%s" step="1" type="number" value="%s" name="export_from" id="export_from" class="form-control" />',
                    $min_datasets,
                    $max_datasets,
                    $min_datasets
                ) ?>
            </div>

            <!-- To -->
            <label for='export_to' class=" form-label">
                <?php eT("to:"); ?>
            </label>
            <div class="">
                <?php printf(
                    '<input min="%s" max="%s" step="1" type="number" value="%s" name="export_to" id="export_to" class="form-control" />',
                    $min_datasets,
                    $max_datasets,
                    $max_datasets
                ) ?>
            </div>
        </div>
    </div>
</div>
<!-- Add the date range filter inputs below the response summary -->
<div class="card mb-4 <?= $SingleResponse ? 'd-none' : ''?>" id="panel-2">
    <div class="card-header">
        <div>
            Post-WhatsApp chat survey
        </div>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <!-- Date Range Filters: Survey Submitted Date -->
            <!-- Survey Submitted Date Filter -->
            <div class="survey-submitted-date-filter">
                <label for="start_survey_submitted_date">Start Survey Submitted Date:</label>
                <input type="date" name="start_survey_submitted_date" class="form-control" id="start_survey_submitted_date">
                <label for="end_survey_submitted_date">End Survey Submitted Date:</label>
                <input type="date" name="end_survey_submitted_date" class="form-control" id="end_survey_submitted_date">
            </div>
              <!-- Date Range Filters: Chat Start Date -->
              <div class="chat-date-range-filter">
                <label for="start_chat_date">Start Chat Date:</label>
                <input type="date" name="start_chat_date" class="form-control" id="start_chat_date">
                <label for="end_chat_date">End Chat Date:</label>
                <input type="date" name="end_chat_date" class="form-control" id="end_chat_date">
            </div>

            <!-- Date Range Filters: Survey Sent Date -->
            <div class="date-range-filter">
                <label for="start_survey_sent_date">Start Survey Sent Date:</label>
                <input type="date" name="start_survey_sent_date" class="form-control" id="start_survey_sent_date">
                <label for="end_survey_sent_date">End Survey Sent Date:</label>
                <input type="date" name="end_survey_sent_date" class="form-control" id="end_survey_sent_date">
            </div>

            <!-- Served By Filter -->
            <div class="served-by-filter">
                <label for="served_by">Served By:</label>
                <select name="served_by" class="form-select" id="served_by">
                    <option value="">Select Served By</option>
                    <option value="Agent">Agent</option>
                    <option value="Chatbot">Chatbot</option>
                </select>
            </div>

            <!-- WhatsApp Number Filter -->
            <div class="whatsapp-number-filter">
                <label for="whatsapp_number">WhatsApp Number:</label>
                <input type="text" name="whatsapp_number" class="form-control" id="whatsapp_number">
            </div>



            <!-- Survey Submitted Status Filter -->
            <div class="survey-submitted-status-filter">
                <label for="survey_submitted_status">Survey Submitted Status:</label>
                <select name="survey_submitted_status" class="form-select" id="survey_submitted_status">
                    <option value="">Select Submitted Status</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Partial">Partial</option>
                </select>
            </div>
      
        </div>
    </div>
</div>

            <!-- Export Button -->
            <!-- <div class="export-button">
                <button type="submit" name="export_with_filters" class="btn btn-primary">Export with Filters</button>
            </div> -->
        </div>
    </div>
</div>




