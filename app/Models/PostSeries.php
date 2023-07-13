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
 * @property Post $post
 * @property Series $series
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries whereSeriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSeries whereUpdatedAt($value)
 * @mixin \Eloquent
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
