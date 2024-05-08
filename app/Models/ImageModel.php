<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;

    protected $table = 'image';

    static public function getSingle($id) {
        return self::find($id);
    }

    static function getRecord() {
        return self::select('image.*')
                ->orderBy('id', 'desc')
                ->paginate(20);
    }

    public function getImage() {
        if(!empty($this->image_name) && file_exists('upload/images/'.$this->image_name)) {
            return url('upload/images/'.$this->image_name);
        } 
        else {
            return "";
        }
    }

    public function showImage() {
        return $this->hasMany("image_name");
    }
}
