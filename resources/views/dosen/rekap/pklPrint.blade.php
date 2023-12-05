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

        <h1><center>Rekap PKL Mahasiswa Informatika</center></h1>
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

            <tr>
                <td class="identitas" width="100px">Angkatan</td>
                <td class="identitas" width="10px">:</td>
                <td class="identitas" >{{ $angkatanSelected }}</td>
            </tr>

            <tr>
                <td class="identitas" width="100px">Status PKL</td>
                <td class="identitas" width="10px">:</td>
                <td class="identitas" >{{ ucfirst($statusPKL) }}</td>
            </tr>
        </table>

        <table class="content">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Nilai</th>
            </tr>

            @if ($mahasiswaListAngkatan->count() > 0)
                @if ($statusPKL == 'sudah')
                    @foreach ($mahasiswaListAngkatan as $mahasiswa)
                        @foreach ($pklList->where('mahasiswa_id', $mahasiswa->id) as $pkl)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td style="text-align: left;">{{ $mahasiswa->nim }}</td>  
                            <td style="text-align: left;">{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->angkatan }}</td>
                            <td>{{ $pkl->nilai }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                @elseif ($statusPKL == 'belum')
                    @foreach ($mahasiswaListAngkatan as $mahasiswa)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td style="text-align: left;">{{ $mahasiswa->nim }}</td>  
                        <td style="text-align: left;">{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->angkatan }}</td>
                        <td>-</td>
                    </tr>
                    @endforeach
                @endif
            @elseif ($mahasiswaListAngkatan->count() == 0)
            <tr>
                <td align="center" colspan="5">Tidak ada data</td>
            </tr>
            @endif
        </table>

        <p style="margin-top: 15px">Dicetak pada {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>