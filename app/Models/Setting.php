<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * 
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property Carbon|null $updated_on
 *
 * @package App\Models
 */
class Setting extends Model
{
	protected $connection="redmine";
	protected $table = 'settings';
	public $timestamps = false;

	protected $casts = [
		'updated_on' => 'datetime'
	];

	protected $fillable = [
		'name',
		'value',
		'updated_on'
	];
}
