<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $id
 * @property int $user_id
 * @property int $project_id
 * @property Carbon|null $created_on
 * @property bool $mail_notification
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $connection="redmine";
	protected $table = 'members';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'project_id' => 'int',
		'created_on' => 'datetime',
		'mail_notification' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'project_id',
		'created_on',
		'mail_notification'
	];
}
