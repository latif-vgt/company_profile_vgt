<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OurWork
 * 
 * @property int $id
 * @property string $name
 * @property int $client_id
 * @property int $our_service_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Client $client
 * @property OurService $our_service
 *
 * @package App\Models
 */
class OurWork extends Model
{
	protected $table = 'our_works';

	protected $casts = [
		'client_id' => 'int',
		'our_service_id' => 'int'
	];

	protected $fillable = [
		'name',
		'client_id',
		'our_service_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function our_service()
	{
		return $this->belongsTo(OurService::class);
	}
}
