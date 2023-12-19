<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TimeEntry
 * 
 * @property int $id
 * @property int $project_id
 * @property int $user_id
 * @property int|null $issue_id
 * @property float $hours
 * @property string|null $comments
 * @property int $activity_id
 * @property Carbon $spent_on
 * @property int $tyear
 * @property int $tmonth
 * @property int $tweek
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property int|null $author_id
 *
 * @package App\Models
 */
class TimeEntry extends Model
{
	protected $connection="redmine";
	protected $table = 'time_entries';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'user_id' => 'int',
		'issue_id' => 'int',
		'hours' => 'float',
		'activity_id' => 'int',
		'spent_on' => 'datetime',
		'tyear' => 'int',
		'tmonth' => 'int',
		'tweek' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime',
		'author_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'user_id',
		'issue_id',
		'hours',
		'comments',
		'activity_id',
		'spent_on',
		'tyear',
		'tmonth',
		'tweek',
		'created_on',
		'updated_on',
		'author_id'
	];
}
