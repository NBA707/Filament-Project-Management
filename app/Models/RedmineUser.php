<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $login
 * @property string $hashed_password
 * @property string $firstname
 * @property string $lastname
 * @property bool $admin
 * @property int $status
 * @property Carbon|null $last_login_on
 * @property string|null $language
 * @property int|null $auth_source_id
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $type
 * @property string $mail_notification
 * @property string|null $salt
 * @property bool $must_change_passwd
 * @property Carbon|null $passwd_changed_on
 * @property string|null $twofa_scheme
 * @property string|null $twofa_totp_key
 * @property int|null $twofa_totp_last_used_at
 * @property bool|null $twofa_required
 *
 * @package App\Models
 */
class User extends Model
{
	protected $connection="redmine";
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'admin' => 'bool',
		'status' => 'int',
		'last_login_on' => 'datetime',
		'auth_source_id' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime',
		'must_change_passwd' => 'bool',
		'passwd_changed_on' => 'datetime',
		'twofa_totp_last_used_at' => 'int',
		'twofa_required' => 'bool'
	];

	protected $hidden = [
		'hashed_password'
	];

	protected $fillable = [
		'login',
		'hashed_password',
		'firstname',
		'lastname',
		'admin',
		'status',
		'last_login_on',
		'language',
		'auth_source_id',
		'created_on',
		'updated_on',
		'type',
		'mail_notification',
		'salt',
		'must_change_passwd',
		'passwd_changed_on',
		'twofa_scheme',
		'twofa_totp_key',
		'twofa_totp_last_used_at',
		'twofa_required'
	];
}
