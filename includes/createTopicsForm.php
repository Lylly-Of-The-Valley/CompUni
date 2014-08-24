<form method="post" class="form-horizontal" action="createTopicsForm.php?sid=<?php echo tep_session_id();?>">
    <fieldset>
        <legend>Create Topic</legend>
        <div class="form-group">
            <label for="topicName" class="col-lg-2 control-label">Topic Name<sup class="required"/></label>
            <div class="col-lg-10">
                <input type="text" required="" name="topicName" class="form-control" id="topicName" placeholder="Topic Name">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Description</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="TopicDescription" rows="3" id="textArea"></textarea>
                <span class="help-block">Write your topic </span>
            </div>
        </div>
        <div class="form-group">
            <label for="topicTag" class="col-lg-2 control-label">Enter topic tags<sup class="required"/></label>
            <div class="col-lg-10">
                <input type="text" required="" name="topicTag" class="form-control" id="topicTag" placeholder="Topic Tags">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
