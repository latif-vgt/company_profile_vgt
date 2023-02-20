<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PlatformSocmed
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|SocmedCompanyPeople[] $socmed_company_peoples
 *
 * @package App\Models
 */
class PlatformSocmed extends Model
{
	protected $table = 'platform_socmeds';

	protected $fillable = [
		'name'
	];

	public function socmed_company_peoples()
	{
		return $this->hasMany(SocmedCompanyPeople::class);
	}
}
