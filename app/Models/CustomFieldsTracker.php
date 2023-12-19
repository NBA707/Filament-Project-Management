<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomFieldsTracker
 * 
 * @property int $custom_field_id
 * @property int $tracker_id
 *
 * @package App\Models
 */
class CustomFieldsTracker extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_fields_trackers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int',
		'tracker_id' => 'int'
	];

	protected $fillable = [
		'custom_field_id',
		'tracker_id'
	];
}
