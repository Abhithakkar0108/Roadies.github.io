<style>
    .error {
        width: 100%;
        margin-top: .25rem;
        font-size: .575em;
        color: #dc3545;
    }
</style>
<?php
    if($Type == "Customer"){ ?>
        <div class="container w-75">
            <div class="row">
                <div class="card mt-5">
                    <form method="post" id="customerform" action="javascript:void(0)">
                    <input type="hidden" name="todo" value="customer">
                        <div class="card-header text-capitalize">
                            customer registration Form
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-6 my-1">
                                    FirstName:
                                    <input type="text" name="Cfname" id="cfname" class="form-control">
                                </div>  
                                <div class="form-group col-lg-6 my-1">    
                                    LastName:
                                    <input type="text" name="clname" id="clname" class="form-control">
                                </div>
                                <div class="col-lg-6 my-1">
                                    <div class="row">
                                        <div class="form-group col-lg-12 mb-1">
                                            Mobile_No:
                                            <input type="text" name="cmobile_no" id="cmobile_no" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-12 mt-1">
                                            Email:
                                            <input type="text" name="cemail" id="cemail" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 my-1">
                                    Address:
                                    <textarea name="caddress" id="caddress" cols="10" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-12 my-1">
                                    PAN_No:
                                    <input type="text" name="cpan_no" id="cpan_no" class="form-control">
                                </div>
                                <div class="form-group col-lg-6 my-1">
                                    Aadhaar_No:
                                    <input type="text" name="caadhaar" id="caadhaar" class="form-control">
                                </div>
                                <div class="form-group col-lg-6 my-1">
                                    UserName:
                                    <input type="text" name="c_username" id="c_username" class="form-control">
                                </div>
                                <div class="form-group col-lg-6 my-1">
                                    Password:
                                    <input type="password" name="c_password" id="c_password" class="form-control">
                                </div>
                                <div class="form-group col-lg-6 my-1">
                                    ConfirmPassword:
                                    <input type="password" name="c_cnfpassword" id="c_cnfpassword" class="form-control">
                                </div>  
                            </div>
                        </div>
                        <div class="form-group card-footer text-end">
                            <button class="btn btn-primary btn-sm" id="save_customer" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php }elseif($Type == "Transporter"){ ?>
        <div class="container w-75">
            <form method="post" action="javascript:void(0)" id="tranporterform">
                <input type="hidden" name="todo" value="transporter">
                <div class="row mt-5">
                    <h5>Transport Registration Form</h5>
                    <div class="card border ">
                        <div class="card-header">
                            Personal Details
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    FirstName:
                                    <input type="text" name="tfname" id="tfname" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    LastName:
                                    <input type="text" name="tlname" id="tlname" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Contact:
                                    <input type="text" name="tcontact" id="tcontact" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Aadhar No. :
                                    <input type="text" name="taadhar" id="taadhar" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    PAN No. :
                                    <input type="text" name="tpan_no" id="tpan_no" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Email:
                                    <input type="text" name="temail" id="temail" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card border mt-5">
                        <div class="card-header">
                            Company Details
                        </div>
                        <div class="card-body">    
                            <div class="row">
                                <div class="col-lg-6">
                                    Company's Name:
                                    <input type="text" name="coname" id="coname" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Company's Address:
                                    <input type="text" name="C_add" id="C_add" class="form-control">
                                </div>
                                
                                <div class="col-lg-6">
                                    City:
                                    <input type="text" name="city" id="city" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    State:
                                    <input type="text" name="state" id="state" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Company's Contact:
                                    <input type="text" name="co_contact" id="co_contact" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Company's Email::
                                    <input type="text" name="co_email" id="co_email" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    GST No. :
                                    <input type="text" name="gst" id="gst" class="form-control">
                                </div>                                    
                                <div class="col-lg-6">
                                    Username:
                                    <input type="text" name="co_username" id="co_username" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Password:
                                    <input type="password" name="copassword" id="copassword" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Conform Password:
                                    <input type="password" name="co_cnpassword" id="co_cnpassword" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">    
                    <div class="card border mt-5">
                        <div class="card-header">
                            Account Details
                        </div>
                        <div class="card-body">
                            <div class="row">        
                                <div class="col-lg-6">
                                    BankName :
                                    <input type="text" name="bankn" id="bankn" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Account Holder Name:
                                    <input type="text" name="A_holder" id="A_holder" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    Account No. :
                                    <input type="text" name="AC" id="AC" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    IFSC Code:
                                    <input type="text" name="ifsc" id="ifsc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary btn-sm" id="save_transporter">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php }
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.additional-methods.js'); ?>"></script>
<!-- validation for customer registration form Start-->
<script type="text/javascript">
    jQuery.validator.addMethod("alpha",function(value,element){
        if(/^[A-Za-z]+$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("format",function(value,element){
        if(/^[A-Z0-9!#$%&*_]+@[A-Z0-9]+(\.[A-Z]{2,3})|[a-z0-9!#$%&*_]+@[a-z0-9]+(\.[a-z]{2,3})+$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("alphanumeric",function(value,element){
        if(/^[a-z]+[0-9]+$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("strength",function(value,element){
        if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("pan_card",function(value,element){
        if(/[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("match",function(value,element){
        if($("#c_password").val() == value){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("match2",function(value,element){
        if($("#copassword").val() == value){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("gst",function(value,element){
        if(/[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[0-9A-Z]{1}Z[0-9A-Z]{1}$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    jQuery.validator.addMethod("ifsc",function(value,element){
        if(/[a-z|A-Z]{4}0[a-z0-9|A-Z0-9]{6}$/.test(value)){
            return true;
        }else{
            return false;
        }
    });
    if($("#customerform").length > 0){
        $("#customerform").validate({
            rules: {
                Cfname: {
                    required: true,
                    alpha: true
                },
                clname: {
                    required: true,
                    alpha: true
                },
                cmobile_no: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                cemail: {
                    required: true,
                    format: true,
                    maxlength: 50,
                    remote: {
                        url: "<?php echo base_url('Intro/duplicate'); ?>", 
                        type: 'post',
                        data: {
                            cemail: function(){
                                return $('#cemail').val();
                            }
                        }
                    }
                },
                caddress: {
                    required: true
                },
                cpan_no: {
                    required: true,
                    pan_card: true,
                    remote: {
                        url: "<?php echo base_url('Intro/duplicate'); ?>", 
                        type: 'post',
                        data: {
                            cpan_no: function(){
                                return $('#cpan_no').val();
                            }
                        }
                    }
                },
                caadhaar: {
                    required: true,
                    number: true,
                    minlength: 12,
                    maxlength: 12,
                    remote: {
                        url: "<?php echo base_url('Intro/duplicate'); ?>", 
                        type: 'post',
                        data: {
                            caadhaar: function(){
                                return $('#caadhaar').val();
                            }
                        }
                    }
                },
                c_username: {
                    required: true,
                    alphanumeric: true,
                    maxlength: 12,
                    remote: {
                        url: "<?php echo base_url('Intro/duplicate'); ?>", 
                        type: 'post',
                        data: {
                            c_username: function(){
                                return $('#c_username').val();
                            }
                        }
                    }
                },
                c_password: {
                    required: true,
                    strength: true
                },
                c_cnfpassword: {
                    required: true,
                    match: true
                }
            },
            messages: {
                Cfname: {
                    required: "Firstname is required",
                    alpha: "No numbers are allowed"
                },
                clname: {
                    required: "Lastname is required",
                    alpha: "No numbers are allowed"
                },
                cmobile_no: {
                    required: "Mobile number is required",
                    number: "No alphabets allowed ",
                    minlength: 'Mobile number shoukd be 10 digits long',
                    maxlength: 'Mobile number shoukd be 10 digits long'
                },
                cemail: {
                    required: "email is required",
                    format: "invalid email",
                    maxlength: "max 50 characters are allowed only",
                    remote: "This email has been already used"
                },
                caddress: {
                    required: "address is required"
                },
                cpan_no: {
                    required: "Pan card is required",
                    pan_card: "Invalid format",
                    remote: "This pan card has been already used"
                },
                caadhaar: {
                    required: "Aadhaar is required",
                    number: "No alphabets allowed",
                    minlength: 'Aadhaar number shoukd be 12 digits long',
                    maxlength: 'Aadhaar number shoukd be 12 digits long',
                    remote: "This aadhaar card has been already used"
                },
                c_username: {
                    required: "username is required",
                    alphanumeric: "Username must alphanumeric and lowercase",
                    maxlength: "Username must 12 character long",
                    remote: "This username has been already used"
                },
                c_password: {
                    required: "Password is required",
                    strength: "password contains 1 uppercase,1 lowercase,1 number,1 special character"
                },
                c_cnfpassword: {
                    required: "Confirm Your Password please",
                    match: "Pasword and confirm password are different"
                }
            },
            submitHandler: function(e){
                $("#save_customer").html("Sending");
                $.ajax({
                    url: "<?php echo site_url('Intro/saveInfo'); ?>",
                    type: 'post',
                    method: 'post',
                    data: $('#customerform').serialize(),
                    success: function(data){
                        if(data.length > 0){
							window.location.href = "<?php echo site_url('Intro/index'); ?>";
						}else{
							return false;
                        }
                    }
                });
            }
        });
    }
// validation for customer registration form ends
// validation for transporter registration form starts
if($("#tranporterform").length > 0){
    $("#tranporterform").validate({
        rules:{
            tfname: {
                required: true,
                alpha: true
            },
            tlname: {
                required: true,
                alpha: true
            },
            tcontact: {
                required: true,
                number: true,
                maxlength: 10,
                minlength: 10
            },
            taadhar: {
                required: true,
                number: true,
                minlength: 12,
                maxlength: 12,
                remote: {
                    url: "<?php echo base_url('Intro/tduplicate'); ?>", 
                    type: 'post',
                    data: {
                        taadhar: function(){
                            return $('#taadhar').val();
                        }
                    }
                }
            },
            tpan_no: {
                required: true,
                pan_card: true,
                remote: {
                    url: "<?php echo base_url('Intro/tduplicate'); ?>", 
                    type: 'post',
                    data: {
                        tpan_no: function(){
                            return $('#tpan_no').val();
                        }
                    }
                }
            },
            temail: {
                required: true,
                format: true,
                maxlength: 50,
                remote: {
                    url: "<?php echo base_url('Intro/tduplicate'); ?>", 
                    type: 'post',
                    data: {
                        temail: function(){
                            return $('#temail').val();
                        }
                    }
                }
            },
            // company's details validation
            coname: {
                required: true
            },
            C_add: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            },
            co_contact: {
                required: true,
                number: true,
                maxlength: 10,
                minlength: 10
            },
            co_email: {
                required: true,
                format: true,
                maxlength: 50,
                remote: {
                    url: "<?php echo base_url('Intro/tduplicate'); ?>", 
                    type: 'post',
                    data: {
                        co_email: function(){
                            return $('#co_email').val();
                        }
                    }
                }
            },
            gst:{
                required: true,
                maxlength: 15,
                minlength: 15,
                gst: true,
                remote: {
                    url: "<?php echo base_url('Intro/match'); ?>",
                    type: 'post',
                    data: {
                        gst: function(){
                            return $("#gst").val();
                        },
                        pan_card: function(){
                             return $("#tpan_no").val();
                        }
                    }
                }
            },
            co_username: {
                required: true,
                alphanumeric: true,
                maxlength: 12,
                remote: {
                    url: "<?php echo base_url('Intro/tduplicate'); ?>", 
                    type: 'post',
                    data: {
                        co_username: function(){
                            return $('#co_username').val();
                        }
                    }
                }
            },
            copassword: {
                required: true,
                strength: true
            },
            co_cnpassword: {
                required: true,
                match2: true
            },
            // bank details validation
            bankn: {
                required: true
            },
            A_holder: {
                required: true
            },
            AC: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 18
            },
            ifsc: {
                required: true,
                maxlength: 11,
                ifsc: true,
            }
        },
        messages: {
            tfname: {
                required: "First name is required",
                alpha: "No numbers allowed"
            },
            tlname: {
                required: "Last name is required",
                alpha: "No numbers allowed"
            },
            tcontact: {
                required: "Contact is required",
                number: "No Alphabets allowed",
                maxlength: "Contact must be 10 digits long",
                minlength: "Contact must be 10 digits long"
            },
            taadhar: {
                required: "Adhaar number is required",
                number: "no alphabets are required",
                minlength: "Adhaar number must be 12 digits long",
                maxlength: "Adhaar number must be 12 digits long",
                remote: "this adhaar no has been used already"
            },
            tpan_no: {
                required: "Pan card is required",
                pan_card: "invalid format",
                remote: "this pan card has been already used",
                remote: "pan card doesn't linked with gstno."
            },
            temail: {
                required: "email is required",
                format: "invalid format",
                maxlength: "max length should be 50 characters long",
                remote: "this email has been already used"
            },
            // company's details validation
            coname: {
                required: "Company's Name is required"
            },
            C_add: {
                required: "Company's address is required"
            },
            city: {
                required: "City is required"
            },
            state: {
                required: "State is required"
            },
            co_contact: {
                required: "Contact is required",
                number: "No Alphabets allowed",
                maxlength: "Contact must be 10 digits long",
                minlength: "Contact must be 10 digits long"
            },
            co_email: {
                required: "Company's email is required",
                format: "invalid format",
                maxlength: "max length should be 50 characters long",
                remote: "this email has been already used"
            },
            gst:{
                required: "GST no is required",
                maxlength: "GST no must be 15 digits long",
                minlength: "GST no must be 15 digits long",
                gst: "invalid format",
                remote: "This Gst no Does not belongs to this company"
            },
            co_username: {
                required: "Username is required",
                alphanumeric: "username should be alphanumeric",
                maxlength: "username should be 12 characters long",
                remote: "this username is used by someone"
            },
            copassword: {
                required: "password is required",
                strength: "trupassword contains 1 uppercase,1 lowercase,1 number,1 special charactere"
            },
            co_cnpassword: {
                required: "please confirm the password",
                match2: "Confirm pasword doesn't match with password"
            },
            // bank details validation
            bankn: {
                required: "Bankname is must"
            },
            A_holder: {
                required: "Account Holder's name is must"
            },
            AC: {
                required: "Account number is required",
                number: "No alphabets allowed",
                minlength: "Account number should be miniimum 18 digits long",
                maxlength: "Account number should be maximum 18 digits long"
            },
            ifsc: {
                required: "ifsc code is required",
                maxlength: "ifsc must be 11 characters long",
                ifsc: "invalid ifsc code"
            }
        },
        submitHandler: function(e){
            $("#save_transporter").html("Sending");
            $.ajax({
                url: "<?php echo site_url('Intro/saveInfo'); ?>",
                type: 'post',
                method: 'post',
                data: $('#tranporterform').serialize(),
                success: function(data){
                    if(data.length > 0){
                        window.location.href = "<?php echo site_url('Intro/index'); ?>";
                    }else{
                        return false;
                    }
                }
            });
        }
    });
}
</script>