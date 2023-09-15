<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory , Searchable;

    protected $fillable = ['name','description','price', 'category_id'];
      /**
     * Get the indexable data array for the model.
     *
     * @return array
     */

    public function toSearchebleArray(){
        $array =[
            'id'=> $this->id,
            'title'=> $this->title,
            'description'=>$this->description,
            "category"=>$this->category
        ];
        return $array;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }

    static public function toBeRevisionedcount(){
        return Announcement::where('is_accepted', null)->count();
    }
}
