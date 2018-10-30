<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['no_delivery', 'nama', 'daerah', 'keterangan', 'status'];
}
