<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupsUser
 * 
 * @property int $group_id
 * @property int $user_id
 *
 * @package App\Models
 */
class GroupsUser extends Model
{
	protected $connection="redmine";
	protected $table = 'groups_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'group_id',
		'user_id'
	];
}
