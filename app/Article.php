<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//关联表的名称
	protected $table = 'Article';

	//允许批量新增的字段名称
	protected $fillable = [
		'title',
		'content',
		'published_at',
		'user_id'       //temporary
	];

	//时间相关的字段
	protected $date = ['published_at'];

	//自定义自动完成的方法
	public function setPublishedAtAttribute($date)
	{
		//未来的那个日期的当前时间
		//$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

		//未来那天的零点时间
		$this->attributes['published_at'] = Carbon::parse($date);
	}

	//自定义筛选的方法
	public function scopePublished($query){
		return $query->where('published_at', '<=', Carbon::now());
	}
	//many articles belongs to an user
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
