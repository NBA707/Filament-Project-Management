<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 * 
 * @property int $id
 * @property int $project_id
 * @property string $url
 * @property string|null $login
 * @property string|null $password
 * @property string|null $root_url
 * @property string|null $type
 * @property string|null $path_encoding
 * @property string|null $log_encoding
 * @property string|null $extra_info
 * @property string|null $identifier
 * @property bool|null $is_default
 * @property Carbon|null $created_on
 *
 * @package App\Models
 */
class Repository extends Model
{
	protected $connection="redmine";
	protected $table = 'repositories';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'is_default' => 'bool',
		'created_on' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'project_id',
		'url',
		'login',
		'password',
		'root_url',
		'type',
		'path_encoding',
		'log_encoding',
		'extra_info',
		'identifier',
		'is_default',
		'created_on'
	];
}
