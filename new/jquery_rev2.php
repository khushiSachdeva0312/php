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

    .blocks {
        margin-top: 20px;
    }

    .sec3 {
        width: 180px;
        height: 180px;
        background-color: chocolate;
        margin: 10px;
    }

    .st-size{
        width: 80px !important;
        height: 80px !important;
    }
    div#subsec {
        width: 100px;
        height: 100px;
        /* position: absolute; */
        /* padding: 10px; */
        background: burlywood;
        /* margin: 40px 10px 10px 40px; */
    }

    p {
        text-align: center;
    }

    .inline-cls{
        display: inline-block;
    }
</style>
<div class="blocks">
    <div class="container">
        <div class="sec1">
            <div id="div1" style="background-color:red;">
                <p>1</p>
            </div>
            <div id="div2" style="background-color:green;">
                <p>2</p>
            </div>
            <div id="div3" style="background-color:blue;">
                <p>3</p>
            </div>
            <div id="div4" style="background-color:aquamarine;">
                <p>4</p>
            </div>
        </div>
        <div class="sec2">
            <div id="div5" style="background-color:black;">
                <p>5</p>
            </div>
            <div id="div6" style="background-color:blueviolet;">
                <p>6</p>
            </div>
            <div id="div7" style="background-color:brown;">
                <p>7</p>
            </div>
            <div id="div8" style="background-color:cadetblue;">
                <p>8</p>
            </div>
        </div>
        <div class="sec3">
            <p>11</p>
            <div id="subsec">
            <p>10</p>
                <div id="div9" style="background-color:cadetblue;">
                    <p class="c9">9</p><span class="s9"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery(document).ready(function() {
        // var timeouts = [];

        // jQuery("#div2").hover(
        //     function() {
        //         for (var i = 10; i >= 0; i--) {
        //             (function(i) {
        //                 timeouts.push(setTimeout(function() {
        //                     jQuery('.c9').html(i);
        //                 }, i * 1000));
        //             })(i);
        //         }

        //     },
        //     function() {

        //         for (var i = 0; i < timeouts.length; i++) {
        //             clearTimeout(timeouts[i]);
        //         }

        //         timer = '9';
        //         jQuery(".c9").html(timer);
        //     }
        // );

        jQuery('#div2').hover(function() {
            jQuery('.c9').hide();
            var timeouts = [];
            for (var i = 10; i >= 0; i--) {
                (function(i) {
                    timeouts.push(setTimeout(function() {
                        jQuery('.s9').html(i);
                    }, i * 1000));
                })(i);
            }
            jQuery('.s9').show();
        });
        jQuery('#div2').mouseleave(function() {
            jQuery('.s9').hide();
            jQuery('.c9').show();
        });





        jQuery("#div3").hover(function() {
            //alert("hover");
            $("#div5").appendTo("#div8");
        });
        jQuery("#div4").hover(function() {
            //alert("hover");
            $("#div6").prependTo("#div7");
        });

        jQuery('#div8').hover(function(){
            jQuery("#div9").css({'margin': '5px'}).insertAfter('#div8');
            jQuery('#subsec').addClass('inline-cls').addClass('st-size').insertAfter('#div9');
            jQuery('.sec3').addClass('inline-cls').addClass('st-size').insertAfter('#subsec');
        });

        jQuery('#div1').hover(function(){
            jQuery('#div5').prependTo('.sec2');
            jQuery('#div6').css({'margin':'5px'}).insertAfter('#div5');
            jQuery('.sec3').removeClass('st-size').removeClass('inline-cls');
            jQuery('#subsec').removeClass('st-size').removeClass('inline-cls');
            jQuery('#subsec').appendTo('.sec3');
            jQuery('#div9').appendTo('#subsec');
        });

    });




</script>