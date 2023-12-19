<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Watcher
 * 
 * @property int $id
 * @property string $watchable_type
 * @property int $watchable_id
 * @property int|null $user_id
 *
 * @package App\Models
 */
class Watcher extends Model
{
	protected $connection="redmine";
	protected $table = 'watchers';
	public $timestamps = false;

	protected $casts = [
		'watchable_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'watchable_type',
		'watchable_id',
		'user_id'
	];
}
