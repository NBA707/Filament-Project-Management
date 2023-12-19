<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IssueCategory
 * 
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property int|null $assigned_to_id
 *
 * @package App\Models
 */
class IssueCategory extends Model
{
	protected $connection="redmine";
	protected $table = 'issue_categories';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'assigned_to_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'name',
		'assigned_to_id'
	];
}
