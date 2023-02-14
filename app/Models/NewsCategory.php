<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NewsCategory
 *
 * @property int $id
 * @property string $name
 * @property bool $enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|NewsContent[] $news_contents
 *
 * @package App\Models
 */
class NewsCategory extends Model
{
	protected $table = 'news_categories';

	protected $casts = [
		'enabled' => 'bool'
	];

	protected $fillable = [
		'name',
		'enabled'
	];

	public function news_contents()
	{
		return $this->hasMany(NewsContent::class);
	}
}
