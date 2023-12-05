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

        <h1><center>Rekap Skripsi Mahasiswa Informatika</center></h1>
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
                <th align="center" colspan="16">Angkatan</th>
            </tr>

            <tr>
                <th align="center" colspan="2">2016</th>
                <th align="center" colspan="2">2017</th>
                <th align="center" colspan="2">2018</th>
                <th align="center" colspan="2">2019</th>
                <th align="center" colspan="2">2020</th>
                <th align="center" colspan="2">2021</th>
                <th align="center" colspan="2">2022</th>
                <th align="center" colspan="2">2023</th>
            </tr>

            <tr>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
                <th>Sudah</th>
                <th>Belum</th>
            </tr>

            <tr>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->whereNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->whereNotNull('lulus_skripsi')->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->whereNull('lulus_skripsi')->count() }}</td>
            </tr>
        </table>

        <p style="margin-top: 15px">Dicetak pada {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>