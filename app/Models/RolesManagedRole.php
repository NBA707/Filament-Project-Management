<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolesManagedRole
 * 
 * @property int $role_id
 * @property int $managed_role_id
 *
 * @package App\Models
 */
class RolesManagedRole extends Model
{
	protected $connection="redmine";
	protected $table = 'roles_managed_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'managed_role_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'managed_role_id'
	];
}
