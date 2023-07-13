<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostSeries
 * 
 * @property int $id
 * @property int $post_id
 * @property int $series_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Post $post
 * @property Series $series
 *
 * @package App\Models
 */
class PostSeries extends Model
{
	protected $table = 'post_series';

	protected $casts = [
		'post_id' => 'int',
		'series_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'series_id'
	];

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function series()
	{
		return $this->belongsTo(Series::class);
	}
}
