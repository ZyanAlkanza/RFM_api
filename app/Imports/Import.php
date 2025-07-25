<?php

namespace App\Imports;

use App\Models\Data;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Data([
            'tgl_invoice'       => $row[0],
            'ro_ke'             => $row[1],
            'no_invoice'        => $row[2],
            'team'              => $row[3],
            'nama_cs'           => $row[4],
            'nama_adv'          => $row[5],
            'tipe_pembayaran'   => $row[6],
            'pengiriman'        => $row[7],
            'no_telp'           => $row[8],
            'nama_pelanggan'    => $row[9],
            'alamat'            => $row[11],
            'platform_adv'      => $row[12],
            'nama_produk'       => $row[13],
            'catatan'           => $row[14],
            'kategori'          => $row[15],
            'omset'             => $row[16],
        ]);
    }
}
