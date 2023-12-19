<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Board
 * 
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property string|null $description
 * @property int|null $position
 * @property int $topics_count
 * @property int $messages_count
 * @property int|null $last_message_id
 * @property int|null $parent_id
 *
 * @package App\Models
 */
class Board extends Model
{
	protected $connection="redmine";
	protected $table = 'boards';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'position' => 'int',
		'topics_count' => 'int',
		'messages_count' => 'int',
		'last_message_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'name',
		'description',
		'position',
		'topics_count',
		'messages_count',
		'last_message_id',
		'parent_id'
	];
}
