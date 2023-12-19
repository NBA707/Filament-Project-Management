<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthSource
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string|null $host
 * @property int|null $port
 * @property string|null $account
 * @property string|null $account_password
 * @property string|null $base_dn
 * @property string|null $attr_login
 * @property string|null $attr_firstname
 * @property string|null $attr_lastname
 * @property string|null $attr_mail
 * @property bool $onthefly_register
 * @property bool $tls
 * @property string|null $filter
 * @property int|null $timeout
 * @property bool $verify_peer
 *
 * @package App\Models
 */
class AuthSource extends Model
{
	protected $connection="redmine";
	protected $table = 'auth_sources';
	public $timestamps = false;

	protected $casts = [
		'port' => 'int',
		'onthefly_register' => 'bool',
		'tls' => 'bool',
		'timeout' => 'int',
		'verify_peer' => 'bool'
	];

	protected $hidden = [
		'account_password'
	];

	protected $fillable = [
		'type',
		'name',
		'host',
		'port',
		'account',
		'account_password',
		'base_dn',
		'attr_login',
		'attr_firstname',
		'attr_lastname',
		'attr_mail',
		'onthefly_register',
		'tls',
		'filter',
		'timeout',
		'verify_peer'
	];
}
