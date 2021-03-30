<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //[
            //     'id_barang' => '4',
            //     'kode_barang' => 'PRD004',
            //     'nama_barang' => 'Lifebuoy',
            //     'kategori_barang' => 'KebutuhanMandi',
            //     'harga' => '5000',
            //     'qty' => '60'
            // ],
            // [
            //     'id_barang' => '5',
            //     'kode_barang' => 'PRD005',
            //     'nama_barang' => 'CHIKI',
            //     'kategori_barang' => 'Snack',
            //     'harga' => '7500',
            //     'qty' => '35'
            // ],
            // [
            //     'id_barang' => '6',
            //     'kode_barang' => 'PRD006',
            //     'nama_barang' => 'ChocoDrink',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '8500',
            //     'qty' => '65'
            // ],
            // [
            //     'id_barang' => '7',
            //     'kode_barang' => 'PRD007',
            //     'nama_barang' => 'SariRoti',
            //     'kategori_barang' => 'Makanan',
            //     'harga' => '6500',
            //     'qty' => '77'
            // ],
            // [
            //     'id_barang' => '8',
            //     'kode_barang' => 'PRD008',
            //     'nama_barang' => 'ShampoClear',
            //     'kategori_barang' => 'KebutuhanMandi',
            //     'harga' => '9500',
            //     'qty' => '74'
            // ],
            // [
            //     'id_barang' => '9',
            //     'kode_barang' => 'PRD009',
            //     'nama_barang' => 'KitKat',
            //     'kategori_barang' => 'Makanan',
            //     'harga' => '14000',
            //     'qty' => '34'
            // ],
            // [
            //     'id_barang' => '10',
            //     'kode_barang' => 'PRD010',
            //     'nama_barang' => 'GoodDay',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '8000',
            //     'qty' => '54'
            // ],
            // [
            //     'id_barang' => '11',
            //     'kode_barang' => 'PRD011',
            //     'nama_barang' => 'SikatGigi',
            //     'kategori_barang' => 'KebutuhanMandi',
            //     'harga' => '7500',
            //     'qty' => '72'
            // ],
            // [
            //     'id_barang' => '12',
            //     'kode_barang' => 'PRD012',
            //     'nama_barang' => 'Chocolatos',
            //     'kategori_barang' => 'Snack',
            //     'harga' => '6500',
            //     'qty' => '24'
            // ],
            // [
            //     'id_barang' => '13',
            //     'kode_barang' => 'PRD013',
            //     'nama_barang' => 'Prestine',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '7500',
            //     'qty' => '64'
            // ],
            // [
            //     'id_barang' => '14',
            //     'kode_barang' => 'PRD014',
            //     'nama_barang' => 'OdolMandi',
            //     'kategori_barang' => 'KebutuhanMandi',
            //     'harga' => '15000',
            //     'qty' => '54'
            // ],
            // [
            //     'id_barang' => '15',
            //     'kode_barang' => 'PRD015',
            //     'nama_barang' => 'Yakult',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '7000',
            //     'qty' => '56'
            // ],
            // [
            //     'id_barang' => '16',
            //     'kode_barang' => 'PRD016',
            //     'nama_barang' => 'OkyJellyDrink',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '7500',
            //     'qty' => '54'
            // ],
            // [
            //     'id_barang' => '17',
            //     'kode_barang' => 'PRD017',
            //     'nama_barang' => 'chococruch',
            //     'kategori_barang' => 'Makanan',
            //     'harga' => '12000',
            //     'qty' => '45'
            // ],
            // [
            //     'id_barang' => '18',
            //     'kode_barang' => 'PRD018',
            //     'nama_barang' => 'Gillette',
            //     'kategori_barang' => 'KebutuhanMandi',
            //     'harga' => '9500',
            //     'qty' => '45'
            // ],
            // [
            //     'id_barang' => '19',
            //     'kode_barang' => 'PRD019',
            //     'nama_barang' => 'BearBrand',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '9800',
            //     'qty' => '34'
            // ],
            // [
            //     'id_barang' => '20',
            //     'kode_barang' => 'PRD020',
            //     'nama_barang' => 'TorabikaSusu',
            //     'kategori_barang' => 'Minuman',
            //     'harga' => '8500',
            //     'qty' => '56'
            // ],
            [
                'id_barang' => '01',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'id_barang' => '02',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'PocariSweat',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'id_barang' => '03',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
        ];
        DB::table('barang')->insert($data);
    }
}
