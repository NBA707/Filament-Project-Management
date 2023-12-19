<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArInternalMetadatum
 * 
 * @property string $key
 * @property string|null $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class ArInternalMetadatum extends Model
{
	protected $connection="redmine";
	protected $table = 'ar_internal_metadata';
	protected $primaryKey = 'key';
	public $incrementing = false;

	protected $fillable = [
		'value'
	];
}
