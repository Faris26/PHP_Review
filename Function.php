<?php 
//Date
    // echo date("l, d-M-Y");
//Time
//UNIX TIME STAMP
// echo time();
// echo date("d M Y", time()+60*60*24*80);
// Tanggal Lahir (mktimer)
// (Jam, Menit, Detik, Bulan, Tangg al, Tahun)
// echo date("l", mktime(0,0,0,26,12,2000));
// strtotime
echo date("l", strtotime("26 des 2000"));

//strlen(); untuk panjang String
//strcmp membandingkan 2 buah string
//explode memecah string menjadi array
//htmlspecialchars char khusus agar tidak ada hacker

//var_dump fungsi untuk mencetak variabel
//isset cek variabel apakah pernah dipakai
//empty cek variabel yang ada apakah ada isinya
//die untuk memberhentikan progam kita
//sleep untuk memberhentikan sementara