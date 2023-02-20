<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PictureInformationContent
 * 
 * @property int $id
 * @property string $key
 * @property string $picture
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PictureInformationContent extends Model
{
	protected $table = 'picture_information_contents';

	protected $fillable = [
		'key',
		'picture'
	];
}
