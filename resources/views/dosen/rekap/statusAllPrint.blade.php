<head>
    <style>
        h1 {
            font-family: arial, sans-serif;
            font-size: 20px;
            line-height: 50%
        }
        p {
            font-family: arial, sans-serif;
            font-size: 12px;
            line-height: 50%
        }
        table {
            font-family: arial, sans-serif;
            font-size: 12px;
            border-collapse: collapse;
            width: 100%;
            margin-top: 5px;
        }
        table.identitas {
            font-family: arial, sans-serif;
            font-size: 12px;
            text-align: left;
            border: none;
            margin-top: 25px;
        }
        td, th {
            border: 1px solid #000000;
            text-align: center;
            padding: 8px;
        }
        td.identitas {
            font-family: arial, sans-serif;
            font-size: 12px;
            text-align: left;
            line-height: 15px;
            border: none;
            padding: 0px;
        }
    </style>
</head>

<body onload="window.print()">
    
    <div style="border: 1px solid #000000;min-height: 97%;padding: 10px">

        <h1><center>Rekap Status Mahasiswa Informatika</center></h1>
        <h1><center>Fakultas Sains dan Matematika</center></h1>
        <h1><center>Universitas Diponegoro</center></h1>

        <table class="identitas">
            <tr>
                <td class="identitas" width="100px">NIP Dosen Wali</td>
                <td class="identitas" width="10px">:</td>
                <td class="identitas" >{{ $dosen->value('nip') }}</td>
            </tr>

            <tr>
                <td class="identitas" width="100px">Nama Dosen Wali</td>
                <td class="identitas" width="10px">:</td>
                <td class="identitas" >{{ $dosen->value('nama') }}</td>
            </tr>
        </table>

        <table class="content">
            <tr>
                <th rowspan="2">Status</th>
                <th colspan="8">Angkatan</th>
            </tr>
            <tr>
                <th>2016</th>
                <th>2017</th>
                <th>2018</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
            </tr>
            <tr>
                <td>Aktif</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 1)->count() }}</td>
            </tr>
            <tr>
                <td>Cuti</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 2)->count() }}</td>
            </tr>
            <tr>
                <td>Mangkir</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 3)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 3)->count() }}</td>
            </tr>
            <tr>
                <td>DO</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 4)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 4)->count() }}</td>
            </tr>
            <tr>
                <td>Undur Diri</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 5)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 5)->count() }}</td>
            </tr>
            <tr>
                <td>Lulus</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 6)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 6)->count() }}</td>
            </tr>
            <tr>
                <td>Meninggal Dunia</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 7)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 7)->count() }}</td>
            </tr>
        </table>

        <p style="margin-top: 15px">Dicetak pada {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>