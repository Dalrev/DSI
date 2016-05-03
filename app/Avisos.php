<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Avisos extends Model {
    protected $table = 'avisos';
    protected $fillable = ['AVI_PRECIO','created_at'];
}