<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IssueStatus
 * 
 * @property int $id
 * @property string $name
 * @property bool $is_closed
 * @property int|null $position
 * @property int|null $default_done_ratio
 *
 * @package App\Models
 */
class IssueStatus extends Model
{
	protected $connection="redmine";
	protected $table = 'issue_statuses';
	public $timestamps = false;

	protected $casts = [
		'is_closed' => 'bool',
		'position' => 'int',
		'default_done_ratio' => 'int'
	];

	protected $fillable = [
		'name',
		'is_closed',
		'position',
		'default_done_ratio'
	];
}
