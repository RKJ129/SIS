<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata_Sekolah extends Model
{
    use HasFactory;

    protected $table = 'biodata_sekolah';
    protected $fillable = [
        'name', 'npsn', 'akreditasi', 'jenjang',
        'status', 'alamat', 'kode_pos',
        'kelurahan', 'kecamatan', 'kota',
        'provinsi', 'negara', 'no_tlpn',
        'no_fax', 'email', 'website',
    ];

    protected function getNoTlpnAttribute($value)
    {
        return implode('-', str_split('0' . $value, 4));
        // $value = '0' . $value;
        // return substr($value, 0, 4) . '-' . substr($value, 4, 4) . '-' . substr($value, 8, 4);
    }

    protected function setnoTlpnAttribute($value)
    {
        $cleanedString = ltrim(str_replace(['(',')','-', ' '], '', $value), '0');
        $this->attributes['no_tlpn'] = $cleanedString;
    }

    protected function getNoFaxAttribute($value)
    {
        $areaCode = '0' . substr($value, 0, 3);
        $number = substr($value, 3);

        return "($areaCode) $number";
    }

    protected function setNoFaxAttribute($value)
    {
        $cleanedString = ltrim(str_replace([' ', '(', ')'], '', $value), '0');
        $this->attributes['no_fax'] = $cleanedString;
    }

}
