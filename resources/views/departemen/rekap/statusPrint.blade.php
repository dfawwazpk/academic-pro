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
            margin-top: 25px;
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

        <table class="content">
            <tr>
                <th>Angkatan</th>
                <th>Aktif</th>
                <th>Nonaktif</th>
                <th>Cuti</th>
            </tr>

            <tr>
                <td>2016</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2017</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2018</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2019</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2020</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2021</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 3)->count() }}</td>
            </tr>
            
            <tr>
                <td>2022</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 3)->count() }}</td>
            </tr>

            <tr>
                <td>2023</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 1)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 2)->count() }}</td>
                <td>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 3)->count() }}</td>
            </tr>
        </table>

        <p style="margin-top: 15px">Dicetak pada {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>