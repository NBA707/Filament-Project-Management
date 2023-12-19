<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 * 
 * @property int $id
 * @property int $project_id
 * @property int $category_id
 * @property string $title
 * @property string|null $description
 * @property Carbon|null $created_on
 *
 * @package App\Models
 */
class Document extends Model
{
	protected $connection="redmine";
	protected $table = 'documents';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'category_id' => 'int',
		'created_on' => 'datetime'
	];

	protected $fillable = [
		'project_id',
		'category_id',
		'title',
		'description',
		'created_on'
	];
}
