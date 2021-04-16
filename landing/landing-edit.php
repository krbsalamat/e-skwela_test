
<!-- MIDDLE CONTENT -->
<div class="tab-pane sel active" id="landingProfileDiv">
    <form>
    <h3>Edit profile</h3>
    <div class="row">
        
        <div class="col-6">
            <label for="landingProfileFname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="landingProfileFname" id="landingProfileFname" placeholder="<?php echo $row[$torsv[$utype].'firstname']; ?>">
        </div>
        <div class="col-6">
            <label for="landingProfileLname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="landingProfileLname" id="landingProfileLname" placeholder="<?php echo $row[$torsv[$utype].'lastname']; ?>">
        </div>
    </div>
    <div class="row mt-2 pt-2">
        <div class="col-6">
            
            <label for="landingUsername" class="form-label">Username</label> 
            
            <input type="text" class="form-control" id="landingUsername" name="landingUsername" placeholder="<?php echo $row[$torsv[$utype].'username']; ?>">
        </div>
        <div class="col-6">
            <label for="landingEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="landingEmail" id="landingEmail" placeholder="<?php echo $row[$torsv[$utype].'email']; ?>">
        </div>
    </div>
    <div class="col-6" id="landingUsercheckdiv">
        <span id="landingUsercheck" class="help-block"></span>
    </div>
    <button type="button" class="btn btn-primary mt-5" name="landingSubmit" id="landingSubmit">Change details</button>
    <span id="submission" class="help-block text-success"></span>
</div>
</form>
