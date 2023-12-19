<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberRole
 * 
 * @property int $id
 * @property int $member_id
 * @property int $role_id
 * @property int|null $inherited_from
 *
 * @package App\Models
 */
class MemberRole extends Model
{
	protected $connection="redmine";
	protected $table = 'member_roles';
	public $timestamps = false;

	protected $casts = [
		'member_id' => 'int',
		'role_id' => 'int',
		'inherited_from' => 'int'
	];

	protected $fillable = [
		'member_id',
		'role_id',
		'inherited_from'
	];
}
