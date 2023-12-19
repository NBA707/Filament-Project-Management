<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property int|null $project_id
 * @property string $title
 * @property string|null $summary
 * @property string|null $description
 * @property int $author_id
 * @property Carbon|null $created_on
 * @property int $comments_count
 *
 * @package App\Models
 */
class News extends Model
{
	protected $connection="redmine";
	protected $table = 'news';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'author_id' => 'int',
		'created_on' => 'datetime',
		'comments_count' => 'int'
	];

	protected $fillable = [
		'project_id',
		'title',
		'summary',
		'description',
		'author_id',
		'created_on',
		'comments_count'
	];
}
