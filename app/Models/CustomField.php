<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomField
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $field_format
 * @property string|null $possible_values
 * @property string|null $regexp
 * @property int|null $min_length
 * @property int|null $max_length
 * @property bool $is_required
 * @property bool $is_for_all
 * @property bool $is_filter
 * @property int|null $position
 * @property bool|null $searchable
 * @property string|null $default_value
 * @property bool|null $editable
 * @property bool $visible
 * @property bool|null $multiple
 * @property string|null $format_store
 * @property string|null $description
 *
 * @package App\Models
 */
class CustomField extends Model
{
	protected $connection="redmine";
	protected $table = 'custom_fields';
	public $timestamps = false;

	protected $casts = [
		'min_length' => 'int',
		'max_length' => 'int',
		'is_required' => 'bool',
		'is_for_all' => 'bool',
		'is_filter' => 'bool',
		'position' => 'int',
		'searchable' => 'bool',
		'editable' => 'bool',
		'visible' => 'bool',
		'multiple' => 'bool'
	];

	protected $fillable = [
		'type',
		'name',
		'field_format',
		'possible_values',
		'regexp',
		'min_length',
		'max_length',
		'is_required',
		'is_for_all',
		'is_filter',
		'position',
		'searchable',
		'default_value',
		'editable',
		'visible',
		'multiple',
		'format_store',
		'description'
	];
}
