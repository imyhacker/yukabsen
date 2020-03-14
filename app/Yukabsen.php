<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yukabsen extends Model
{
    //

    protected $table = "yukabsen";

    protected $fillable = ['nama','kelas','hari','tanggal','bulan','tahun','kehadiran'];
}
