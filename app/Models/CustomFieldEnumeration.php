<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomFieldEnumeration
 * 
 * @property int $id
 * @property int $custom_field_id
 * @property string $name
 * @property bool $active
 * @property int $position
 *
 * @package App\Models
 */
class CustomFieldEnumeration extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_field_enumerations';
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int',
		'active' => 'bool',
		'position' => 'int'
	];

	protected $fillable = [
		'custom_field_id',
		'name',
		'active',
		'position'
	];
}
