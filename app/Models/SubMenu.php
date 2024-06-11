<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'name', 'image', 'title', 'is_active', 'slug'];
    protected $table = 'sub_menus';

    public function Menu(){
        return $this->belongsTo(Menu::class);
    }
}
