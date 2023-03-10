<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property bool $enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|OurWork[] $our_works
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';

	protected $casts = [
		'enabled' => 'bool'
	];

	protected $fillable = [
		'name',
		'logo',
		'enabled'
	];

	public function our_works()
	{
		return $this->hasMany(OurWork::class);
	}
}
