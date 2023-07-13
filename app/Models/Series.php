<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Series extends Model
{
	protected $table = 'series';

	protected $fillable = [
		'title',
		'content'
	];

	public function posts()
	{
		return $this->belongsToMany(Post::class)
					->withPivot('id')
					->withTimestamps();
	}
}