<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Artist extends Model
{
    protected $table = "tb_artist";

    protected $primaryKey = 'artis_id'; 

    protected $fillable = ['artis_nama'];

    public function album()
    {
    	return $this->belongTo(album::class);
    }
}
