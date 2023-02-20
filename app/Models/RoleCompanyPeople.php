<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class RoleCompanyPeople
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|CompanyPeople[] $company_peoples
 *
 * @package App\Models
 */
class RoleCompanyPeople extends Model
{
	protected $table = 'role_company_peoples';

	protected $fillable = [
		'name'
	];

	public function company_peoples()
	{
		return $this->hasMany(CompanyPeople::class);
	}
}
