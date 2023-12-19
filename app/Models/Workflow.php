<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Workflow
 * 
 * @property int $id
 * @property int $tracker_id
 * @property int $old_status_id
 * @property int $new_status_id
 * @property int $role_id
 * @property bool $assignee
 * @property bool $author
 * @property string|null $type
 * @property string|null $field_name
 * @property string|null $rule
 *
 * @package App\Models
 */
class Workflow extends Model
{
	protected $connection="redmine";
	protected $table = 'workflows';
	public $timestamps = false;

	protected $casts = [
		'tracker_id' => 'int',
		'old_status_id' => 'int',
		'new_status_id' => 'int',
		'role_id' => 'int',
		'assignee' => 'bool',
		'author' => 'bool'
	];

	protected $fillable = [
		'tracker_id',
		'old_status_id',
		'new_status_id',
		'role_id',
		'assignee',
		'author',
		'type',
		'field_name',
		'rule'
	];
}
