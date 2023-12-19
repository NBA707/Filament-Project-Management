<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Query
 * 
 * @property int $id
 * @property int|null $project_id
 * @property string $name
 * @property string|null $filters
 * @property int $user_id
 * @property string|null $column_names
 * @property string|null $sort_criteria
 * @property string|null $group_by
 * @property string|null $type
 * @property int|null $visibility
 * @property string|null $options
 *
 * @package App\Models
 */
class Query extends Model
{
	protected $connection="redmine";
	protected $table = 'queries';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'user_id' => 'int',
		'visibility' => 'int'
	];

	protected $fillable = [
		'project_id',
		'name',
		'filters',
		'user_id',
		'column_names',
		'sort_criteria',
		'group_by',
		'type',
		'visibility',
		'options'
	];
}
