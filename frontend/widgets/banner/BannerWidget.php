<?php
namespace frontend\widgets\banner;

use Yii;
use yii\base\Widget;

class BannerWidget extends Widget
{
	public $item = [];
	
	public function init()
	{
		if(empty($this->item)){
			$this->item = [
				['item'=>'demo','image_url'=>'/statics/images/banner/b_0.png','url'=>['site/index']],
				['item'=>'demo','image_url'=>'/statics/images/banner/b_1.png','url'=>['site/index']],
				['item'=>'demo','image_url'=>'/statics/images/banner/b_2.png','url'=>['site/index']],
			];
		}
	}

	public function run()
	{
		$data['items'] = $this->item;
		return $this->render('index',['data'=>$data]);
	}
}

?>