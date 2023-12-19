<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectsTracker
 * 
 * @property int $project_id
 * @property int $tracker_id
 *
 * @package App\Models
 */
class ProjectsTracker extends Model
{
	protected $connection="redmine";
	protected $table = 'projects_trackers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'tracker_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'tracker_id'
	];
}
