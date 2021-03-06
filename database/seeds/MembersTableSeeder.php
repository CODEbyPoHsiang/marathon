<?php

use Illuminate\Database\Seeder;

function checkTWId($id)
{
    if (preg_match("/^[A-Z][12][0-9]{8}$/", $id)) {
        $letters = "ABCDEFGHJKLMNPQRSTUVXYWZIO";
        $c1 = substr($id, 0, 1);
        $n12 = strpos($letters, $c1) + 10;
        $n1 = (int) ($n12 / 10);
        $n2 = $n12 % 10;

        $n3 = substr($id, 1, 1);
        $n4 = substr($id, 2, 1);
        $n5 = substr($id, 3, 1);
        $n6 = substr($id, 4, 1);
        $n7 = substr($id, 5, 1);
        $n8 = substr($id, 6, 1);
        $n9 = substr($id, 7, 1);
        $n10 = substr($id, 8, 1);
        $n11 = substr($id, 9, 1);

        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        return $sum % 10 == 0;
    }
    return false;
}

function createTWIdByBoth($gender, $area)
{
    $tempId = $area;
    $tempId .= $gender ? '1' : '2';
    for ($i = 0; $i < 7; $i++) {
        $tempId .= rand(0, 9);
    }
    for ($i = 0; $i < 10; $i++) {
        if (checkTWId($tempId . $i)) {
            $tempId .= $i;
            break;
        }
    }
    return $tempId;
}

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('members')->get()->count() == 0) {
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'A'),
                'memberName' => '一明',
                'memberGender' => '男',
                'memberYear' => '1981',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@一明.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '一明緊急',
                'memberEmergencyRelationship' => '一明關係',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'B'),
                'memberName' => '二明',
                'memberGender' => '女',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二明緊急',
                'memberEmergencyRelationship' => '二明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'C'),
                'memberName' => '三明',
                'memberGender' => '男',
                'memberYear' => '1983',
                'memberMonth' => '5',
                'memberDay' => '6',
                'memberCity' => '基隆市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@三明.com',
                'memberMobile' => '0955-555-555',
                'memberEmergencyContact' => '三明緊急',
                'memberEmergencyRelationship' => '三明關係',
                'memberEmergencyMobile' => '0966-666-666',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'D'),
                'memberName' => '四明',
                'memberGender' => '女',
                'memberYear' => '1984',
                'memberMonth' => '7',
                'memberDay' => '8',
                'memberCity' => '桃園市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@四明.com',
                'memberMobile' => '0977-777-777',
                'memberEmergencyContact' => '四明緊急',
                'memberEmergencyRelationship' => '四明關係',
                'memberEmergencyMobile' => '0988-888-888',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'E'),
                'memberName' => '五明',
                'memberGender' => '男',
                'memberYear' => '1985',
                'memberMonth' => '9',
                'memberDay' => '10',
                'memberCity' => '新竹市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@五明.com',
                'memberMobile' => '0999-999-999',
                'memberEmergencyContact' => '五明緊急',
                'memberEmergencyRelationship' => '五明關係',
                'memberEmergencyMobile' => '0900-000-000',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'F'),
                'memberName' => '六明',
                'memberGender' => '女',
                'memberYear' => '1986',
                'memberMonth' => '11',
                'memberDay' => '12',
                'memberCity' => '苗栗縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@六明.com',
                'memberMobile' => '0910-123-456',
                'memberEmergencyContact' => '六明緊急',
                'memberEmergencyRelationship' => '六明關係',
                'memberEmergencyMobile' => '0920-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'G'),
                'memberName' => '七明',
                'memberGender' => '男',
                'memberYear' => '1987',
                'memberMonth' => '1',
                'memberDay' => '3',
                'memberCity' => '台中市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@七明.com',
                'memberMobile' => '0930-123-456',
                'memberEmergencyContact' => '七明緊急',
                'memberEmergencyRelationship' => '七明關係',
                'memberEmergencyMobile' => '0940-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'H'),
                'memberName' => '八明',
                'memberGender' => '女',
                'memberYear' => '1988',
                'memberMonth' => '5',
                'memberDay' => '7',
                'memberCity' => '彰化縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@八明.com',
                'memberMobile' => '0950-123-456',
                'memberEmergencyContact' => '八明緊急',
                'memberEmergencyRelationship' => '八明關係',
                'memberEmergencyMobile' => '0960-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'I'),
                'memberName' => '九明',
                'memberGender' => '男',
                'memberYear' => '1989',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@九明.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '九明緊急',
                'memberEmergencyRelationship' => '九明關係',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'J'),
                'memberName' => '十明',
                'memberGender' => '女',
                'memberYear' => '1989',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十明.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '十明緊急',
                'memberEmergencyRelationship' => '十明關係',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'K'),
                'memberName' => '十一明',
                'memberGender' => '男',
                'memberYear' => '1981',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十一明.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '十一明緊急',
                'memberEmergencyRelationship' => '十一明關係',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'L'),
                'memberName' => '十二明',
                'memberGender' => '女',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十二明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '十二明緊急',
                'memberEmergencyRelationship' => '十二明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'M'),
                'memberName' => '十三明',
                'memberGender' => '男',
                'memberYear' => '1983',
                'memberMonth' => '5',
                'memberDay' => '6',
                'memberCity' => '基隆市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十三明.com',
                'memberMobile' => '0955-555-555',
                'memberEmergencyContact' => '十三明緊急',
                'memberEmergencyRelationship' => '十三明關係',
                'memberEmergencyMobile' => '0966-666-666',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'N'),
                'memberName' => '十四明',
                'memberGender' => '女',
                'memberYear' => '1984',
                'memberMonth' => '7',
                'memberDay' => '8',
                'memberCity' => '桃園市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十四明.com',
                'memberMobile' => '0977-777-777',
                'memberEmergencyContact' => '十四明緊急',
                'memberEmergencyRelationship' => '十四明關係',
                'memberEmergencyMobile' => '0988-888-888',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'O'),
                'memberName' => '十五明',
                'memberGender' => '男',
                'memberYear' => '1985',
                'memberMonth' => '9',
                'memberDay' => '10',
                'memberCity' => '新竹市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十五明.com',
                'memberMobile' => '0999-999-999',
                'memberEmergencyContact' => '十五明緊急',
                'memberEmergencyRelationship' => '十五明關係',
                'memberEmergencyMobile' => '0900-000-000',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'P'),
                'memberName' => '十六明',
                'memberGender' => '女',
                'memberYear' => '1986',
                'memberMonth' => '11',
                'memberDay' => '12',
                'memberCity' => '苗栗縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十六明.com',
                'memberMobile' => '0910-123-456',
                'memberEmergencyContact' => '十六明緊急',
                'memberEmergencyRelationship' => '十六明關係',
                'memberEmergencyMobile' => '0920-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'Q'),
                'memberName' => '十七明',
                'memberGender' => '男',
                'memberYear' => '1987',
                'memberMonth' => '1',
                'memberDay' => '3',
                'memberCity' => '台中市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十七明.com',
                'memberMobile' => '0930-123-456',
                'memberEmergencyContact' => '十七明緊急',
                'memberEmergencyRelationship' => '十七明關係',
                'memberEmergencyMobile' => '0940-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'R'),
                'memberName' => '十八明',
                'memberGender' => '女',
                'memberYear' => '1988',
                'memberMonth' => '5',
                'memberDay' => '7',
                'memberCity' => '彰化縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十八明.com',
                'memberMobile' => '0950-123-456',
                'memberEmergencyContact' => '十八明緊急',
                'memberEmergencyRelationship' => '十八明關係',
                'memberEmergencyMobile' => '0960-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'S'),
                'memberName' => '十九明',
                'memberGender' => '男',
                'memberYear' => '1989',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@十九明.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '十九明緊急',
                'memberEmergencyRelationship' => '十九明關係',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'T'),
                'memberName' => '二十明',
                'memberGender' => '女',
                'memberYear' => '1989',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二十明.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '二十明緊急',
                'memberEmergencyRelationship' => '二十明關係',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'U'),
                'memberName' => '二一明',
                'memberGender' => '男',
                'memberYear' => '1981',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二一明.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '十二一明緊急',
                'memberEmergencyRelationship' => '二一明關係',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'V'),
                'memberName' => '二二明',
                'memberGender' => '女',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二二明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二二明緊急',
                'memberEmergencyRelationship' => '二二明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'W'),
                'memberName' => '二三明',
                'memberGender' => '男',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二三明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二三明緊急',
                'memberEmergencyRelationship' => '二三明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'X'),
                'memberName' => '二四明',
                'memberGender' => '女',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二四明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二四明緊急',
                'memberEmergencyRelationship' => '二四明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'Y'),
                'memberName' => '二五明',
                'memberGender' => '男',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二五明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二五明緊急',
                'memberEmergencyRelationship' => '二五明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'Z'),
                'memberName' => '二六明',
                'memberGender' => '女',
                'memberYear' => '1982',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '天下區',
                'memberAddr' => '市府路',
                'memberEmail' => 'email@二六明.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '二六明緊急',
                'memberEmergencyRelationship' => '二六明關係',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
        }
    }
}