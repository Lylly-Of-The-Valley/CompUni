<form method="post" class="form-horizontal">
    <fieldset>
        <legend>Register</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
            <div class="col-lg-10">
                <input type="text" name="fName" class="form-control" id="inputEmail" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
            <div class="col-lg-10">
                <input type="text" name="lName" class="form-control" id="inputEmail" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Gender</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
                        Male
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios2" value="Female">
                        Female
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Town</label>
            <div class="col-lg-10">
                <input type="text" name="town" class="form-control" id="inputEmail" placeholder="Town">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
            <div class="col-lg-10">
                <input type="text" name="userName" class="form-control" id="inputEmail" placeholder="User Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" name="emai" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" name="emai" class="form-control" id="inputEmail" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Description</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="description" rows="3" id="textArea"></textarea>
                <span class="help-block">Describe yourself - personal skills, hobbies, things you like to do. </span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>