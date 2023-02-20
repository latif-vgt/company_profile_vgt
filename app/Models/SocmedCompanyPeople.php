<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SocmedCompanyPeople
 * 
 * @property int $id
 * @property string $account
 * @property int $platform_socmed_id
 * @property int $company_people_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CompanyPeople $company_people
 * @property PlatformSocmed $platform_socmed
 *
 * @package App\Models
 */
class SocmedCompanyPeople extends Model
{
	protected $table = 'socmed_company_peoples';

	protected $casts = [
		'platform_socmed_id' => 'int',
		'company_people_id' => 'int'
	];

	protected $fillable = [
		'account',
		'platform_socmed_id',
		'company_people_id'
	];

	public function company_people()
	{
		return $this->belongsTo(CompanyPeople::class);
	}

	public function platform_socmed()
	{
		return $this->belongsTo(PlatformSocmed::class);
	}
}
