<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property int $author_id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string|null $excerpt
 * @property string|null $banner
 * @property string $content
 * @property Carbon|null $published_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Category $category
 * @property Collection|Series[] $series
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $casts = [
		'author_id' => 'int',
		'category_id' => 'int',
		'published_at' => 'datetime'
	];

	protected $fillable = [
		'author_id',
		'category_id',
		'title',
		'slug',
		'excerpt',
		'banner',
		'content',
		'published_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'author_id');
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function series()
	{
		return $this->belongsToMany(Series::class)
					->withPivot('id')
					->withTimestamps();
	}
}
