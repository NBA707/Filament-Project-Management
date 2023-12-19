<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tracker
 * 
 * @property int $id
 * @property string $name
 * @property int|null $position
 * @property bool $is_in_roadmap
 * @property int|null $fields_bits
 * @property int|null $default_status_id
 * @property string|null $description
 *
 * @package App\Models
 */
class Tracker extends Model
{
	protected $connection="redmine";
	protected $table = 'trackers';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'is_in_roadmap' => 'bool',
		'fields_bits' => 'int',
		'default_status_id' => 'int'
	];

	protected $fillable = [
		'name',
		'position',
		'is_in_roadmap',
		'fields_bits',
		'default_status_id',
		'description'
	];
}
