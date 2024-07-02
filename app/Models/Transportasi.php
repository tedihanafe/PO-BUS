<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kode',
        'jumlah',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function kursi($id)
    {
        $data = json_decode($id, true);
        $pemesanan = Pemesanan::where('rute_id', $data['rute'])
            ->where('waktu', $data['waktu'])
            ->where('kursi', $data['kursi'])
            ->first();

        return $pemesanan ? $pemesanan : null;
    }

    protected $table = 'transportasi';
}