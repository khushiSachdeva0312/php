<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .sub1,
    .sub2,
    .sub3,
    .btn2 {
        display: none;
    }
    .msg{
        width: fit-content;
    }

    #namecheck, #emailcheck, #passcheck, #cpasscheck, #addresscheck{
        display: none;
    }

</style>


<div class="row">
    <div class="container">
        <form class="col-sm-3" id="myForm">
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
            <div>
                <label for="passwordid" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordid" name="password">
            </div>
            <div id="passcheck"></div>
            <div>
                <label for="cpasswordid" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpasswordid" name="cpassword">
            </div>
            <div id="cpasscheck"></div>
            <div>
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="addressid" name="address">
            </div>
            <div id="addresscheck"></div>
            <div id="d2">
                <button type="submit" class="btn btn-primary mt-3" id="btnadd">
                    Save
                </button>
            </div>


            <div id="d1" class="mt-5"></div>
            <div id="msg"></div>
        </form>
    </div>

</div>





<div class="prev">
    <h2 class="head1">
        click me to load content.
    </h2>
    <p class="sub1">
        welcome to our site,
        click me to hide
    </p>

    <h2 class="head2">
        hover me to load content
    </h2>
    <p class="sub2">
        welcome again to our site, hover me to hide
    </p>
    <h2 class="head3">
        click to see more content
    </h2>
    <p class="sub3">
        welcome again to our site,this will hide in 3 seconds
    </p>

    <p class="sub4">Click or move the mouse pointer over this paragraph.</p>
</div>

<button class="btn1">Click to fade in boxes</button><br><br>

<button class="btn2">Click to fade out boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery(document).ready(function() {
        // alert('iam in');

        jQuery("#myForm").submit(function(e) {
            e.preventDefault();
            validation();
        });

        jQuery('.head1').on('click', function() {
            jQuery('.sub1').show();
        });
        jQuery('.sub1').on('click', function() {
            jQuery('.sub1').hide();
        });
        jQuery('.head2').hover(function() {
            jQuery('.sub2').show();
        });
        jQuery('.sub2').hover(function() {
            jQuery('.sub2').hide();
        });
        jQuery('.head3').on('click', function() {
            jQuery('.sub3').show();
            setTimeout(function() {
                jQuery('.sub3').hide();
            }, 3000);
        });

        jQuery('.sub4').on({
            mouseenter: function() {
                jQuery(this).css('background-color', 'lightgray');
            },
            mouseleave: function() {
                jQuery(this).css('background-color', 'lightblue');
            },
            click: function() {
                jQuery(this).css('background-color', 'yellow');
            }
        });

        jQuery('.btn1').click(function() {
            jQuery('#div1').fadeIn();
            jQuery('#div2').fadeIn('slow');
            jQuery('#div3').fadeIn(3000);
            jQuery('.btn2').fadeIn();
            jQuery('.btn1').hide();
        });
        jQuery('.btn2').click(function() {
            jQuery('#div1').fadeOut();
            jQuery('#div2').fadeOut('slow');
            jQuery('#div3').fadeOut(3000);
            jQuery('.btn1').fadeIn(4000);
            jQuery('.btn2').hide();
        });
    });

    function validation() {
        var name = jQuery.trim(jQuery('input[name="name"]').val());
        var email = jQuery.trim(jQuery('input[name="email"]').val());
        var password = jQuery.trim(jQuery('input[name="password"]').val());
        var cpassword = jQuery.trim(jQuery('input[name="cpassword"]').val());
        var address = jQuery.trim(jQuery('input[name="address"]').val());
        var erros = [];
        if (name == "") {
            jQuery('input[name="name"]').focus();
            jQuery('input[name="name"]').css('border', '1px solid #ff0000');
            jQuery('#namecheck').html('<p>name is required</p>');
            jQuery('#namecheck').show();
            erros.push('true');
        } else {
            jQuery('input[name="name"]').blur();
            jQuery('input[name="name"]').css('border', '1px solid #000');
            jQuery('#namecheck').hide();
            erros.push('false');
        }

        if (email == "") {
            jQuery('input[name="email"]').focus();
            jQuery('input[name="email"]').css('border', '1px solid #ff0000');
            jQuery('#emailcheck').html('<p>email is required</p>');
            jQuery('#emailcheck').show();
            erros.push('true');
        } else {
            jQuery('input[name="email"]').blur();
            jQuery('input[name="email"]').css('border', '1px solid #000');
            jQuery('#emailcheck').hide();
            erros.push('false');
        }

        if (email != "") {
            var check = validateEmails(email);
            if (!check) {
                jQuery('input[name="email"]').focus();
                jQuery('input[name="email"]').css('border', '1px solid #ff0000');
                jQuery('#emailcheck').html('<p>invalid email</p>');
                jQuery('#emailcheck').show();
                erros.push('true');
            }else{
                erros.push('false');
            }
        }

        if (password == "") {
            jQuery('input[name="password"]').focus();
            jQuery('input[name="password"]').css('border', '1px solid #ff0000');
            jQuery('#passcheck').html('<p>password is required</p>');
            jQuery('#passcheck').show();
            erros.push('true');
        } else {
            jQuery('input[name="password"]').blur();
            jQuery('input[name="password"]').css('border', '1px solid #000');
            jQuery('#passcheck').hide();
            erros.push('false');
        }

        if (cpassword == "") {
            jQuery('input[name="cpassword"]').focus();
            jQuery('input[name="cpassword"]').css('border', '1px solid #ff0000');
            jQuery('#cpasscheck').html('<p>password is required</p>');
            jQuery('#cpasscheck').show();
            erros.push('true');
        } else {
            jQuery('input[name="cpassword"]').blur();
            jQuery('input[name="cpassword"]').css('border', '1px solid #000');
            jQuery('#cpasscheck').hide();
            erros.push('false');
        }

        if (password == cpassword) {
            erros.push('false');
        } else {
            alert("password doesn't match");
            erros.push('true');
        }

        if (address == "") {
            jQuery('input[name="address"]').focus();
            jQuery('input[name="address"]').css('border', '1px solid #ff0000');
            jQuery('#addresscheck').html('<p>address is required</p>');
            jQuery('#addresscheck').show();
            erros.push('true');
        } else {
            jQuery('input[name="address"]').blur();
            jQuery('input[name="address"]').css('border', '1px solid #000');
            jQuery('#addresscheck').hide();
            erros.push('false');
        }
      // var newarr = [];
      //  newarr.push(erros);
    //     console.log(erros);

    //         if (jQuery.inArray('true', erros) > -1)
    // {
    // //     //yourElement in yourArray
    // //     //code here

  

    // //    if(jQuery.inArray('true', erros) > -1){
    //         alert('true exists');
    //     }else{
    //         alert('true not exists');
    //     }





        if(jQuery.inArray('true', erros) > -1) {
            console.log('error submitting form');
        }else{
            mydata = {
                name: name,
                email: email,
                password: password,
                cpassword: cpassword,
                address: address,
            };
            console.log(mydata);
            jQuery.ajax({
                url: "insert.php",
                method: "POST",
                // data:JSON.stringify(mydata),
                data: mydata,
                success: function(data) {
                    // console.log(data);   
                    msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                    $("#msg").html(msg);
                    $("#myForm")[0].reset();
                }
            });
        }

    //     // alert(erros);
    }

    function validateEmails(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
</script>
