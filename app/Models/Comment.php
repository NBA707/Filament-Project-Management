<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $commented_type
 * @property int $commented_id
 * @property int $author_id
 * @property string|null $content
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $connection="redmine";
	protected $table = 'comments';
	public $timestamps = false;

	protected $casts = [
		'commented_id' => 'int',
		'author_id' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime'
	];

	protected $fillable = [
		'commented_type',
		'commented_id',
		'author_id',
		'content',
		'created_on',
		'updated_on'
	];
}
