<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImportItem
 * 
 * @property int $id
 * @property int $import_id
 * @property int $position
 * @property int|null $obj_id
 * @property string|null $message
 * @property string|null $unique_id
 *
 * @package App\Models
 */
class ImportItem extends Model
{
	protected $connection="redmine";
	protected $table = 'import_items';
	public $timestamps = false;

	protected $casts = [
		'import_id' => 'int',
		'position' => 'int',
		'obj_id' => 'int'
	];

	protected $fillable = [
		'import_id',
		'position',
		'obj_id',
		'message',
		'unique_id'
	];
}
