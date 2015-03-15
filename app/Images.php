<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $table = 'images';
    protected $fillable = ['products_id','image'];
    public function product(){
        return $this->belongsTo('App\Products');
    }
}
