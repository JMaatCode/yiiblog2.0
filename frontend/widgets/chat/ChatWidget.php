<?php
namespace frontend\widgets\chat;

use yii\base\Widget;
use frontend\models\FeedForm;

class ChatWidget extends Widget
{
	public function run()
	{
		$feed = new FeedForm();
		$data['feed'] = $feed->getList();
		
		return $this->render('index',['data'=>$data]);
	}
}

?>