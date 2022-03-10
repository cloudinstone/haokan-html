<?php
	$title = '标题';
?>

<div class="card-item float-left" title="<?php echo $title; ?>">
    <a href="#" class="card-item-link skeleton" target="_blank">
        <picture>
            <img class="video-img"
                src="https://images.pexels.com/photos/1878399/pexels-photo-1878399.jpeg?auto=compress&cs=tinysrgb&w=360"
                alt="<?php echo $title; ?>">
        </picture>
        <div class="videotime">01:36</div>
    </a>
    <div class="card-bottom"><a href="#" target="_blank">
            <h3 class="card-item-title"><?php echo $title; ?></h3>
        </a>
        <p class="card-bottom-nums video-nums"><span class="video-com"><i class="icon-eye"></i><span
                    class="video-com-text">283次播放</span></span><span class="video-com"><i class="icon-time"></i><span
                    class="video-com-text">昨天</span></span></p>
    </div>
</div>