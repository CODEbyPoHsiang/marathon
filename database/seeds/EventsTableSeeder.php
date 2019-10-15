<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('events')->get()->count() == 0) {

            DB::table('events')->insert([
                // 'eventId' => '3',
                'cityId' => '2',
                'eventSignupStartTime' => '2019-11-05 00:00:00',
                'eventSignupEndTime' => '2019-11-20 00:00:00',
                'eventRunStartTime' => '2019-12-02 00:00:00',
                'eventRunEndTime' => '2019-12-05 00:00:00',
                'eventTittle' => '新北場',
                'eventImage' => '/img/TPH201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '新北市浮洲橋下',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '3',
                'cityId' => '4',
                'eventSignupStartTime' => '2019-11-03 00:00:00',
                'eventSignupEndTime' => '2019-11-18 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '桃園場',
                'eventImage' => '/img/TYC201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '桃園永安漁港',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '4',
                'cityId' => '7',
                'eventSignupStartTime' => '2019-11-02 00:00:00',
                'eventSignupEndTime' => '2019-11-17 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '台中場',
                'eventImage' => '/img/TXG201912.jpg',
                'eventTel' => '0800-555-666',
                'eventAddr' => '台中市太平區運動場',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '1',
                'cityId' => '8',
                'eventSignupStartTime' => '2019-11-06 00:00:00',
                'eventSignupEndTime' => '2019-11-21 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '彰化場',
                'eventImage' => '/img/CWH202002.jpg',
                'eventTel' => '0800-271-637',
                'eventAddr' => '鹿港鎮運動場',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '5',
                'cityId' => '10',
                'eventSignupStartTime' => '2019-11-03 00:00:00',
                'eventSignupEndTime' => '2019-11-18 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '雲林場',
                'eventImage' => '/img/TUN201909.jpg',
                'eventTel' => '0800-777-888',
                'eventAddr' => '雲林縣斗六市湖山水庫梅林公園',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '3',
                'cityId' => '12',
                'eventSignupStartTime' => '2019-11-04 00:00:00',
                'eventSignupEndTime' => '2019-11-19 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '高雄場',
                'eventImage' => '/img/KHH201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '高雄橋頭新市鎮',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '3',
                'cityId' => '13',
                'eventSignupStartTime' => '2019-11-01 00:00:00',
                'eventSignupEndTime' => '2019-11-30 23:59:59',
                'eventRunStartTime' => '2019-12-01 07:00:00',
                'eventRunEndTime' => '2019-12-01 11:00:00',
                'eventTittle' => '高雄場',
                'eventImage' => '/img/kaohsiung201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '高雄橋頭新市鎮',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '2',
                'cityId' => '14',
                'eventSignupStartTime' => '2019-11-03 00:00:00',
                'eventSignupEndTime' => '2019-11-18 00:00:00',
                'eventRunStartTime' => '2019-12-01 00:00:00',
                'eventRunEndTime' => '2019-12-03 00:00:00',
                'eventTittle' => '屏東場',
                'eventImage' => '/img/PCH202001.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '屏東縣潮州鎮林後四林平地森林園區',
            ]);

            DB::table('events')->insert([
                // 'eventId' => '2',
                'cityId' => '15',
                'eventSignupStartTime' => '2019-11-07 00:00:00',
                'eventSignupEndTime' => '2019-11-22 00:00:00',
                'eventRunStartTime' => '2019-12-06 00:00:00',
                'eventRunEndTime' => '2019-12-08 00:00:00',
                'eventTittle' => ' 宜蘭場',
                'eventImage' => '/img/ILN202001.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '宜蘭冬山河親水公園',
            ]);

        }
    }
}
