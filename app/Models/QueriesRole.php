<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QueriesRole
 * 
 * @property int $query_id
 * @property int $role_id
 *
 * @package App\Models
 */
class QueriesRole extends Model
{
	protected $connection="redmine";
	protected $table = 'queries_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'query_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'query_id',
		'role_id'
	];
}
