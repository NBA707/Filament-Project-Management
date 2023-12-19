<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Import
 * 
 * @property int $id
 * @property string|null $type
 * @property int $user_id
 * @property string|null $filename
 * @property string|null $settings
 * @property int|null $total_items
 * @property bool $finished
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Import extends Model
{
	protected $connection="redmine";
	protected $table = 'imports';

	protected $casts = [
		'user_id' => 'int',
		'total_items' => 'int',
		'finished' => 'bool'
	];

	protected $fillable = [
		'type',
		'user_id',
		'filename',
		'settings',
		'total_items',
		'finished'
	];
}
