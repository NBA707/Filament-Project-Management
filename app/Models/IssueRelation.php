<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IssueRelation
 * 
 * @property int $id
 * @property int $issue_from_id
 * @property int $issue_to_id
 * @property string $relation_type
 * @property int|null $delay
 *
 * @package App\Models
 */
class IssueRelation extends Model
{
	protected $connection="redmine";
	protected $table = 'issue_relations';
	public $timestamps = false;

	protected $casts = [
		'issue_from_id' => 'int',
		'issue_to_id' => 'int',
		'delay' => 'int'
	];

	protected $fillable = [
		'issue_from_id',
		'issue_to_id',
		'relation_type',
		'delay'
	];
}
