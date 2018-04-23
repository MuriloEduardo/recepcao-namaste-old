<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            10 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            16 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            18 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            25 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            26 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 21,
                'role_id' => 3,
            ),
            28 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            29 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 22,
                'role_id' => 3,
            ),
            31 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 23,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 24,
                'role_id' => 3,
            ),
            37 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            38 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            47 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            49 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            50 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            52 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            53 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            55 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            56 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 50,
                'role_id' => 3,
            ),
            58 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            59 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 56,
                'role_id' => 2,
            ),
            61 => 
            array (
                'permission_id' => 56,
                'role_id' => 3,
            ),
            62 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            63 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            65 => 
            array (
                'permission_id' => 57,
                'role_id' => 3,
            ),
            66 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            67 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            69 => 
            array (
                'permission_id' => 58,
                'role_id' => 3,
            ),
            70 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            71 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 59,
                'role_id' => 2,
            ),
            73 => 
            array (
                'permission_id' => 59,
                'role_id' => 3,
            ),
            74 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            75 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            77 => 
            array (
                'permission_id' => 60,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            79 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 61,
                'role_id' => 3,
            ),
            81 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            82 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 62,
                'role_id' => 3,
            ),
            84 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            85 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 63,
                'role_id' => 3,
            ),
            87 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            88 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            89 => 
            array (
                'permission_id' => 64,
                'role_id' => 3,
            ),
            90 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            91 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 65,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            94 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 66,
                'role_id' => 3,
            ),
            96 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            97 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 67,
                'role_id' => 3,
            ),
            99 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            100 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 68,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 69,
                'role_id' => 3,
            ),
            105 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            106 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 70,
                'role_id' => 3,
            ),
            108 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
            109 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            111 => 
            array (
                'permission_id' => 71,
                'role_id' => 3,
            ),
            112 => 
            array (
                'permission_id' => 71,
                'role_id' => 4,
            ),
            113 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 72,
                'role_id' => 2,
            ),
            115 => 
            array (
                'permission_id' => 72,
                'role_id' => 3,
            ),
            116 => 
            array (
                'permission_id' => 72,
                'role_id' => 4,
            ),
            117 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            118 => 
            array (
                'permission_id' => 73,
                'role_id' => 2,
            ),
            119 => 
            array (
                'permission_id' => 73,
                'role_id' => 3,
            ),
            120 => 
            array (
                'permission_id' => 73,
                'role_id' => 4,
            ),
            121 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            122 => 
            array (
                'permission_id' => 74,
                'role_id' => 2,
            ),
            123 => 
            array (
                'permission_id' => 74,
                'role_id' => 3,
            ),
            124 => 
            array (
                'permission_id' => 74,
                'role_id' => 4,
            ),
            125 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            126 => 
            array (
                'permission_id' => 75,
                'role_id' => 2,
            ),
            127 => 
            array (
                'permission_id' => 75,
                'role_id' => 3,
            ),
            128 => 
            array (
                'permission_id' => 75,
                'role_id' => 4,
            ),
            129 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 81,
                'role_id' => 3,
            ),
            131 => 
            array (
                'permission_id' => 81,
                'role_id' => 4,
            ),
            132 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 82,
                'role_id' => 3,
            ),
            134 => 
            array (
                'permission_id' => 82,
                'role_id' => 4,
            ),
            135 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 83,
                'role_id' => 3,
            ),
            137 => 
            array (
                'permission_id' => 83,
                'role_id' => 4,
            ),
            138 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 84,
                'role_id' => 3,
            ),
            140 => 
            array (
                'permission_id' => 84,
                'role_id' => 4,
            ),
            141 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 85,
                'role_id' => 3,
            ),
            143 => 
            array (
                'permission_id' => 85,
                'role_id' => 4,
            ),
            144 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 91,
                'role_id' => 2,
            ),
            146 => 
            array (
                'permission_id' => 91,
                'role_id' => 3,
            ),
            147 => 
            array (
                'permission_id' => 91,
                'role_id' => 4,
            ),
            148 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            149 => 
            array (
                'permission_id' => 92,
                'role_id' => 2,
            ),
            150 => 
            array (
                'permission_id' => 92,
                'role_id' => 3,
            ),
            151 => 
            array (
                'permission_id' => 92,
                'role_id' => 4,
            ),
            152 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 93,
                'role_id' => 2,
            ),
            154 => 
            array (
                'permission_id' => 93,
                'role_id' => 3,
            ),
            155 => 
            array (
                'permission_id' => 93,
                'role_id' => 4,
            ),
            156 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 94,
                'role_id' => 2,
            ),
            158 => 
            array (
                'permission_id' => 94,
                'role_id' => 3,
            ),
            159 => 
            array (
                'permission_id' => 94,
                'role_id' => 4,
            ),
            160 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            161 => 
            array (
                'permission_id' => 95,
                'role_id' => 2,
            ),
            162 => 
            array (
                'permission_id' => 95,
                'role_id' => 3,
            ),
            163 => 
            array (
                'permission_id' => 95,
                'role_id' => 4,
            ),
            164 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 96,
                'role_id' => 2,
            ),
            166 => 
            array (
                'permission_id' => 96,
                'role_id' => 3,
            ),
            167 => 
            array (
                'permission_id' => 96,
                'role_id' => 4,
            ),
            168 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 97,
                'role_id' => 2,
            ),
            170 => 
            array (
                'permission_id' => 97,
                'role_id' => 3,
            ),
            171 => 
            array (
                'permission_id' => 97,
                'role_id' => 4,
            ),
            172 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 98,
                'role_id' => 2,
            ),
            174 => 
            array (
                'permission_id' => 98,
                'role_id' => 3,
            ),
            175 => 
            array (
                'permission_id' => 98,
                'role_id' => 4,
            ),
            176 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            177 => 
            array (
                'permission_id' => 99,
                'role_id' => 2,
            ),
            178 => 
            array (
                'permission_id' => 99,
                'role_id' => 3,
            ),
            179 => 
            array (
                'permission_id' => 99,
                'role_id' => 4,
            ),
            180 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            181 => 
            array (
                'permission_id' => 100,
                'role_id' => 2,
            ),
            182 => 
            array (
                'permission_id' => 100,
                'role_id' => 3,
            ),
            183 => 
            array (
                'permission_id' => 100,
                'role_id' => 4,
            ),
            184 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            185 => 
            array (
                'permission_id' => 101,
                'role_id' => 3,
            ),
            186 => 
            array (
                'permission_id' => 101,
                'role_id' => 4,
            ),
            187 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 102,
                'role_id' => 3,
            ),
            189 => 
            array (
                'permission_id' => 102,
                'role_id' => 4,
            ),
            190 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 103,
                'role_id' => 3,
            ),
            192 => 
            array (
                'permission_id' => 103,
                'role_id' => 4,
            ),
            193 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 104,
                'role_id' => 3,
            ),
            195 => 
            array (
                'permission_id' => 104,
                'role_id' => 4,
            ),
            196 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            197 => 
            array (
                'permission_id' => 105,
                'role_id' => 3,
            ),
            198 => 
            array (
                'permission_id' => 105,
                'role_id' => 4,
            ),
        ));
        
        
    }
}