
<style>
    .blocks {
        margin-top: 20px;
    }
    #div1, #div2{
        width: 80px;
        height: 80px;
        display: inline-block;
    }
    #mybtn {
        color: #000;
        border: 1px solid #008000;
        padding: 5px 15px 5px 15px;
        border-radius: 10px;
        background-color: #008000;
    }
</style>
<div class="blocks">
    <div class="container">
        <div class="sec1">
            <div id="div1" style="background-color:red;">
                
            </div>
            <div id="div2">
                <a href="http://www.youtube.com" target="_blank" id="mybtn">click</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#div1').on('click', function() {
            alert('iam in');
            jQuery('#mybtn')[0].click();
        });
    });
</script>