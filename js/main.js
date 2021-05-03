$(document).ready(function () {

    var key = "AIzaSyAH_jbuOcuAGuGQDSSKzPFa-BKYm0ylOCY";
    var URL = "https://www.googleapis.com/youtube/v3/search";



    $('#search_for_video').keyup(function(){

        var search_q =  $(this).val();
        return_results( search_q );

    });





    function return_results(search_q) {

        var numverOfResults = 20;

        var options = {
            part: 'snippet',
            key: key,
            maxResults: numverOfResults,
            type: "video",
            q: search_q,
            relatedToVideoId: "video"
        }

        $.getJSON(URL, options, function (data) {

            $('.return_results').empty();
            for(var x = 0; x < numverOfResults; x++) {

                var ids = data.items[x].id.videoId;
                var title = data.items[x].snippet.title;
                var thumbnail_url = data.items[x].snippet.thumbnails.high.url;

                $('.return_results').show().append(`<li data-id="${ids}" ><p>${title}</p><img src="${thumbnail_url}"></li>`);

            }

        });


    }

    $(document).on("click", ".return_results li", function(){

        var id = $(this).attr('data-id') ;
        var youtube_src = `https://www.youtube.com/embed/${id}`
        $("#youtube_video_url").attr("src", youtube_src);
        $('.return_results').hide();

    })



});
