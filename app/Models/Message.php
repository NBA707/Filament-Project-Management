<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property int $board_id
 * @property int|null $parent_id
 * @property string $subject
 * @property string|null $content
 * @property int|null $author_id
 * @property int $replies_count
 * @property int|null $last_reply_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property bool|null $locked
 * @property int|null $sticky
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $connection="redmine";
	protected $table = 'messages';
	public $timestamps = false;

	protected $casts = [
		'board_id' => 'int',
		'parent_id' => 'int',
		'author_id' => 'int',
		'replies_count' => 'int',
		'last_reply_id' => 'int',
		'created_on' => 'datetime',
		'updated_on' => 'datetime',
		'locked' => 'bool',
		'sticky' => 'int'
	];

	protected $fillable = [
		'board_id',
		'parent_id',
		'subject',
		'content',
		'author_id',
		'replies_count',
		'last_reply_id',
		'created_on',
		'updated_on',
		'locked',
		'sticky'
	];
}
