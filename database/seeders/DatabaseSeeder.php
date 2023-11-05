<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JalurMasuk;
use App\Models\KabupatenKota;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\StatusMahasiswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #MEMASUKKAN JALUR MASUK DAN STATUS MAHASISWA
        
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        JalurMasuk::truncate();
        StatusMahasiswa::truncate();
        Schema::enableForeignKeyConstraints();

        $roles = [
            [
                'name' => 'operator',
            ],
            [
                'name' => 'departemen',
            ],
            [
                'name' => 'dosen',
            ],
            [
                'name' => 'mahasiswa',
            ],
        ];

        $jalurmasuk = [
            [
                'name' => 'SNBP',
            ],
            [
                'name' => 'SNBT',
            ],
            [
                'name' => 'Mandiri',
            ],
        ];

        $statusmhs = [
            [
                'name' => 'Aktif',
            ],
            [
                'name' => 'Nonaktif',
            ],
            [
                'name' => 'Cuti',
            ],
        ];

        $provinsi = [
            [
                'kode_prov'=>'11',
                'nama_prov'=>'Aceh'
            ],
            [
                'kode_prov'=>'12',
                'nama_prov'=>'Sumatera Utara'
            ],
            [
                'kode_prov'=>'13',
                'nama_prov'=>'Sumatera Barat'
            ],
            [
                'kode_prov'=>'14',
                'nama_prov'=>'Riau'
            ],
            [
                'kode_prov'=>'15',
                'nama_prov'=>'Jambi'
            ],
            [
                'kode_prov'=>'16',
                'nama_prov'=>'Sumatera Selatan'
            ],
            [
                'kode_prov'=>'17',
                'nama_prov'=>'Bengkulu'
            ],
            [
                'kode_prov'=>'18',
                'nama_prov'=>'Lampung'
            ],
            [
                'kode_prov'=>'19',
                'nama_prov'=>'Kepulauan Bangka Belitung'
            ],
            [
                'kode_prov'=>'21',
                'nama_prov'=>'Kepulauan Riau'
            ],
            [
                'kode_prov'=>'31',
                'nama_prov'=>'DKI Jakarta'
            ],
            [
                'kode_prov'=>'32',
                'nama_prov'=>'Jawa Barat'
            ],
            [
                'kode_prov'=>'33',
                'nama_prov'=>'Jawa Tengah'
            ],
            [
                'kode_prov'=>'34',
                'nama_prov'=>'Daerah Istimewa Yogyakarta'
            ],
            [
                'kode_prov'=>'35',
                'nama_prov'=>'Jawa Timur'
            ],
            [
                'kode_prov'=>'36',
                'nama_prov'=>'Banten'
            ],
            [
                'kode_prov'=>'51',
                'nama_prov'=>'Bali'
            ],
            [
                'kode_prov'=>'52',
                'nama_prov'=>'Nusa Tenggara Barat'
            ],
            [
                'kode_prov'=>'53',
                'nama_prov'=>'Nusa Tenggara Timur'
            ],
            [
                'kode_prov'=>'61',
                'nama_prov'=>'Kalimantan Barat'
            ],
            [
                'kode_prov'=>'62',
                'nama_prov'=>'Kalimantan Tengah'
            ],
            [
                'kode_prov'=>'63',
                'nama_prov'=>'Kalimantan Selatan'
            ],
            [
                'kode_prov'=>'64',
                'nama_prov'=>'Kalimantan Timur'
            ],
            [
                'kode_prov'=>'65',
                'nama_prov'=>'Kalimantan Utara'
            ],
            [
                'kode_prov'=>'71',
                'nama_prov'=>'Sulawesi Utara'
            ],
            [
                'kode_prov'=>'72',
                'nama_prov'=>'Sulawesi Tengah'
            ],
            [
                'kode_prov'=>'73',
                'nama_prov'=>'Sulawesi Selatan'
            ],
            [
                'kode_prov'=>'74',
                'nama_prov'=>'Sulawesi Tenggara'
            ],
            [
                'kode_prov'=>'75',
                'nama_prov'=>'Gorontalo'
            ],
            [
                'kode_prov'=>'76',
                'nama_prov'=>'Sulawesi Barat'
            ],
            [
                'kode_prov'=>'81',
                'nama_prov'=>'Maluku'
            ],
            [
                'kode_prov'=>'82',
                'nama_prov'=>'Maluku Utara'
            ],
            [
                'kode_prov'=>'91',
                'nama_prov'=>'Papua Barat'
            ],
            [
                'kode_prov'=>'94',
                'nama_prov'=>'Papua'
            ]
        ];

        $kabupaten_kota = [
            [
                'kode_kab'=>'1101',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Simeulue'
            ],
            [
                'kode_kab'=>'1102',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Singkil'
            ],
            [
                'kode_kab'=>'1103',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Selatan'
            ],
            [
                'kode_kab'=>'1104',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Tenggara'
            ],
            [
                'kode_kab'=>'1105',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Timur'
            ],
            [
                'kode_kab'=>'1106',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Tengah'
            ],
            [
                'kode_kab'=>'1107',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Barat'
            ],
            [
                'kode_kab'=>'1108',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Besar'
            ],
            [
                'kode_kab'=>'1109',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Pidie'
            ],
            [
                'kode_kab'=>'1110',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Bireuen'
            ],
            [
                'kode_kab'=>'1111',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Utara'
            ],
            [
                'kode_kab'=>'1112',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Barat Daya'
            ],
            [
                'kode_kab'=>'1113',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Gayo Lues'
            ],
            [
                'kode_kab'=>'1114',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Tamiang'
            ],
            [
                'kode_kab'=>'1115',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Nagan Raya'
            ],
            [
                'kode_kab'=>'1116',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Aceh Jaya'
            ],
            [
                'kode_kab'=>'1117',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Bener Meriah'
            ],
            [
                'kode_kab'=>'1118',
                'kode_prov'=>'11',
                'nama_kab'=>'Kabupaten Pidie Jaya'
            ],
            [
                'kode_kab'=>'1171',
                'kode_prov'=>'11',
                'nama_kab'=>'Kota Banda Aceh'
            ],
            [
                'kode_kab'=>'1172',
                'kode_prov'=>'11',
                'nama_kab'=>'Kota Sabang'
            ],
            [
                'kode_kab'=>'1173',
                'kode_prov'=>'11',
                'nama_kab'=>'Kota Langsa'
            ],
            [
                'kode_kab'=>'1174',
                'kode_prov'=>'11',
                'nama_kab'=>'Kota Lhokseumawe'
            ],
            [
                'kode_kab'=>'1175',
                'kode_prov'=>'11',
                'nama_kab'=>'Kota Subulussalam'
            ],
            [
                'kode_kab'=>'1201',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Nias'
            ],
            [
                'kode_kab'=>'1202',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Mandailing Natal'
            ],
            [
                'kode_kab'=>'1203',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Tapanuli Selatan'
            ],
            [
                'kode_kab'=>'1204',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Tapanuli Tengah'
            ],
            [
                'kode_kab'=>'1205',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Tapanuli Utara'
            ],
            [
                'kode_kab'=>'1206',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Toba Samosir'
            ],
            [
                'kode_kab'=>'1207',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Labuhan Batu'
            ],
            [
                'kode_kab'=>'1208',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Asahan'
            ],
            [
                'kode_kab'=>'1209',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Simalungun'
            ],
            [
                'kode_kab'=>'1210',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Dairi'
            ],
            [
                'kode_kab'=>'1211',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Karo'
            ],
            [
                'kode_kab'=>'1212',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Deli Serdang'
            ],
            [
                'kode_kab'=>'1213',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Langkat'
            ],
            [
                'kode_kab'=>'1214',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Nias Selatan'
            ],
            [
                'kode_kab'=>'1215',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Humbang Hasundutan'
            ],
            [
                'kode_kab'=>'1216',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Pakpak Bharat'
            ],
            [
                'kode_kab'=>'1217',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Samosir'
            ],
            [
                'kode_kab'=>'1218',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Serdang Bedagai'
            ],
            [
                'kode_kab'=>'1219',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Batu Bara'
            ],
            [
                'kode_kab'=>'1220',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Padang Lawas Utara'
            ],
            [
                'kode_kab'=>'1221',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Padang Lawas'
            ],
            [
                'kode_kab'=>'1222',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Labuhan Batu Selatan'
            ],
            [
                'kode_kab'=>'1223',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Labuhan Batu Utara'
            ],
            [
                'kode_kab'=>'1224',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Nias Utara'
            ],
            [
                'kode_kab'=>'1225',
                'kode_prov'=>'12',
                'nama_kab'=>'Kabupaten Nias Barat'
            ],
            [
                'kode_kab'=>'1271',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Sibolga'
            ],
            [
                'kode_kab'=>'1272',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Tanjung Balai'
            ],
            [
                'kode_kab'=>'1273',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Pematang Siantar'
            ],
            [
                'kode_kab'=>'1274',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Tebing Tinggi'
            ],
            [
                'kode_kab'=>'1275',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Medan'
            ],
            [
                'kode_kab'=>'1276',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Binjai'
            ],
            [
                'kode_kab'=>'1277',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Padangsidimpuan'
            ],
            [
                'kode_kab'=>'1278',
                'kode_prov'=>'12',
                'nama_kab'=>'Kota Gunungsitoli'
            ],
            [
                'kode_kab'=>'1301',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Kepulauan Mentawai'
            ],
            [
                'kode_kab'=>'1302',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Pesisir Selatan'
            ],
            [
                'kode_kab'=>'1303',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Solok'
            ],
            [
                'kode_kab'=>'1304',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Sijunjung'
            ],
            [
                'kode_kab'=>'1305',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Tanah Datar'
            ],
            [
                'kode_kab'=>'1306',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Padang Pariaman'
            ],
            [
                'kode_kab'=>'1307',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Agam'
            ],
            [
                'kode_kab'=>'1308',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Lima Puluh Kota'
            ],
            [
                'kode_kab'=>'1309',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Pasaman'
            ],
            [
                'kode_kab'=>'1310',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Solok Selatan'
            ],
            [
                'kode_kab'=>'1311',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Dharmasraya'
            ],
            [
                'kode_kab'=>'1312',
                'kode_prov'=>'13',
                'nama_kab'=>'Kabupaten Pasaman Barat'
            ],
            [
                'kode_kab'=>'1371',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Padang'
            ],
            [
                'kode_kab'=>'1372',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Solok'
            ],
            [
                'kode_kab'=>'1373',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Sawah Lunto'
            ],
            [
                'kode_kab'=>'1374',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Padang Panjang'
            ],
            [
                'kode_kab'=>'1375',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Bukittinggi'
            ],
            [
                'kode_kab'=>'1376',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Payakumbuh'
            ],
            [
                'kode_kab'=>'1377',
                'kode_prov'=>'13',
                'nama_kab'=>'Kota Pariaman'
            ],
            [
                'kode_kab'=>'1401',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Kuantan Singingi'
            ],
            [
                'kode_kab'=>'1402',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Indragiri Hulu'
            ],
            [
                'kode_kab'=>'1403',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Indragiri Hilir'
            ],
            [
                'kode_kab'=>'1404',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Pelalawan'
            ],
            [
                'kode_kab'=>'1405',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten S I A K'
            ],
            [
                'kode_kab'=>'1406',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Kampar'
            ],
            [
                'kode_kab'=>'1407',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Rokan Hulu'
            ],
            [
                'kode_kab'=>'1408',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Bengkalis'
            ],
            [
                'kode_kab'=>'1409',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Rokan Hilir'
            ],
            [
                'kode_kab'=>'1410',
                'kode_prov'=>'14',
                'nama_kab'=>'Kabupaten Kepulauan Meranti'
            ],
            [
                'kode_kab'=>'1471',
                'kode_prov'=>'14',
                'nama_kab'=>'Kota Pekanbaru'
            ],
            [
                'kode_kab'=>'1473',
                'kode_prov'=>'14',
                'nama_kab'=>'Kota D U M A I'
            ],
            [
                'kode_kab'=>'1501',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Kerinci'
            ],
            [
                'kode_kab'=>'1502',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Merangin'
            ],
            [
                'kode_kab'=>'1503',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Sarolangun'
            ],
            [
                'kode_kab'=>'1504',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Batang Hari'
            ],
            [
                'kode_kab'=>'1505',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Muaro Jambi'
            ],
            [
                'kode_kab'=>'1506',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Tanjung Jabung Timur'
            ],
            [
                'kode_kab'=>'1507',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Tanjung Jabung Barat'
            ],
            [
                'kode_kab'=>'1508',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Tebo'
            ],
            [
                'kode_kab'=>'1509',
                'kode_prov'=>'15',
                'nama_kab'=>'Kabupaten Bungo'
            ],
            [
                'kode_kab'=>'1571',
                'kode_prov'=>'15',
                'nama_kab'=>'Kota Jambi'
            ],
            [
                'kode_kab'=>'1572',
                'kode_prov'=>'15',
                'nama_kab'=>'Kota Sungai Penuh'
            ],
            [
                'kode_kab'=>'1601',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Ogan Komering Ulu'
            ],
            [
                'kode_kab'=>'1602',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Ogan Komering Ilir'
            ],
            [
                'kode_kab'=>'1603',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Muara Enim'
            ],
            [
                'kode_kab'=>'1604',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Lahat'
            ],
            [
                'kode_kab'=>'1605',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Musi Rawas'
            ],
            [
                'kode_kab'=>'1606',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Musi Banyuasin'
            ],
            [
                'kode_kab'=>'1607',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Banyu Asin'
            ],
            [
                'kode_kab'=>'1608',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Ogan Komering Ulu Selatan'
            ],
            [
                'kode_kab'=>'1609',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Ogan Komering Ulu Timur'
            ],
            [
                'kode_kab'=>'1610',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Ogan Ilir'
            ],
            [
                'kode_kab'=>'1611',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Empat Lawang'
            ],
            [
                'kode_kab'=>'1612',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Penukal Abab Lematang Ilir'
            ],
            [
                'kode_kab'=>'1613',
                'kode_prov'=>'16',
                'nama_kab'=>'Kabupaten Musi Rawas Utara'
            ],
            [
                'kode_kab'=>'1671',
                'kode_prov'=>'16',
                'nama_kab'=>'Kota Palembang'
            ],
            [
                'kode_kab'=>'1672',
                'kode_prov'=>'16',
                'nama_kab'=>'Kota Prabumulih'
            ],
            [
                'kode_kab'=>'1673',
                'kode_prov'=>'16',
                'nama_kab'=>'Kota Pagar Alam'
            ],
            [
                'kode_kab'=>'1674',
                'kode_prov'=>'16',
                'nama_kab'=>'Kota Lubuklinggau'
            ],
            [
                'kode_kab'=>'1701',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Bengkulu Selatan'
            ],
            [
                'kode_kab'=>'1702',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Rejang Lebong'
            ],
            [
                'kode_kab'=>'1703',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Bengkulu Utara'
            ],
            [
                'kode_kab'=>'1704',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Kaur'
            ],
            [
                'kode_kab'=>'1705',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Seluma'
            ],
            [
                'kode_kab'=>'1706',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Mukomuko'
            ],
            [
                'kode_kab'=>'1707',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Lebong'
            ],
            [
                'kode_kab'=>'1708',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Kepahiang'
            ],
            [
                'kode_kab'=>'1709',
                'kode_prov'=>'17',
                'nama_kab'=>'Kabupaten Bengkulu Tengah'
            ],
            [
                'kode_kab'=>'1771',
                'kode_prov'=>'17',
                'nama_kab'=>'Kota Bengkulu'
            ],
            [
                'kode_kab'=>'1801',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Lampung Barat'
            ],
            [
                'kode_kab'=>'1802',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Tanggamus'
            ],
            [
                'kode_kab'=>'1803',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Lampung Selatan'
            ],
            [
                'kode_kab'=>'1804',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Lampung Timur'
            ],
            [
                'kode_kab'=>'1805',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Lampung Tengah'
            ],
            [
                'kode_kab'=>'1806',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Lampung Utara'
            ],
            [
                'kode_kab'=>'1807',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Way Kanan'
            ],
            [
                'kode_kab'=>'1808',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Tulangbawang'
            ],
            [
                'kode_kab'=>'1809',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Pesawaran'
            ],
            [
                'kode_kab'=>'1810',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Pringsewu'
            ],
            [
                'kode_kab'=>'1811',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Mesuji'
            ],
            [
                'kode_kab'=>'1812',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Tulang Bawang Barat'
            ],
            [
                'kode_kab'=>'1813',
                'kode_prov'=>'18',
                'nama_kab'=>'Kabupaten Pesisir Barat'
            ],
            [
                'kode_kab'=>'1871',
                'kode_prov'=>'18',
                'nama_kab'=>'Kota Bandar Lampung'
            ],
            [
                'kode_kab'=>'1872',
                'kode_prov'=>'18',
                'nama_kab'=>'Kota Metro'
            ],
            [
                'kode_kab'=>'1901',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Bangka'
            ],
            [
                'kode_kab'=>'1902',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Belitung'
            ],
            [
                'kode_kab'=>'1903',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Bangka Barat'
            ],
            [
                'kode_kab'=>'1904',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Bangka Tengah'
            ],
            [
                'kode_kab'=>'1905',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Bangka Selatan'
            ],
            [
                'kode_kab'=>'1906',
                'kode_prov'=>'19',
                'nama_kab'=>'Kabupaten Belitung Timur'
            ],
            [
                'kode_kab'=>'1971',
                'kode_prov'=>'19',
                'nama_kab'=>'Kota Pangkal Pinang'
            ],
            [
                'kode_kab'=>'2101',
                'kode_prov'=>'21',
                'nama_kab'=>'Kabupaten Karimun'
            ],
            [
                'kode_kab'=>'2102',
                'kode_prov'=>'21',
                'nama_kab'=>'Kabupaten Bintan'
            ],
            [
                'kode_kab'=>'2103',
                'kode_prov'=>'21',
                'nama_kab'=>'Kabupaten Natuna'
            ],
            [
                'kode_kab'=>'2104',
                'kode_prov'=>'21',
                'nama_kab'=>'Kabupaten Lingga'
            ],
            [
                'kode_kab'=>'2105',
                'kode_prov'=>'21',
                'nama_kab'=>'Kabupaten Kepulauan Anambas'
            ],
            [
                'kode_kab'=>'2171',
                'kode_prov'=>'21',
                'nama_kab'=>'Kota B A T A M'
            ],
            [
                'kode_kab'=>'2172',
                'kode_prov'=>'21',
                'nama_kab'=>'Kota Tanjung Pinang'
            ],
            [
                'kode_kab'=>'3101',
                'kode_prov'=>'31',
                'nama_kab'=>'Kabupaten Kepulauan Seribu'
            ],
            [
                'kode_kab'=>'3171',
                'kode_prov'=>'31',
                'nama_kab'=>'Kota Jakarta Selatan'
            ],
            [
                'kode_kab'=>'3172',
                'kode_prov'=>'31',
                'nama_kab'=>'Kota Jakarta Timur'
            ],
            [
                'kode_kab'=>'3173',
                'kode_prov'=>'31',
                'nama_kab'=>'Kota Jakarta Pusat'
            ],
            [
                'kode_kab'=>'3174',
                'kode_prov'=>'31',
                'nama_kab'=>'Kota Jakarta Barat'
            ],
            [
                'kode_kab'=>'3175',
                'kode_prov'=>'31',
                'nama_kab'=>'Kota Jakarta Utara'
            ],
            [
                'kode_kab'=>'3201',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Bogor'
            ],
            [
                'kode_kab'=>'3202',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Sukabumi'
            ],
            [
                'kode_kab'=>'3203',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Cianjur'
            ],
            [
                'kode_kab'=>'3204',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Bandung'
            ],
            [
                'kode_kab'=>'3205',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Garut'
            ],
            [
                'kode_kab'=>'3206',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Tasikmalaya'
            ],
            [
                'kode_kab'=>'3207',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Ciamis'
            ],
            [
                'kode_kab'=>'3208',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Kuningan'
            ],
            [
                'kode_kab'=>'3209',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Cirebon'
            ],
            [
                'kode_kab'=>'3210',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Majalengka'
            ],
            [
                'kode_kab'=>'3211',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Sumedang'
            ],
            [
                'kode_kab'=>'3212',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Indramayu'
            ],
            [
                'kode_kab'=>'3213',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Subang'
            ],
            [
                'kode_kab'=>'3214',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Purwakarta'
            ],
            [
                'kode_kab'=>'3215',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Karawang'
            ],
            [
                'kode_kab'=>'3216',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Bekasi'
            ],
            [
                'kode_kab'=>'3217',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Bandung Barat'
            ],
            [
                'kode_kab'=>'3218',
                'kode_prov'=>'32',
                'nama_kab'=>'Kabupaten Pangandaran'
            ],
            [
                'kode_kab'=>'3271',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Bogor'
            ],
            [
                'kode_kab'=>'3272',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Sukabumi'
            ],
            [
                'kode_kab'=>'3273',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Bandung'
            ],
            [
                'kode_kab'=>'3274',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Cirebon'
            ],
            [
                'kode_kab'=>'3275',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Bekasi'
            ],
            [
                'kode_kab'=>'3276',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Depok'
            ],
            [
                'kode_kab'=>'3277',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Cimahi'
            ],
            [
                'kode_kab'=>'3278',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Tasikmalaya'
            ],
            [
                'kode_kab'=>'3279',
                'kode_prov'=>'32',
                'nama_kab'=>'Kota Banjar'
            ],
            [
                'kode_kab'=>'3301',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Cilacap'
            ],
            [
                'kode_kab'=>'3302',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Banyumas'
            ],
            [
                'kode_kab'=>'3303',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Purbalingga'
            ],
            [
                'kode_kab'=>'3304',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Banjarnegara'
            ],
            [
                'kode_kab'=>'3305',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Kebumen'
            ],
            [
                'kode_kab'=>'3306',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Purworejo'
            ],
            [
                'kode_kab'=>'3307',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Wonosobo'
            ],
            [
                'kode_kab'=>'3308',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Magelang'
            ],
            [
                'kode_kab'=>'3309',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Boyolali'
            ],
            [
                'kode_kab'=>'3310',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Klaten'
            ],
            [
                'kode_kab'=>'3311',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Sukoharjo'
            ],
            [
                'kode_kab'=>'3312',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Wonogiri'
            ],
            [
                'kode_kab'=>'3313',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Karanganyar'
            ],
            [
                'kode_kab'=>'3314',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Sragen'
            ],
            [
                'kode_kab'=>'3315',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Grobogan'
            ],
            [
                'kode_kab'=>'3316',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Blora'
            ],
            [
                'kode_kab'=>'3317',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Rembang'
            ],
            [
                'kode_kab'=>'3318',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Pati'
            ],
            [
                'kode_kab'=>'3319',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Kudus'
            ],
            [
                'kode_kab'=>'3320',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Jepara'
            ],
            [
                'kode_kab'=>'3321',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Demak'
            ],
            [
                'kode_kab'=>'3322',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Semarang'
            ],
            [
                'kode_kab'=>'3323',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Temanggung'
            ],
            [
                'kode_kab'=>'3324',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Kendal'
            ],
            [
                'kode_kab'=>'3325',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Batang'
            ],
            [
                'kode_kab'=>'3326',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Pekalongan'
            ],
            [
                'kode_kab'=>'3327',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Pemalang'
            ],
            [
                'kode_kab'=>'3328',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Tegal'
            ],
            [
                'kode_kab'=>'3329',
                'kode_prov'=>'33',
                'nama_kab'=>'Kabupaten Brebes'
            ],
            [
                'kode_kab'=>'3371',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Magelang'
            ],
            [
                'kode_kab'=>'3372',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Surakarta'
            ],
            [
                'kode_kab'=>'3373',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Salatiga'
            ],
            [
                'kode_kab'=>'3374',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Semarang'
            ],
            [
                'kode_kab'=>'3375',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Pekalongan'
            ],
            [
                'kode_kab'=>'3376',
                'kode_prov'=>'33',
                'nama_kab'=>'Kota Tegal'
            ],
            [
                'kode_kab'=>'3401',
                'kode_prov'=>'34',
                'nama_kab'=>'Kabupaten Kulon Progo'
            ],
            [
                'kode_kab'=>'3402',
                'kode_prov'=>'34',
                'nama_kab'=>'Kabupaten Bantul'
            ],
            [
                'kode_kab'=>'3403',
                'kode_prov'=>'34',
                'nama_kab'=>'Kabupaten Gunung Kidul'
            ],
            [
                'kode_kab'=>'3404',
                'kode_prov'=>'34',
                'nama_kab'=>'Kabupaten Sleman'
            ],
            [
                'kode_kab'=>'3471',
                'kode_prov'=>'34',
                'nama_kab'=>'Kota Yogyakarta'
            ],
            [
                'kode_kab'=>'3501',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Pacitan'
            ],
            [
                'kode_kab'=>'3502',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Ponorogo'
            ],
            [
                'kode_kab'=>'3503',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Trenggalek'
            ],
            [
                'kode_kab'=>'3504',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Tulungagung'
            ],
            [
                'kode_kab'=>'3505',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Blitar'
            ],
            [
                'kode_kab'=>'3506',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Kediri'
            ],
            [
                'kode_kab'=>'3507',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Malang'
            ],
            [
                'kode_kab'=>'3508',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Lumajang'
            ],
            [
                'kode_kab'=>'3509',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Jember'
            ],
            [
                'kode_kab'=>'3510',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Banyuwangi'
            ],
            [
                'kode_kab'=>'3511',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Bondowoso'
            ],
            [
                'kode_kab'=>'3512',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Situbondo'
            ],
            [
                'kode_kab'=>'3513',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Probolinggo'
            ],
            [
                'kode_kab'=>'3514',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Pasuruan'
            ],
            [
                'kode_kab'=>'3515',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Sidoarjo'
            ],
            [
                'kode_kab'=>'3516',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Mojokerto'
            ],
            [
                'kode_kab'=>'3517',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Jombang'
            ],
            [
                'kode_kab'=>'3518',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Nganjuk'
            ],
            [
                'kode_kab'=>'3519',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Madiun'
            ],
            [
                'kode_kab'=>'3520',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Magetan'
            ],
            [
                'kode_kab'=>'3521',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Ngawi'
            ],
            [
                'kode_kab'=>'3522',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Bojonegoro'
            ],
            [
                'kode_kab'=>'3523',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Tuban'
            ],
            [
                'kode_kab'=>'3524',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Lamongan'
            ],
            [
                'kode_kab'=>'3525',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Gresik'
            ],
            [
                'kode_kab'=>'3526',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Bangkalan'
            ],
            [
                'kode_kab'=>'3527',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Sampang'
            ],
            [
                'kode_kab'=>'3528',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Pamekasan'
            ],
            [
                'kode_kab'=>'3529',
                'kode_prov'=>'35',
                'nama_kab'=>'Kabupaten Sumenep'
            ],
            [
                'kode_kab'=>'3571',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Kediri'
            ],
            [
                'kode_kab'=>'3572',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Blitar'
            ],
            [
                'kode_kab'=>'3573',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Malang'
            ],
            [
                'kode_kab'=>'3574',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Probolinggo'
            ],
            [
                'kode_kab'=>'3575',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Pasuruan'
            ],
            [
                'kode_kab'=>'3576',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Mojokerto'
            ],
            [
                'kode_kab'=>'3577',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Madiun'
            ],
            [
                'kode_kab'=>'3578',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Surabaya'
            ],
            [
                'kode_kab'=>'3579',
                'kode_prov'=>'35',
                'nama_kab'=>'Kota Batu'
            ],
            [
                'kode_kab'=>'3601',
                'kode_prov'=>'36',
                'nama_kab'=>'Kabupaten Pandeglang'
            ],
            [
                'kode_kab'=>'3602',
                'kode_prov'=>'36',
                'nama_kab'=>'Kabupaten Lebak'
            ],
            [
                'kode_kab'=>'3603',
                'kode_prov'=>'36',
                'nama_kab'=>'Kabupaten Tangerang'
            ],
            [
                'kode_kab'=>'3604',
                'kode_prov'=>'36',
                'nama_kab'=>'Kabupaten Serang'
            ],
            [
                'kode_kab'=>'3671',
                'kode_prov'=>'36',
                'nama_kab'=>'Kota Tangerang'
            ],
            [
                'kode_kab'=>'3672',
                'kode_prov'=>'36',
                'nama_kab'=>'Kota Cilegon'
            ],
            [
                'kode_kab'=>'3673',
                'kode_prov'=>'36',
                'nama_kab'=>'Kota Serang'
            ],
            [
                'kode_kab'=>'3674',
                'kode_prov'=>'36',
                'nama_kab'=>'Kota Tangerang Selatan'
            ],
            [
                'kode_kab'=>'5101',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Jembrana'
            ],
            [
                'kode_kab'=>'5102',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Tabanan'
            ],
            [
                'kode_kab'=>'5103',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Badung'
            ],
            [
                'kode_kab'=>'5104',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Gianyar'
            ],
            [
                'kode_kab'=>'5105',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Klungkung'
            ],
            [
                'kode_kab'=>'5106',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Bangli'
            ],
            [
                'kode_kab'=>'5107',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Karang Asem'
            ],
            [
                'kode_kab'=>'5108',
                'kode_prov'=>'51',
                'nama_kab'=>'Kabupaten Buleleng'
            ],
            [
                'kode_kab'=>'5171',
                'kode_prov'=>'51',
                'nama_kab'=>'Kota Denpasar'
            ],
            [
                'kode_kab'=>'5201',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Lombok Barat'
            ],
            [
                'kode_kab'=>'5202',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Lombok Tengah'
            ],
            [
                'kode_kab'=>'5203',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Lombok Timur'
            ],
            [
                'kode_kab'=>'5204',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Sumbawa'
            ],
            [
                'kode_kab'=>'5205',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Dompu'
            ],
            [
                'kode_kab'=>'5206',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Bima'
            ],
            [
                'kode_kab'=>'5207',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Sumbawa Barat'
            ],
            [
                'kode_kab'=>'5208',
                'kode_prov'=>'52',
                'nama_kab'=>'Kabupaten Lombok Utara'
            ],
            [
                'kode_kab'=>'5271',
                'kode_prov'=>'52',
                'nama_kab'=>'Kota Mataram'
            ],
            [
                'kode_kab'=>'5272',
                'kode_prov'=>'52',
                'nama_kab'=>'Kota Bima'
            ],
            [
                'kode_kab'=>'5301',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sumba Barat'
            ],
            [
                'kode_kab'=>'5302',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sumba Timur'
            ],
            [
                'kode_kab'=>'5303',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Kupang'
            ],
            [
                'kode_kab'=>'5304',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Timor Tengah Selatan'
            ],
            [
                'kode_kab'=>'5305',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Timor Tengah Utara'
            ],
            [
                'kode_kab'=>'5306',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Belu'
            ],
            [
                'kode_kab'=>'5307',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Alor'
            ],
            [
                'kode_kab'=>'5308',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Lembata'
            ],
            [
                'kode_kab'=>'5309',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Flores Timur'
            ],
            [
                'kode_kab'=>'5310',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sikka'
            ],
            [
                'kode_kab'=>'5311',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Ende'
            ],
            [
                'kode_kab'=>'5312',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Ngada'
            ],
            [
                'kode_kab'=>'5313',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Manggarai'
            ],
            [
                'kode_kab'=>'5314',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Rote Ndao'
            ],
            [
                'kode_kab'=>'5315',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Manggarai Barat'
            ],
            [
                'kode_kab'=>'5316',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sumba Tengah'
            ],
            [
                'kode_kab'=>'5317',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sumba Barat Daya'
            ],
            [
                'kode_kab'=>'5318',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Nagekeo'
            ],
            [
                'kode_kab'=>'5319',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Manggarai Timur'
            ],
            [
                'kode_kab'=>'5320',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Sabu Raijua'
            ],
            [
                'kode_kab'=>'5321',
                'kode_prov'=>'53',
                'nama_kab'=>'Kabupaten Malaka'
            ],
            [
                'kode_kab'=>'5371',
                'kode_prov'=>'53',
                'nama_kab'=>'Kota Kupang'
            ],
            [
                'kode_kab'=>'6101',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Sambas'
            ],
            [
                'kode_kab'=>'6102',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Bengkayang'
            ],
            [
                'kode_kab'=>'6103',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Landak'
            ],
            [
                'kode_kab'=>'6104',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Mempawah'
            ],
            [
                'kode_kab'=>'6105',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Sanggau'
            ],
            [
                'kode_kab'=>'6106',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Ketapang'
            ],
            [
                'kode_kab'=>'6107',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Sintang'
            ],
            [
                'kode_kab'=>'6108',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Kapuas Hulu'
            ],
            [
                'kode_kab'=>'6109',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Sekadau'
            ],
            [
                'kode_kab'=>'6110',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Melawi'
            ],
            [
                'kode_kab'=>'6111',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Kayong Utara'
            ],
            [
                'kode_kab'=>'6112',
                'kode_prov'=>'61',
                'nama_kab'=>'Kabupaten Kubu Raya'
            ],
            [
                'kode_kab'=>'6171',
                'kode_prov'=>'61',
                'nama_kab'=>'Kota Pontianak'
            ],
            [
                'kode_kab'=>'6172',
                'kode_prov'=>'61',
                'nama_kab'=>'Kota Singkawang'
            ],
            [
                'kode_kab'=>'6201',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Kotawaringin Barat'
            ],
            [
                'kode_kab'=>'6202',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Kotawaringin Timur'
            ],
            [
                'kode_kab'=>'6203',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Kapuas'
            ],
            [
                'kode_kab'=>'6204',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Barito Selatan'
            ],
            [
                'kode_kab'=>'6205',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Barito Utara'
            ],
            [
                'kode_kab'=>'6206',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Sukamara'
            ],
            [
                'kode_kab'=>'6207',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Lamandau'
            ],
            [
                'kode_kab'=>'6208',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Seruyan'
            ],
            [
                'kode_kab'=>'6209',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Katingan'
            ],
            [
                'kode_kab'=>'6210',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Pulang Pisau'
            ],
            [
                'kode_kab'=>'6211',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Gunung Mas'
            ],
            [
                'kode_kab'=>'6212',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Barito Timur'
            ],
            [
                'kode_kab'=>'6213',
                'kode_prov'=>'62',
                'nama_kab'=>'Kabupaten Murung Raya'
            ],
            [
                'kode_kab'=>'6271',
                'kode_prov'=>'62',
                'nama_kab'=>'Kota Palangka Raya'
            ],
            [
                'kode_kab'=>'6301',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Tanah Laut'
            ],
            [
                'kode_kab'=>'6302',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Kota Baru'
            ],
            [
                'kode_kab'=>'6303',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Banjar'
            ],
            [
                'kode_kab'=>'6304',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Barito Kuala'
            ],
            [
                'kode_kab'=>'6305',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Tapin'
            ],
            [
                'kode_kab'=>'6306',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Hulu Sungai Selatan'
            ],
            [
                'kode_kab'=>'6307',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Hulu Sungai Tengah'
            ],
            [
                'kode_kab'=>'6308',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Hulu Sungai Utara'
            ],
            [
                'kode_kab'=>'6309',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Tabalong'
            ],
            [
                'kode_kab'=>'6310',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Tanah Bumbu'
            ],
            [
                'kode_kab'=>'6311',
                'kode_prov'=>'63',
                'nama_kab'=>'Kabupaten Balangan'
            ],
            [
                'kode_kab'=>'6371',
                'kode_prov'=>'63',
                'nama_kab'=>'Kota Banjarmasin'
            ],
            [
                'kode_kab'=>'6372',
                'kode_prov'=>'63',
                'nama_kab'=>'Kota Banjar Baru'
            ],
            [
                'kode_kab'=>'6401',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Paser'
            ],
            [
                'kode_kab'=>'6402',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Kutai Barat'
            ],
            [
                'kode_kab'=>'6403',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Kutai Kartanegara'
            ],
            [
                'kode_kab'=>'6404',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Kutai Timur'
            ],
            [
                'kode_kab'=>'6405',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Berau'
            ],
            [
                'kode_kab'=>'6409',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Penajam Paser Utara'
            ],
            [
                'kode_kab'=>'6411',
                'kode_prov'=>'64',
                'nama_kab'=>'Kabupaten Mahakam Hulu'
            ],
            [
                'kode_kab'=>'6471',
                'kode_prov'=>'64',
                'nama_kab'=>'Kota Balikpapan'
            ],
            [
                'kode_kab'=>'6472',
                'kode_prov'=>'64',
                'nama_kab'=>'Kota Samarinda'
            ],
            [
                'kode_kab'=>'6474',
                'kode_prov'=>'64',
                'nama_kab'=>'Kota Bontang'
            ],
            [
                'kode_kab'=>'6501',
                'kode_prov'=>'65',
                'nama_kab'=>'Kabupaten Malinau'
            ],
            [
                'kode_kab'=>'6502',
                'kode_prov'=>'65',
                'nama_kab'=>'Kabupaten Bulungan'
            ],
            [
                'kode_kab'=>'6503',
                'kode_prov'=>'65',
                'nama_kab'=>'Kabupaten Tana Tidung'
            ],
            [
                'kode_kab'=>'6504',
                'kode_prov'=>'65',
                'nama_kab'=>'Kabupaten Nunukan'
            ],
            [
                'kode_kab'=>'6571',
                'kode_prov'=>'65',
                'nama_kab'=>'Kota Tarakan'
            ],
            [
                'kode_kab'=>'7101',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Bolaang Mongondow'
            ],
            [
                'kode_kab'=>'7102',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Minahasa'
            ],
            [
                'kode_kab'=>'7103',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Kepulauan Sangihe'
            ],
            [
                'kode_kab'=>'7104',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Kepulauan Talaud'
            ],
            [
                'kode_kab'=>'7105',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Minahasa Selatan'
            ],
            [
                'kode_kab'=>'7106',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Minahasa Utara'
            ],
            [
                'kode_kab'=>'7107',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Bolaang Mongondow Utara'
            ],
            [
                'kode_kab'=>'7108',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Siau Tagulandang Biaro'
            ],
            [
                'kode_kab'=>'7109',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Minahasa Tenggara'
            ],
            [
                'kode_kab'=>'7110',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Bolaang Mongondow Selatan'
            ],
            [
                'kode_kab'=>'7111',
                'kode_prov'=>'71',
                'nama_kab'=>'Kabupaten Bolaang Mongondow Timur'
            ],
            [
                'kode_kab'=>'7171',
                'kode_prov'=>'71',
                'nama_kab'=>'Kota Manado'
            ],
            [
                'kode_kab'=>'7172',
                'kode_prov'=>'71',
                'nama_kab'=>'Kota Bitung'
            ],
            [
                'kode_kab'=>'7173',
                'kode_prov'=>'71',
                'nama_kab'=>'Kota Tomohon'
            ],
            [
                'kode_kab'=>'7174',
                'kode_prov'=>'71',
                'nama_kab'=>'Kota Kotamobagu'
            ],
            [
                'kode_kab'=>'7201',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Banggai Kepulauan'
            ],
            [
                'kode_kab'=>'7202',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Banggai'
            ],
            [
                'kode_kab'=>'7203',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Morowali'
            ],
            [
                'kode_kab'=>'7204',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Poso'
            ],
            [
                'kode_kab'=>'7205',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Donggala'
            ],
            [
                'kode_kab'=>'7206',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Toli-toli'
            ],
            [
                'kode_kab'=>'7207',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Buol'
            ],
            [
                'kode_kab'=>'7208',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Parigi Moutong'
            ],
            [
                'kode_kab'=>'7209',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Tojo Una-una'
            ],
            [
                'kode_kab'=>'7210',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Sigi'
            ],
            [
                'kode_kab'=>'7211',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Banggai Laut'
            ],
            [
                'kode_kab'=>'7212',
                'kode_prov'=>'72',
                'nama_kab'=>'Kabupaten Morowali Utara'
            ],
            [
                'kode_kab'=>'7271',
                'kode_prov'=>'72',
                'nama_kab'=>'Kota Palu'
            ],
            [
                'kode_kab'=>'7301',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Kepulauan Selayar'
            ],
            [
                'kode_kab'=>'7302',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Bulukumba'
            ],
            [
                'kode_kab'=>'7303',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Bantaeng'
            ],
            [
                'kode_kab'=>'7304',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Jeneponto'
            ],
            [
                'kode_kab'=>'7305',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Takalar'
            ],
            [
                'kode_kab'=>'7306',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Gowa'
            ],
            [
                'kode_kab'=>'7307',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Sinjai'
            ],
            [
                'kode_kab'=>'7308',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Maros'
            ],
            [
                'kode_kab'=>'7309',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Pangkajene Dan Kepulauan'
            ],
            [
                'kode_kab'=>'7310',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Barru'
            ],
            [
                'kode_kab'=>'7311',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Bone'
            ],
            [
                'kode_kab'=>'7312',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Soppeng'
            ],
            [
                'kode_kab'=>'7313',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Wajo'
            ],
            [
                'kode_kab'=>'7314',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Sidenreng Rappang'
            ],
            [
                'kode_kab'=>'7315',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Pinrang'
            ],
            [
                'kode_kab'=>'7316',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Enrekang'
            ],
            [
                'kode_kab'=>'7317',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Luwu'
            ],
            [
                'kode_kab'=>'7318',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Tana Toraja'
            ],
            [
                'kode_kab'=>'7322',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Luwu Utara'
            ],
            [
                'kode_kab'=>'7325',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Luwu Timur'
            ],
            [
                'kode_kab'=>'7326',
                'kode_prov'=>'73',
                'nama_kab'=>'Kabupaten Toraja Utara'
            ],
            [
                'kode_kab'=>'7371',
                'kode_prov'=>'73',
                'nama_kab'=>'Kota Makassar'
            ],
            [
                'kode_kab'=>'7372',
                'kode_prov'=>'73',
                'nama_kab'=>'Kota Parepare'
            ],
            [
                'kode_kab'=>'7373',
                'kode_prov'=>'73',
                'nama_kab'=>'Kota Palopo'
            ],
            [
                'kode_kab'=>'7401',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Buton'
            ],
            [
                'kode_kab'=>'7402',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Muna'
            ],
            [
                'kode_kab'=>'7403',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Konawe'
            ],
            [
                'kode_kab'=>'7404',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Kolaka'
            ],
            [
                'kode_kab'=>'7405',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Konawe Selatan'
            ],
            [
                'kode_kab'=>'7406',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Bombana'
            ],
            [
                'kode_kab'=>'7407',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Wakatobi'
            ],
            [
                'kode_kab'=>'7408',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Kolaka Utara'
            ],
            [
                'kode_kab'=>'7409',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Buton Utara'
            ],
            [
                'kode_kab'=>'7410',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Konawe Utara'
            ],
            [
                'kode_kab'=>'7411',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Kolaka Timur'
            ],
            [
                'kode_kab'=>'7412',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Konawe Kepulauan'
            ],
            [
                'kode_kab'=>'7413',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Muna Barat'
            ],
            [
                'kode_kab'=>'7414',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Buton Tengah'
            ],
            [
                'kode_kab'=>'7415',
                'kode_prov'=>'74',
                'nama_kab'=>'Kabupaten Buton Selatan'
            ],
            [
                'kode_kab'=>'7471',
                'kode_prov'=>'74',
                'nama_kab'=>'Kota Kendari'
            ],
            [
                'kode_kab'=>'7472',
                'kode_prov'=>'74',
                'nama_kab'=>'Kota Baubau'
            ],
            [
                'kode_kab'=>'7501',
                'kode_prov'=>'75',
                'nama_kab'=>'Kabupaten Boalemo'
            ],
            [
                'kode_kab'=>'7502',
                'kode_prov'=>'75',
                'nama_kab'=>'Kabupaten Gorontalo'
            ],
            [
                'kode_kab'=>'7503',
                'kode_prov'=>'75',
                'nama_kab'=>'Kabupaten Pohuwato'
            ],
            [
                'kode_kab'=>'7504',
                'kode_prov'=>'75',
                'nama_kab'=>'Kabupaten Bone Bolango'
            ],
            [
                'kode_kab'=>'7505',
                'kode_prov'=>'75',
                'nama_kab'=>'Kabupaten Gorontalo Utara'
            ],
            [
                'kode_kab'=>'7571',
                'kode_prov'=>'75',
                'nama_kab'=>'Kota Gorontalo'
            ],
            [
                'kode_kab'=>'7601',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Majene'
            ],
            [
                'kode_kab'=>'7602',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Polewali Mandar'
            ],
            [
                'kode_kab'=>'7603',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Mamasa'
            ],
            [
                'kode_kab'=>'7604',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Mamuju'
            ],
            [
                'kode_kab'=>'7605',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Mamuju Utara'
            ],
            [
                'kode_kab'=>'7606',
                'kode_prov'=>'76',
                'nama_kab'=>'Kabupaten Mamuju Tengah'
            ],
            [
                'kode_kab'=>'8101',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Maluku Tenggara Barat'
            ],
            [
                'kode_kab'=>'8102',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Maluku Tenggara'
            ],
            [
                'kode_kab'=>'8103',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Maluku Tengah'
            ],
            [
                'kode_kab'=>'8104',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Buru'
            ],
            [
                'kode_kab'=>'8105',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Kepulauan Aru'
            ],
            [
                'kode_kab'=>'8106',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Seram Bagian Barat'
            ],
            [
                'kode_kab'=>'8107',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Seram Bagian Timur'
            ],
            [
                'kode_kab'=>'8108',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Maluku Barat Daya'
            ],
            [
                'kode_kab'=>'8109',
                'kode_prov'=>'81',
                'nama_kab'=>'Kabupaten Buru Selatan'
            ],
            [
                'kode_kab'=>'8171',
                'kode_prov'=>'81',
                'nama_kab'=>'Kota Ambon'
            ],
            [
                'kode_kab'=>'8172',
                'kode_prov'=>'81',
                'nama_kab'=>'Kota Tual'
            ],
            [
                'kode_kab'=>'8201',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Halmahera Barat'
            ],
            [
                'kode_kab'=>'8202',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Halmahera Tengah'
            ],
            [
                'kode_kab'=>'8203',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Kepulauan Sula'
            ],
            [
                'kode_kab'=>'8204',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Halmahera Selatan'
            ],
            [
                'kode_kab'=>'8205',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Halmahera Utara'
            ],
            [
                'kode_kab'=>'8206',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Halmahera Timur'
            ],
            [
                'kode_kab'=>'8207',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Pulau Morotai'
            ],
            [
                'kode_kab'=>'8208',
                'kode_prov'=>'82',
                'nama_kab'=>'Kabupaten Pulau Taliabu'
            ],
            [
                'kode_kab'=>'8271',
                'kode_prov'=>'82',
                'nama_kab'=>'Kota Ternate'
            ],
            [
                'kode_kab'=>'8272',
                'kode_prov'=>'82',
                'nama_kab'=>'Kota Tidore Kepulauan'
            ],
            [
                'kode_kab'=>'9101',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Fakfak'
            ],
            [
                'kode_kab'=>'9102',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Kaimana'
            ],
            [
                'kode_kab'=>'9103',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Teluk Wondama'
            ],
            [
                'kode_kab'=>'9104',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Teluk Bintuni'
            ],
            [
                'kode_kab'=>'9105',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Manokwari'
            ],
            [
                'kode_kab'=>'9106',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Sorong Selatan'
            ],
            [
                'kode_kab'=>'9107',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Sorong'
            ],
            [
                'kode_kab'=>'9108',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Raja Ampat'
            ],
            [
                'kode_kab'=>'9109',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Tambrauw'
            ],
            [
                'kode_kab'=>'9110',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Maybrat'
            ],
            [
                'kode_kab'=>'9111',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Manokwari Selatan'
            ],
            [
                'kode_kab'=>'9112',
                'kode_prov'=>'91',
                'nama_kab'=>'Kabupaten Pegunungan Arfak'
            ],
            [
                'kode_kab'=>'9171',
                'kode_prov'=>'91',
                'nama_kab'=>'Kota Sorong'
            ],
            [
                'kode_kab'=>'9401',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Merauke'
            ],
            [
                'kode_kab'=>'9402',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Jayawijaya'
            ],
            [
                'kode_kab'=>'9403',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Jayapura'
            ],
            [
                'kode_kab'=>'9404',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Nabire'
            ],
            [
                'kode_kab'=>'9408',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Kepulauan Yapen'
            ],
            [
                'kode_kab'=>'9409',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Biak Numfor'
            ],
            [
                'kode_kab'=>'9410',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Paniai'
            ],
            [
                'kode_kab'=>'9411',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Puncak Jaya'
            ],
            [
                'kode_kab'=>'9412',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Mimika'
            ],
            [
                'kode_kab'=>'9413',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Boven Digoel'
            ],
            [
                'kode_kab'=>'9414',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Mappi'
            ],
            [
                'kode_kab'=>'9415',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Asmat'
            ],
            [
                'kode_kab'=>'9416',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Yahukimo'
            ],
            [
                'kode_kab'=>'9417',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Pegunungan Bintang'
            ],
            [
                'kode_kab'=>'9418',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Tolikara'
            ],
            [
                'kode_kab'=>'9419',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Sarmi'
            ],
            [
                'kode_kab'=>'9420',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Keerom'
            ],
            [
                'kode_kab'=>'9426',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Waropen'
            ],
            [
                'kode_kab'=>'9427',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Supiori'
            ],
            [
                'kode_kab'=>'9428',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Mamberamo Raya'
            ],
            [
                'kode_kab'=>'9429',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Nduga'
            ],
            [
                'kode_kab'=>'9430',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Lanny Jaya'
            ],
            [
                'kode_kab'=>'9431',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Mamberamo Tengah'
            ],
            [
                'kode_kab'=>'9432',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Yalimo'
            ],
            [
                'kode_kab'=>'9433',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Puncak'
            ],
            [
                'kode_kab'=>'9434',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Dogiyai'
            ],
            [
                'kode_kab'=>'9435',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Intan Jaya'
            ],
            [
                'kode_kab'=>'9436',
                'kode_prov'=>'94',
                'nama_kab'=>'Kabupaten Deiyai'
            ],
            [
                'kode_kab'=>'9471',
                'kode_prov'=>'94',
                'nama_kab'=>'Kota Jayapura'
            ]
        ];

        foreach ($roles as $item) {
            Role::insert([
                'name' => $item['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach ($jalurmasuk as $item) {
            JalurMasuk::insert([
                'name' => $item['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach ($statusmhs as $item) {
            StatusMahasiswa::insert([
                'name' => $item['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach ($provinsi as $item) {
            Provinsi::insert([
                'kode_prov' => $item['kode_prov'],
                'nama_prov' => $item['nama_prov'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach ($kabupaten_kota as $item) {
            KabupatenKota::insert([
                'kode_kab' => $item['kode_kab'],
                'kode_prov' => $item['kode_prov'],
                'nama_kab' => $item['nama_kab'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        # MEMBUAT AKUN DUMMY

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('users')->truncate();
        DB::table('operator')->truncate();
        DB::table('dosen')->truncate();

        DB::table('users')->insert(
            [
            'email' => 'atmin@academic.pro',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ]
        );

        DB::table('users')->insert(
            [
            'email' => 'dosen@academic.pro',
            'password' => Hash::make('password'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        );

        DB::table('operator')->insert([
            'id' => User::where('email', 'atmin@academic.pro')->value('id'),
            'nip' => '696969696969696969',
            'nama' => 'Atmin bin Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dosen')->insert([
            'id' => User::where('email', 'dosen@academic.pro')->value('id'),
            'nip' => '969696969696969696',
            'nama' => 'Dr. Dosen bin Dosen, S.T., M.Cs.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
