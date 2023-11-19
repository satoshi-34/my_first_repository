<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
         // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        //更新日を光順で並び替えて上から十件のデータ取得
    }
}
