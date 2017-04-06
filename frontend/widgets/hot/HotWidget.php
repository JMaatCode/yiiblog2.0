<?php
namespace frontend\widgets\hot;
/**
* 热门浏览组件
**/
use Yii;
use yii\bootstrap\Widget;
use common\models\PostExtendModel;
use common\models\PostsModel;
use yii\db\Query;

class HotWidget extends Widget
{
	/**
     * 文章列表的标题
     * @var unknown
     */
	public $title = '';

	/**
     * 显示条数
     * @var unknown
     */
	public $limit = 6;
	
	public function run()
	{
		$res = (new Query())
			->select('a.browser, b.id, b.title')
			->from(['a'=>PostExtendModel::tablename()])
			->join('LEFT JOIN',['b'=>PostsModel::tablename()],'a.post_id = b.id')
			->where('b.is_valid = '.PostsModel::IS_VALID)
			->orderBy(['browser'=>SORT_DESC,'id'=>SORT_DESC])
			->limit($this->limit)
			->all();

		$result['title'] = $this->title?:'热门浏览';
		$result['body'] = $res?:[];

		return $this->render('index',['data'=>$result]);
		
	}
}

?>