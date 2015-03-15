<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    protected $table = 'products';
	protected $fillable = ['brand','model','category_id','image_id','description','availability','quantity','price'];

    public function images()
    {
        return $this->hasMany('App\Images');
    }
}
