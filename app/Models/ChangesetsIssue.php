<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChangesetsIssue
 * 
 * @property int $changeset_id
 * @property int $issue_id
 *
 * @package App\Models
 */
class ChangesetsIssue extends Model
{
	protected $connection="redmine";
	protected $table = 'changesets_issues';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'changeset_id' => 'int',
		'issue_id' => 'int'
	];

	protected $fillable = [
		'changeset_id',
		'issue_id'
	];
}
