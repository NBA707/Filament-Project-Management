<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Changeset
 * 
 * @property int $id
 * @property int $repository_id
 * @property string $revision
 * @property string|null $committer
 * @property Carbon $committed_on
 * @property string|null $comments
 * @property Carbon|null $commit_date
 * @property string|null $scmid
 * @property int|null $user_id
 *
 * @package App\Models
 */
class Changeset extends Model
{
	protected $connection="redmine";
	protected $table = 'changesets';
	public $timestamps = false;

	protected $casts = [
		'repository_id' => 'int',
		'committed_on' => 'datetime',
		'commit_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'repository_id',
		'revision',
		'committer',
		'committed_on',
		'comments',
		'commit_date',
		'scmid',
		'user_id'
	];
}
