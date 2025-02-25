<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #div1,
    #div2,
    #div3,
    #div4,
    #div5,
    #div6,
    #div7,
    #div8,
    #div9 {
        width: 80px;
        height: 80px;
        display: inline-block;

    }

    #div5,
    #div6,
    #div7,
    #div8,
    #div9 {
        border: 1px solid #000;
        margin: 0;
    }

    #progress {
        width: 25%;
        height: 80px;
        display: block;
        background-color: green;
    }

    .mulit-frm {
        margin-top: 20px;
        text-align: center;
    }

    .sec1,
    .sec2 {
        border: 1px solid #000;
    }
    .sec2{
        display: flex;
        width: 75%;
        justify-content: space-evenly;
    }

    .frm1 {
        border: 1px solid #000;
        margin: 10px;
    }

    #myForm {
        text-align: center;
        margin: auto;
    }

    .p2,
    .p3,
    .p4,
    #d2 {
        display: none;
    }
</style>

<div class="mulit-frm">
    <div class="row">
        <div class="container">
            <div class="sec1">
                <div id="progress" class="col-md-12">
                </div>
            </div>
            <div class="sec2">
                <div id="div5" class="col-md-4">
                    <p>1</p>
                </div>
                <div id="div6" class="col-md-4">
                    <p>2</p>
                </div>
                <div id="div7" class="col-md-4">
                    <p>3</p>
                </div>
                <div id="div8" class="col-md-4">
                    <p>4</p>
                </div>
            </div>
        </div>
    </div>
        <div class="frm1">
            <form class="col-sm-3" id="myForm">
                <div class="p1">
                    <div>
                        <label for="nameid" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameid" name="name">
                    </div>
                    <div id="namecheck"></div>
                    <div>
                        <label for="emailid" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emailid" name="email">
                    </div>
                    <div id="emailcheck"></div>

                    <button type="button" class="btn btn-primary mt-3" id="btnnext1">
                        Next
                    </button>

                </div>
                <div class="p2">
                    <div>
                        <label for="addressid" class="form-label">Address</label>
                        <input type="text" class="form-control" id="addressid" name="address">
                    </div>
                    <div id="addresscheck"></div>

                    <label for="languageid" class="form-label">Language</label><br>
                    <div class="form-check">
                        <input class="form-check-input" name="language[]" type="checkbox" value="" id="english" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            english
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="language[]" type="checkbox" value="" id="english">
                        <label class="form-check-label" for="flexCheckChecked">
                            hindi
                        </label>
                    </div>


                    <label for="genderid" class="form-label">Gender</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" checked>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>

                    <button type="button" class="btn btn-primary mt-3" id="btnprev1">
                        Prev
                    </button>
                    <button type="button" class="btn btn-primary mt-3" id="btnnext2">
                        Next
                    </button>
                </div>
                <div class="p3">
                    <div>
                        <label for="phoneno" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneid" name="phone">
                    </div>
                    <div id="phonecheck"></div>
                    <button type="button" class="btn btn-primary mt-3" id="btnprev2">
                        Prev
                    </button>
                    <button type="button" class="btn btn-primary mt-3" id="btnnext3">
                        Submit
                    </button>
                </div>
                <div class="p4">
                    <div class="alert alert-success" role="alert">
                        Thank you! your form has been submitted
                    </div>
                </div>
                <div id="d2">
                    <button type="submit" class="btn btn-primary mt-3" id="btnadd">
                        Save
                    </button>
                </div>


                <div id="d1" class="mt-5"></div>
                <!-- <div id="msg"></div> -->
            </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery(document).ready(function() {
        var erros = [];
        var name = '';
        var email = '';
        var address = '';
        var gender = '';
        var language = '';
        var phoneno = '';

        jQuery('#btnnext1').click(function() {
            name = jQuery('#nameid').val();
            email = jQuery('#emailid').val();
            // alert(email);
            if (name == '') {
                jQuery('input[name="name"]').focus();
                jQuery('input[name="name"]').css('border', '1px solid #ff0000');
                jQuery('#namecheck').html('<p>name is required</p>');
                erros.push('true');
            } else {
                jQuery('input[name="name"]').blur();
                jQuery('input[name="name"]').css('border', '1px solid #000');
                jQuery('#namecheck').hide();
                erros.push('false');
            }
            if (email == '') {
                jQuery('input[name="email"]').focus();
                jQuery('input[name="email"]').css('border', '1px solid #ff0000');
                jQuery('#emailcheck').html('<p>email is required</p>');
                erros.push('true');
            } else {
                jQuery('input[name="email"]').blur();
                jQuery('input[name="email"]').css('border', '1px solid #000');
                jQuery('#emailcheck').hide();
                erros.push('false');
            }
            if (jQuery.inArray('true', erros) > -1) {
                console.log('error submitting form');
            } else {
                jQuery('.p2').show();
                jQuery('.p1').hide();
                jQuery('#progress').css({
                    'width': '50%'
                });
            }
        });

        jQuery('#btnprev1').click(function() {
            jQuery('.p2').hide();
            jQuery('.p1').show();
            jQuery('#progress').css({
                'width': '25%'
            });
        });

        jQuery('#btnnext2').click(function() {
            address = jQuery('#addressid').val();
            gender = jQuery('input[name="gender"]').val();
            language = jQuery('input[name="gender"]').val();
            var erros = [];
            if (address == '') {
                jQuery('input[name="address"]').focus();
                jQuery('input[name="address"]').css('border', '1px solid #ff0000');
                jQuery('#addresscheck').html('<p>address is required</p>');
                erros.push('true');
            } else {
                jQuery('input[name="address"]').blur();
                jQuery('input[name="address"]').css('border', '1px solid #000');
                jQuery('#addresscheck').hide();
                erros.push('false');
            }
            if (jQuery.inArray('true', erros) > -1) {
                console.log('error submitting form');
            } else {
                jQuery('.p3').show();
                jQuery('.p2').hide();
                jQuery('#progress').css({
                    'width': '75%'
                });
            }
        });

        jQuery('#btnprev2').click(function() {
            jQuery('.p3').hide();
            jQuery('.p2').show();
            jQuery('#progress').css({
                'width': '50%'
            });
        });

        jQuery('#btnnext3').click(function() {
            phoneno = jQuery('#phoneid').val();
            var erros = [];
            if (phoneno == '') {
                jQuery('input[name="phone"]').focus();
                jQuery('input[name="phone"]').css('border', '1px solid #ff0000');
                jQuery('#phonecheck').html('<p>correct phone number is required</p>');
                erros.push('true');
            } else {
                jQuery('input[name="phone"]').blur();
                jQuery('input[name="[phone]"]').css('border', '1px solid #000');
                jQuery('#phonecheck').hide();
                erros.push('false');
            }


            if (jQuery.inArray('true', erros) > -1) {
                console.log('error submitting form');
            } else {
                // alert(name);
                mydata = {
                    name: name,
                    email: email,
                    address: address,
                    language: language,
                    gender: gender,
                    phoneno: phoneno,
                };
                console.log(mydata);
                $.ajax({
                    url: "mutli_insert.php",
                    method: "POST",
                    // data:JSON.stringify(mydata),
                    data: mydata,
                    success: function(data) {
                        // console.log(data);   
                        // msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                        // $("#msg").html(msg);
                        setTimeout(function() {
                            jQuery('.p4').show();
                            jQuery('.p3').hide();
                            jQuery('#progress').css({
                                'width': '100%'
                            }, 3000);
                        });
                    }
                });
            }
        });
    });
</script>