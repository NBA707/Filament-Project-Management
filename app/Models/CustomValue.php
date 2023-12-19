<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomValue
 * 
 * @property int $id
 * @property string $customized_type
 * @property int $customized_id
 * @property int $custom_field_id
 * @property string|null $value
 *
 * @package App\Models
 */
class CustomValue extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_values';
	public $timestamps = false;

	protected $casts = [
		'customized_id' => 'int',
		'custom_field_id' => 'int'
	];

	protected $fillable = [
		'customized_type',
		'customized_id',
		'custom_field_id',
		'value'
	];
}
