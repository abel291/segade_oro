<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 21:59:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SoSlider
 * 
 * @property int $id
 * @property string $main_img
 * @property string $txt_linea_a
 * @property string $txt_linea_b
 * @property string $txt_color
 * @property string $href
 * @property bool $activo
 *
 * @package App\Models
 */
class SoSlider extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $fillable = [
		'main_img',
		'txt_linea_a',
		'txt_linea_b',
		'txt_color',
		'href',
		'activo'
	];
}
