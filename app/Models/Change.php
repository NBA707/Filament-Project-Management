<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Change
 * 
 * @property int $id
 * @property int $changeset_id
 * @property string $action
 * @property string $path
 * @property string|null $from_path
 * @property string|null $from_revision
 * @property string|null $revision
 * @property string|null $branch
 *
 * @package App\Models
 */
class Change extends Model
{
	protected $connection="redmine";
	protected $table = 'changes';
	public $timestamps = false;

	protected $casts = [
		'changeset_id' => 'int'
	];

	protected $fillable = [
		'changeset_id',
		'action',
		'path',
		'from_path',
		'from_revision',
		'revision',
		'branch'
	];
}
