<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsContent
 * 
 * @property int $id
 * @property string $title
 * @property string $image
 * @property bool $published
 * @property string $information
 * @property Carbon $published_datetime
 * @property int $news_category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property NewsCategory $news_category
 *
 * @package App\Models
 */
class NewsContent extends Model
{
	protected $table = 'news_contents';

	protected $casts = [
		'published' => 'bool',
		'news_category_id' => 'int'
	];

	protected $dates = [
		'published_datetime'
	];

	protected $fillable = [
		'title',
		'image',
		'published',
		'information',
		'published_datetime',
		'news_category_id'
	];

	public function news_category()
	{
		return $this->belongsTo(NewsCategory::class);
	}
}
