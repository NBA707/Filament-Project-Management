<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JournalDetail
 * 
 * @property int $id
 * @property int $journal_id
 * @property string $property
 * @property string $prop_key
 * @property string|null $old_value
 * @property string|null $value
 *
 * @package App\Models
 */
class JournalDetail extends Model
{
	protected $connection="redmine";
	protected $table = 'journal_details';
	public $timestamps = false;

	protected $casts = [
		'journal_id' => 'int'
	];

	protected $fillable = [
		'journal_id',
		'property',
		'prop_key',
		'old_value',
		'value'
	];
}
