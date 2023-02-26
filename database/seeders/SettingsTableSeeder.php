<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2022-2023'],
            ['type' => 'system_title', 'description' => 'AMA'],
            ['type' => 'system_name', 'description' => 'ANSHU MEMORIAL ACADEMY'],
            ['type' => 'term_ends', 'description' => '7/10/2018'],
            ['type' => 'term_begins', 'description' => '7/10/2018'],
            ['type' => 'phone', 'description' => '9128289100'],
            ['type' => 'address', 'description' => 'BHATHA DASI, RAJAPAKAR, VAISHALI,BIHAR-844124'],
            ['type' => 'system_email', 'description' => 'mailer@anshumemorial.in'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => 'smtp.hostinger.com'],
            ['type' => 'email_pass', 'description' => '$@T!S#07@sk'],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '20000'],
            ['type' => 'next_term_fees_pn', 'description' => '25000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_n', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],
            ['type' => 'next_term_fees_c', 'description' => '1600'],
        ];

        DB::table('settings')->insert($data);
    }
}
