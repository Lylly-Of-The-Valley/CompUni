<form method="post" class="form-horizontal">
    <fieldset>
        <legend>Add Comment</legend>

        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name<sup class="required">*</sup></label>
            <div class="col-lg-10">
                <input type="text" required="" name="name" class="form-control" id="name" placeholder="Your Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">Email    </label>
            <div class="col-lg-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="col-lg-2 control-label">Comment<sup class="required">*</sup></label>
            <div class="col-lg-10">
                <textarea name="comment" required="" id="comment" class="form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </div>
    </fieldset>
</form>