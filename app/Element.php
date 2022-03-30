<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Element extends Model {
	
	protected $primaryKey = 'id';
    protected $fillable = [
	'nomelem',
	'coeff',
	'noteelem',
	'nommod',
	'idens',
	];
	public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}