<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property int|null $position
 * @property bool|null $assignable
 * @property int $builtin
 * @property string|null $permissions
 * @property string $issues_visibility
 * @property string $users_visibility
 * @property string $time_entries_visibility
 * @property bool $all_roles_managed
 * @property string|null $settings
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $connection="redmine";
	protected $table = 'roles';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'assignable' => 'bool',
		'builtin' => 'int',
		'all_roles_managed' => 'bool'
	];

	protected $fillable = [
		'name',
		'position',
		'assignable',
		'builtin',
		'permissions',
		'issues_visibility',
		'users_visibility',
		'time_entries_visibility',
		'all_roles_managed',
		'settings'
	];
}
