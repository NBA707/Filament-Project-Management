<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomFieldsRole
 * 
 * @property int $custom_field_id
 * @property int $role_id
 *
 * @package App\Models
 */
class CustomFieldsRole extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_fields_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'custom_field_id',
		'role_id'
	];
}
