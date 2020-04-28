<!doctype html>
<html>

<head>
    <?php include'_meta.php'; ?>
    <!--?php include'_schema.php'; ?-->
    <?php include'_gtag.php'; ?>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/will-show.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <!-- HTML -->
    <?php include'./inc/nav.html'; ?>
    <div class="container" style="margin-top:80px">
        <div class="row">

        </div>

    </div>








    <!-- JS -->
    <script type="text/javascript" charset="utf-8" src="js/jquery-3.2.1.min.js"></script>
    <!--<script type="text/javascript" charset="utf-8" src="js/jquery.lazy.min.js"></script> -->
    <!--<script type="text/javascript" charset="utf-8" src="js/getUrlPara.js"></script> -->
    <script type="text/javascript" charset="utf-8" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/slick.min.js"></script>
    <!--<script type="text/javascript" charset="utf-8" src="js/AJAX-example.js"> </script>-->
    <!--<script type="text/javascript" charset="utf-8" src="js/form-check-function.js"></script>-->
    <script type="text/javascript" charset="utf-8" src="js/will-show.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/all.js"></script>


</body>
<script>
pageView('IG', 'instagram.php');


$(document).ready(function() {

    $.getJSON("instagram.json", function(data) {

        // console.log(data);
        // console.log(data['instagram']);
        // console.log(data['instagram'].length);


        // for (var i = 0; i < data['instagram'].length; i++) {
        for (var i = 0; i < 2; i++) {


            // 'https://api.instagram.com/oembed?url=https://www.instagram.com/p/fA9uwTtkSN/'
            // console.log(data['instagram'][i]['key']);
            var apiUrl = 'https://api.instagram.com/oembed?url=https://www.instagram.com/p/' + data[
                'instagram'][i]['key'];
            $.ajax({
                type: 'POST',
                data: {},
                url: apiUrl,
                dataType: 'json',
                async: false,
                beforeSend: function() {
                    // console.log('串接API中');
                },
                success: function(data) {
                    console.log(data);
                    // console.log('串接API成功');
                    // console.log(data['html']);

                    $('.row').append(
                        '<div class="col-12 col-lg-3"></div><div class="col-12 col-lg-6">' +
                        data['html'] + '</div><div class="col-12 col-lg-3"></div> ');
                },
                error: function() {
                    console.log('串接API失敗');
                },
                complete: function() {
                    //console.log('完成串接工作(不論失敗或成功)');
                }
            });

        }





    });
    $(window).scroll(function() {
        console.log('scrollHeight:'+ document.body.scrollHeight);
        console.log('scrollTop:'+ document.body.scrollTop);
    });

});
</script>

</html>