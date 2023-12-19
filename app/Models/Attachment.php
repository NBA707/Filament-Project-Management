<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Attachment
 * 
 * @property int $id
 * @property int|null $container_id
 * @property string|null $container_type
 * @property string $filename
 * @property string $disk_filename
 * @property int $filesize
 * @property string|null $content_type
 * @property string $digest
 * @property int $downloads
 * @property int $author_id
 * @property Carbon|null $created_on
 * @property string|null $description
 * @property string|null $disk_directory
 *
 * @package App\Models
 */
class Attachment extends Model
{
	protected $connection="redmine";
	protected $table = 'attachments';
	public $timestamps = false;

	protected $casts = [
		'container_id' => 'int',
		'filesize' => 'int',
		'downloads' => 'int',
		'author_id' => 'int',
		'created_on' => 'datetime'
	];

	protected $fillable = [
		'container_id',
		'container_type',
		'filename',
		'disk_filename',
		'filesize',
		'content_type',
		'digest',
		'downloads',
		'author_id',
		'created_on',
		'description',
		'disk_directory'
	];
}
