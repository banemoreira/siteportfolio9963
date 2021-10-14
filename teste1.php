<?php
$arr_video_ids = array(
    'https://www.youtube.com/embed/0RrCfYtzX30',
    'https://www.youtube.com/watch?v=9sjzS-1uwww',
    'https://www.youtube.com/watch?v=iixC5fRJl4c',
    'https://www.youtube.com/watch?v=--AF7qLL10E',
    'https://www.youtube.com/watch?v=Tb9qXczZWPs',
    'https://www.youtube.com/watch?v=f3XlhpuC_hk',
);
 
function getYouTubeThumbnailImage($video_id) {
    return "http://i3.ytimg.com/vi/$video_id/hqdefault.jpg";
}
 
function extractVideoID($url){
    $regExp = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/";
    preg_match($regExp, $url, $video);
    return $video[7];
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<div class="container">
    <div class="row">
        <?php foreach ($arr_video_ids as $video) { ?>
            <?php
            $video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="pb-2">
                    <a data-fancybox="video-gallery" href="<?php echo $video; ?>">
                        <img src="<?php echo $video_thumbnail; ?>" class="img-thumbnail" />
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>