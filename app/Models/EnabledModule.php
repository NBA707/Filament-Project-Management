<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EnabledModule
 * 
 * @property int $id
 * @property int|null $project_id
 * @property string $name
 *
 * @package App\Models
 */
class EnabledModule extends Model
{
	protected $connection="redmine";
	protected $table = 'enabled_modules';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'name'
	];
}
