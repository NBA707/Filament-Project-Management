<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enumeration
 * 
 * @property int $id
 * @property string $name
 * @property int|null $position
 * @property bool $is_default
 * @property string|null $type
 * @property bool $active
 * @property int|null $project_id
 * @property int|null $parent_id
 * @property string|null $position_name
 *
 * @package App\Models
 */
class Enumeration extends Model
{
	protected $connection="redmine";
	protected $table = 'enumerations';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'is_default' => 'bool',
		'active' => 'bool',
		'project_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'position',
		'is_default',
		'type',
		'active',
		'project_id',
		'parent_id',
		'position_name'
	];
}
