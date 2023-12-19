<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WikiPage
 * 
 * @property int $id
 * @property int $wiki_id
 * @property string $title
 * @property Carbon $created_on
 * @property bool $protected
 * @property int|null $parent_id
 *
 * @package App\Models
 */
class WikiPage extends Model
{
	protected $connection="redmine";
	protected $table = 'wiki_pages';
	public $timestamps = false;

	protected $casts = [
		'wiki_id' => 'int',
		'created_on' => 'datetime',
		'protected' => 'bool',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'wiki_id',
		'title',
		'created_on',
		'protected',
		'parent_id'
	];
}
