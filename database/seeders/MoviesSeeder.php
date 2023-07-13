<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create([
            'title' => 'All Of Us Are Dead',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/all%20of%20us%20are%20dead.jpg',
            'genres_id' => 1,
            'synopsis' => 'Sebuah SMA menjadi titik nol merebaknya wabah virus zombi. Para murid yang terperangkap pun harus berjuang untuk kabur jika tak mau terinfeksi dan berubah menjadi buas.',
            'release_date' => '2022-01-28',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Big Mounth',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/big%20mounth.jpg',
            'genres_id' => 2,
            'release_date' => '2022-07-29',
            'synopsis' => 'Park Chang Ho (Lee Jong-suk) merupakan seorang pengacara yang memiliki tingkat kemenangan sangat kecil. Yakni hanya 10 persen dalam persidangan yang sudah ia lewati. Karena sifatnya yang terkenal banyak bicara, ia mendapat julukan “Big Mouth” alias bermulut besar.
            
Suatu ketika, Ia tidak sengaja terlibat dalam kasus pembunuhan yang mengancam nyawanya. Momen ini terjadi saat ia mendapat tugas menangani kasus elit yang pada akhirnya membuatnya terpaksa mendekam di penjara dengan para pembunuh yang sedang ia selidiki.
            
Sebab, para penyelidik menemukan sejumlah obat terlarang, uang tunai, senjata dan barang bukti lainnya di kantor Chang Ho. Karena penemuan ini, ia pun dituduh sebagai penipu genius bernama Big Mouse.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'City Hunter',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/city%20hunter.jpg',
            'genres_id' => 1,
            'release_date' => '2011-05-25',
            'synopsis' => 'Berkisah seorang anak yang balas dendam ke politisi yang membunuh ayahnya.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Flower Of Evil',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/flower%20of%20evil.jpg',
            'genres_id' => 1,
            'release_date' => '2020-07-29',
            'synopsis' => 'Drama Flower of Evil menceritakan tentang Cha Ji Won yang diperankan Moon Chae Won, ia adalah seorang detektif profesional yang menikah dengan Baek Hee-sung yang diperankan Lee Joon Gi. Baek Hee Sung adalah seorang pengrajin logam yang berasal dari keluarga kaya. Ayahnya, seorang direktur rumah sakit ternama, sementara ibunya mengelola sebuah toko obat. Suatu hari ia bertemu dengan seorang gadis cantik yang sedang berjuang untuk menjadi detektif, Cha Ji Won. Hee Sung dan Ji Won saling jatuh cinta dan akhirnya memutuskan untuk menikah.
            
Tidak ada yang aneh dari pernikahan keduanya. Keduanya hidup harmonis dan penuh cinta.
            
Pernikahan keduanya bertambah bahagia setelah putri pertama mereka lahir. Sosok Baek Hee-sung di mata istri dan anaknya adalah suami dan ayah yang baik dan penyayang. Namun, di balik penampilannya sebagai suami dan ayah yang sempurna, Baek Hee sung memiliki kisah masa lalu yang kelam. Bahkan ia menyembunyikan identitas aslinya dan menggunakan identitas palsu.
            
',
            'countries_id' => 1,
            'rating' => 5,
        ]);
        Movies::create([
            'title' => 'My Name',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/my%20name.jpg',
            'genres_id' => 1,
            'release_date' => '2021-10-15',
            'synopsis' => 'Sinopsis My Name mengikuti kisah Yoon Ji Woo (pemain Han So Hee) yang bergabung dengan sindikat narkoba dan menyusup ke polisi untuk mengungkap kebenaran di balik kematian ayahnya. Ia menyaksikan kematian ayahnya tepat di hari ulang tahunnya ke-17.
            
Yoon Ji Woo kemudian mencari teman lama ayahnya, bos sindikat narkoba Dongcheon, Moo Jin (pemain Park Hee Soon). Ji Woo bergabung dengan kelompok itu untuk mengasah keterampilan seni bela dirinya.
            
Mengikuti saran Moo Jin, Yoon Ji Woo mengganti namanya menjadi Oh Hye Jin sebelum menyusup sebagai agen polisi. Ia dipasangkan dengan Jeon Pil Do (pemain Ahn Bo Hyun), detektif unit investigasi narkoba yang merasa terganggu dengannya.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Patner For Justice',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/partner%20for%20justice.jpg',
            'genres_id' => 1,
            'release_date' => '2018-05-14',
            'synopsis' => 'Cerita dalam drama Partners for Justice berpusat pada kisah kerjasama seorang dokter forensik dan jaksa dalam menangani berbagai kasus. Khususnya kasus yang berkaitan dengan kekerasan dan pembunuhan. Baek Beom (Jung Jae Young) adalah dokter bedah toraks yang terampil namun harus berpindah tugas menjadi dokter forensik akibat tuduhan malpraktik.
            
Bertugas sebagai dokter forensik yang terbiasa menangani berbagai macam bentuk mayat membuat sifat Baek Boem berubah menjadi dingin. Sementara Eun Sol (Jung Yu Mi), adalah putri seorang pengacara terkenal namun kerap dianggap sebelah mata bahkan oleh ayahnya sendiri. Ia kemudian berusaha membuktikan diri dengan menjadi jaksa dibanding mengikuti jejak ayahnya sebagai pengacara.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Sweet Home',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/sweet%20home.jpg',
            'genres_id' => 1,
            'release_date' => '2020-12-18',
            'synopsis' => 'Sweet Home yang mengusung genre horor, misteri, dan thriller. Mengisahkan seorang anak SMA yang bernama Cha Hyun Soo (Song Kang) yang mengalami kejadian tak terduga dalam hidupnya. Ia mengalami kehilangan keluarganya dan harus menghadapi dunia yang berubah menjadi tempat dihuni oleh makhluk berbahaya dan mengerikan.
            
Hyun Soo berusaha bertahan hidup di dalam kompleks apartemen yang dipenuhi oleh monster dan harus menemukan cara untuk keluar. Selama perjuangannya, ia bertemu dengan beberapa tetangga yang juga berjuang melawan makhluk-makhluk tersebut dan mencari harapan di tengah keputusasaan.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Taxi Driver',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/taxi%20driver.jpg',
            'genres_id' => 2,
            'release_date' => '2001-04-09',
            'synopsis' => 'Drama Korea Taxi Driver mengisahkan kehidupan Kim Do Gi (pemain Lee Je Hoon), seorang lulusan Akademi Angkatan Laut dan eks pejabat Underwater Demolition Team. Saat kecil, ibunya dibunuh oleh seorang pembunuh berantai.
            
Kim Do Gi kini menjadi supir taksi mewah di Rainbow Taxi Company. Bukan taksi biasa, perusahaannya menawarkan jasa \'panggilan balas dendam\' untuk para korban yang tidak mendapatkan keadilan melalui hukum.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'The Glory',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/the%20glory.jpg',
            'genres_id' => 1,
            'release_date' => '2022-12-30',
            'synopsis' => 'The Glory menceritakan tentang seorang siswi SMA bernama Moon Dong Eun. Moon Dong Eun bercita-cita menjadi seorang arsitek, tetapi kenyataan membuatnya harus putus sekolah. Moon Dong Eun mengalami perundungan yang parah dari teman-temannya di sekolah.
            
Bertahun-tahun kemudian, si pelaku perundungan menikah dan telah memiliki seorang anak. Anak tersebut bersekolah di sebuah sekolah dasar yang ternyata tempat Moon Dong Eun bekerja sebagai guru. Moon Dong Eun secara kebetulan menjadi guru wali kelas dari anak si pelaku yang kejam itu. Misi balas dendam Moon Dong Eun pun dimulai terhadap para pelaku perundungan saat dia SMA dulu.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Vagabond',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/the%20k2.jpg',
            'genres_id' => 1,
            'release_date' => '2019-09-20',
            'synopsis' => 'Cha Dal Geun (Lee Seung Gi) adalah seorang stuntman. Ia berkerja keras untuk menafkahi keponakan satu-satunya. Ia juga berkeinginan untuk menjadi aktor laga terkenal.
            
Mengetahui hal itu, Dal Geun mencoba untuk menguak dalang di balik kecelakaan itu dan membalas dendam. Dalam perjalanannya mencari kebenaran, ia bertemu dengan Go Hae Ri, (Suzy) seorang agen rahasia NIS.
            
Hae Ri adalah putri marinir yang tewas setelah menolong anak buahnya. Kenyataan itu, membuat Hae Ri bertekad untuk menjadi agen rahasia yang mumpuni. Pertemuan Dal Geun dan Hae Ri berlokasi di Maroko. Maroko menjadi tempat tugas Hae Ri sekaligus lokasi tujuan pesawat yang mengalami kecelakaan. Kedatangan keluarga korban ke Maroko membuat, Hae Ri sedikit kehilangan fokus atas tugas awalnya di Maroko. Dan di sinilah ia bertemu dengan Dal Geun.
            
Keduanya kemudian menjadi akrab dan memutuskan bekerja sama saat mengetahui bahwa ada begitu banyak kepentingan yang melatarbelakangi kecelakaan pesawat tersebut. Salah satunya adalah korupsi yang turut dilakukan oleh sang Presiden.
            
Perjuangan keduanya penuh liku dan bahaya. Mereka harus melawan penjahat kelas internasional sekaligus negaranya sendiri.
            
',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'The K2',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/vagabond.jpg',
            'genres_id' => 2,
            'release_date' => '2016-09-23',
            'synopsis' => 'Cerita dalam drama ini diawali dengan diburunya Kim Je Ha (Ji Chang Wook) oleh orang suruhan Choi Yoo Jin (Song Yoon Ah). Kim Je Ha diburu karena sempat tidak sengaja melihat adegan perselingkuhan yang dilakukan politisi sekaligus calon presiden bernama Jang Se Joon (Jo Sung Ha). Choi Yoo Jin yang sangat ingin suaminya menjadi presiden mengetahui hal ini, maka ia memerintahkan orang untuk memburu Kim Je Ha agar tidak jadi masalah di kemudian hari. Kim Je Ha berhasil lolos dari pembunuhan itu, dan dengan beraninya malah mendatangi rumah Choi Yoo Jin yang penuh dengan pengawal. Berkat keahliannya dalam bertarung, Kim Je Ha bahkan bisa melumpuhkan semua pengawal dan menjadikan Choi Yoo Jin sebagai tawanan. Saat sedang berada di rumah Choi Yoo Jin, secara tidak sengaja Kim Je Ha melihat seorang perempuan berbaju putih yang terlihat depresi. Dia berusaha mengingat wajah perempuan tersebut karena dulu seperti pernah bertemu dengannya saat sedang di Spanyol.',
            'countries_id' => 1,
            'rating' => 4,
        ]);

        Movies::create([
            'title' => 'Vincenzo',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/vicenzo.jpg',
            'genres_id' => 2,
            'release_date' => '2021-02-20',
            'synopsis' => 'Pada usia delapan tahun, Park Joo-hyung (Song Joong-ki) pergi ke Italia setelah diadopsi oleh Don Fabio, kepala keluarga mafia Cassano. Berganti nama menjadi Vincenzo Cassano, dia menjadi pengacara Italia, seorang consigliere untuk mafia, dan salah satu orang terbaik Fabio sampai kematiannya. Setelah Fabio meninggal, Paolo (putra kandung dan pemimpin baru Fabio) mencoba membunuhnya; dia melarikan diri ke Seoul untuk mendapatkan emas tersembunyi di dalam Kompleks Apartemen Geumga-dong. Vincenzo membantu seorang hartawan asal Tiongkok menyembunyikan emasnya di lemari besi yang diamankan mafia di dalam kompleks tersebut, tetapi orang tersebut meninggal. Tanpa ada yang tahu tentang lemari besi itu, dia berencana untuk mengambil emas itu dan menggunakannya sebagai dana pensiunnya setelah meninggalkan Italia dan mafia. Namun, sebuah perusahaan real estate di bawah Babel Group telah secara ilegal mengambil alih kepemilikan gedung tersebut dan Vincenzo harus menggunakan keahliannya untuk merebut kembali gedung tersebut dan memulihkan kekayaannya. Vincenzo terlibat dengan pengacara Hong Cha-young (Jeon Yeo-been), tipe pengacara yang akan melakukan apa saja untuk memenangkan kasus. Vincenzo Cassano jatuh cinta padanya. Dia juga mencapai keadilan sosial dengan caranya sendiri.',
            'countries_id' => 1,
            'rating' => 4,
        ]);

        Movies::create([
            'title' => 'Voice',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/voice.jpg',
            'genres_id' => 1,
            'release_date' => '2017-01-14',
            'synopsis' => 'Moo Jin-hyuk (Jang Hyuk) adalah seorang detektif populer yang memecahkan kasus-kasus besar, tetapi setelah istrinya dibunuh oleh seorang pembunuh berantai, hidupnya berputar ke bawah. Dia diliputi rasa bersalah karena tidak bisa melindungi istrinya dan diam-diam mencari pembunuhnya.

Sementara itu, Kang Kwon-joo (Lee Ha-na) lulus dari akademi kepolisian dengan nilai tertinggi. Dia mulai bekerja di pusat panggilan darurat 112. Saat bekerja di sana, kasus pembunuhan brutal terjadi dan ayahnya yang merupakan sersan polisi menuju ke TKP. Ayahnya terbunuh di sana dan Kwon-joo mendengar apa yang terjadi melalui telepon. Setelah itu, dia pergi ke AS untuk belajar dan kembali ke Korea sebagai profiler suara profesional.

Detektif Jin-hyuk dan Kang Kwon-joo menyelesaikan kasus bersama untuk mengejar pembunuh berantai yang bertanggung jawab atas kematian anggota keluarga mereka.',
            'countries_id' => 1,
            'rating' => 4,
        ]);

        Movies::create([
            'title' => 'Gaus Electro Nics',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/Crazy%20Love.jpg',
            'genres_id' => 3,
            'release_date' => '2022-09-30',
            'synopsis' => 'Mengisahkan tentang kehidupan karir dan cinta dari empat karyawan muda di Divisi Pemasaran 3, Gaus Electronics.

Lee Sang Shik adalah karyawan yang dikenal sebagai sosok yang ceria. Namun ia kurang peka terhadap masalah dari orang lain.

Kemudian ada Cha Na Rae yang tidak terlalu akur dengan Sang Shik. Na Rae sendiri adalah asisten manajer dengan temperamen yang tinggi.

Keduanya bekerja dengan Baek Ma Tan dan Gun Gang Mi sebagai karyawan. Baek Ma Tan terlihat simpel, namun berasal dari keluarga kaya raya.

Sementara Gun Gang Mi hidup dalam dua identitas. Ia dikenal sebagai orang paling cantik yang bekerja di sana.',
            'countries_id' => 1,
            'rating' => 4,
        ]);

        Movies::create([
            'title' => 'Love In Contract',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/gaus%20electronics.jpg',
            'genres_id' => 3,
            'release_date' => '2022-09-21',
            'synopsis' => 'Choi Sang Eun adalah seorang perempuan yang membantu kehidupan para laki-laki lajang dengan pengalaman karier 13 tahun. Para kliennya adalah mereka yang hanya membutuhkan “kondisi pernikahan sementara” untuk berbagai alasan.

Nantinya, ia pun akan terlibat dengan dua karakter laki-laki lainnya, yakni Jung Ji Ho dan Kang Hye Jin. Ia pun akan menjadi istri pura-pura kedua laki-laki tersebut di hari-hari yang telah ditentukan.',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Mr Queen',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/kkondae%20Intern.jpg',
            'genres_id' => 3,
            'synopsis' => 'Pada era modern, Jang Bong-hwan bekerja sebagai koki di Rumah Biru Presiden. Dia memiliki jiwa yang bebas, tetapi entah bagaimana jiwanya menemukan jalan ke dalam tubuh Ratu Cheorin (Shin Hye-sun) pada periode Joseon. Raja Cheoljong (Kim Jung-hyun) adalah orang yang lembut dan santai secara lahiriah tetapi memiliki sisi yang berbeda juga. Ratu Sunwon (Bae Jong-ok) adalah istri almarhum Raja Sunjo yang memegang kekuasaan sejati di negara itu dan menjadikan Raja Cheoljong sebagai raja boneka. Kim Jwa-geun (Kim Tae-woo) adalah adik yang ambisius dari Ratu Sunwon. Kim Byeong-in (Na In-woo) adalah sepupu Ratu yang diam-diam jatuh cinta kepadanya dan akan melakukan apapun untuk mendapatkannya.',
            'release_date' => '2020-12-12',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Kokdu: Season of Deity',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/love%20in%20contract.jpg',
            'genres_id' => 3,
            'synopsis' => 'Kokdu: Season of Deity adalah drama Korea dengan tema romansa fantasi yang membawakan kisah cinta dua insan yang berbeda. Ialah malaikat maut bernama Kokdu (Kim Jung Hyun) yang datang ke dunia untuk menghukum manusia setiap 99 tahun sekali dan Han Gye Jeol (Im Soo Hyang), seorang dokter pemula dengan kemampuan misterius. Dalam perjalanan cintanya, Kokdu dan Han Gye Jeol menemui banyak rintangan termasuk status Kokdu sebagai malaikat maut yang menyamar menjadi dokter di rumah sakit tempat Han Gye Jeol bekerja.',
            'release_date' => '2023-01-27',
            'countries_id' => 1,
            'rating' => 4,
        ]);

        Movies::create([
            'title' => 'The Law Café',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/mr%20queen.jpg',
            'genres_id' => 3,
            'synopsis' => 'Drama The Law Cafe mengisahkan Kim Jung-Ho (diperankan oleh Lee Seung-Gi) adalah pria yang sangat pintar. Dia dulu bekerja sebagai jaksa, tetapi, karena skandal korupsi ayahnya, dia berhenti dari pekerjaannya. Dia sudah menganggur sejak saat itu. Dia memiliki sebuah bangunan dan hidup dari uang sewa yang dikumpulkan, sementara juga tinggal di atap gedung. Kim Jung-Ho berteman baik dengan Kim Yoo-Ri (diperankan oleh Lee Se-Young). Mereka telah berteman sejak mereka masih siswa sekolah menengah sekitar 17 tahun yang lalu. Kim Jung-Ho telah lama naksir Kim Yoo-Ri. Sementara itu, Kim Yoo-Ri adalah wanita cantik dan cerdas. Dia juga didorong oleh keadilan. Karena pengalaman masa lalu dengan seorang pria, dia telah memutuskan untuk tetap melajang selama sisa hidupnya. Dia bekerja sebagai pengacara untuk sebuah firma hukum besar, tetapi, suatu hari, Kim Yoo-Ri berhenti dari pekerjaannya. Dia kemudian membuka “Law Cafe” di gedung yang dimiliki Kim Jung-Ho. Kafe menyajikan kopi dan nasihat hukum. Siapapun bisa mampir dan minum kopi atau mendapatkan konseling hukum.',
            'release_date' => '2022-08-29',
            'countries_id' => 1,
            'rating' => 4,
        ]);
        Movies::create([
            'title' => 'Welcome To Waikiki 1',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/season%20of%20deity..jpg',
            'genres_id' => 3,
            'synopsis' => 'Serial drama Korea bergenre komedi tersebut mengisahkan tentang tiga pria yang ingin membangun kembali wisma (tempat penginapan) mereka yang mulai bangkrut. Ketiga pria itu adalah Dong Gu (Kim Jung Hyun), Jun Ki (Lee Yi Kyung), dan Doo Shik (So Seung). Dong Gu sebenarnya memiliki cita-cita menjadi sutradara film. Akan tetapi sekarang ia justru membangun wisma (tempat penginapan). Sementara itu Jun Ki adalah seorang aktor eksentrik yang menjadikan priofesi tersebut menjadi satu-satunya penunjang nafkah. Tokoh terakhir adalah Son Seung, seorang penulis lepas pengangguran. Wisma mereka terancam bangkrut, sampai suatu saat mereka dikejutkan oleh kehadiran bayi misterius di salah satu kamar wisma yang terletak di Itaewon tersebut. Tidak hanya bayi, mereka pun juga dikejutkan dengan seorang ibu tunggal yang tiba-tiba datang. Apa yang sebenarnya sedang terjadi?',
            'release_date' => '2018-02-05',
            'countries_id' => 1,
            'rating' => 4,
        ]);

    }
}
