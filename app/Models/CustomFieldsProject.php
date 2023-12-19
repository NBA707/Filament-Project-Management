<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomFieldsProject
 * 
 * @property int $custom_field_id
 * @property int $project_id
 *
 * @package App\Models
 */
class CustomFieldsProject extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_fields_projects';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int',
		'project_id' => 'int'
	];

	protected $fillable = [
		'custom_field_id',
		'project_id'
	];
}
