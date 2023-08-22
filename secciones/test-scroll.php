<style>
    .header {
        height: 200px;
        background-color: blue;
        position: fixed;
        top: 0;
        width: 100%;
        transition: all 0.5s;
    }

    .header-alt {
        height: 100px;
        background-color: red;
        position: fixed;
        top: 0;
        width: 100%;
        transition: all 0.5s;
    }

    .hidden {
        display: none;
    }
    .box{
        height: 100px;
        background-color: pink;
    }
</style>

<div class="hidden animate__animated box">

</div>

<script>
   
    $(function() {
        var header = $(".hidden");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 500) {
                header.removeClass('hidden').addClass("animate__bounceInLeft");
            } else {
                header.removeClass("animate__bounceInLeft").addClass('hidden');
            }
        });
    });
</script>