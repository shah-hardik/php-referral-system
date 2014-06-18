<div class="addAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">Edit Registration</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">UserName</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[username]" id="username" value="<?php print $username; ?>" placeholder="Add your Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="fields[password]" id="password" value="" placeholder="Add your Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Conform Password</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="fields[conform_password]" id="conform_password" value="" placeholder="Add your Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Salutation</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[salutation]" id="salutation" value="<?php print $salutation; ?>" placeholder="Add your Salutation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[fname]" id="fname" value="<?php print $fname; ?>" placeholder="Add your First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[lname]" id="lname" value="<?php print $lname; ?>" placeholder="Add your Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Company</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[company]" id="company" value="<?php print $company; ?>" placeholder="Add your Company" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[address]" id="question" value="<?php print $address; ?>" placeholder="Add your Address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[city]" id="city" value="<?php print $city; ?>" placeholder="Add your City" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Province</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[province]" id="province" value="<?php print $province; ?>" placeholder="Add your Province" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Postal Code</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[postal_code]" id="postal_code" value="<?php print $postal_code; ?>" placeholder="Add your Postal Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Phone</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[phone]" id="phone" value="<?php print $phone; ?>" placeholder="Add your phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[email]" id="email" value="<?php print $email; ?>" placeholder="Add your Email" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="hidden" name="fields[reg_id]" id="reg_id" value="<?php print $id_val; ?>">
                        <button type="submit" class="btn btn-primary" onclick="return FormSubmit();">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>