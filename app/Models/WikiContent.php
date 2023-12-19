<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WikiContent
 * 
 * @property int $id
 * @property int $page_id
 * @property int|null $author_id
 * @property string|null $text
 * @property string|null $comments
 * @property Carbon $updated_on
 * @property int $version
 *
 * @package App\Models
 */
class WikiContent extends Model
{
	protected $connection="redmine";
	protected $table = 'wiki_contents';
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'author_id' => 'int',
		'updated_on' => 'datetime',
		'version' => 'int'
	];

	protected $fillable = [
		'page_id',
		'author_id',
		'text',
		'comments',
		'updated_on',
		'version'
	];
}
