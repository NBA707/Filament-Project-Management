<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $homepage
 * @property bool $is_public
 * @property int|null $parent_id
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $identifier
 * @property int $status
 * @property int|null $lft
 * @property int|null $rgt
 * @property bool $inherit_members
 * @property int|null $default_version_id
 * @property int|null $default_assigned_to_id
 * @property int|null $default_issue_query_id
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $connection="redmine";
	protected $table = 'projects';
	public $timestamps = false;

	protected $casts = [
		'is_public' => 'bool',
		'parent_id' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime',
		'status' => 'int',
		'lft' => 'int',
		'rgt' => 'int',
		'inherit_members' => 'bool',
		'default_version_id' => 'int',
		'default_assigned_to_id' => 'int',
		'default_issue_query_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'homepage',
		'is_public',
		'parent_id',
		'created_on',
		'updated_on',
		'identifier',
		'status',
		'lft',
		'rgt',
		'inherit_members',
		'default_version_id',
		'default_assigned_to_id',
		'default_issue_query_id'
	];
}
