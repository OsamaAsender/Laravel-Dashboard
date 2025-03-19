<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // تحديد الجدول في قاعدة البيانات (اختياري إذا كان اسم الجدول هو نفسه)
    protected $table = 'categories';

    // تحديد الحقول التي يمكن تعيينها
    protected $fillable = ['name', 'description', 'price'];  // إضافة price هنا

    // إذا كنت تستخدم التواريخ
    public $timestamps = true;
}
