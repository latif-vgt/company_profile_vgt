<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OurService
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $icon
 * @property bool $enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|DocumentationOurWork[] $documentation_our_works
 * @property Collection|OurWork[] $our_works
 *
 * @package App\Models
 */
class OurService extends Model
{
	protected $table = 'our_services';

	protected $casts = [
		'enabled' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'icon',
		'enabled'
	];

	public function documentation_our_works()
	{
		return $this->hasMany(DocumentationOurWork::class);
	}

	public function our_works()
	{
		return $this->hasMany(OurWork::class);
	}
}
