<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = 0;

        // 1.1 ANALGESIK NARKOTIK
        $category_id += 1;

        // fentanil
        DB::table('medicines')->insert([
            [
                'generic_name' => 'fentanil',
                'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
                'restriction_formula' => '5 amp/kasus.',
                'description' => '
a) inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.
b) patch:
- Untuk nyeri kronik pada pasien kanker yang tidak terkendali.
- Tidak untuk nyeri akut.
                ',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fentanil',
                'form' => 'patch 12,5 mcg/jam',
                'restriction_formula' => '10 patch/bulan.',
                'description' => '
a) inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.
b) patch:
- Untuk nyeri kronik pada pasien kanker yang tidak terkendali.
- Tidak untuk nyeri akut.
                ',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fentanil',
                'form' => 'patch 25 mcg/jam',
                'restriction_formula' => '10 patch/bulan.',
                'description' => '
a) inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.
b) patch:
- Untuk nyeri kronik pada pasien kanker yang tidak terkendali.
- Tidak untuk nyeri akut.
                ',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // hidromorfon
        DB::table('medicines')->insert([
            [
                'generic_name' => 'hidromorfon',
                'form' => 'tab lepas lambat 8 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'hidromorfon',
                'form' => 'tab lepas lambat 16 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // kodein
        DB::table('medicines')->insert([
            [
                'generic_name' => 'kodein',
                'form' => 'tab 10 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'kodein',
                'form' => 'tab 20 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 1.2 ANALGESIK NON NARKOTIK
        $category_id += 1;

        // asam mefenamat
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => null,
            'category_id' => $category_id,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => null,
            'category_id' => $category_id,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ibuprofen*
        DB::table('medicines')->insert([
            [
                'generic_name' => 'ibuprofen*',
                'form' => 'tab 200 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'ibuprofen*',
                'form' => 'tab 400 mg',
                'restriction_formula' => '30 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'ibuprofen*',
                'form' => 'susp 100 mg/5 mL',
                'restriction_formula' => '1 btl/kasus.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'ibuprofen*',
                'form' => 'susp 200 mg/5 mL',
                'restriction_formula' => '1 btl/kasus.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ]
        ]);

        // ketoprofen
        DB::table('medicines')->insert([
            [
                'generic_name' => 'ketoprofen',
                'form' => 'inj 50 mg/5 mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'ketoprofen',
                'form' => 'sup 100 mg',
                'restriction_formula' => '2 sup/hari, maks 3 hari.',
                'description' => "Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.",
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 1.3 ANTIPIRAI
        $category_id += 1;

        // alopurinol
        DB::table('medicines')->insert([
            [
                'generic_name' => 'alopurinol',
                'form' => 'tab 100 mg*',
                'restriction_formula' => "30 tab/bulan.",
                'description' => "Tidak diberikan pada saat nyeri akut.",
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'alopurinol',
                'form' => 'tab 300 mg',
                'restriction_formula' => "30 tab/bulan.",
                'description' => "Tidak diberikan pada saat nyeri akut.",
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // kolkisin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'kolkisin',
                'form' => 'tab 500 mg',
                'restriction_formula' => "30 tab/bulan.",
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // probenesid
        DB::table('medicines')->insert([
            [
                'generic_name' => 'probenesid',
                'form' => 'tab 500 mg',
                'restriction_formula' => "30 tab/bulan.",
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 1.4 NYERI NEUROPATIK
        $category_id += 1;

        // amitriptilin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'amitriptilin',
                'form' => 'tab 25 mg',
                'restriction_formula' => "30 tab/bulan.",
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // gabapentin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'gabapentin',
                'form' => 'kaps 100 mg',
                'restriction_formula' => "60 kaps/bulan.",
                'description' => "Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.",
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'gabapentin',
                'form' => 'kaps 300 mg',
                'restriction_formula' => "30 kaps/bulan.",
                'description' => "Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.",
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // karbamazepin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'karbamazepin',
                'form' => 'tab 100 mg',
                'restriction_formula' => "60 tab/bulan.",
                'description' => "Hanya untuk neuralgia trigeminal.",
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 2.1 ANESTETIK LOKAL
        $category_id += 1;

        // bupivakain
        DB::table('medicines')->insert([
            [
                'generic_name' => 'bupivakain',
                'form' => 'inj 0,5%',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // bupivakain heavy
        DB::table('medicines')->insert([
            [
                'generic_name' => 'bupivakain heavy',
                'form' => 'inj 0,5% + glukosa 8%',
                'restriction_formula' => null,
                'description' => "Khusus untuk analgesia spinal.",
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // etil klorida
        DB::table('medicines')->insert([
            [
                'generic_name' => 'etil klorida',
                'form' => 'spray 100 mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 2.2 ANESTETIK UMUM dan OKSIGEN
        $category_id += 1;

        // deksmedetomidin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'deksmedetomidin',
                'form' => 'inj 100 mcg/mL',
                'restriction_formula' => null,
                'description' => "Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.",
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // desfluran
        DB::table('medicines')->insert([
            [
                'generic_name' => 'desfluran',
                'form' => 'ih',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // halotan
        DB::table('medicines')->insert([
            [
                'generic_name' => 'halotan',
                'form' => 'ih',
                'restriction_formula' => null,
                'description' => '
a) Tidak boleh digunakan berulang.
b) Tidak untuk pasien dengan gangguan fungsi hati.
                ',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 2.3 OBAT untuk PROSEDUR PRE OPERATIF
        $category_id += 1;

        // atropin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'atropin',
                'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // diazepam
        DB::table('medicines')->insert([
            [
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // midazolam
        DB::table('medicines')->insert([
            [
                'generic_name' => 'midazolam',
                'form' => 'inj 1 mg/mL (i.v.)',
                'restriction_formula' => '
- Dosis rumatan: 1 mg/jam (24 mg/hari).
- Dosis premedikasi: 8 vial/kasus.
                ',
                'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'midazolam',
                'form' => 'inj 5 mg/mL (i.v.)',
                'restriction_formula' => '
- Dosis rumatan: 1 mg/jam (24 mg/hari).
- Dosis premedikasi: 8 vial/kasus.
                ',
                'description' => '
Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.
Dapat digunakan untuk sedasi pada pasien ICU dan HCU.
                ',
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 3. ANTIALERGI dan OBAT untuk ANAFILAKSIS
        $category_id += 1;

        // deksametason
        DB::table('medicines')->insert([
            [
                'generic_name' => 'deksametason',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '20 mg/hari.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // difenhidramin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'difenhidramin',
                'form' => 'inj 10 mg/mL (i.v./i.m.)',
                'restriction_formula' => '30 mg/hari.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // epinefrin (adrenalin)
        DB::table('medicines')->insert([
            [
                'generic_name' => 'epinefrin (adrenalin)',
                'form' => 'inj 1 mg/mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 4.1 KHUSUS
        $category_id += 1;

        // atropin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'atropin',
                'form' => 'tab 0,5 mg',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'atropin',
                'form' => 'inj 0,25 mg/mL (i.v.)',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // efedrin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'efedrin',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // kalsium glukonat
        DB::table('medicines')->insert([
            [
                'generic_name' => 'kalsium glukonat',
                'form' => 'inj 10%',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 4.2 UMUM
        $category_id += 1;

        // magnesium sulfat
        DB::table('medicines')->insert([
            [
                'generic_name' => 'magnesium sulfat',
                'form' => 'serb',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // 5. ANTIEPILEPSI - ANTIKONVULSI
        $category_id += 1;

        // diazepam
        DB::table('medicines')->insert([
            [
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
                'description' => 'Tidak untuk i.m.',
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'diazepam',
                'form' => 'enema 5 mg/2,5 mL',
                'restriction_formula' => '2 tube/hari, bila kejang.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'diazepam',
                'form' => 'enema 10 mg/2,5 mL',
                'restriction_formula' => '2 tube/hari, bila kejang.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // fenitoin
        DB::table('medicines')->insert([
            [
                'generic_name' => 'fenitoin',
                'form' => 'kaps 30 mg*',
                'restriction_formula' => '90 kaps/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fenitoin',
                'form' => 'kaps 100 mg*',
                'restriction_formula' => '120 kaps/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fenitoin',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => 'Untuk status epileptikus, dapat diberikan hingga dosis 15 - 30 mg/kgBB di Faskes Tk. 2 dan 3.',
                'description' => 'Dapat digunakan untuk status konvulsivus.',
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);

        // fenobarbital
        DB::table('medicines')->insert([
            [
                'generic_name' => 'fenobarbital',
                'form' => 'tab 30 mg*',
                'restriction_formula' => '120 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fenobarbital',
                'form' => 'tab 100 mg*',
                'restriction_formula' => '60 tab/bulan.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fenobarbital',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => '40 mg/kgBB.',
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
            [
                'generic_name' => 'fenobarbital',
                'form' => 'inj 100 mg/mL',
                'restriction_formula' => null,
                'description' => null,
                'category_id' => $category_id,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
            ],
        ]);
    }
}
