<?php
/**
 * FontAwesomeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FontAwesomeAsset extends P2AssetBundle
{
	private $bundleName = 'font-awesome';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->cssItem($this->bundleName);

		parent::init();
	}
}
