<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::create([
            'nama' => 'Mengalami ketakutan yang tiba-tiba (Catatan : lonjakan tibatiba dapat terjadi dari keadaan tenang atau keadaan cemas)',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Mengalami ketidaknyamanan secara intens dalam beberapa menit',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa menggigil atau sensasi panas',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Jantung berdebar atau detak jantung yang dipercepat',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Berkeringat',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan atau gemetar',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa sesak napas atau tercekik',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa tersedak',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa nyeri dibagian dada',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa mual atau perut seperti tertekan',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa pusing, goyah, atau pingsan',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa parestesia (sensasi mati rasa atau kesemutan)',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa derealisasi (perasaan tidak nyata)',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa depersonalisasi (melepaskan diri dari satu diri)',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa takut kehilangan kendali atau “menjadi gila”',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan akan kematian',
            'diagnosis' => 'Gangguan Panik'
        ]);
        Penyakit::create([
            'nama' => 'Mengalami ketakutan dan kecemasan yang nyata tentang objek atau situasi tertentu (misal : terbang, ketinggian, hewan, menerima suntikan, melihat darah)',
            'diagnosis' => 'Fobia Spesifik'
        ]);
        Penyakit::create([
            'nama' => 'Merasa tidak nyaman oleh objek atau situasi tertentu',
            'diagnosis' => 'Fobia Spesifik'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan , kecemasan, atau penghindaran berlangsung terusmenerus (biasanya berlangsung selama 6 bulan atau lebih)',
            'diagnosis' => 'Fobia Spesifik'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan , kecemasan, atau penghindaran berlangsung sampai mengganggu dalam pekerjaan, sosial, atau area penting lainnya',
            'diagnosis' => 'Fobia Spesifik'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan dan kecemasan yang dialami tidak sebanding dengan bahaya nyata yang ditimbulkan oleh objek atau situasi tertentu',
            'diagnosis' => 'Fobia Spesifik'
        ]);
        Penyakit::create([
            'nama' => 'Mengalami kecemasan dan kekhawatiran yang berlebihan (kegelisahan), terjadi selama minimal 6 bulan, tentang pekerjaan atau sekolah',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Merasa sulit untuk mengontrol rasa khawatirnya',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Merasa mudah lelah',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Merasa sulit berkonsentrasi atau pikiran menjadi kosong',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Iritabilitas',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Mengalami ketegangan otot',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Mengalami gangguan tidur (kesulitan tertidur atau tetap tertidur)',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Merasa kurang tidur',
            'diagnosis' => 'Gangguan Kecemasan Menyeluruh'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan atau kecemasan yang nyata tentang di mana berada pada kemungkinan diawasi oleh orang lain',
            'diagnosis' => 'Fobia Sosial'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan atau kecemasan yang nyata tentang di mana berada pada kemungkinan interaksi sosial (misal : melakukan percakapan, bertemu orang asing)',
            'diagnosis' => 'Fobia Sosial'
        ]);
        Penyakit::create([
            'nama' => 'Merasa takut akan bertindak menunjukkan gejala kecemasan yang berakibat membuat malu diri sendiri dan menyinggung orang lain',
            'diagnosis' => 'Fobia Sosial'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan dan kecemasan pada situasi sosial',
            'diagnosis' => 'Fobia Sosial'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan dan kecemasan tidak sebanding dengan ancaman nyata yang ditimbulkan oleh situasi sosial dan pada konteks sosial budaya',
            'diagnosis' => 'Fobia Sosial'
        ]);
        Penyakit::create([
            'nama' => 'Ketakutan, kecemasan, atau penghindaran terus-menerus (selama 6 bulan atau lebih)',
            'diagnosis' => 'Fobia Sosial'
        ]);
    }
}
