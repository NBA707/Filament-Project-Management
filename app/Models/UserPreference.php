<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPreference
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $others
 * @property bool|null $hide_mail
 * @property string|null $time_zone
 *
 * @package App\Models
 */
class UserPreference extends Model
{
	protected $connection="redmine";
	protected $table = 'user_preferences';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'hide_mail' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'others',
		'hide_mail',
		'time_zone'
	];
}
