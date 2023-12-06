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

        <table class="content">
                <tr>
                    <td rowspan="2" class="border border-slate-600 ">Status</td>
                    <td colspan="8" class="border border-slate-600 ">Angkatan</td>
                 
                </tr>
                <tr>
                    <td class="border border-slate-600 text-center ">2016</td>
                    <td class="border border-slate-600 text-center ">2017</td>
                    <td class="border border-slate-600 text-center ">2018</td>
                    <td class="border border-slate-600 text-center ">2019</td>
                    <td class="border border-slate-600 text-center ">2020</td>
                    <td class="border border-slate-600 text-center ">2021</td>
                    <td class="border border-slate-600 text-center ">2022</td>
                    <td class="border border-slate-600  text-center ">2023</td>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Aktif</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 1)->count() }}</span>
                        </div>
                    </td>
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Cuti</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 2)->count() }}</span>
                        </div>
                    </td>
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Mangkir</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 3)->count() }}</span>
                        </div>
                    </td>
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>DO</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 4)->count() }}</span>
                        </div>
                    </td>

                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 4)->count() }}</span>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Undur Diri</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 5)->count() }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Lulus</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td >
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 6)->count() }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="flex items-center justify-center">
                            <span>Meninggal Dunia</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 67)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center justify-center">
                                <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 7)->count() }}</span>
                        </div>
                    </td>
                </tr>
                
        </table>

        <p style="margin-top: 15px">Dicetak pada {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>