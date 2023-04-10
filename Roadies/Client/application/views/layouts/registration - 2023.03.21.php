<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Oswald&family=Kanit&family=Merriweather&family=Poppins&family=Rambla&family=Titillium+Web&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/36a1a5d2c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>
        .error {
            width: 100%;
            margin-top: .25rem;
            font-size: .575em;
            color: #dc3545;
        }
    </style>
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/boot.css'); ?>">
    <title>Registration Form</title>
</head>
<body>
    <?php
        if($Type == "Customer"){ ?>
            <div class="container w-75">
                <div class="row">
                    <div class="card mt-5">
                        <form method="post" id="customerform" action="javascript:void(0)">
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
                <form method="post" action="javascript:void(0);" id="tranporterform">
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
                                        <input type="text" name="cname" id="cname" class="form-control">
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
                                    Company's Email::
                                        <input type="text" name="co_email" id="co_email" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        GST No. :
                                        <input type="text" name="gst" id="gst" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        Pan No. :
                                        <input type="text" name="P_no" id="P_no" class="form-control">
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        Username:
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        Password:
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        Conform Password:
                                        <input type="text" name="co_password" id="co_password" class="form-control">
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
                                <button type="button" class="btn btn-primary btn-sm">Save</button>
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
    if($("#customerform").length > 0){
        jQuery.validator.addMethod("alpha",function(value,element){
            if(/^[A-Za-z]+$/.test(value)){
                return true;
            }else{
                return false;
            }
        });

        jQuery.validator.addMethod("format",function(value,element){
            if(/^[a-z0-9!#$%&*_]+@[a-z0-9]+(\.[a-z]{2,3})+$/.test(value)){
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

        jQuery.validator.addMethod("match",function(value,element){
            if($("#c_password").val() == value){
                return true;
            }else{
                return false;
            }
        });

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
                    // remote: {
                    //     url: "<?php echo site_url('Intro/duplicate'); ?>", 
                    //     type: 'post',
                    //     data: {
                    //         cemail: function(){
                    //             return $('#cemail').val();
                    //         }
                    //     }
                    // }
                },
                caddress: {
                    required: true
                },
                caadhaar: {
                    required: true,
                    number: true,
                    minlength: 12,
                    maxlength: 12,
                    // remote: {
                    //     url: "<?php echo site_url('Intro/duplicate'); ?>", 
                    //     type: 'post',
                    //     data: {
                    //         c_aadhaar: function(){
                    //             return $('#caadhaar').val();
                    //         }
                    //     }
                    // }
                },
                c_username: {
                    required: true,
                    alphanumeric: true,
                    maxlength: 12,
                    // remote: {
                    //     url: "<?php echo site_url('Intro/duplicate'); ?>", 
                    //     type: 'post',
                    //     data: {
                    //         c_username: function(){
                    //             return $('#c_username').val();
                    //         }
                    //     }
                    // }
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
                    // remote: "This email has been already used"
                },
                caddress: {
                    required: "address is required"
                },
                caadhaar: {
                    required: "Aadhaar is required",
                    number: "No alphabets allowed",
                    minlength: 'Aadhaar number shoukd be 12 digits long',
                    maxlength: 'Aadhaar number shoukd be 12 digits long'
                    // remote: "This aadhaar card has been already used"
                },
                c_username: {
                    required: "username is required",
                    alphanumeric: "Username must alphanumeric and lowercase",
                    maxlength: "Username must 12 character long",
                    // remote: "This username has been already used"
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
                    success: function(){
                        $("#save_customer").html("Save");
                        window.location.href = "http://localhost/TransportCompany/Client/";
                    }
                });
            }
        });
    }
// validation for customer registration form ends
// validation for transporter registration form starts
// if($("#tranporterform").length > 0){
        // jQuery.validator.addMethod("alpha",function(value,element){
        //     if(/^[A-Za-z]+$/.test(value)){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

        // jQuery.validator.addMethod("format",function(value,element){
        //     if(/^[a-z0-9!#$%&*_]+@[a-z0-9]+(\.[a-z]{2,3})+$/.test(value)){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

        // jQuery.validator.addMethod("alphanumeric",function(value,element){
        //     if(/^[a-z]+[0-9]+$/.test(value)){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

        // jQuery.validator.addMethod("strength",function(value,element){
        //     if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/.test(value)){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

        // jQuery.validator.addMethod("match",function(value,element){
        //     if($("#password").val() == value){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

    //     $("#customerform").validate({
    //         rules: {
    //             // personal details's validation
    //             tfname: {
    //                 required: true,
    //                 alpha: true
    //             },
    //             tlname: {
    //                 required: true,
    //                 alpha: true
    //             },
    //             tcontact: {
    //                 required: true,
    //                 number: true,
    //                 minlength: 10,
    //                 maxlength: 10
    //             },
    //             taadhar: {
    //                 required: true
    //             },
    //             temail: {
    //                 required: true,
    //                 format: true,
    //                 maxlength: 50,
    //                 // remote: {
    //                 //     url: "<?php echo site_url('Intro/duplicate'); ?>", 
    //                 //     type: 'post',
    //                 //     data: {
    //                 //         cemail: function(){
    //                 //             return $('#cemail').val();
    //                 //         }
    //                 //     }
    //                 // }
    //             },
    //           // company details's validation
    //             cname: {
    //                 required: true,
    //             },
    //             C_add: {
    //                 required: true,
    //             },
    //             city: {
    //                 required: true,
    //                 alpha: true
    //             },
    //             state: {
    //                 required: true,
    //                 alpha: true
    //             },
    //             co_email: {
    //                 required: true,
    //                 format: true,
    //                 maxlength: 50,
    //             },
    //             gst: {
    //                 required: true;
    //             },
    //             P_no: {
                    
    //             }
    //             c_username: {
    //                 required: true,
    //                 alphanumeric: true,
    //                 maxlength: 12,
    //                 // remote: {
    //                 //     url: "<?php echo site_url('Intro/duplicate'); ?>", 
    //                 //     type: 'post',
    //                 //     data: {
    //                 //         c_username: function(){
    //                 //             return $('#c_username').val();
    //                 //         }
    //                 //     }
    //                 // }
    //             },
    //             c_password: {
    //                 required: true,
    //                 strength: true
    //             },
    //             c_cnfpassword: {
    //                 required: true,
    //                 match: true
    //             }
    //         },
    //         messages: {
    //             Cfname: {
    //                 required: "Firstname is required",
    //                 alpha: "No numbers are allowed"
    //             },
    //             clname: {
    //                 required: "Lastname is required",
    //                 alpha: "No numbers are allowed"
    //             },
    //             cmobile_no: {
    //                 required: "Mobile number is required",
    //                 number: "No alphabets allowed ",
    //                 minlength: 'Mobile number shoukd be 10 digits long',
    //                 maxlength: 'Mobile number shoukd be 10 digits long'
    //             },
    //             cemail: {
    //                 required: "email is required",
    //                 format: "invalid email",
    //                 maxlength: "max 50 characters are allowed only",
    //                 // remote: "This email has been already used"
    //             },
    //             caddress: {
    //                 required: "address is required"
    //             },
    //             caadhaar: {
    //                 required: "Aadhaar is required",
    //                 number: "No alphabets allowed",
    //                 minlength: 'Aadhaar number shoukd be 12 digits long',
    //                 maxlength: 'Aadhaar number shoukd be 12 digits long'
    //                 // remote: "This aadhaar card has been already used"
    //             },
    //             c_username: {
    //                 required: "username is required",
    //                 alphanumeric: "Username must alphanumeric and lowercase",
    //                 maxlength: "Username must 12 character long",
    //                 // remote: "This username has been already used"
    //             },
    //             c_password: {
    //                 required: "Password is required",
    //                 strength: "password contains 1 uppercase,1 lowercase,1 number,1 special character"
    //             },
    //             c_cnfpassword: {
    //                 required: "Confirm Your Password please",
    //                 match: "Pasword and confirm password are different"
    //             }
    //         },
    //         submitHandler: function(e){
    //             $("#save_customer").html("Sending");
    //             $.ajax({
    //                 url: "<?php echo site_url('Intro/saveInfo'); ?>",
    //                 type: 'post',
    //                 method: 'post',
    //                 data: $('#customerform').serialize(),
    //                 success: function(){
    //                     $("#save_customer").html("Save");
    //                     window.location.href = "http://localhost/TransportCompany/Client/";
    //                 }
    //             });
    //         }
    //     });
    // }
</script>
</body>
</html>