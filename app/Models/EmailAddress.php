<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmailAddress
 * 
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property bool $is_default
 * @property bool $notify
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class EmailAddress extends Model
{
	protected $connection="redmine";
	protected $table = 'email_addresses';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'is_default' => 'bool',
		'notify' => 'bool',
		'created_on' => 'datetime',
		'updated_on' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'address',
		'is_default',
		'notify',
		'created_on',
		'updated_on'
	];
}
