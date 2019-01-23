<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'books';      //真实表名 与数据库表名一样
    protected $primaryKey = 'id';    //主键字段，默认id
    protected $fillable = ['name','price','type'];  //可以操作的字段
    // public    $timestamps = fasle;   //不需要laravel自动管理创建时间和修改时间
}
