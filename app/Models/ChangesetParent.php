<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChangesetParent
 * 
 * @property int $changeset_id
 * @property int $parent_id
 *
 * @package App\Models
 */
class ChangesetParent extends Model
{
	protected $connection="redmine";
	protected $table = 'changeset_parents';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'changeset_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'changeset_id',
		'parent_id'
	];
}
