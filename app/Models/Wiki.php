<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Wiki
 * 
 * @property int $id
 * @property int $project_id
 * @property string $start_page
 * @property int $status
 *
 * @package App\Models
 */
class Wiki extends Model
{
	protected $connection="redmine";
	protected $table = 'wikis';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'project_id',
		'start_page',
		'status'
	];
}
