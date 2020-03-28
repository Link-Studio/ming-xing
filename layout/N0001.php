<style>
    @charset "utf-8";
    /* CSS Document */
    
    #N0001 {
        height: 100px;
    }
    
    #N0001 .logo-bg {
        height: 100px;
        width: 260px
    }
    
    #N0001 .logo {
        top: 10px;
        left: 5px;
    }
    
    #N0001 .cmtc {
        top: 35px;
        left: 90px;
        font-size: 20px;
    }
    
    #N0001 .mobile-menu,
    #N0001 .mobile-close {
        right: 10px;
        bottom: 20px;
        z-index: 100;
        transform: rotate(-180deg);
        opacity: 0;
        transition: all .3s;
    }
    
    #N0001 .mobile-menu.show,
    #N0001 .mobile-close.show {
        transform: rotate(0deg);
        opacity: 1;
        /*    transition: all .3s ;*/
    }
    
    #N0001 .nav {
        width: 100vw;
        top: 100px;
        left: -1000px;
        opacity: 0;
        transition: all 0.5s cubic-bezier(.1, .89, .37, 1);
    }
    
    #N0001 .nav.show {
        top: 100px;
        left: 0px;
        opacity: 1;
        transition: all 0.5s cubic-bezier(.1, .89, .37, 1);
    }
    
    #N0001 .nav .item {
        width: 100vw;
        border-bottom: 1px #000000 solid;
        color: #000000;
        line-height: .8em;
        font-size: 18px;
    }
    
    #N0001 small {
        font-size: 10px;
        color: #636363;
    }
    
    #N0001 .nav .item:hover,
    #N0001 .nav .item:hover small,
    #N0001 .nav .item.active,
    #N0001 .nav .item.active small {
        text-decoration: none;
    }
    
    #N0001 .nav:before {
        content: '';
        position: absolute;
        top: -2px;
        height: 1px;
        width: 100vw;
        background-color: #000000;
    }
    
    @media screen and (min-width: 992px) {
        #N0001 .nav {
            top: 30px;
            left: 280px;
            right: 10px;
            opacity: 1;
            width: calc(100vw - 280px);
        }
        #N0001 .nav .item {
            width: 100px;
            border-bottom: 1px solid transparent;
            color: #000000;
        }
        #N0001 .nav:before {
            content: '';
            display: none;
        }
        #N0001 .nav .divide:after {
            content: '';
            position: absolute;
            top: calc((100% - 20px)/2);
            height: 20px;
            width: 1px;
            background-color: #000000;
        }
        #N0001 .nav .item:hover,
        #N0001 .nav .item.active {
            border-bottom: 2px solid #17C8FF;
        }
        #N0001 .nav .item:hover,
        #N0001 .nav .item:hover small,
        #N0001 .nav .item.active,
        #N0001 .nav .item.active small {
            color: #17C8FF;
            transition: all 1s;
        }
    }
</style>

<nav id="N0001" class="fixed-top ">
    <div class="position-absolute logo-bg ">
        <a class="position-absolute logo" href="#" target="_blank">
            <img src="images/N0001_logo.png" alt="楠堂文藝工作室">
        </a>
        <div class="position-absolute cmtc">
            <p>楠堂文藝工作室</p>
        </div>
    </div>
    <!--行動版開啟/關閉選單-->
    <a class="position-absolute d-lg-none mobile-menu show" href="#">
        <img src="images/N0001_mobile_menu.png" alt="開啟選單">
    </a>
    <a class="position-absolute d-none mobile-close" href="#">
        <img src="images/N0001_mobile_close.png" alt="關閉選單">
    </a>
    <div class="position-absolute d-lg-flex justify-content-end nav ">
        <a href="#" class="active item">
            <div class="p-3 p-lg-1 text-center">選單A<br><small>AAAAAAAAA</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單B<br><small>BBBBBBBBB</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單C<br><small>CCCCCCCCC</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單D<br><small>DDDDDDDDD</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單E<br><small>EEEEEEEEE</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單F<br><small>FFFFFFFFF</small></div>
        </a>
        <a href="#" class="item divide">
            <div class="p-3 p-lg-1 text-center">選單G<br><small>GGGGGGGGG</small></div>
        </a>
    </div>
</nav>

<script>
    $(document).ready(function() {

        //992px以上的選單按下效果
        $('#N0001 .nav .item').click(function(e) {
            e.preventDefault();
            $("#N0001 .nav .item").removeClass('active');
            $(this).addClass('active');
        });
        //991px以下的選單互動控制


        $('#N0001 .mobile-menu').click(function(e) {
            e.preventDefault();
            $(this).addClass("d-none");
            $(this).removeClass("show");
            $('#N0001 .mobile-close').removeClass("d-none");
            $("#N0001 .nav").addClass("show");

            setTimeout(function() {

                $('#N0001 .mobile-close').addClass("show");
            }, 300);
        });

        $('#N0001 .mobile-close').click(function(e) {
            e.preventDefault();
            $(this).addClass("d-none");
            $(this).removeClass("show");

            $('#N0001 .mobile-menu').removeClass("d-none");
            $("#N0001 .nav ").removeClass("show");

            setTimeout(function() {
                $('#N0001 .mobile-menu').addClass("show");
            }, 300);
        });

        $("#N0001 .nav .item").click(function() {
            $("#N0001 .mobile-close").addClass("d-none");
            $("#N0001 .mobile-menu").removeClass("d-none");
            $("#N0001 .nav ").removeClass("show");

            setTimeout(function() {
                $('#N0001 .mobile-menu').addClass("show");
                $('#N0001 .mobile-close').removeClass("show");
            }, 300);
        });
    });
</script>