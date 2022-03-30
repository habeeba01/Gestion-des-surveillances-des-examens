<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Note extends Model {
	
    protected $primaryKey = 'id';
    protected $fillable = [
	'id',
	'module_id',
	'element_id',
	'notefinale',
	'noteds',
	'coeffds',
	'coeffexam',
	'coefftp',
	'noteexam',
	'notetp',
	'noteelem',
	'notemod',
	'user_id',
	];
}