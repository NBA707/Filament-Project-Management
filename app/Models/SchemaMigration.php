<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SchemaMigration
 * 
 * @property string $version
 *
 * @package App\Models
 */
class SchemaMigration extends Model
{
	protected $connection="redmine";
	protected $table = 'schema_migrations';
	protected $primaryKey = 'version';
	public $incrementing = false;
	public $timestamps = false;
}
