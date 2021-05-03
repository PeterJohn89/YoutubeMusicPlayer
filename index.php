<!DOCTYPE html>
<html>
<head>
<title>Study Music Player</title>
<link rel="shortcut icon" href="#">
<!-- Youtube API: AIzaSyAH_jbuOcuAGuGQDSSKzPFa-BKYm0ylOCY -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/api.js"></script>
<script type="text/javascript" src="js/main.js"></script>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>



<div class="app_wrapper">

    <div class="search_bar">
        <input id="search_for_video" type="text" name="" value="" placeholder="Search here....">

        <ul class="return_results">

        </ul>

    </div>


    <div class="video_screen">
        <iframe id="youtube_video_url" src="https://www.youtube.com/embed/nh4mFpFpJqY" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <ul class="realtiv">
            <li></li>
        </ul> -->
    </div>


    <div class="video_title"></div>

    <div class="video_artist"></div>

    <!-- <div class="video_timeline"></div> -->

    <div id="video"></div>

</div>







</body>
</html>
