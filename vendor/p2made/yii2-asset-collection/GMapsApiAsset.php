<?php
/**
 * GMapsApiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class GMapsApiAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $js = [
		'http://maps.google.com/maps/api/js?sensor=true',
	];
}
