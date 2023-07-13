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
            'rating' => 10,
        ]);
        Movies::create([
            'title' => 'Big Mounth',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/big%20mounth.jpg',
            'genres_id' => 2,
            'release_date' => '2022-07-29',
            'synopsis' => 'Park Chang Ho (Lee Jong-suk) merupakan seorang pengacara yang memiliki tingkat kemenangan sangat kecil. Yakni hanya 10 persen dalam persidangan yang sudah ia lewati. Karena sifatnya yang terkenal banyak bicara, ia mendapat julukan “Big Mouth” alias bermulut besar.
            
            Suatu ketika, Ia tidak sengaja terlibat dalam kasus pembunuhan yang mengancam nyawanya. Momen ini terjadi saat ia mendapat tugas menangani kasus elit yang pada akhirnya membuatnya terpaksa mendekam di penjara dengan para pembunuh yang sedang ia selidiki.
                        
            Sebab, para penyelidik menemukan sejumlah obat terlarang, uang tunai, senjata dan barang bukti lainnya di kantor Chang Ho. Karena penemuan ini, ia pun dituduh sebagai penipu genius bernama Big Mouse.',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);
        Movies::create([
            'title' => 'City Hunter',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/city%20hunter.jpg',
            'genres_id' => 1,
            'release_date' => '2011-05-25',
            'synopsis' => 'Berkisah seorang anak yang balas dendam ke politisi yang membunuh ayahnya.',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Flower Of Evil',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/flower%20of%20evil.jpg',
            'genres_id' => 1,
            'release_date' => '2020-07-29',
            'synopsis' => 'Drama Flower of Evil menceritakan tentang Cha Ji Won yang diperankan Moon Chae Won, ia adalah seorang detektif profesional yang menikah dengan Baek Hee-sung yang diperankan Lee Joon Gi. Baek Hee Sung adalah seorang pengrajin logam yang berasal dari keluarga kaya. Ayahnya, seorang direktur rumah sakit ternama, sementara ibunya mengelola sebuah toko obat. Suatu hari ia bertemu dengan seorang gadis cantik yang sedang berjuang untuk menjadi detektif, Cha Ji Won. Hee Sung dan Ji Won saling jatuh cinta dan akhirnya memutuskan untuk menikah.
            
            Tidak ada yang aneh dari pernikahan keduanya. Keduanya hidup harmonis dan penuh cinta.
                        
            Pernikahan keduanya bertambah bahagia setelah putri pertama mereka lahir. Sosok Baek Hee-sung di mata istri dan anaknya adalah suami dan ayah yang baik dan penyayang. Namun, di balik penampilannya sebagai suami dan ayah yang sempurna, Baek Hee sung memiliki kisah masa lalu yang kelam. Bahkan ia menyembunyikan identitas aslinya dan menggunakan identitas palsu.',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);

        Movies::create([
            'title' => 'My Name',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/my%20name.jpg',
            'genres_id' => 1,
            'release_date' => '2021-10-15',
            'synopsis' => 'Sinopsis My Name mengikuti kisah Yoon Ji Woo (pemain Han So Hee) yang bergabung dengan sindikat narkoba dan menyusup ke polisi untuk mengungkap kebenaran di balik kematian ayahnya. Ia menyaksikan kematian ayahnya tepat di hari ulang tahunnya ke-17.
            
            Yoon Ji Woo kemudian mencari teman lama ayahnya, bos sindikat narkoba Dongcheon, Moo Jin (pemain Park Hee Soon). Ji Woo bergabung dengan kelompok itu untuk mengasah keterampilan seni bela dirinya.
                        
            Mengikuti saran Moo Jin, Yoon Ji Woo mengganti namanya menjadi Oh Hye Jin sebelum menyusup sebagai agen polisi. Ia dipasangkan dengan Jeon Pil Do (pemain Ahn Bo Hyun), detektif unit investigasi narkoba yang merasa terganggu dengannya.',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Patner For Justice',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/partner%20for%20justice.jpg',
            'genres_id' => 1,
            'release_date' => '2018-05-14',
            'synopsis' => 'Cerita dalam drama Partners for Justice berpusat pada kisah kerjasama seorang dokter forensik dan jaksa dalam menangani berbagai kasus. Khususnya kasus yang berkaitan dengan kekerasan dan pembunuhan. Baek Beom (Jung Jae Young) adalah dokter bedah toraks yang terampil namun harus berpindah tugas menjadi dokter forensik akibat tuduhan malpraktik.
            
            Bertugas sebagai dokter forensik yang terbiasa menangani berbagai macam bentuk mayat membuat sifat Baek Boem berubah menjadi dingin. Sementara Eun Sol (Jung Yu Mi), adalah putri seorang pengacara terkenal namun kerap dianggap sebelah mata bahkan oleh ayahnya sendiri. Ia kemudian berusaha membuktikan diri dengan menjadi jaksa dibanding mengikuti jejak ayahnya sebagai pengacara.',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'Sweet Home',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/sweet%20home.jpg',
            'genres_id' => 1,
            'release_date' => '2020-12-18',
            'synopsis' => 'Sweet Home yang mengusung genre horor, misteri, dan thriller. Mengisahkan seorang anak SMA yang bernama Cha Hyun Soo (Song Kang) yang mengalami kejadian tak terduga dalam hidupnya. Ia mengalami kehilangan keluarganya dan harus menghadapi dunia yang berubah menjadi tempat dihuni oleh makhluk berbahaya dan mengerikan.
            
            Hyun Soo berusaha bertahan hidup di dalam kompleks apartemen yang dipenuhi oleh monster dan harus menemukan cara untuk keluar. Selama perjuangannya, ia bertemu dengan beberapa tetangga yang juga berjuang melawan makhluk-makhluk tersebut dan mencari harapan di tengah keputusasaan.',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);

        Movies::create([
            'title' => 'Taxi Driver',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/taxi%20driver.jpg',
            'genres_id' => 2,
            'release_date' => '2001-04-09',
            'synopsis' => 'Drama Korea Taxi Driver mengisahkan kehidupan Kim Do Gi (pemain Lee Je Hoon), seorang lulusan Akademi Angkatan Laut dan eks pejabat Underwater Demolition Team. Saat kecil, ibunya dibunuh oleh seorang pembunuh berantai.
            
            Kim Do Gi kini menjadi supir taksi mewah di Rainbow Taxi Company. Bukan taksi biasa, perusahaannya menawarkan jasa \'panggilan balas dendam\' untuk para korban yang tidak mendapatkan keadilan melalui hukum.',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'The Glory',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/the%20glory.jpg',
            'genres_id' => 1,
            'release_date' => '2022-12-30',
            'synopsis' => 'The Glory menceritakan tentang seorang siswi SMA bernama Moon Dong Eun. Moon Dong Eun bercita-cita menjadi seorang arsitek, tetapi kenyataan membuatnya harus putus sekolah. Moon Dong Eun mengalami perundungan yang parah dari teman-temannya di sekolah.
            
            Bertahun-tahun kemudian, si pelaku perundungan menikah dan telah memiliki seorang anak. Anak tersebut bersekolah di sebuah sekolah dasar yang ternyata tempat Moon Dong Eun bekerja sebagai guru. Moon Dong Eun secara kebetulan menjadi guru wali kelas dari anak si pelaku yang kejam itu. Misi balas dendam Moon Dong Eun pun dimulai terhadap para pelaku perundungan saat dia SMA dulu.',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'Vagabond',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/vagabond.jpg',
            'genres_id' => 1,
            'release_date' => '2019-09-20',
            'synopsis' => 'Cha Dal Geun (Lee Seung Gi) adalah seorang stuntman. Ia berkerja keras untuk menafkahi keponakan satu-satunya. Ia juga berkeinginan untuk menjadi aktor laga terkenal.
            
            Mengetahui hal itu, Dal Geun mencoba untuk menguak dalang di balik kecelakaan itu dan membalas dendam. Dalam perjalanannya mencari kebenaran, ia bertemu dengan Go Hae Ri, (Suzy) seorang agen rahasia NIS.
                        
            Hae Ri adalah putri marinir yang tewas setelah menolong anak buahnya. Kenyataan itu, membuat Hae Ri bertekad untuk menjadi agen rahasia yang mumpuni. Pertemuan Dal Geun dan Hae Ri berlokasi di Maroko. Maroko menjadi tempat tugas Hae Ri sekaligus lokasi tujuan pesawat yang mengalami kecelakaan. Kedatangan keluarga korban ke Maroko membuat, Hae Ri sedikit kehilangan fokus atas tugas awalnya di Maroko. Dan di sinilah ia bertemu dengan Dal Geun.
                        
            Keduanya kemudian menjadi akrab dan memutuskan bekerja sama saat mengetahui bahwa ada begitu banyak kepentingan yang melatarbelakangi kecelakaan pesawat tersebut. Salah satunya adalah korupsi yang turut dilakukan oleh sang Presiden.
                        
            Perjuangan keduanya penuh liku dan bahaya. Mereka harus melawan penjahat kelas internasional sekaligus negaranya sendiri.',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'The K2',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/the%20k2.jpg',
            'genres_id' => 2,
            'release_date' => '2016-09-23',
            'synopsis' => 'Cerita dalam drama ini diawali dengan diburunya Kim Je Ha (Ji Chang Wook) oleh orang suruhan Choi Yoo Jin (Song Yoon Ah). Kim Je Ha diburu karena sempat tidak sengaja melihat adegan perselingkuhan yang dilakukan politisi sekaligus calon presiden bernama Jang Se Joon (Jo Sung Ha). Choi Yoo Jin yang sangat ingin suaminya menjadi presiden mengetahui hal ini, maka ia memerintahkan orang untuk memburu Kim Je Ha agar tidak jadi masalah di kemudian hari. Kim Je Ha berhasil lolos dari pembunuhan itu, dan dengan beraninya malah mendatangi rumah Choi Yoo Jin yang penuh dengan pengawal. Berkat keahliannya dalam bertarung, Kim Je Ha bahkan bisa melumpuhkan semua pengawal dan menjadikan Choi Yoo Jin sebagai tawanan. Saat sedang berada di rumah Choi Yoo Jin, secara tidak sengaja Kim Je Ha melihat seorang perempuan berbaju putih yang terlihat depresi. Dia berusaha mengingat wajah perempuan tersebut karena dulu seperti pernah bertemu dengannya saat sedang di Spanyol.',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Vincenzo',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/action,%20thriller/vicenzo.jpg',
            'genres_id' => 2,
            'release_date' => '2021-02-20',
            'synopsis' => 'Pada usia delapan tahun, Park Joo-hyung (Song Joong-ki) pergi ke Italia setelah diadopsi oleh Don Fabio, kepala keluarga mafia Cassano. Berganti nama menjadi Vincenzo Cassano, dia menjadi pengacara Italia, seorang consigliere untuk mafia, dan salah satu orang terbaik Fabio sampai kematiannya. Setelah Fabio meninggal, Paolo (putra kandung dan pemimpin baru Fabio) mencoba membunuhnya; dia melarikan diri ke Seoul untuk mendapatkan emas tersembunyi di dalam Kompleks Apartemen Geumga-dong. Vincenzo membantu seorang hartawan asal Tiongkok menyembunyikan emasnya di lemari besi yang diamankan mafia di dalam kompleks tersebut, tetapi orang tersebut meninggal. Tanpa ada yang tahu tentang lemari besi itu, dia berencana untuk mengambil emas itu dan menggunakannya sebagai dana pensiunnya setelah meninggalkan Italia dan mafia. Namun, sebuah perusahaan real estate di bawah Babel Group telah secara ilegal mengambil alih kepemilikan gedung tersebut dan Vincenzo harus menggunakan keahliannya untuk merebut kembali gedung tersebut dan memulihkan kekayaannya. Vincenzo terlibat dengan pengacara Hong Cha-young (Jeon Yeo-been), tipe pengacara yang akan melakukan apa saja untuk memenangkan kasus. Vincenzo Cassano jatuh cinta padanya. Dia juga mencapai keadilan sosial dengan caranya sendiri.',
            'countries_id' => 1,
            'rating' => 9.5,
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
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Gaus Electro Nics',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/gaus%20electronics.jpg',
            'genres_id' => 3,
            'release_date' => '2022-09-30',
            'synopsis' => 'Mengisahkan tentang kehidupan karir dan cinta dari empat karyawan muda di Divisi Pemasaran 3, Gaus Electronics.

            Lee Sang Shik adalah karyawan yang dikenal sebagai sosok yang ceria. Namun ia kurang peka terhadap masalah dari orang lain.

            Kemudian ada Cha Na Rae yang tidak terlalu akur dengan Sang Shik. Na Rae sendiri adalah asisten manajer dengan temperamen yang tinggi.

            Keduanya bekerja dengan Baek Ma Tan dan Gun Gang Mi sebagai karyawan. Baek Ma Tan terlihat simpel, namun berasal dari keluarga kaya raya.

            Sementara Gun Gang Mi hidup dalam dua identitas. Ia dikenal sebagai orang paling cantik yang bekerja di sana.',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Love In Contract',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/love%20in%20contract.jpg',
            'genres_id' => 3,
            'release_date' => '2022-09-21',
            'synopsis' => 'Choi Sang Eun adalah seorang perempuan yang membantu kehidupan para laki-laki lajang dengan pengalaman karier 13 tahun. Para kliennya adalah mereka yang hanya membutuhkan “kondisi pernikahan sementara” untuk berbagai alasan.

            Nantinya, ia pun akan terlibat dengan dua karakter laki-laki lainnya, yakni Jung Ji Ho dan Kang Hye Jin. Ia pun akan menjadi istri pura-pura kedua laki-laki tersebut di hari-hari yang telah ditentukan.',
            'countries_id' => 1,
            'rating' => 8,
        ]);

        Movies::create([
            'title' => 'Mr Queen',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/mr%20queen.jpg',
            'genres_id' => 3,
            'synopsis' => 'Pada era modern, Jang Bong-hwan bekerja sebagai koki di Rumah Biru Presiden. Dia memiliki jiwa yang bebas, tetapi entah bagaimana jiwanya menemukan jalan ke dalam tubuh Ratu Cheorin (Shin Hye-sun) pada periode Joseon. Raja Cheoljong (Kim Jung-hyun) adalah orang yang lembut dan santai secara lahiriah tetapi memiliki sisi yang berbeda juga. Ratu Sunwon (Bae Jong-ok) adalah istri almarhum Raja Sunjo yang memegang kekuasaan sejati di negara itu dan menjadikan Raja Cheoljong sebagai raja boneka. Kim Jwa-geun (Kim Tae-woo) adalah adik yang ambisius dari Ratu Sunwon. Kim Byeong-in (Na In-woo) adalah sepupu Ratu yang diam-diam jatuh cinta kepadanya dan akan melakukan apapun untuk mendapatkannya.',
            'release_date' => '2020-12-12',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Kokdu: Season of Deity',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/season%20of%20deity..jpg',
            'genres_id' => 3,
            'synopsis' => 'Kokdu: Season of Deity adalah drama Korea dengan tema romansa fantasi yang membawakan kisah cinta dua insan yang berbeda. Ialah malaikat maut bernama Kokdu (Kim Jung Hyun) yang datang ke dunia untuk menghukum manusia setiap 99 tahun sekali dan Han Gye Jeol (Im Soo Hyang), seorang dokter pemula dengan kemampuan misterius. Dalam perjalanan cintanya, Kokdu dan Han Gye Jeol menemui banyak rintangan termasuk status Kokdu sebagai malaikat maut yang menyamar menjadi dokter di rumah sakit tempat Han Gye Jeol bekerja.',
            'release_date' => '2023-01-27',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);

        Movies::create([
            'title' => 'The Law Café',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/the%20law%20cafe.jpg',
            'genres_id' => 3,
            'synopsis' => 'Drama The Law Cafe mengisahkan Kim Jung-Ho (diperankan oleh Lee Seung-Gi) adalah pria yang sangat pintar. Dia dulu bekerja sebagai jaksa, tetapi, karena skandal korupsi ayahnya, dia berhenti dari pekerjaannya. Dia sudah menganggur sejak saat itu. Dia memiliki sebuah bangunan dan hidup dari uang sewa yang dikumpulkan, sementara juga tinggal di atap gedung. Kim Jung-Ho berteman baik dengan Kim Yoo-Ri (diperankan oleh Lee Se-Young). Mereka telah berteman sejak mereka masih siswa sekolah menengah sekitar 17 tahun yang lalu. Kim Jung-Ho telah lama naksir Kim Yoo-Ri. Sementara itu, Kim Yoo-Ri adalah wanita cantik dan cerdas. Dia juga didorong oleh keadilan. Karena pengalaman masa lalu dengan seorang pria, dia telah memutuskan untuk tetap melajang selama sisa hidupnya. Dia bekerja sebagai pengacara untuk sebuah firma hukum besar, tetapi, suatu hari, Kim Yoo-Ri berhenti dari pekerjaannya. Dia kemudian membuka “Law Cafe” di gedung yang dimiliki Kim Jung-Ho. Kafe menyajikan kopi dan nasihat hukum. Siapapun bisa mampir dan minum kopi atau mendapatkan konseling hukum.',
            'release_date' => '2022-08-29',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Welcome To Waikiki 1',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/comedy/wecome%20to%20waikiki%201.jpg',
            'genres_id' => 3,
            'synopsis' => 'Serial drama Korea bergenre komedi tersebut mengisahkan tentang tiga pria yang ingin membangun kembali wisma (tempat penginapan) mereka yang mulai bangkrut. Ketiga pria itu adalah Dong Gu (Kim Jung Hyun), Jun Ki (Lee Yi Kyung), dan Doo Shik (So Seung). Dong Gu sebenarnya memiliki cita-cita menjadi sutradara film. Akan tetapi sekarang ia justru membangun wisma (tempat penginapan). Sementara itu Jun Ki adalah seorang aktor eksentrik yang menjadikan priofesi tersebut menjadi satu-satunya penunjang nafkah. Tokoh terakhir adalah Son Seung, seorang penulis lepas pengangguran. Wisma mereka terancam bangkrut, sampai suatu saat mereka dikejutkan oleh kehadiran bayi misterius di salah satu kamar wisma yang terletak di Itaewon tersebut. Tidak hanya bayi, mereka pun juga dikejutkan dengan seorang ibu tunggal yang tiba-tiba datang. Apa yang sebenarnya sedang terjadi?',
            'release_date' => '2018-02-05',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'Doctor Cha',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/drama/doctor%20cha.jpg',
            'genres_id' => 4,
            'synopsis' => "Cha Jung Suk meninggalkan karier medis untuk menjadi ibu rumah tangga. Selama 20 tahun Cha Jung Suk mengabdi pada suaminya dan membesarkan dua anak dengan baik.

            Sementara itu sang suami, Seo In Ho adalah ahli bedah yang sukses dalam pekerjaannya. Ia pun berselingkuh dengan rekan kerjanya di rumah sakit.
            
            Cha Jung Suk kemudian bertekad untuk kembali menjadi dokter. Di usianya yang sudah tidak muda lagi, ia mulai mendaftar menjadi dokter residen.
            ",
            'release_date' => '2023-04-15',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Dream High',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/drama/dream%20high.jpg',
            'genres_id' => 4,
            'synopsis' => "Enam siswa di Sekolah Tinggi Seni Kirin (Kirin Art High School) bekerja keras untuk mencapai impian mereka menjadi seorang bintang di industri musik Korea. Selama masa belajar mereka, siswa belajar bagaimana untuk mengembangkan suara mereka, menulis lagu, berakting, dan keterampilan menari yang juga mengalami pertumbuhan pribadi. Setiap siswa memiliki kelebihan dan kekurangan masing - masing, tetapi dengan dukungan dan bimbingan antara satu sama lain, mereka berjuang untuk bisa memulai debutnya diatas panggung. mereka pun dipanggil oleh salah satu siswa,siswa itu memberi tahu bahwa akan ada bencana alam tapi mereka tidak menggubris siswa siswa itu pun kekeh ingin mengejar debut nya.",
            'release_date' => '2011-01-03',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Reply 1988',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/drama/replay%201988.jpg',
            'genres_id' => 4,
            'synopsis' => "Kelima pemain (Sung Doek-sun, Choi Taek, Sung Sun-woo, Kim Jung-hwan, dan Ryu Dong-ryong) telah bersahabat sejak kecil dan mereka tinggal berdekatan di satu komplek yang sama. Keluarga mereka juga saling mengenal dengan baik. Doek-sun sangat hidup berkecukupan dan tinggal di rumah semi-bawah tanah namun tokoh ini memiliki watak yang sangat ceria. Jung-hwan memiliki kepribadian cuek namun sangat perhatian kepada teman-temannya. Sun-woo adalah seorang murid teladan dan sekaligus seorang kakak yang menyayangi adik dan ibunya. Dong-ryoo adalah orang yang tidak serius dalam dunia pendidikan dan tidak melanjutkan pendidikan ke universitas. Kehidupan mereka berlima diwarnai dengan tingkah laku yang lucu, saling mendukung saru sama lain, dan dibumbui dengan kisah romantis di antara mereka.",
            'release_date' => '2015-11-06',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'School 2015',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/drama/school%202015.jpg',
            'genres_id' => 4,
            'synopsis' => "Enam siswa di Sekolah Tinggi Seni Kirin (Kirin Art High School) bekerja keras untuk mencapai impian mereka menjadi seorang bintang di industri musik Korea. Selama masa belajar mereka, siswa belajar bagaimana untuk mengembangkan suara mereka, menulis lagu, berakting, dan keterampilan menari yang juga mengalami pertumbuhan pribadi. Setiap siswa memiliki kelebihan dan kekurangan masing - masing, tetapi dengan dukungan dan bimbingan antara satu sama lain, mereka berjuang untuk bisa memulai debutnya diatas panggung. mereka pun dipanggil oleh salah satu siswa,siswa itu memberi tahu bahwa akan ada bencana alam tapi mereka tidak menggubris siswa siswa itu pun kekeh ingin mengejar debut nya.",
            'release_date' => '2011-01-03',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Phenthause',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/drama/phenthause.jpg',
            'genres_id' => 4,
            'synopsis' => "Sebuah penthouse mewah berlokasi di Gangnam, memiliki suasana yang tegang di antara penghuninya yang beragam. Kalangan elegan yang lahir dari masyarakat kelas atas hingga pendaki sosial yang ambisius, masing-masing berusaha untuk mencapai puncak, baik dalam kekayaan, status, maupun pendidikan anak-anak mereka.",
            'release_date' => '2020-10-26',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);

        Movies::create([
            'title' => 'The King Eternal Monarch',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/fantasi/the%20king%20eternal%20monarch.jpg',
            'genres_id' => 4,
            'synopsis' => "Bercerita tentang seorang kaisar Korea bernama Lee Gon (Lee Min-ho) yang mencoba untuk menutup pintu ke dunia paralel yang dibuka oleh iblis yang dilepaskan oleh dewa ke dunia manusia dan seorang detektif bernama Jung Tae-eul (Kim Go- eun) yang mencoba melindungi banyak orang dan seseorang yang ia cintai.",
            'release_date' => '2020-04-17',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Hotel del luna',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/fantasi/hotel%20del%20luna.jpg',
            'genres_id' => 5,
            'synopsis' => "Hotel Del Luna yang berlokasi di Seoul, tidak seperti hotel lain: semua tamunya adalah hantu. Jang Man-wol (Lee Ji-eun), yang terjebak di hotel tersebut selama bertahun-tahun, bertemu dengan Koo Chan-seong (Yeo Jin-goo), seorang manajer hotel baru. Bersama-sama mereka akan membuka rahasia kelam yang telah lama terpendam yang membuat Jang Man-wol terjebak di Hotel Del Luna selama 1.300 tahun.",
            'release_date' => '2019-07-13',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Goblin',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/fantasi/goblin.jpg',
            'genres_id' => 5,
            'synopsis' => "Di masa kerajaan, Kim Shin (Gong Yoo) adalah jenderal yang tak terkalahkan dalam perang.
            Namun sang raja muda (Kim Min-Jae) cemburu dengan kehebatan Kim Shin dan membunuhnya.
            Kim Shin lalu menjadi dokkaebi atau goblin yang memiliki kehidupan abadi.
            Awalnya ia bersyukur atas anugerah tersebut, tetapi tak lama ia menyadari bahwa sebenarnya kemampuan itu adalah kutukan.
            Di masa modern, Kim Shin sudah menunggu mempelai wanita manusia selama 900 tahun.
            Mempelai wanita ini nantinya akan mengakhiri kehidupan abadinya.
            Suatu ketika, Kim Shin menyelamatkan seorang wanita hamil yang sebenarnya ditakdirkan untuk mati.
            Sementara itu, Pencabut Nyawa (Lee Dong-Wook) tidak dapat menemukan wanita hamil tersebut.
            Wanita ini akhirnya melahirkan seorang anak perempuan yang dinamai Ji Eun-Tak (Kim Go-Eun).",
            'release_date' => '2016-12-02',
            'countries_id' => 1,
            'rating' => 10,
        ]);

       

        Movies::create([
            'title' => 'While You Were Sleeping',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/fantasi/while%20you%20were%20sleeping.jpg',
            'genres_id' => 5,
            'synopsis' => "Kisah tentang seorang wanita (Bae Suzy) yang dapat melihat peristiwa malang yang akan menimpa orang lain di dalam mimpinya, dan seorang jaksa (Lee Jong-suk) yang melakukan semua yang ia bisa untuk mencegah mimpi wanita tersebut menjadi kenyataan.",
            'release_date' => '2017-09-27',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'The Legend Of Blue Sea',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/fantasi/the%20legend%20of%20the%20blue%20sea.jpg',
            'genres_id' => 5,
            'synopsis' => "Serial ini berpusat pada kisah cinta Shim Cheong (Jun Ji-hyun), seorang putri duyung, dan Heo Joon-jae (Lee Min-ho), seorang penipu jenaka. Berfokus pada kelahiran kembali, takdir, dan cinta tak berbalas, kisah mereka disandingkan dengan kisah paralel inkarnasi era Joseon, putri duyung, Se-hwa, dan kepala kota, Kim Dam-ryeong.",
            'release_date' => '2016-11-16',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'Business Proposal',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/business%20proposal.jpg',
            'genres_id' => 6,
            'synopsis' => "Shin Ha-ri (Kim Se-jeong) melakukan kencan buta dengan menyamar sebagai temannya dengan tujuan 'ditolak' oleh calon pasangan temannya. Tapi rencana menjadi kacau ketika orang yang dia temui ternyata adalah Kang Tae-mu (Ahn Hyo-seop) –CEO perusahaan tempat Ha-ri bekerja.",
            'release_date' => '2022-02-28',
            'countries_id' => 1,
            'rating' => 10,
        ]);

        Movies::create([
            'title' => 'Nevertheless',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/nevertheless.jpg',
            'genres_id' => 6,
            'synopsis' => "Menggambarkan romansa hiper realistis antara seorang pria yang kesal dengan hubungan cinta tetapi suka menggoda dan seorang wanita yang ingin berkencan tetapi tidak percaya pada cinta. Yu Na-bi (Han So-hee) adalah siswi fakultas seni rupa berbakat yang mendambakan percintaan hangat dan ingin berkencan dengan status yang jelas. Na-bi memiliki standar tertentu dalam memilih teman kencan. Namun, keyakinannya ini sirna akibat pengalaman buruk dengan mantan kekasihnya yang terlalu mengatur dan mengekangnya, padahal tidak setia.

            Di sisi lain ada Park Jae-eon (Song Kang) yang sama-sama mahasiswa fakultas seni rupa, benar-benar berbeda seratus delapan puluh derajat dengan Na-bi. Jae-eon mengusung hubungan tanpa status dan hanya ingin bersenang-senang dengan siapa saja yang melewati jalannya. Jae-eon tidak percaya dengan hubungan tetap dan hanya ingin flirting dengan semua perempuan.
            
            Semuanya berubah saat mereka saling bertemu dan saling tertarik. Di sini diperlihatkan bahwa Na-bi, yang tadinya tidak masalah dengan hubungan tanpa status, lama kelamaan memiliki perasaan yang semakin dalam terhadap Jae-eon. Ia akhirnya harus mengakui bahwa dirinya tetap menginginkan hubungan yang jelas dan ia mulai gerah dengan cara Jae-eon yang selalu tidak jelas dalam bersikap.
            
            Selain kisah utama, ada juga beberapa subplot yang mengisahkan perjalanan cinta teman-teman Na-bi. Ada yang TTM (Teman Tapi Mesra) lalu sang pemuda mulai menuntut keseriusan si gadis, ada yang awalnya hanya sebagai teman berbagi satu flat tapi lama-lama tumbuh rasa sayang, ada juga hubungan sejenis antara dua sahabat yang akrab sejak kecil tapi setelah dewasa mereka menyadari bahwa perasaan antara mereka bukan sekadar persahabatan semata.",
            'release_date' => '2021-06-19',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Fight For My Way',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/fight%20for%20my%20way%20poster.jpg',
            'genres_id' => 6,
            'synopsis' => "berkisah tentang dua anak muda yang berjuang untuk mewujudkan apa yang mereka impikan. Tapi tentu saja banyak hal yang harus mereka lewati agar bisa meraih mimpi-mimpi tersebut. Dua karakter utama diceritakan sudah bersahabat sejak lama. Karena sudah dekat mereka pun saling bercanda termasuk tentang kisah cinta mereka yang gagal. Ko Dong Man (Park Seo-joon), mantan atlet taekwondo terkenal yang beralih profesi menjadi petarung seni beladiri campuran yang tak populer. Choi Ae Ra (Kim Ji-won), seorang karyawan pusat perbelanjaan di bagian informasi tapi bermimpi menjadi seorang penyiar berita.",
            'release_date' => '2017-05-22',
            'countries_id' => 1,
            'rating' => 9.5,
        ]);

        Movies::create([
            'title' => 'Uncontrollabyfond',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/uncontrollabyfond.jpg',
            'genres_id' => 6,
            'synopsis' => "Shin Joon-young (Kim Woo-bin) dan Noh Eul (Bae Suzy) adalah teman sekelas yang berpisah selama masa remajanya karena hubungan naas, tetapi kemudian bertemu satu sama lain di masa dewasa. Shin Joon-young sekarang menjadi aktor-penyanyi top sementara Noh Eul adalah produser film dokumenter.

            Noh Eul memiliki masa kecil yang sulit; ayahnya meninggal dalam tabrak lari mendorong Noh Eul untuk berhenti sekolah dan mencari nafkah untuk dirinya sendiri dan kakaknya. Shin Joon-young, di sisi lain, telah merencanakan hidupnya untuknya. Ibunya ingin dia menjadi jaksa untuk mengikuti jejak ayahnya yang terasing, tetapi sebuah insiden menyebabkan dia berhenti sekolah hukum dan menjadi penyanyi-aktor.
            
            Keduanya kemudian bersatu kembali ketika Noh Eul ditugaskan untuk memfilmkan film dokumenter Shin Joon-young setelah memberi tahu produser yang ingin merekam film dokumenter bahwa dia dapat membujuknya untuk memberikan persetujuan untuk syuting film dokumenter tersebut. Joon-young awalnya memberi Noh Eul waktu yang menyedihkan sebelum akhirnya setuju untuk membuat film dokumenter dan akhirnya mencoba memenangkan hatinya kembali.",
            'release_date' => '2016-07-06',
            'countries_id' => 1,
            'rating' => 9,
        ]);

        Movies::create([
            'title' => 'The Heirs',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/the%20heirs.jpg',
            'genres_id' => 6,
            'synopsis' => "Serial ini mengikuti sekelompok siswa sekolah menengah yang kaya dan istimewa karena mereka akan mengambil alih kerajaan bisnis keluarga mereka, mengatasi kesulitan dan berkembang di setiap langkah.
            Kim Tan (Lee Min-ho) adalah pewaris kaya konglomerat besar Korea bernama Jeguk Group. Dia diasingkan ke AS oleh saudara tirinya Kim Won (Choi Jin-hyuk), yang mencoba untuk mengambil kendali bisnis keluarga.[11] Saat di Amerika, dia bertemu Cha Eun-sang (Park Shin-hye), yang pergi ke sana untuk mencari adik perempuannya.[12] Meskipun bertunangan dengan Yoo Rachel (Kim Ji-won), sesama ahli waris, Kim Tan segera jatuh cinta dengan Eun-sang. Ketika Kim Tan kembali ke Korea, mantan sahabatnya menjadi musuh Choi Young-do (Kim Woo-bin) mulai mengganggu Eun-sang untuk mengganggu Tan. Ketegangan terjadi ketika Young-do juga jatuh cinta dengan Eun-sang, dan Kim Tan terpaksa memilih antara tanggung jawabnya mengejar bisnis keluarga atau cinta.",
            'release_date' => '2013-10-09',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);

        Movies::create([
            'title' => 'Descendants Of The Sun',
            'poster' => 'https://kreasi.nurulfikri.ac.id/putr22049si/UAS%20PROJECT/romance/descendants%20of%20the%20sun.jpg',
            'genres_id' => 6,
            'synopsis' => "Kapten Yoo Si-jin (Song Joong-ki) adalah tentara pasukan khusus Tentara Angkatan Darat Korea Selatan yang memimpin kelompok khusus bernama Tim Alpha yang terdiri dari lima tentara, termasuk dirinya sendiri. Pada awal cerita, Si-jin dan Sersan Mayor Seo Dae-young (Jin Goo) menangkap pencuri sepeda motor Kim Gi-beom. Gi-beom yang terluka akibat jatuh dari motor dikirim ke Rumah Sakit Haesung, tempat di mana Dokter Kang Mo-yeon (Song Hye-kyo) bekerja. Terpesona akan kecantikan Mo-yeon, Si-jin berusaha mencari perhatian Mo-yeon. Akan tetapi, Mo-yeon tidak percaya Si-jin dan Dae-young benar-benar tentara, terlebih lagi karena nama samaran Si-jin adalah Big Boss (bos besar), sehingga Mo-yeon mencurigai mereka berdua adalah gangster yang memukuli Gi-beom. Untuk memverifikasi identitas mereka, Si-jin meminta bantuan dokter tentara Yoon Myeong-ju (Kim Ji-won) yang pernah magang di Rumah Sakit Haesung. Meski punya masa lalu kurang menyenangkan dengan Myeong-ju, Mo-yeon percaya dengan verifikasi Myeong-ju.

            Mo-yeon dan Si-jin pun menjadi akrab satu sama lain sejak Si-jin meminta Mo-yeon mengobati lukanya. Mereka juga membuat janji untuk menonton film bersama di bioskop. Sayangnya, sebagai tentara, Si-jin selalu saja sibuk sehingga sering membatalkan janji mereka. Mo-yeon baru menyadari bahwa Si-jin mempunyai pekerjaan misterius yang sangat berbeda darinya. Sebagai tentara, Si-jin bisa saja membunuh orang sedangkan Mo-yeon, sebagai dokter, menganggap nyawa manusia paling berharga dan harus diselamatkan. Atas dasar inilah, Mo-yeon memutuskan hubungan dengan Si-jin. Saat itu juga, Si-jin dikirim ke negeri fiksional Urk untuk menjaga perdamaian di sana.
            
            Lambat laun, Mo-yeon menyadari bahwa menjalani kehidupan idealis tidak membawanya ke mana-mana. Mo-yeon berubah menjadi dokter elit yang melayani orang kaya. Ketika Mo-yeon menolak direktur Rumah Sakit Haesung yang meminta hubungan seksual, Mo-yeon dibuang ke Urk. Bersama tim dokternya, Mo-yeon belajar untuk kembali menjadi dokter idealis yang membantu kemanusiaan dengan menghadapi bencana gempa bumi, perang, penculikan, dan penyakit berbahaya. Di Urk, Mo-yeon juga bertemu kembali dengan Si-jin. Mo-yeon masih bimbang apakah dirinya siap mempunyai kekasih seorang tentara yang dapat meninggalkannya kapan saja. Namun akhirnya, situasi berat di Urk mengukuhkan cinta mereka berdua.
            
            Sekembalinya ke Korea Selatan, Mo-yeon berencana keluar dari Rumah Sakit Haesung dan membuka klinik sendiri. Sayangnya, bank tidak ingin memberi pinjaman jika Mo-yeon pengangguran sehingga terpaksa Mo-yeon tetap bekerja di Rumah Sakit Haesung. Sementara itu, Si-jin terlibat dalam aksi perdamaian Korea Selatan dengan Korea Utara.
            
            Ketika Si-jin dan Tim Alpha dikirim ke Albania untuk misi berikutnya, Si-jin hilang dalam ledakan dan dianggap sudah meninggal. Mo-yeon sangat terpukul. Satu tahun kemudian, Mo-yeon pergi Albania dalam peringatan kematian Si-jin sekaligus kegiatan relawan. Tiba-tiba Si-jin datang dengan luka-luka, dan menceritakan bahwa teman jauhnya yang merupakan seorang tentara Korea Utara menolongnya untuk tetap hidup. Akhirnya, Si-jin dan Mo-yeon, dan Dae-young dan Myeong-ju bersatu kembali.",
            'release_date' => '2016-02-24',
            'countries_id' => 1,
            'rating' => 9,
        ]);

    }
}
