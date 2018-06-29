<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
  protected $table = "products";
  protected $primarykey = "id";
  protected $guarded = [];

  public function categories() {
    return $this->belongsTo(Category::class,'category_id');
  }


}
