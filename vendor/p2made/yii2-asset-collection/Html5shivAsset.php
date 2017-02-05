<?php
/**
 * Html5shivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class Html5shivAsset extends P2AssetBundle
{
	private $bundleName = 'html5shiv';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->jsItem($this->bundleName);

		parent::init();
	}

	public $jsOptions = [
		'condition' => 'lte IE9',
		'position' => \yii\web\View::POS_HEAD,
	];
}
