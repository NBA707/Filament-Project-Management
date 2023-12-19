<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Token
 * 
 * @property int $id
 * @property int $user_id
 * @property string $action
 * @property string $value
 * @property Carbon $created_on
 * @property Carbon|null $updated_on
 *
 * @package App\Models
 */
class Token extends Model
{
	protected $connection="redmine";
	protected $table = 'tokens';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'action',
		'value',
		'created_on',
		'updated_on'
	];
}
