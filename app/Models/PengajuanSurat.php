<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $fillable = [
        'jenis_surat','nama_pemohon','alasan','tempat_lahir','tanggal_lahir',
        'jenis_kelamin','nik','alamat','read_at',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'read_at'       => 'datetime',
    ];

    public static function jenisSuratOptions(): array
    {
        return [
            'Surat Keterangan Domisili Usaha',
            'Surat Keterangan Usaha',
            'Surat Keterangan Tidak Mampu (Jamkesda/PIP/KIP)',
            'Surat Keterangan Nikah',
            'Surat Keterangan Janda/Duda',
            'Surat Jual Beli Tanah',
            'Surat Pengantar Permohonan SKCK',
            'Surat Izin Keramaian',
            'Surat Permohonan Nikah/Kawin',
            'Surat Izin Ecer BBM',
            'Surat Keterangan Kematian',
            'Surat Keterangan Domisili',
            'Sporadik',
            'Layanan Jasa Hukum',
            'Surat Lainnya',
        ];
    }

    /* Scopes */
    public function scopeUnread($q){ return $q->whereNull('read_at'); }
    public function markAsRead(): void { $this->update(['read_at' => now()]); }
}
