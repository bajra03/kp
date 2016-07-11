<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogItem extends Model
{
	use SoftDeletes;

	protected $fillable = ['item_id', 'user_id', 'activity', 'price'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

	protected $dates = ['deleted_at'];
}
