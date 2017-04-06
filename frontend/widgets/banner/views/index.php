<?php
use yii\helpers\Url;
?>
<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
	    <?php foreach($data['items'] as $k=>$item):?>
	    	<div class="item <?php if($k==0):?>active<?php endif;?>">
            	<a href="<?=Url::to($item['url'])?>"><img src="<?=$item['image_url']?>" alt="<?=$item['item']?>"></a>
        	</div>
	    <?php endforeach;?>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel" 
        data-slide="prev">&lsaquo;
    </a>
    <a class="carousel-control right" href="#myCarousel" 
        data-slide="next">&rsaquo;
    </a>
</div>