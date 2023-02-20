<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CompanyPeople
 *
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property int $role_company_people_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property RoleCompanyPeople $role_company_people
 * @property Collection|Socmed[] $socmeds
 *
 * @package App\Models
 */
class CompanyPeople extends Model
{
	protected $table = 'company_peoples';

	protected $casts = [
		'role_company_people_id' => 'int'
	];

	protected $fillable = [
		'name',
		'photo',
		'role_company_people_id'
	];

	public function role_company_people()
	{
		return $this->belongsTo(RoleCompanyPeople::class);
	}

	public function socmeds()
	{
		return $this->belongsToMany(Socmed::class, 'socmed_company_peoples')
					->withPivot('id', 'account')
					->withTimestamps();
	}
}
