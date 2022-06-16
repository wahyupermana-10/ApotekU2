<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    //---------------------------------1------------------------------------------
        DB::table('obats')->insert([
            'genericname' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restrictionformula' => '5 amp/kasus.',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam',
            'restrictionformula' => '10 patch/bulan.',
            'description' => 'patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'fentanil',
            'form' => 'patch 25 mcg/jam',
            'restrictionformula' => '10 patch/bulan.',
            'description' => 'patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'hidromorfon',
            'form' => 'tab lepas lambat 16 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'kodein',
            'form' => ' tab 10 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'kodein',
            'form' => ' tab 20 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '1'
        ]);

        //---------------------------------2------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restrictionformula' => '30 kaps/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'asam mefenamat',
            'form' => 'tab 500 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'ibuprofen*',
            'form' => 'tab 200 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);
        
        DB::table('obats')->insert([
            'genericname' => 'ibuprofen*',
            'form' => 'tab 400 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'ibuprofen*',
            'form' => 'susp 100 mg/5 mL',
            'restrictionformula' => '1 btl/kasus.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'ibuprofen*',
            'form' => 'susp 200 mg/5 mL',
            'restrictionformula' => '1 btl/kasus.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'ketoprofen',
            'form' => 'inj 50 mg/mL',
            'restrictionformula' => '',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'ketoprofen',
            'form' => 'sup 100 mg',
            'restrictionformula' => '2 sup/hari, maks 3 hari.',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '2'
        ]);

        //---------------------------------3------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'alopurinol',
            'form' => 'tab 100 mg*',
            'restrictionformula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '3'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'alopurinol',
            'form' => 'tab 300 mg*',
            'restrictionformula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '3'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'kolkisin',
            'form' => 'tab 500 mcg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '3'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'probenesid',
            'form' => 'tab 500 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '3'
        ]);

        //---------------------------------4------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restrictionformula' => '30 tab/bulan.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '4'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'gabapentin',
            'form' => 'kaps 100 mg',
            'restrictionformula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '4'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'gabapentin',
            'form' => 'kaps 300 mg',
            'restrictionformula' => '30 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '4'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restrictionformula' => '60 tab/bulan.',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '4'
        ]);
        //---------------------------------5------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'bupivakain',
            'form' => 'inj 0,5%',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '5'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'bupivakain heavy',
            'form' => 'inj 0,5% + glukosa 8%',
            'restrictionformula' => '',
            'description' => 'Khusus untuk analgesia spinal.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '5'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '5'
        ]);

        //---------------------------------6------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restrictionformula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '6'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'desfluran',
            'form' => 'ih',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '6'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'halotan',
            'form' => 'ih',
            'restrictionformula' => '',
            'description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '6'
        ]);

        //---------------------------------7------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '7'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '7'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restrictionformula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '7'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'midazolam',
            'form' => 'inj 5 mg/mL (i.v.)',
            'restrictionformula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum. Dapat digunakan untuk sedasi pada pasien ICU dan HCU.',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '7'
        ]);

        //---------------------------------8------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restrictionformula' => '20 mg/hari.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '8'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restrictionformula' => '30 mg/hari.',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '8'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '8'
        ]);
        //---------------------------------9------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'atropin',
            'form' => 'tab 0,5 mg',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '9'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v.)',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '9'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '0',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '9'
        ]);

        DB::table('obats')->insert([
            'genericname' => 'kalsium glukonat',
            'form' => 'inj 10%',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '9'
        ]);
        //---------------------------------10------------------------------------------

        DB::table('obats')->insert([
            'genericname' => 'magnesium sulfat',
            'form' => 'serb',
            'restrictionformula' => '',
            'description' => '',
            'faskes1' => '1',
            'faskes2' => '1',
            'faskes3' => '1',
            'categoryid' => '10'
        ]);
    }
}
