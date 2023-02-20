<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentationOurWork
 * 
 * @property int $id
 * @property string $photo
 * @property int $our_service_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property OurService $our_service
 *
 * @package App\Models
 */
class DocumentationOurWork extends Model
{
	protected $table = 'documentation_our_works';

	protected $casts = [
		'our_service_id' => 'int'
	];

	protected $fillable = [
		'photo',
		'our_service_id'
	];

	public function our_service()
	{
		return $this->belongsTo(OurService::class);
	}
}
