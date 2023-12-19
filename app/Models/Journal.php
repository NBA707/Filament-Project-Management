<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Journal
 * 
 * @property int $id
 * @property int $journalized_id
 * @property string $journalized_type
 * @property int $user_id
 * @property string|null $notes
 * @property Carbon $created_on
 * @property bool $private_notes
 *
 * @package App\Models
 */
class Journal extends Model
{
	protected $connection="redmine";
	protected $table = 'journals';
	public $timestamps = false;

	protected $casts = [
		'journalized_id' => 'int',
		'user_id' => 'int',
		'created_on' => 'datetime',
		'private_notes' => 'bool'
	];

	protected $fillable = [
		'journalized_id',
		'journalized_type',
		'user_id',
		'notes',
		'created_on',
		'private_notes'
	];
}
