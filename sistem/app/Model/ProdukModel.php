<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    protected $fillable = [
	    'p_id',
	    'p_nama',
	    'p_deskripsi',
	    'p_harga',
	    'p_stok'
	  ];

	protected $primaryKey = 'p_id';
	public $incrementing = false;
}
