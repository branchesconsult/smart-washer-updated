<?php

use Illuminate\Database\Seeder;

class PermissionUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_user')->delete();
        
        \DB::table('permission_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 42,
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 34,
                'user_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 38,
                'user_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 29,
                'user_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'permission_id' => 46,
                'user_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'permission_id' => 25,
                'user_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'permission_id' => 44,
                'user_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'permission_id' => 36,
                'user_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'permission_id' => 40,
                'user_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'permission_id' => 31,
                'user_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'permission_id' => 48,
                'user_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'permission_id' => 27,
                'user_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'permission_id' => 43,
                'user_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'permission_id' => 35,
                'user_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'permission_id' => 39,
                'user_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'permission_id' => 30,
                'user_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'permission_id' => 47,
                'user_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'permission_id' => 26,
                'user_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'permission_id' => 8,
                'user_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'permission_id' => 3,
                'user_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'permission_id' => 5,
                'user_id' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'permission_id' => 1,
                'user_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'permission_id' => 33,
                'user_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'permission_id' => 37,
                'user_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'permission_id' => 41,
                'user_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'permission_id' => 6,
                'user_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'permission_id' => 7,
                'user_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'permission_id' => 28,
                'user_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'permission_id' => 45,
                'user_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'permission_id' => 24,
                'user_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'permission_id' => 20,
                'user_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'permission_id' => 16,
                'user_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'permission_id' => 4,
                'user_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'permission_id' => 2,
                'user_id' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'permission_id' => 42,
                'user_id' => 13,
            ),
            35 => 
            array (
                'id' => 36,
                'permission_id' => 34,
                'user_id' => 13,
            ),
            36 => 
            array (
                'id' => 37,
                'permission_id' => 38,
                'user_id' => 13,
            ),
            37 => 
            array (
                'id' => 38,
                'permission_id' => 29,
                'user_id' => 13,
            ),
            38 => 
            array (
                'id' => 39,
                'permission_id' => 46,
                'user_id' => 13,
            ),
            39 => 
            array (
                'id' => 40,
                'permission_id' => 25,
                'user_id' => 13,
            ),
            40 => 
            array (
                'id' => 41,
                'permission_id' => 44,
                'user_id' => 13,
            ),
            41 => 
            array (
                'id' => 42,
                'permission_id' => 36,
                'user_id' => 13,
            ),
            42 => 
            array (
                'id' => 43,
                'permission_id' => 40,
                'user_id' => 13,
            ),
            43 => 
            array (
                'id' => 44,
                'permission_id' => 31,
                'user_id' => 13,
            ),
            44 => 
            array (
                'id' => 45,
                'permission_id' => 48,
                'user_id' => 13,
            ),
            45 => 
            array (
                'id' => 46,
                'permission_id' => 27,
                'user_id' => 13,
            ),
            46 => 
            array (
                'id' => 47,
                'permission_id' => 43,
                'user_id' => 13,
            ),
            47 => 
            array (
                'id' => 48,
                'permission_id' => 35,
                'user_id' => 13,
            ),
            48 => 
            array (
                'id' => 49,
                'permission_id' => 39,
                'user_id' => 13,
            ),
            49 => 
            array (
                'id' => 50,
                'permission_id' => 30,
                'user_id' => 13,
            ),
            50 => 
            array (
                'id' => 51,
                'permission_id' => 47,
                'user_id' => 13,
            ),
            51 => 
            array (
                'id' => 52,
                'permission_id' => 26,
                'user_id' => 13,
            ),
            52 => 
            array (
                'id' => 53,
                'permission_id' => 8,
                'user_id' => 13,
            ),
            53 => 
            array (
                'id' => 54,
                'permission_id' => 3,
                'user_id' => 13,
            ),
            54 => 
            array (
                'id' => 55,
                'permission_id' => 5,
                'user_id' => 13,
            ),
            55 => 
            array (
                'id' => 56,
                'permission_id' => 1,
                'user_id' => 13,
            ),
            56 => 
            array (
                'id' => 57,
                'permission_id' => 33,
                'user_id' => 13,
            ),
            57 => 
            array (
                'id' => 58,
                'permission_id' => 37,
                'user_id' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                'permission_id' => 41,
                'user_id' => 13,
            ),
            59 => 
            array (
                'id' => 60,
                'permission_id' => 6,
                'user_id' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'permission_id' => 7,
                'user_id' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'permission_id' => 28,
                'user_id' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'permission_id' => 45,
                'user_id' => 13,
            ),
            63 => 
            array (
                'id' => 64,
                'permission_id' => 24,
                'user_id' => 13,
            ),
            64 => 
            array (
                'id' => 65,
                'permission_id' => 20,
                'user_id' => 13,
            ),
            65 => 
            array (
                'id' => 66,
                'permission_id' => 16,
                'user_id' => 13,
            ),
            66 => 
            array (
                'id' => 67,
                'permission_id' => 4,
                'user_id' => 13,
            ),
            67 => 
            array (
                'id' => 68,
                'permission_id' => 42,
                'user_id' => 14,
            ),
            68 => 
            array (
                'id' => 69,
                'permission_id' => 34,
                'user_id' => 14,
            ),
            69 => 
            array (
                'id' => 70,
                'permission_id' => 38,
                'user_id' => 14,
            ),
            70 => 
            array (
                'id' => 71,
                'permission_id' => 29,
                'user_id' => 14,
            ),
            71 => 
            array (
                'id' => 72,
                'permission_id' => 46,
                'user_id' => 14,
            ),
            72 => 
            array (
                'id' => 73,
                'permission_id' => 25,
                'user_id' => 14,
            ),
            73 => 
            array (
                'id' => 74,
                'permission_id' => 44,
                'user_id' => 14,
            ),
            74 => 
            array (
                'id' => 75,
                'permission_id' => 36,
                'user_id' => 14,
            ),
            75 => 
            array (
                'id' => 76,
                'permission_id' => 40,
                'user_id' => 14,
            ),
            76 => 
            array (
                'id' => 77,
                'permission_id' => 31,
                'user_id' => 14,
            ),
            77 => 
            array (
                'id' => 78,
                'permission_id' => 48,
                'user_id' => 14,
            ),
            78 => 
            array (
                'id' => 79,
                'permission_id' => 27,
                'user_id' => 14,
            ),
            79 => 
            array (
                'id' => 80,
                'permission_id' => 43,
                'user_id' => 14,
            ),
            80 => 
            array (
                'id' => 81,
                'permission_id' => 35,
                'user_id' => 14,
            ),
            81 => 
            array (
                'id' => 82,
                'permission_id' => 39,
                'user_id' => 14,
            ),
            82 => 
            array (
                'id' => 83,
                'permission_id' => 30,
                'user_id' => 14,
            ),
            83 => 
            array (
                'id' => 84,
                'permission_id' => 47,
                'user_id' => 14,
            ),
            84 => 
            array (
                'id' => 85,
                'permission_id' => 26,
                'user_id' => 14,
            ),
            85 => 
            array (
                'id' => 86,
                'permission_id' => 8,
                'user_id' => 14,
            ),
            86 => 
            array (
                'id' => 87,
                'permission_id' => 3,
                'user_id' => 14,
            ),
            87 => 
            array (
                'id' => 88,
                'permission_id' => 5,
                'user_id' => 14,
            ),
            88 => 
            array (
                'id' => 89,
                'permission_id' => 1,
                'user_id' => 14,
            ),
            89 => 
            array (
                'id' => 90,
                'permission_id' => 33,
                'user_id' => 14,
            ),
            90 => 
            array (
                'id' => 91,
                'permission_id' => 37,
                'user_id' => 14,
            ),
            91 => 
            array (
                'id' => 92,
                'permission_id' => 41,
                'user_id' => 14,
            ),
            92 => 
            array (
                'id' => 93,
                'permission_id' => 6,
                'user_id' => 14,
            ),
            93 => 
            array (
                'id' => 94,
                'permission_id' => 7,
                'user_id' => 14,
            ),
            94 => 
            array (
                'id' => 95,
                'permission_id' => 28,
                'user_id' => 14,
            ),
            95 => 
            array (
                'id' => 96,
                'permission_id' => 45,
                'user_id' => 14,
            ),
            96 => 
            array (
                'id' => 97,
                'permission_id' => 24,
                'user_id' => 14,
            ),
            97 => 
            array (
                'id' => 98,
                'permission_id' => 20,
                'user_id' => 14,
            ),
            98 => 
            array (
                'id' => 99,
                'permission_id' => 16,
                'user_id' => 14,
            ),
            99 => 
            array (
                'id' => 100,
                'permission_id' => 4,
                'user_id' => 14,
            ),
            100 => 
            array (
                'id' => 101,
                'permission_id' => 42,
                'user_id' => 15,
            ),
            101 => 
            array (
                'id' => 102,
                'permission_id' => 34,
                'user_id' => 15,
            ),
            102 => 
            array (
                'id' => 103,
                'permission_id' => 38,
                'user_id' => 15,
            ),
            103 => 
            array (
                'id' => 104,
                'permission_id' => 29,
                'user_id' => 15,
            ),
            104 => 
            array (
                'id' => 105,
                'permission_id' => 46,
                'user_id' => 15,
            ),
            105 => 
            array (
                'id' => 106,
                'permission_id' => 25,
                'user_id' => 15,
            ),
            106 => 
            array (
                'id' => 107,
                'permission_id' => 44,
                'user_id' => 15,
            ),
            107 => 
            array (
                'id' => 108,
                'permission_id' => 36,
                'user_id' => 15,
            ),
            108 => 
            array (
                'id' => 109,
                'permission_id' => 40,
                'user_id' => 15,
            ),
            109 => 
            array (
                'id' => 110,
                'permission_id' => 31,
                'user_id' => 15,
            ),
            110 => 
            array (
                'id' => 111,
                'permission_id' => 48,
                'user_id' => 15,
            ),
            111 => 
            array (
                'id' => 112,
                'permission_id' => 27,
                'user_id' => 15,
            ),
            112 => 
            array (
                'id' => 113,
                'permission_id' => 43,
                'user_id' => 15,
            ),
            113 => 
            array (
                'id' => 114,
                'permission_id' => 35,
                'user_id' => 15,
            ),
            114 => 
            array (
                'id' => 115,
                'permission_id' => 39,
                'user_id' => 15,
            ),
            115 => 
            array (
                'id' => 116,
                'permission_id' => 30,
                'user_id' => 15,
            ),
            116 => 
            array (
                'id' => 117,
                'permission_id' => 47,
                'user_id' => 15,
            ),
            117 => 
            array (
                'id' => 118,
                'permission_id' => 26,
                'user_id' => 15,
            ),
            118 => 
            array (
                'id' => 119,
                'permission_id' => 8,
                'user_id' => 15,
            ),
            119 => 
            array (
                'id' => 120,
                'permission_id' => 3,
                'user_id' => 15,
            ),
            120 => 
            array (
                'id' => 121,
                'permission_id' => 5,
                'user_id' => 15,
            ),
            121 => 
            array (
                'id' => 122,
                'permission_id' => 1,
                'user_id' => 15,
            ),
            122 => 
            array (
                'id' => 123,
                'permission_id' => 33,
                'user_id' => 15,
            ),
            123 => 
            array (
                'id' => 124,
                'permission_id' => 37,
                'user_id' => 15,
            ),
            124 => 
            array (
                'id' => 125,
                'permission_id' => 41,
                'user_id' => 15,
            ),
            125 => 
            array (
                'id' => 126,
                'permission_id' => 6,
                'user_id' => 15,
            ),
            126 => 
            array (
                'id' => 127,
                'permission_id' => 7,
                'user_id' => 15,
            ),
            127 => 
            array (
                'id' => 128,
                'permission_id' => 28,
                'user_id' => 15,
            ),
            128 => 
            array (
                'id' => 129,
                'permission_id' => 45,
                'user_id' => 15,
            ),
            129 => 
            array (
                'id' => 130,
                'permission_id' => 24,
                'user_id' => 15,
            ),
            130 => 
            array (
                'id' => 131,
                'permission_id' => 20,
                'user_id' => 15,
            ),
            131 => 
            array (
                'id' => 132,
                'permission_id' => 16,
                'user_id' => 15,
            ),
            132 => 
            array (
                'id' => 133,
                'permission_id' => 4,
                'user_id' => 15,
            ),
            133 => 
            array (
                'id' => 134,
                'permission_id' => 42,
                'user_id' => 16,
            ),
            134 => 
            array (
                'id' => 135,
                'permission_id' => 34,
                'user_id' => 16,
            ),
            135 => 
            array (
                'id' => 136,
                'permission_id' => 38,
                'user_id' => 16,
            ),
            136 => 
            array (
                'id' => 137,
                'permission_id' => 29,
                'user_id' => 16,
            ),
            137 => 
            array (
                'id' => 138,
                'permission_id' => 46,
                'user_id' => 16,
            ),
            138 => 
            array (
                'id' => 139,
                'permission_id' => 25,
                'user_id' => 16,
            ),
            139 => 
            array (
                'id' => 140,
                'permission_id' => 44,
                'user_id' => 16,
            ),
            140 => 
            array (
                'id' => 141,
                'permission_id' => 36,
                'user_id' => 16,
            ),
            141 => 
            array (
                'id' => 142,
                'permission_id' => 40,
                'user_id' => 16,
            ),
            142 => 
            array (
                'id' => 143,
                'permission_id' => 31,
                'user_id' => 16,
            ),
            143 => 
            array (
                'id' => 144,
                'permission_id' => 48,
                'user_id' => 16,
            ),
            144 => 
            array (
                'id' => 145,
                'permission_id' => 27,
                'user_id' => 16,
            ),
            145 => 
            array (
                'id' => 146,
                'permission_id' => 43,
                'user_id' => 16,
            ),
            146 => 
            array (
                'id' => 147,
                'permission_id' => 35,
                'user_id' => 16,
            ),
            147 => 
            array (
                'id' => 148,
                'permission_id' => 39,
                'user_id' => 16,
            ),
            148 => 
            array (
                'id' => 149,
                'permission_id' => 30,
                'user_id' => 16,
            ),
            149 => 
            array (
                'id' => 150,
                'permission_id' => 47,
                'user_id' => 16,
            ),
            150 => 
            array (
                'id' => 151,
                'permission_id' => 26,
                'user_id' => 16,
            ),
            151 => 
            array (
                'id' => 152,
                'permission_id' => 8,
                'user_id' => 16,
            ),
            152 => 
            array (
                'id' => 153,
                'permission_id' => 3,
                'user_id' => 16,
            ),
            153 => 
            array (
                'id' => 154,
                'permission_id' => 5,
                'user_id' => 16,
            ),
            154 => 
            array (
                'id' => 155,
                'permission_id' => 1,
                'user_id' => 16,
            ),
            155 => 
            array (
                'id' => 156,
                'permission_id' => 33,
                'user_id' => 16,
            ),
            156 => 
            array (
                'id' => 157,
                'permission_id' => 37,
                'user_id' => 16,
            ),
            157 => 
            array (
                'id' => 158,
                'permission_id' => 41,
                'user_id' => 16,
            ),
            158 => 
            array (
                'id' => 159,
                'permission_id' => 6,
                'user_id' => 16,
            ),
            159 => 
            array (
                'id' => 160,
                'permission_id' => 7,
                'user_id' => 16,
            ),
            160 => 
            array (
                'id' => 161,
                'permission_id' => 28,
                'user_id' => 16,
            ),
            161 => 
            array (
                'id' => 162,
                'permission_id' => 45,
                'user_id' => 16,
            ),
            162 => 
            array (
                'id' => 163,
                'permission_id' => 24,
                'user_id' => 16,
            ),
            163 => 
            array (
                'id' => 164,
                'permission_id' => 20,
                'user_id' => 16,
            ),
            164 => 
            array (
                'id' => 165,
                'permission_id' => 16,
                'user_id' => 16,
            ),
            165 => 
            array (
                'id' => 166,
                'permission_id' => 4,
                'user_id' => 16,
            ),
            166 => 
            array (
                'id' => 167,
                'permission_id' => 42,
                'user_id' => 17,
            ),
            167 => 
            array (
                'id' => 168,
                'permission_id' => 34,
                'user_id' => 17,
            ),
            168 => 
            array (
                'id' => 169,
                'permission_id' => 38,
                'user_id' => 17,
            ),
            169 => 
            array (
                'id' => 170,
                'permission_id' => 29,
                'user_id' => 17,
            ),
            170 => 
            array (
                'id' => 171,
                'permission_id' => 46,
                'user_id' => 17,
            ),
            171 => 
            array (
                'id' => 172,
                'permission_id' => 25,
                'user_id' => 17,
            ),
            172 => 
            array (
                'id' => 173,
                'permission_id' => 44,
                'user_id' => 17,
            ),
            173 => 
            array (
                'id' => 174,
                'permission_id' => 36,
                'user_id' => 17,
            ),
            174 => 
            array (
                'id' => 175,
                'permission_id' => 40,
                'user_id' => 17,
            ),
            175 => 
            array (
                'id' => 176,
                'permission_id' => 31,
                'user_id' => 17,
            ),
            176 => 
            array (
                'id' => 177,
                'permission_id' => 48,
                'user_id' => 17,
            ),
            177 => 
            array (
                'id' => 178,
                'permission_id' => 27,
                'user_id' => 17,
            ),
            178 => 
            array (
                'id' => 179,
                'permission_id' => 43,
                'user_id' => 17,
            ),
            179 => 
            array (
                'id' => 180,
                'permission_id' => 35,
                'user_id' => 17,
            ),
            180 => 
            array (
                'id' => 181,
                'permission_id' => 39,
                'user_id' => 17,
            ),
            181 => 
            array (
                'id' => 182,
                'permission_id' => 30,
                'user_id' => 17,
            ),
            182 => 
            array (
                'id' => 183,
                'permission_id' => 47,
                'user_id' => 17,
            ),
            183 => 
            array (
                'id' => 184,
                'permission_id' => 26,
                'user_id' => 17,
            ),
            184 => 
            array (
                'id' => 185,
                'permission_id' => 8,
                'user_id' => 17,
            ),
            185 => 
            array (
                'id' => 186,
                'permission_id' => 3,
                'user_id' => 17,
            ),
            186 => 
            array (
                'id' => 187,
                'permission_id' => 5,
                'user_id' => 17,
            ),
            187 => 
            array (
                'id' => 188,
                'permission_id' => 1,
                'user_id' => 17,
            ),
            188 => 
            array (
                'id' => 189,
                'permission_id' => 33,
                'user_id' => 17,
            ),
            189 => 
            array (
                'id' => 190,
                'permission_id' => 37,
                'user_id' => 17,
            ),
            190 => 
            array (
                'id' => 191,
                'permission_id' => 41,
                'user_id' => 17,
            ),
            191 => 
            array (
                'id' => 192,
                'permission_id' => 6,
                'user_id' => 17,
            ),
            192 => 
            array (
                'id' => 193,
                'permission_id' => 7,
                'user_id' => 17,
            ),
            193 => 
            array (
                'id' => 194,
                'permission_id' => 28,
                'user_id' => 17,
            ),
            194 => 
            array (
                'id' => 195,
                'permission_id' => 45,
                'user_id' => 17,
            ),
            195 => 
            array (
                'id' => 196,
                'permission_id' => 24,
                'user_id' => 17,
            ),
            196 => 
            array (
                'id' => 197,
                'permission_id' => 20,
                'user_id' => 17,
            ),
            197 => 
            array (
                'id' => 198,
                'permission_id' => 16,
                'user_id' => 17,
            ),
            198 => 
            array (
                'id' => 199,
                'permission_id' => 4,
                'user_id' => 17,
            ),
            199 => 
            array (
                'id' => 200,
                'permission_id' => 42,
                'user_id' => 18,
            ),
            200 => 
            array (
                'id' => 201,
                'permission_id' => 34,
                'user_id' => 18,
            ),
            201 => 
            array (
                'id' => 202,
                'permission_id' => 38,
                'user_id' => 18,
            ),
            202 => 
            array (
                'id' => 203,
                'permission_id' => 29,
                'user_id' => 18,
            ),
            203 => 
            array (
                'id' => 204,
                'permission_id' => 46,
                'user_id' => 18,
            ),
            204 => 
            array (
                'id' => 205,
                'permission_id' => 25,
                'user_id' => 18,
            ),
            205 => 
            array (
                'id' => 206,
                'permission_id' => 44,
                'user_id' => 18,
            ),
            206 => 
            array (
                'id' => 207,
                'permission_id' => 36,
                'user_id' => 18,
            ),
            207 => 
            array (
                'id' => 208,
                'permission_id' => 40,
                'user_id' => 18,
            ),
            208 => 
            array (
                'id' => 209,
                'permission_id' => 31,
                'user_id' => 18,
            ),
            209 => 
            array (
                'id' => 210,
                'permission_id' => 48,
                'user_id' => 18,
            ),
            210 => 
            array (
                'id' => 211,
                'permission_id' => 27,
                'user_id' => 18,
            ),
            211 => 
            array (
                'id' => 212,
                'permission_id' => 43,
                'user_id' => 18,
            ),
            212 => 
            array (
                'id' => 213,
                'permission_id' => 35,
                'user_id' => 18,
            ),
            213 => 
            array (
                'id' => 214,
                'permission_id' => 39,
                'user_id' => 18,
            ),
            214 => 
            array (
                'id' => 215,
                'permission_id' => 30,
                'user_id' => 18,
            ),
            215 => 
            array (
                'id' => 216,
                'permission_id' => 47,
                'user_id' => 18,
            ),
            216 => 
            array (
                'id' => 217,
                'permission_id' => 26,
                'user_id' => 18,
            ),
            217 => 
            array (
                'id' => 218,
                'permission_id' => 8,
                'user_id' => 18,
            ),
            218 => 
            array (
                'id' => 219,
                'permission_id' => 3,
                'user_id' => 18,
            ),
            219 => 
            array (
                'id' => 220,
                'permission_id' => 5,
                'user_id' => 18,
            ),
            220 => 
            array (
                'id' => 221,
                'permission_id' => 1,
                'user_id' => 18,
            ),
            221 => 
            array (
                'id' => 222,
                'permission_id' => 33,
                'user_id' => 18,
            ),
            222 => 
            array (
                'id' => 223,
                'permission_id' => 37,
                'user_id' => 18,
            ),
            223 => 
            array (
                'id' => 224,
                'permission_id' => 41,
                'user_id' => 18,
            ),
            224 => 
            array (
                'id' => 225,
                'permission_id' => 6,
                'user_id' => 18,
            ),
            225 => 
            array (
                'id' => 226,
                'permission_id' => 7,
                'user_id' => 18,
            ),
            226 => 
            array (
                'id' => 227,
                'permission_id' => 28,
                'user_id' => 18,
            ),
            227 => 
            array (
                'id' => 228,
                'permission_id' => 45,
                'user_id' => 18,
            ),
            228 => 
            array (
                'id' => 229,
                'permission_id' => 24,
                'user_id' => 18,
            ),
            229 => 
            array (
                'id' => 230,
                'permission_id' => 20,
                'user_id' => 18,
            ),
            230 => 
            array (
                'id' => 231,
                'permission_id' => 16,
                'user_id' => 18,
            ),
            231 => 
            array (
                'id' => 232,
                'permission_id' => 4,
                'user_id' => 18,
            ),
            232 => 
            array (
                'id' => 233,
                'permission_id' => 42,
                'user_id' => 19,
            ),
            233 => 
            array (
                'id' => 234,
                'permission_id' => 34,
                'user_id' => 19,
            ),
            234 => 
            array (
                'id' => 235,
                'permission_id' => 38,
                'user_id' => 19,
            ),
            235 => 
            array (
                'id' => 236,
                'permission_id' => 29,
                'user_id' => 19,
            ),
            236 => 
            array (
                'id' => 237,
                'permission_id' => 46,
                'user_id' => 19,
            ),
            237 => 
            array (
                'id' => 238,
                'permission_id' => 25,
                'user_id' => 19,
            ),
            238 => 
            array (
                'id' => 239,
                'permission_id' => 44,
                'user_id' => 19,
            ),
            239 => 
            array (
                'id' => 240,
                'permission_id' => 36,
                'user_id' => 19,
            ),
            240 => 
            array (
                'id' => 241,
                'permission_id' => 40,
                'user_id' => 19,
            ),
            241 => 
            array (
                'id' => 242,
                'permission_id' => 31,
                'user_id' => 19,
            ),
            242 => 
            array (
                'id' => 243,
                'permission_id' => 48,
                'user_id' => 19,
            ),
            243 => 
            array (
                'id' => 244,
                'permission_id' => 27,
                'user_id' => 19,
            ),
            244 => 
            array (
                'id' => 245,
                'permission_id' => 43,
                'user_id' => 19,
            ),
            245 => 
            array (
                'id' => 246,
                'permission_id' => 35,
                'user_id' => 19,
            ),
            246 => 
            array (
                'id' => 247,
                'permission_id' => 39,
                'user_id' => 19,
            ),
            247 => 
            array (
                'id' => 248,
                'permission_id' => 30,
                'user_id' => 19,
            ),
            248 => 
            array (
                'id' => 249,
                'permission_id' => 47,
                'user_id' => 19,
            ),
            249 => 
            array (
                'id' => 250,
                'permission_id' => 26,
                'user_id' => 19,
            ),
            250 => 
            array (
                'id' => 251,
                'permission_id' => 8,
                'user_id' => 19,
            ),
            251 => 
            array (
                'id' => 252,
                'permission_id' => 3,
                'user_id' => 19,
            ),
            252 => 
            array (
                'id' => 253,
                'permission_id' => 5,
                'user_id' => 19,
            ),
            253 => 
            array (
                'id' => 254,
                'permission_id' => 1,
                'user_id' => 19,
            ),
            254 => 
            array (
                'id' => 255,
                'permission_id' => 33,
                'user_id' => 19,
            ),
            255 => 
            array (
                'id' => 256,
                'permission_id' => 37,
                'user_id' => 19,
            ),
            256 => 
            array (
                'id' => 257,
                'permission_id' => 41,
                'user_id' => 19,
            ),
            257 => 
            array (
                'id' => 258,
                'permission_id' => 6,
                'user_id' => 19,
            ),
            258 => 
            array (
                'id' => 259,
                'permission_id' => 7,
                'user_id' => 19,
            ),
            259 => 
            array (
                'id' => 260,
                'permission_id' => 28,
                'user_id' => 19,
            ),
            260 => 
            array (
                'id' => 261,
                'permission_id' => 45,
                'user_id' => 19,
            ),
            261 => 
            array (
                'id' => 262,
                'permission_id' => 24,
                'user_id' => 19,
            ),
            262 => 
            array (
                'id' => 263,
                'permission_id' => 20,
                'user_id' => 19,
            ),
            263 => 
            array (
                'id' => 264,
                'permission_id' => 16,
                'user_id' => 19,
            ),
            264 => 
            array (
                'id' => 265,
                'permission_id' => 4,
                'user_id' => 19,
            ),
            265 => 
            array (
                'id' => 266,
                'permission_id' => 42,
                'user_id' => 20,
            ),
            266 => 
            array (
                'id' => 267,
                'permission_id' => 34,
                'user_id' => 20,
            ),
            267 => 
            array (
                'id' => 268,
                'permission_id' => 38,
                'user_id' => 20,
            ),
            268 => 
            array (
                'id' => 269,
                'permission_id' => 29,
                'user_id' => 20,
            ),
            269 => 
            array (
                'id' => 270,
                'permission_id' => 46,
                'user_id' => 20,
            ),
            270 => 
            array (
                'id' => 271,
                'permission_id' => 25,
                'user_id' => 20,
            ),
            271 => 
            array (
                'id' => 272,
                'permission_id' => 44,
                'user_id' => 20,
            ),
            272 => 
            array (
                'id' => 273,
                'permission_id' => 36,
                'user_id' => 20,
            ),
            273 => 
            array (
                'id' => 274,
                'permission_id' => 40,
                'user_id' => 20,
            ),
            274 => 
            array (
                'id' => 275,
                'permission_id' => 31,
                'user_id' => 20,
            ),
            275 => 
            array (
                'id' => 276,
                'permission_id' => 48,
                'user_id' => 20,
            ),
            276 => 
            array (
                'id' => 277,
                'permission_id' => 27,
                'user_id' => 20,
            ),
            277 => 
            array (
                'id' => 278,
                'permission_id' => 43,
                'user_id' => 20,
            ),
            278 => 
            array (
                'id' => 279,
                'permission_id' => 35,
                'user_id' => 20,
            ),
            279 => 
            array (
                'id' => 280,
                'permission_id' => 39,
                'user_id' => 20,
            ),
            280 => 
            array (
                'id' => 281,
                'permission_id' => 30,
                'user_id' => 20,
            ),
            281 => 
            array (
                'id' => 282,
                'permission_id' => 47,
                'user_id' => 20,
            ),
            282 => 
            array (
                'id' => 283,
                'permission_id' => 26,
                'user_id' => 20,
            ),
            283 => 
            array (
                'id' => 284,
                'permission_id' => 8,
                'user_id' => 20,
            ),
            284 => 
            array (
                'id' => 285,
                'permission_id' => 3,
                'user_id' => 20,
            ),
            285 => 
            array (
                'id' => 286,
                'permission_id' => 5,
                'user_id' => 20,
            ),
            286 => 
            array (
                'id' => 287,
                'permission_id' => 1,
                'user_id' => 20,
            ),
            287 => 
            array (
                'id' => 288,
                'permission_id' => 33,
                'user_id' => 20,
            ),
            288 => 
            array (
                'id' => 289,
                'permission_id' => 37,
                'user_id' => 20,
            ),
            289 => 
            array (
                'id' => 290,
                'permission_id' => 41,
                'user_id' => 20,
            ),
            290 => 
            array (
                'id' => 291,
                'permission_id' => 6,
                'user_id' => 20,
            ),
            291 => 
            array (
                'id' => 292,
                'permission_id' => 7,
                'user_id' => 20,
            ),
            292 => 
            array (
                'id' => 293,
                'permission_id' => 28,
                'user_id' => 20,
            ),
            293 => 
            array (
                'id' => 294,
                'permission_id' => 45,
                'user_id' => 20,
            ),
            294 => 
            array (
                'id' => 295,
                'permission_id' => 24,
                'user_id' => 20,
            ),
            295 => 
            array (
                'id' => 296,
                'permission_id' => 20,
                'user_id' => 20,
            ),
            296 => 
            array (
                'id' => 297,
                'permission_id' => 16,
                'user_id' => 20,
            ),
            297 => 
            array (
                'id' => 298,
                'permission_id' => 4,
                'user_id' => 20,
            ),
            298 => 
            array (
                'id' => 299,
                'permission_id' => 42,
                'user_id' => 21,
            ),
            299 => 
            array (
                'id' => 300,
                'permission_id' => 34,
                'user_id' => 21,
            ),
            300 => 
            array (
                'id' => 301,
                'permission_id' => 38,
                'user_id' => 21,
            ),
            301 => 
            array (
                'id' => 302,
                'permission_id' => 29,
                'user_id' => 21,
            ),
            302 => 
            array (
                'id' => 303,
                'permission_id' => 46,
                'user_id' => 21,
            ),
            303 => 
            array (
                'id' => 304,
                'permission_id' => 25,
                'user_id' => 21,
            ),
            304 => 
            array (
                'id' => 305,
                'permission_id' => 44,
                'user_id' => 21,
            ),
            305 => 
            array (
                'id' => 306,
                'permission_id' => 36,
                'user_id' => 21,
            ),
            306 => 
            array (
                'id' => 307,
                'permission_id' => 40,
                'user_id' => 21,
            ),
            307 => 
            array (
                'id' => 308,
                'permission_id' => 31,
                'user_id' => 21,
            ),
            308 => 
            array (
                'id' => 309,
                'permission_id' => 48,
                'user_id' => 21,
            ),
            309 => 
            array (
                'id' => 310,
                'permission_id' => 27,
                'user_id' => 21,
            ),
            310 => 
            array (
                'id' => 311,
                'permission_id' => 43,
                'user_id' => 21,
            ),
            311 => 
            array (
                'id' => 312,
                'permission_id' => 35,
                'user_id' => 21,
            ),
            312 => 
            array (
                'id' => 313,
                'permission_id' => 39,
                'user_id' => 21,
            ),
            313 => 
            array (
                'id' => 314,
                'permission_id' => 30,
                'user_id' => 21,
            ),
            314 => 
            array (
                'id' => 315,
                'permission_id' => 47,
                'user_id' => 21,
            ),
            315 => 
            array (
                'id' => 316,
                'permission_id' => 26,
                'user_id' => 21,
            ),
            316 => 
            array (
                'id' => 317,
                'permission_id' => 8,
                'user_id' => 21,
            ),
            317 => 
            array (
                'id' => 318,
                'permission_id' => 3,
                'user_id' => 21,
            ),
            318 => 
            array (
                'id' => 319,
                'permission_id' => 5,
                'user_id' => 21,
            ),
            319 => 
            array (
                'id' => 320,
                'permission_id' => 1,
                'user_id' => 21,
            ),
            320 => 
            array (
                'id' => 321,
                'permission_id' => 33,
                'user_id' => 21,
            ),
            321 => 
            array (
                'id' => 322,
                'permission_id' => 37,
                'user_id' => 21,
            ),
            322 => 
            array (
                'id' => 323,
                'permission_id' => 41,
                'user_id' => 21,
            ),
            323 => 
            array (
                'id' => 324,
                'permission_id' => 6,
                'user_id' => 21,
            ),
            324 => 
            array (
                'id' => 325,
                'permission_id' => 7,
                'user_id' => 21,
            ),
            325 => 
            array (
                'id' => 326,
                'permission_id' => 28,
                'user_id' => 21,
            ),
            326 => 
            array (
                'id' => 327,
                'permission_id' => 45,
                'user_id' => 21,
            ),
            327 => 
            array (
                'id' => 328,
                'permission_id' => 24,
                'user_id' => 21,
            ),
            328 => 
            array (
                'id' => 329,
                'permission_id' => 20,
                'user_id' => 21,
            ),
            329 => 
            array (
                'id' => 330,
                'permission_id' => 16,
                'user_id' => 21,
            ),
            330 => 
            array (
                'id' => 331,
                'permission_id' => 4,
                'user_id' => 21,
            ),
            331 => 
            array (
                'id' => 332,
                'permission_id' => 42,
                'user_id' => 22,
            ),
            332 => 
            array (
                'id' => 333,
                'permission_id' => 34,
                'user_id' => 22,
            ),
            333 => 
            array (
                'id' => 334,
                'permission_id' => 38,
                'user_id' => 22,
            ),
            334 => 
            array (
                'id' => 335,
                'permission_id' => 29,
                'user_id' => 22,
            ),
            335 => 
            array (
                'id' => 336,
                'permission_id' => 46,
                'user_id' => 22,
            ),
            336 => 
            array (
                'id' => 337,
                'permission_id' => 25,
                'user_id' => 22,
            ),
            337 => 
            array (
                'id' => 338,
                'permission_id' => 44,
                'user_id' => 22,
            ),
            338 => 
            array (
                'id' => 339,
                'permission_id' => 36,
                'user_id' => 22,
            ),
            339 => 
            array (
                'id' => 340,
                'permission_id' => 40,
                'user_id' => 22,
            ),
            340 => 
            array (
                'id' => 341,
                'permission_id' => 31,
                'user_id' => 22,
            ),
            341 => 
            array (
                'id' => 342,
                'permission_id' => 48,
                'user_id' => 22,
            ),
            342 => 
            array (
                'id' => 343,
                'permission_id' => 27,
                'user_id' => 22,
            ),
            343 => 
            array (
                'id' => 344,
                'permission_id' => 43,
                'user_id' => 22,
            ),
            344 => 
            array (
                'id' => 345,
                'permission_id' => 35,
                'user_id' => 22,
            ),
            345 => 
            array (
                'id' => 346,
                'permission_id' => 39,
                'user_id' => 22,
            ),
            346 => 
            array (
                'id' => 347,
                'permission_id' => 30,
                'user_id' => 22,
            ),
            347 => 
            array (
                'id' => 348,
                'permission_id' => 47,
                'user_id' => 22,
            ),
            348 => 
            array (
                'id' => 349,
                'permission_id' => 26,
                'user_id' => 22,
            ),
            349 => 
            array (
                'id' => 350,
                'permission_id' => 8,
                'user_id' => 22,
            ),
            350 => 
            array (
                'id' => 351,
                'permission_id' => 3,
                'user_id' => 22,
            ),
            351 => 
            array (
                'id' => 352,
                'permission_id' => 5,
                'user_id' => 22,
            ),
            352 => 
            array (
                'id' => 353,
                'permission_id' => 1,
                'user_id' => 22,
            ),
            353 => 
            array (
                'id' => 354,
                'permission_id' => 33,
                'user_id' => 22,
            ),
            354 => 
            array (
                'id' => 355,
                'permission_id' => 37,
                'user_id' => 22,
            ),
            355 => 
            array (
                'id' => 356,
                'permission_id' => 41,
                'user_id' => 22,
            ),
            356 => 
            array (
                'id' => 357,
                'permission_id' => 6,
                'user_id' => 22,
            ),
            357 => 
            array (
                'id' => 358,
                'permission_id' => 7,
                'user_id' => 22,
            ),
            358 => 
            array (
                'id' => 359,
                'permission_id' => 28,
                'user_id' => 22,
            ),
            359 => 
            array (
                'id' => 360,
                'permission_id' => 45,
                'user_id' => 22,
            ),
            360 => 
            array (
                'id' => 361,
                'permission_id' => 24,
                'user_id' => 22,
            ),
            361 => 
            array (
                'id' => 362,
                'permission_id' => 20,
                'user_id' => 22,
            ),
            362 => 
            array (
                'id' => 363,
                'permission_id' => 16,
                'user_id' => 22,
            ),
            363 => 
            array (
                'id' => 364,
                'permission_id' => 4,
                'user_id' => 22,
            ),
            364 => 
            array (
                'id' => 365,
                'permission_id' => 42,
                'user_id' => 23,
            ),
            365 => 
            array (
                'id' => 366,
                'permission_id' => 34,
                'user_id' => 23,
            ),
            366 => 
            array (
                'id' => 367,
                'permission_id' => 38,
                'user_id' => 23,
            ),
            367 => 
            array (
                'id' => 368,
                'permission_id' => 29,
                'user_id' => 23,
            ),
            368 => 
            array (
                'id' => 369,
                'permission_id' => 46,
                'user_id' => 23,
            ),
            369 => 
            array (
                'id' => 370,
                'permission_id' => 25,
                'user_id' => 23,
            ),
            370 => 
            array (
                'id' => 371,
                'permission_id' => 44,
                'user_id' => 23,
            ),
            371 => 
            array (
                'id' => 372,
                'permission_id' => 36,
                'user_id' => 23,
            ),
            372 => 
            array (
                'id' => 373,
                'permission_id' => 40,
                'user_id' => 23,
            ),
            373 => 
            array (
                'id' => 374,
                'permission_id' => 31,
                'user_id' => 23,
            ),
            374 => 
            array (
                'id' => 375,
                'permission_id' => 48,
                'user_id' => 23,
            ),
            375 => 
            array (
                'id' => 376,
                'permission_id' => 27,
                'user_id' => 23,
            ),
            376 => 
            array (
                'id' => 377,
                'permission_id' => 43,
                'user_id' => 23,
            ),
            377 => 
            array (
                'id' => 378,
                'permission_id' => 35,
                'user_id' => 23,
            ),
            378 => 
            array (
                'id' => 379,
                'permission_id' => 39,
                'user_id' => 23,
            ),
            379 => 
            array (
                'id' => 380,
                'permission_id' => 30,
                'user_id' => 23,
            ),
            380 => 
            array (
                'id' => 381,
                'permission_id' => 47,
                'user_id' => 23,
            ),
            381 => 
            array (
                'id' => 382,
                'permission_id' => 26,
                'user_id' => 23,
            ),
            382 => 
            array (
                'id' => 383,
                'permission_id' => 8,
                'user_id' => 23,
            ),
            383 => 
            array (
                'id' => 384,
                'permission_id' => 3,
                'user_id' => 23,
            ),
            384 => 
            array (
                'id' => 385,
                'permission_id' => 5,
                'user_id' => 23,
            ),
            385 => 
            array (
                'id' => 386,
                'permission_id' => 1,
                'user_id' => 23,
            ),
            386 => 
            array (
                'id' => 387,
                'permission_id' => 33,
                'user_id' => 23,
            ),
            387 => 
            array (
                'id' => 388,
                'permission_id' => 37,
                'user_id' => 23,
            ),
            388 => 
            array (
                'id' => 389,
                'permission_id' => 41,
                'user_id' => 23,
            ),
            389 => 
            array (
                'id' => 390,
                'permission_id' => 6,
                'user_id' => 23,
            ),
            390 => 
            array (
                'id' => 391,
                'permission_id' => 7,
                'user_id' => 23,
            ),
            391 => 
            array (
                'id' => 392,
                'permission_id' => 28,
                'user_id' => 23,
            ),
            392 => 
            array (
                'id' => 393,
                'permission_id' => 45,
                'user_id' => 23,
            ),
            393 => 
            array (
                'id' => 394,
                'permission_id' => 24,
                'user_id' => 23,
            ),
            394 => 
            array (
                'id' => 395,
                'permission_id' => 20,
                'user_id' => 23,
            ),
            395 => 
            array (
                'id' => 396,
                'permission_id' => 16,
                'user_id' => 23,
            ),
            396 => 
            array (
                'id' => 397,
                'permission_id' => 4,
                'user_id' => 23,
            ),
            397 => 
            array (
                'id' => 398,
                'permission_id' => 42,
                'user_id' => 24,
            ),
            398 => 
            array (
                'id' => 399,
                'permission_id' => 34,
                'user_id' => 24,
            ),
            399 => 
            array (
                'id' => 400,
                'permission_id' => 38,
                'user_id' => 24,
            ),
            400 => 
            array (
                'id' => 401,
                'permission_id' => 29,
                'user_id' => 24,
            ),
            401 => 
            array (
                'id' => 402,
                'permission_id' => 46,
                'user_id' => 24,
            ),
            402 => 
            array (
                'id' => 403,
                'permission_id' => 25,
                'user_id' => 24,
            ),
            403 => 
            array (
                'id' => 404,
                'permission_id' => 44,
                'user_id' => 24,
            ),
            404 => 
            array (
                'id' => 405,
                'permission_id' => 36,
                'user_id' => 24,
            ),
            405 => 
            array (
                'id' => 406,
                'permission_id' => 40,
                'user_id' => 24,
            ),
            406 => 
            array (
                'id' => 407,
                'permission_id' => 31,
                'user_id' => 24,
            ),
            407 => 
            array (
                'id' => 408,
                'permission_id' => 48,
                'user_id' => 24,
            ),
            408 => 
            array (
                'id' => 409,
                'permission_id' => 27,
                'user_id' => 24,
            ),
            409 => 
            array (
                'id' => 410,
                'permission_id' => 43,
                'user_id' => 24,
            ),
            410 => 
            array (
                'id' => 411,
                'permission_id' => 35,
                'user_id' => 24,
            ),
            411 => 
            array (
                'id' => 412,
                'permission_id' => 39,
                'user_id' => 24,
            ),
            412 => 
            array (
                'id' => 413,
                'permission_id' => 30,
                'user_id' => 24,
            ),
            413 => 
            array (
                'id' => 414,
                'permission_id' => 47,
                'user_id' => 24,
            ),
            414 => 
            array (
                'id' => 415,
                'permission_id' => 26,
                'user_id' => 24,
            ),
            415 => 
            array (
                'id' => 416,
                'permission_id' => 8,
                'user_id' => 24,
            ),
            416 => 
            array (
                'id' => 417,
                'permission_id' => 3,
                'user_id' => 24,
            ),
            417 => 
            array (
                'id' => 418,
                'permission_id' => 5,
                'user_id' => 24,
            ),
            418 => 
            array (
                'id' => 419,
                'permission_id' => 1,
                'user_id' => 24,
            ),
            419 => 
            array (
                'id' => 420,
                'permission_id' => 33,
                'user_id' => 24,
            ),
            420 => 
            array (
                'id' => 421,
                'permission_id' => 37,
                'user_id' => 24,
            ),
            421 => 
            array (
                'id' => 422,
                'permission_id' => 41,
                'user_id' => 24,
            ),
            422 => 
            array (
                'id' => 423,
                'permission_id' => 6,
                'user_id' => 24,
            ),
            423 => 
            array (
                'id' => 424,
                'permission_id' => 7,
                'user_id' => 24,
            ),
            424 => 
            array (
                'id' => 425,
                'permission_id' => 28,
                'user_id' => 24,
            ),
            425 => 
            array (
                'id' => 426,
                'permission_id' => 45,
                'user_id' => 24,
            ),
            426 => 
            array (
                'id' => 427,
                'permission_id' => 24,
                'user_id' => 24,
            ),
            427 => 
            array (
                'id' => 428,
                'permission_id' => 20,
                'user_id' => 24,
            ),
            428 => 
            array (
                'id' => 429,
                'permission_id' => 16,
                'user_id' => 24,
            ),
            429 => 
            array (
                'id' => 430,
                'permission_id' => 4,
                'user_id' => 24,
            ),
            430 => 
            array (
                'id' => 431,
                'permission_id' => 42,
                'user_id' => 25,
            ),
            431 => 
            array (
                'id' => 432,
                'permission_id' => 34,
                'user_id' => 25,
            ),
            432 => 
            array (
                'id' => 433,
                'permission_id' => 38,
                'user_id' => 25,
            ),
            433 => 
            array (
                'id' => 434,
                'permission_id' => 29,
                'user_id' => 25,
            ),
            434 => 
            array (
                'id' => 435,
                'permission_id' => 46,
                'user_id' => 25,
            ),
            435 => 
            array (
                'id' => 436,
                'permission_id' => 25,
                'user_id' => 25,
            ),
            436 => 
            array (
                'id' => 437,
                'permission_id' => 44,
                'user_id' => 25,
            ),
            437 => 
            array (
                'id' => 438,
                'permission_id' => 36,
                'user_id' => 25,
            ),
            438 => 
            array (
                'id' => 439,
                'permission_id' => 40,
                'user_id' => 25,
            ),
            439 => 
            array (
                'id' => 440,
                'permission_id' => 31,
                'user_id' => 25,
            ),
            440 => 
            array (
                'id' => 441,
                'permission_id' => 48,
                'user_id' => 25,
            ),
            441 => 
            array (
                'id' => 442,
                'permission_id' => 27,
                'user_id' => 25,
            ),
            442 => 
            array (
                'id' => 443,
                'permission_id' => 43,
                'user_id' => 25,
            ),
            443 => 
            array (
                'id' => 444,
                'permission_id' => 35,
                'user_id' => 25,
            ),
            444 => 
            array (
                'id' => 445,
                'permission_id' => 39,
                'user_id' => 25,
            ),
            445 => 
            array (
                'id' => 446,
                'permission_id' => 30,
                'user_id' => 25,
            ),
            446 => 
            array (
                'id' => 447,
                'permission_id' => 47,
                'user_id' => 25,
            ),
            447 => 
            array (
                'id' => 448,
                'permission_id' => 26,
                'user_id' => 25,
            ),
            448 => 
            array (
                'id' => 449,
                'permission_id' => 8,
                'user_id' => 25,
            ),
            449 => 
            array (
                'id' => 450,
                'permission_id' => 3,
                'user_id' => 25,
            ),
            450 => 
            array (
                'id' => 451,
                'permission_id' => 5,
                'user_id' => 25,
            ),
            451 => 
            array (
                'id' => 452,
                'permission_id' => 1,
                'user_id' => 25,
            ),
            452 => 
            array (
                'id' => 453,
                'permission_id' => 33,
                'user_id' => 25,
            ),
            453 => 
            array (
                'id' => 454,
                'permission_id' => 37,
                'user_id' => 25,
            ),
            454 => 
            array (
                'id' => 455,
                'permission_id' => 41,
                'user_id' => 25,
            ),
            455 => 
            array (
                'id' => 456,
                'permission_id' => 6,
                'user_id' => 25,
            ),
            456 => 
            array (
                'id' => 457,
                'permission_id' => 7,
                'user_id' => 25,
            ),
            457 => 
            array (
                'id' => 458,
                'permission_id' => 28,
                'user_id' => 25,
            ),
            458 => 
            array (
                'id' => 459,
                'permission_id' => 45,
                'user_id' => 25,
            ),
            459 => 
            array (
                'id' => 460,
                'permission_id' => 24,
                'user_id' => 25,
            ),
            460 => 
            array (
                'id' => 461,
                'permission_id' => 20,
                'user_id' => 25,
            ),
            461 => 
            array (
                'id' => 462,
                'permission_id' => 16,
                'user_id' => 25,
            ),
            462 => 
            array (
                'id' => 463,
                'permission_id' => 4,
                'user_id' => 25,
            ),
            463 => 
            array (
                'id' => 464,
                'permission_id' => 42,
                'user_id' => 26,
            ),
            464 => 
            array (
                'id' => 465,
                'permission_id' => 34,
                'user_id' => 26,
            ),
            465 => 
            array (
                'id' => 466,
                'permission_id' => 38,
                'user_id' => 26,
            ),
            466 => 
            array (
                'id' => 467,
                'permission_id' => 29,
                'user_id' => 26,
            ),
            467 => 
            array (
                'id' => 468,
                'permission_id' => 46,
                'user_id' => 26,
            ),
            468 => 
            array (
                'id' => 469,
                'permission_id' => 25,
                'user_id' => 26,
            ),
            469 => 
            array (
                'id' => 470,
                'permission_id' => 44,
                'user_id' => 26,
            ),
            470 => 
            array (
                'id' => 471,
                'permission_id' => 36,
                'user_id' => 26,
            ),
            471 => 
            array (
                'id' => 472,
                'permission_id' => 40,
                'user_id' => 26,
            ),
            472 => 
            array (
                'id' => 473,
                'permission_id' => 31,
                'user_id' => 26,
            ),
            473 => 
            array (
                'id' => 474,
                'permission_id' => 48,
                'user_id' => 26,
            ),
            474 => 
            array (
                'id' => 475,
                'permission_id' => 27,
                'user_id' => 26,
            ),
            475 => 
            array (
                'id' => 476,
                'permission_id' => 43,
                'user_id' => 26,
            ),
            476 => 
            array (
                'id' => 477,
                'permission_id' => 35,
                'user_id' => 26,
            ),
            477 => 
            array (
                'id' => 478,
                'permission_id' => 39,
                'user_id' => 26,
            ),
            478 => 
            array (
                'id' => 479,
                'permission_id' => 30,
                'user_id' => 26,
            ),
            479 => 
            array (
                'id' => 480,
                'permission_id' => 47,
                'user_id' => 26,
            ),
            480 => 
            array (
                'id' => 481,
                'permission_id' => 26,
                'user_id' => 26,
            ),
            481 => 
            array (
                'id' => 482,
                'permission_id' => 8,
                'user_id' => 26,
            ),
            482 => 
            array (
                'id' => 483,
                'permission_id' => 3,
                'user_id' => 26,
            ),
            483 => 
            array (
                'id' => 484,
                'permission_id' => 5,
                'user_id' => 26,
            ),
            484 => 
            array (
                'id' => 485,
                'permission_id' => 1,
                'user_id' => 26,
            ),
            485 => 
            array (
                'id' => 486,
                'permission_id' => 33,
                'user_id' => 26,
            ),
            486 => 
            array (
                'id' => 487,
                'permission_id' => 37,
                'user_id' => 26,
            ),
            487 => 
            array (
                'id' => 488,
                'permission_id' => 41,
                'user_id' => 26,
            ),
            488 => 
            array (
                'id' => 489,
                'permission_id' => 6,
                'user_id' => 26,
            ),
            489 => 
            array (
                'id' => 490,
                'permission_id' => 7,
                'user_id' => 26,
            ),
            490 => 
            array (
                'id' => 491,
                'permission_id' => 28,
                'user_id' => 26,
            ),
            491 => 
            array (
                'id' => 492,
                'permission_id' => 45,
                'user_id' => 26,
            ),
            492 => 
            array (
                'id' => 493,
                'permission_id' => 24,
                'user_id' => 26,
            ),
            493 => 
            array (
                'id' => 494,
                'permission_id' => 20,
                'user_id' => 26,
            ),
            494 => 
            array (
                'id' => 495,
                'permission_id' => 16,
                'user_id' => 26,
            ),
            495 => 
            array (
                'id' => 496,
                'permission_id' => 4,
                'user_id' => 26,
            ),
            496 => 
            array (
                'id' => 497,
                'permission_id' => 42,
                'user_id' => 27,
            ),
            497 => 
            array (
                'id' => 498,
                'permission_id' => 34,
                'user_id' => 27,
            ),
            498 => 
            array (
                'id' => 499,
                'permission_id' => 38,
                'user_id' => 27,
            ),
            499 => 
            array (
                'id' => 500,
                'permission_id' => 29,
                'user_id' => 27,
            ),
        ));
        \DB::table('permission_user')->insert(array (
            0 => 
            array (
                'id' => 501,
                'permission_id' => 46,
                'user_id' => 27,
            ),
            1 => 
            array (
                'id' => 502,
                'permission_id' => 25,
                'user_id' => 27,
            ),
            2 => 
            array (
                'id' => 503,
                'permission_id' => 44,
                'user_id' => 27,
            ),
            3 => 
            array (
                'id' => 504,
                'permission_id' => 36,
                'user_id' => 27,
            ),
            4 => 
            array (
                'id' => 505,
                'permission_id' => 40,
                'user_id' => 27,
            ),
            5 => 
            array (
                'id' => 506,
                'permission_id' => 31,
                'user_id' => 27,
            ),
            6 => 
            array (
                'id' => 507,
                'permission_id' => 48,
                'user_id' => 27,
            ),
            7 => 
            array (
                'id' => 508,
                'permission_id' => 27,
                'user_id' => 27,
            ),
            8 => 
            array (
                'id' => 509,
                'permission_id' => 43,
                'user_id' => 27,
            ),
            9 => 
            array (
                'id' => 510,
                'permission_id' => 35,
                'user_id' => 27,
            ),
            10 => 
            array (
                'id' => 511,
                'permission_id' => 39,
                'user_id' => 27,
            ),
            11 => 
            array (
                'id' => 512,
                'permission_id' => 30,
                'user_id' => 27,
            ),
            12 => 
            array (
                'id' => 513,
                'permission_id' => 47,
                'user_id' => 27,
            ),
            13 => 
            array (
                'id' => 514,
                'permission_id' => 26,
                'user_id' => 27,
            ),
            14 => 
            array (
                'id' => 515,
                'permission_id' => 8,
                'user_id' => 27,
            ),
            15 => 
            array (
                'id' => 516,
                'permission_id' => 3,
                'user_id' => 27,
            ),
            16 => 
            array (
                'id' => 517,
                'permission_id' => 5,
                'user_id' => 27,
            ),
            17 => 
            array (
                'id' => 518,
                'permission_id' => 1,
                'user_id' => 27,
            ),
            18 => 
            array (
                'id' => 519,
                'permission_id' => 33,
                'user_id' => 27,
            ),
            19 => 
            array (
                'id' => 520,
                'permission_id' => 37,
                'user_id' => 27,
            ),
            20 => 
            array (
                'id' => 521,
                'permission_id' => 41,
                'user_id' => 27,
            ),
            21 => 
            array (
                'id' => 522,
                'permission_id' => 6,
                'user_id' => 27,
            ),
            22 => 
            array (
                'id' => 523,
                'permission_id' => 7,
                'user_id' => 27,
            ),
            23 => 
            array (
                'id' => 524,
                'permission_id' => 28,
                'user_id' => 27,
            ),
            24 => 
            array (
                'id' => 525,
                'permission_id' => 45,
                'user_id' => 27,
            ),
            25 => 
            array (
                'id' => 526,
                'permission_id' => 24,
                'user_id' => 27,
            ),
            26 => 
            array (
                'id' => 527,
                'permission_id' => 20,
                'user_id' => 27,
            ),
            27 => 
            array (
                'id' => 528,
                'permission_id' => 16,
                'user_id' => 27,
            ),
            28 => 
            array (
                'id' => 529,
                'permission_id' => 4,
                'user_id' => 27,
            ),
            29 => 
            array (
                'id' => 530,
                'permission_id' => 1,
                'user_id' => 28,
            ),
            30 => 
            array (
                'id' => 531,
                'permission_id' => 2,
                'user_id' => 28,
            ),
            31 => 
            array (
                'id' => 532,
                'permission_id' => 3,
                'user_id' => 28,
            ),
            32 => 
            array (
                'id' => 533,
                'permission_id' => 4,
                'user_id' => 28,
            ),
            33 => 
            array (
                'id' => 534,
                'permission_id' => 5,
                'user_id' => 28,
            ),
            34 => 
            array (
                'id' => 535,
                'permission_id' => 6,
                'user_id' => 28,
            ),
            35 => 
            array (
                'id' => 536,
                'permission_id' => 7,
                'user_id' => 28,
            ),
            36 => 
            array (
                'id' => 537,
                'permission_id' => 8,
                'user_id' => 28,
            ),
            37 => 
            array (
                'id' => 538,
                'permission_id' => 9,
                'user_id' => 28,
            ),
            38 => 
            array (
                'id' => 539,
                'permission_id' => 10,
                'user_id' => 28,
            ),
            39 => 
            array (
                'id' => 540,
                'permission_id' => 11,
                'user_id' => 28,
            ),
            40 => 
            array (
                'id' => 541,
                'permission_id' => 12,
                'user_id' => 28,
            ),
            41 => 
            array (
                'id' => 542,
                'permission_id' => 13,
                'user_id' => 28,
            ),
            42 => 
            array (
                'id' => 543,
                'permission_id' => 14,
                'user_id' => 28,
            ),
            43 => 
            array (
                'id' => 544,
                'permission_id' => 15,
                'user_id' => 28,
            ),
            44 => 
            array (
                'id' => 545,
                'permission_id' => 16,
                'user_id' => 28,
            ),
            45 => 
            array (
                'id' => 546,
                'permission_id' => 17,
                'user_id' => 28,
            ),
            46 => 
            array (
                'id' => 547,
                'permission_id' => 18,
                'user_id' => 28,
            ),
            47 => 
            array (
                'id' => 548,
                'permission_id' => 19,
                'user_id' => 28,
            ),
            48 => 
            array (
                'id' => 549,
                'permission_id' => 20,
                'user_id' => 28,
            ),
            49 => 
            array (
                'id' => 550,
                'permission_id' => 21,
                'user_id' => 28,
            ),
            50 => 
            array (
                'id' => 551,
                'permission_id' => 22,
                'user_id' => 28,
            ),
            51 => 
            array (
                'id' => 552,
                'permission_id' => 23,
                'user_id' => 28,
            ),
            52 => 
            array (
                'id' => 553,
                'permission_id' => 24,
                'user_id' => 28,
            ),
            53 => 
            array (
                'id' => 554,
                'permission_id' => 25,
                'user_id' => 28,
            ),
            54 => 
            array (
                'id' => 555,
                'permission_id' => 26,
                'user_id' => 28,
            ),
            55 => 
            array (
                'id' => 556,
                'permission_id' => 27,
                'user_id' => 28,
            ),
            56 => 
            array (
                'id' => 557,
                'permission_id' => 28,
                'user_id' => 28,
            ),
            57 => 
            array (
                'id' => 558,
                'permission_id' => 29,
                'user_id' => 28,
            ),
            58 => 
            array (
                'id' => 559,
                'permission_id' => 30,
                'user_id' => 28,
            ),
            59 => 
            array (
                'id' => 560,
                'permission_id' => 31,
                'user_id' => 28,
            ),
            60 => 
            array (
                'id' => 561,
                'permission_id' => 32,
                'user_id' => 28,
            ),
            61 => 
            array (
                'id' => 562,
                'permission_id' => 33,
                'user_id' => 28,
            ),
            62 => 
            array (
                'id' => 563,
                'permission_id' => 34,
                'user_id' => 28,
            ),
            63 => 
            array (
                'id' => 564,
                'permission_id' => 35,
                'user_id' => 28,
            ),
            64 => 
            array (
                'id' => 565,
                'permission_id' => 36,
                'user_id' => 28,
            ),
            65 => 
            array (
                'id' => 566,
                'permission_id' => 37,
                'user_id' => 28,
            ),
            66 => 
            array (
                'id' => 567,
                'permission_id' => 38,
                'user_id' => 28,
            ),
            67 => 
            array (
                'id' => 568,
                'permission_id' => 39,
                'user_id' => 28,
            ),
            68 => 
            array (
                'id' => 569,
                'permission_id' => 40,
                'user_id' => 28,
            ),
            69 => 
            array (
                'id' => 570,
                'permission_id' => 41,
                'user_id' => 28,
            ),
            70 => 
            array (
                'id' => 571,
                'permission_id' => 42,
                'user_id' => 28,
            ),
            71 => 
            array (
                'id' => 572,
                'permission_id' => 43,
                'user_id' => 28,
            ),
            72 => 
            array (
                'id' => 573,
                'permission_id' => 44,
                'user_id' => 28,
            ),
            73 => 
            array (
                'id' => 574,
                'permission_id' => 45,
                'user_id' => 28,
            ),
            74 => 
            array (
                'id' => 575,
                'permission_id' => 46,
                'user_id' => 28,
            ),
            75 => 
            array (
                'id' => 576,
                'permission_id' => 47,
                'user_id' => 28,
            ),
            76 => 
            array (
                'id' => 577,
                'permission_id' => 48,
                'user_id' => 28,
            ),
            77 => 
            array (
                'id' => 578,
                'permission_id' => 49,
                'user_id' => 28,
            ),
            78 => 
            array (
                'id' => 579,
                'permission_id' => 50,
                'user_id' => 28,
            ),
            79 => 
            array (
                'id' => 580,
                'permission_id' => 51,
                'user_id' => 28,
            ),
            80 => 
            array (
                'id' => 581,
                'permission_id' => 52,
                'user_id' => 28,
            ),
            81 => 
            array (
                'id' => 582,
                'permission_id' => 53,
                'user_id' => 28,
            ),
            82 => 
            array (
                'id' => 583,
                'permission_id' => 54,
                'user_id' => 28,
            ),
            83 => 
            array (
                'id' => 584,
                'permission_id' => 55,
                'user_id' => 28,
            ),
            84 => 
            array (
                'id' => 585,
                'permission_id' => 56,
                'user_id' => 28,
            ),
            85 => 
            array (
                'id' => 586,
                'permission_id' => 57,
                'user_id' => 28,
            ),
            86 => 
            array (
                'id' => 587,
                'permission_id' => 58,
                'user_id' => 28,
            ),
            87 => 
            array (
                'id' => 588,
                'permission_id' => 59,
                'user_id' => 28,
            ),
            88 => 
            array (
                'id' => 589,
                'permission_id' => 60,
                'user_id' => 28,
            ),
            89 => 
            array (
                'id' => 590,
                'permission_id' => 61,
                'user_id' => 28,
            ),
            90 => 
            array (
                'id' => 591,
                'permission_id' => 62,
                'user_id' => 28,
            ),
            91 => 
            array (
                'id' => 592,
                'permission_id' => 63,
                'user_id' => 28,
            ),
            92 => 
            array (
                'id' => 593,
                'permission_id' => 64,
                'user_id' => 28,
            ),
            93 => 
            array (
                'id' => 594,
                'permission_id' => 65,
                'user_id' => 28,
            ),
            94 => 
            array (
                'id' => 595,
                'permission_id' => 66,
                'user_id' => 28,
            ),
            95 => 
            array (
                'id' => 596,
                'permission_id' => 67,
                'user_id' => 28,
            ),
            96 => 
            array (
                'id' => 597,
                'permission_id' => 68,
                'user_id' => 28,
            ),
            97 => 
            array (
                'id' => 598,
                'permission_id' => 69,
                'user_id' => 28,
            ),
            98 => 
            array (
                'id' => 599,
                'permission_id' => 70,
                'user_id' => 28,
            ),
            99 => 
            array (
                'id' => 600,
                'permission_id' => 71,
                'user_id' => 28,
            ),
            100 => 
            array (
                'id' => 601,
                'permission_id' => 72,
                'user_id' => 28,
            ),
            101 => 
            array (
                'id' => 602,
                'permission_id' => 73,
                'user_id' => 28,
            ),
            102 => 
            array (
                'id' => 603,
                'permission_id' => 74,
                'user_id' => 28,
            ),
            103 => 
            array (
                'id' => 604,
                'permission_id' => 75,
                'user_id' => 28,
            ),
            104 => 
            array (
                'id' => 605,
                'permission_id' => 76,
                'user_id' => 28,
            ),
            105 => 
            array (
                'id' => 606,
                'permission_id' => 77,
                'user_id' => 28,
            ),
            106 => 
            array (
                'id' => 607,
                'permission_id' => 78,
                'user_id' => 28,
            ),
            107 => 
            array (
                'id' => 608,
                'permission_id' => 42,
                'user_id' => 29,
            ),
            108 => 
            array (
                'id' => 609,
                'permission_id' => 34,
                'user_id' => 29,
            ),
            109 => 
            array (
                'id' => 610,
                'permission_id' => 38,
                'user_id' => 29,
            ),
            110 => 
            array (
                'id' => 611,
                'permission_id' => 29,
                'user_id' => 29,
            ),
            111 => 
            array (
                'id' => 612,
                'permission_id' => 46,
                'user_id' => 29,
            ),
            112 => 
            array (
                'id' => 613,
                'permission_id' => 25,
                'user_id' => 29,
            ),
            113 => 
            array (
                'id' => 614,
                'permission_id' => 44,
                'user_id' => 29,
            ),
            114 => 
            array (
                'id' => 615,
                'permission_id' => 36,
                'user_id' => 29,
            ),
            115 => 
            array (
                'id' => 616,
                'permission_id' => 40,
                'user_id' => 29,
            ),
            116 => 
            array (
                'id' => 617,
                'permission_id' => 31,
                'user_id' => 29,
            ),
            117 => 
            array (
                'id' => 618,
                'permission_id' => 48,
                'user_id' => 29,
            ),
            118 => 
            array (
                'id' => 619,
                'permission_id' => 27,
                'user_id' => 29,
            ),
            119 => 
            array (
                'id' => 620,
                'permission_id' => 43,
                'user_id' => 29,
            ),
            120 => 
            array (
                'id' => 621,
                'permission_id' => 35,
                'user_id' => 29,
            ),
            121 => 
            array (
                'id' => 622,
                'permission_id' => 39,
                'user_id' => 29,
            ),
            122 => 
            array (
                'id' => 623,
                'permission_id' => 30,
                'user_id' => 29,
            ),
            123 => 
            array (
                'id' => 624,
                'permission_id' => 47,
                'user_id' => 29,
            ),
            124 => 
            array (
                'id' => 625,
                'permission_id' => 26,
                'user_id' => 29,
            ),
            125 => 
            array (
                'id' => 626,
                'permission_id' => 8,
                'user_id' => 29,
            ),
            126 => 
            array (
                'id' => 627,
                'permission_id' => 3,
                'user_id' => 29,
            ),
            127 => 
            array (
                'id' => 628,
                'permission_id' => 5,
                'user_id' => 29,
            ),
            128 => 
            array (
                'id' => 629,
                'permission_id' => 1,
                'user_id' => 29,
            ),
            129 => 
            array (
                'id' => 630,
                'permission_id' => 33,
                'user_id' => 29,
            ),
            130 => 
            array (
                'id' => 631,
                'permission_id' => 37,
                'user_id' => 29,
            ),
            131 => 
            array (
                'id' => 632,
                'permission_id' => 41,
                'user_id' => 29,
            ),
            132 => 
            array (
                'id' => 633,
                'permission_id' => 6,
                'user_id' => 29,
            ),
            133 => 
            array (
                'id' => 634,
                'permission_id' => 7,
                'user_id' => 29,
            ),
            134 => 
            array (
                'id' => 635,
                'permission_id' => 28,
                'user_id' => 29,
            ),
            135 => 
            array (
                'id' => 636,
                'permission_id' => 45,
                'user_id' => 29,
            ),
            136 => 
            array (
                'id' => 637,
                'permission_id' => 24,
                'user_id' => 29,
            ),
            137 => 
            array (
                'id' => 638,
                'permission_id' => 20,
                'user_id' => 29,
            ),
            138 => 
            array (
                'id' => 639,
                'permission_id' => 16,
                'user_id' => 29,
            ),
            139 => 
            array (
                'id' => 640,
                'permission_id' => 4,
                'user_id' => 29,
            ),
            140 => 
            array (
                'id' => 641,
                'permission_id' => 42,
                'user_id' => 30,
            ),
            141 => 
            array (
                'id' => 642,
                'permission_id' => 34,
                'user_id' => 30,
            ),
            142 => 
            array (
                'id' => 643,
                'permission_id' => 38,
                'user_id' => 30,
            ),
            143 => 
            array (
                'id' => 644,
                'permission_id' => 29,
                'user_id' => 30,
            ),
            144 => 
            array (
                'id' => 645,
                'permission_id' => 46,
                'user_id' => 30,
            ),
            145 => 
            array (
                'id' => 646,
                'permission_id' => 25,
                'user_id' => 30,
            ),
            146 => 
            array (
                'id' => 647,
                'permission_id' => 44,
                'user_id' => 30,
            ),
            147 => 
            array (
                'id' => 648,
                'permission_id' => 36,
                'user_id' => 30,
            ),
            148 => 
            array (
                'id' => 649,
                'permission_id' => 40,
                'user_id' => 30,
            ),
            149 => 
            array (
                'id' => 650,
                'permission_id' => 31,
                'user_id' => 30,
            ),
            150 => 
            array (
                'id' => 651,
                'permission_id' => 48,
                'user_id' => 30,
            ),
            151 => 
            array (
                'id' => 652,
                'permission_id' => 27,
                'user_id' => 30,
            ),
            152 => 
            array (
                'id' => 653,
                'permission_id' => 43,
                'user_id' => 30,
            ),
            153 => 
            array (
                'id' => 654,
                'permission_id' => 35,
                'user_id' => 30,
            ),
            154 => 
            array (
                'id' => 655,
                'permission_id' => 39,
                'user_id' => 30,
            ),
            155 => 
            array (
                'id' => 656,
                'permission_id' => 30,
                'user_id' => 30,
            ),
            156 => 
            array (
                'id' => 657,
                'permission_id' => 47,
                'user_id' => 30,
            ),
            157 => 
            array (
                'id' => 658,
                'permission_id' => 26,
                'user_id' => 30,
            ),
            158 => 
            array (
                'id' => 659,
                'permission_id' => 8,
                'user_id' => 30,
            ),
            159 => 
            array (
                'id' => 660,
                'permission_id' => 3,
                'user_id' => 30,
            ),
            160 => 
            array (
                'id' => 661,
                'permission_id' => 5,
                'user_id' => 30,
            ),
            161 => 
            array (
                'id' => 662,
                'permission_id' => 1,
                'user_id' => 30,
            ),
            162 => 
            array (
                'id' => 663,
                'permission_id' => 33,
                'user_id' => 30,
            ),
            163 => 
            array (
                'id' => 664,
                'permission_id' => 37,
                'user_id' => 30,
            ),
            164 => 
            array (
                'id' => 665,
                'permission_id' => 41,
                'user_id' => 30,
            ),
            165 => 
            array (
                'id' => 666,
                'permission_id' => 6,
                'user_id' => 30,
            ),
            166 => 
            array (
                'id' => 667,
                'permission_id' => 7,
                'user_id' => 30,
            ),
            167 => 
            array (
                'id' => 668,
                'permission_id' => 28,
                'user_id' => 30,
            ),
            168 => 
            array (
                'id' => 669,
                'permission_id' => 45,
                'user_id' => 30,
            ),
            169 => 
            array (
                'id' => 670,
                'permission_id' => 24,
                'user_id' => 30,
            ),
            170 => 
            array (
                'id' => 671,
                'permission_id' => 20,
                'user_id' => 30,
            ),
            171 => 
            array (
                'id' => 672,
                'permission_id' => 16,
                'user_id' => 30,
            ),
            172 => 
            array (
                'id' => 673,
                'permission_id' => 4,
                'user_id' => 30,
            ),
            173 => 
            array (
                'id' => 800,
                'permission_id' => 2,
                'user_id' => 31,
            ),
            174 => 
            array (
                'id' => 676,
                'permission_id' => 1,
                'user_id' => 32,
            ),
            175 => 
            array (
                'id' => 677,
                'permission_id' => 3,
                'user_id' => 32,
            ),
            176 => 
            array (
                'id' => 678,
                'permission_id' => 4,
                'user_id' => 32,
            ),
            177 => 
            array (
                'id' => 679,
                'permission_id' => 5,
                'user_id' => 32,
            ),
            178 => 
            array (
                'id' => 680,
                'permission_id' => 6,
                'user_id' => 32,
            ),
            179 => 
            array (
                'id' => 681,
                'permission_id' => 7,
                'user_id' => 32,
            ),
            180 => 
            array (
                'id' => 682,
                'permission_id' => 8,
                'user_id' => 32,
            ),
            181 => 
            array (
                'id' => 683,
                'permission_id' => 16,
                'user_id' => 32,
            ),
            182 => 
            array (
                'id' => 684,
                'permission_id' => 20,
                'user_id' => 32,
            ),
            183 => 
            array (
                'id' => 685,
                'permission_id' => 24,
                'user_id' => 32,
            ),
            184 => 
            array (
                'id' => 686,
                'permission_id' => 25,
                'user_id' => 32,
            ),
            185 => 
            array (
                'id' => 687,
                'permission_id' => 26,
                'user_id' => 32,
            ),
            186 => 
            array (
                'id' => 688,
                'permission_id' => 27,
                'user_id' => 32,
            ),
            187 => 
            array (
                'id' => 689,
                'permission_id' => 28,
                'user_id' => 32,
            ),
            188 => 
            array (
                'id' => 690,
                'permission_id' => 29,
                'user_id' => 32,
            ),
            189 => 
            array (
                'id' => 691,
                'permission_id' => 30,
                'user_id' => 32,
            ),
            190 => 
            array (
                'id' => 692,
                'permission_id' => 31,
                'user_id' => 32,
            ),
            191 => 
            array (
                'id' => 693,
                'permission_id' => 33,
                'user_id' => 32,
            ),
            192 => 
            array (
                'id' => 694,
                'permission_id' => 34,
                'user_id' => 32,
            ),
            193 => 
            array (
                'id' => 695,
                'permission_id' => 35,
                'user_id' => 32,
            ),
            194 => 
            array (
                'id' => 696,
                'permission_id' => 36,
                'user_id' => 32,
            ),
            195 => 
            array (
                'id' => 697,
                'permission_id' => 37,
                'user_id' => 32,
            ),
            196 => 
            array (
                'id' => 698,
                'permission_id' => 38,
                'user_id' => 32,
            ),
            197 => 
            array (
                'id' => 699,
                'permission_id' => 39,
                'user_id' => 32,
            ),
            198 => 
            array (
                'id' => 700,
                'permission_id' => 40,
                'user_id' => 32,
            ),
            199 => 
            array (
                'id' => 701,
                'permission_id' => 41,
                'user_id' => 32,
            ),
            200 => 
            array (
                'id' => 702,
                'permission_id' => 42,
                'user_id' => 32,
            ),
            201 => 
            array (
                'id' => 703,
                'permission_id' => 43,
                'user_id' => 32,
            ),
            202 => 
            array (
                'id' => 704,
                'permission_id' => 44,
                'user_id' => 32,
            ),
            203 => 
            array (
                'id' => 705,
                'permission_id' => 45,
                'user_id' => 32,
            ),
            204 => 
            array (
                'id' => 706,
                'permission_id' => 46,
                'user_id' => 32,
            ),
            205 => 
            array (
                'id' => 707,
                'permission_id' => 47,
                'user_id' => 32,
            ),
            206 => 
            array (
                'id' => 708,
                'permission_id' => 48,
                'user_id' => 32,
            ),
            207 => 
            array (
                'id' => 890,
                'permission_id' => 90,
                'user_id' => 33,
            ),
            208 => 
            array (
                'id' => 889,
                'permission_id' => 89,
                'user_id' => 33,
            ),
            209 => 
            array (
                'id' => 888,
                'permission_id' => 88,
                'user_id' => 33,
            ),
            210 => 
            array (
                'id' => 887,
                'permission_id' => 87,
                'user_id' => 33,
            ),
            211 => 
            array (
                'id' => 886,
                'permission_id' => 86,
                'user_id' => 33,
            ),
            212 => 
            array (
                'id' => 885,
                'permission_id' => 85,
                'user_id' => 33,
            ),
            213 => 
            array (
                'id' => 884,
                'permission_id' => 84,
                'user_id' => 33,
            ),
            214 => 
            array (
                'id' => 883,
                'permission_id' => 83,
                'user_id' => 33,
            ),
            215 => 
            array (
                'id' => 882,
                'permission_id' => 82,
                'user_id' => 33,
            ),
            216 => 
            array (
                'id' => 881,
                'permission_id' => 81,
                'user_id' => 33,
            ),
            217 => 
            array (
                'id' => 880,
                'permission_id' => 80,
                'user_id' => 33,
            ),
            218 => 
            array (
                'id' => 879,
                'permission_id' => 79,
                'user_id' => 33,
            ),
            219 => 
            array (
                'id' => 878,
                'permission_id' => 78,
                'user_id' => 33,
            ),
            220 => 
            array (
                'id' => 877,
                'permission_id' => 77,
                'user_id' => 33,
            ),
            221 => 
            array (
                'id' => 876,
                'permission_id' => 76,
                'user_id' => 33,
            ),
            222 => 
            array (
                'id' => 875,
                'permission_id' => 75,
                'user_id' => 33,
            ),
            223 => 
            array (
                'id' => 874,
                'permission_id' => 74,
                'user_id' => 33,
            ),
            224 => 
            array (
                'id' => 873,
                'permission_id' => 73,
                'user_id' => 33,
            ),
            225 => 
            array (
                'id' => 872,
                'permission_id' => 72,
                'user_id' => 33,
            ),
            226 => 
            array (
                'id' => 871,
                'permission_id' => 71,
                'user_id' => 33,
            ),
            227 => 
            array (
                'id' => 870,
                'permission_id' => 70,
                'user_id' => 33,
            ),
            228 => 
            array (
                'id' => 869,
                'permission_id' => 69,
                'user_id' => 33,
            ),
            229 => 
            array (
                'id' => 868,
                'permission_id' => 68,
                'user_id' => 33,
            ),
            230 => 
            array (
                'id' => 867,
                'permission_id' => 67,
                'user_id' => 33,
            ),
            231 => 
            array (
                'id' => 866,
                'permission_id' => 66,
                'user_id' => 33,
            ),
            232 => 
            array (
                'id' => 865,
                'permission_id' => 65,
                'user_id' => 33,
            ),
            233 => 
            array (
                'id' => 864,
                'permission_id' => 64,
                'user_id' => 33,
            ),
            234 => 
            array (
                'id' => 863,
                'permission_id' => 63,
                'user_id' => 33,
            ),
            235 => 
            array (
                'id' => 862,
                'permission_id' => 62,
                'user_id' => 33,
            ),
            236 => 
            array (
                'id' => 861,
                'permission_id' => 61,
                'user_id' => 33,
            ),
            237 => 
            array (
                'id' => 860,
                'permission_id' => 60,
                'user_id' => 33,
            ),
            238 => 
            array (
                'id' => 859,
                'permission_id' => 59,
                'user_id' => 33,
            ),
            239 => 
            array (
                'id' => 858,
                'permission_id' => 58,
                'user_id' => 33,
            ),
            240 => 
            array (
                'id' => 857,
                'permission_id' => 57,
                'user_id' => 33,
            ),
            241 => 
            array (
                'id' => 856,
                'permission_id' => 56,
                'user_id' => 33,
            ),
            242 => 
            array (
                'id' => 855,
                'permission_id' => 55,
                'user_id' => 33,
            ),
            243 => 
            array (
                'id' => 854,
                'permission_id' => 54,
                'user_id' => 33,
            ),
            244 => 
            array (
                'id' => 853,
                'permission_id' => 53,
                'user_id' => 33,
            ),
            245 => 
            array (
                'id' => 852,
                'permission_id' => 52,
                'user_id' => 33,
            ),
            246 => 
            array (
                'id' => 851,
                'permission_id' => 51,
                'user_id' => 33,
            ),
            247 => 
            array (
                'id' => 850,
                'permission_id' => 50,
                'user_id' => 33,
            ),
            248 => 
            array (
                'id' => 849,
                'permission_id' => 49,
                'user_id' => 33,
            ),
            249 => 
            array (
                'id' => 848,
                'permission_id' => 48,
                'user_id' => 33,
            ),
            250 => 
            array (
                'id' => 847,
                'permission_id' => 47,
                'user_id' => 33,
            ),
            251 => 
            array (
                'id' => 846,
                'permission_id' => 46,
                'user_id' => 33,
            ),
            252 => 
            array (
                'id' => 845,
                'permission_id' => 45,
                'user_id' => 33,
            ),
            253 => 
            array (
                'id' => 844,
                'permission_id' => 44,
                'user_id' => 33,
            ),
            254 => 
            array (
                'id' => 843,
                'permission_id' => 43,
                'user_id' => 33,
            ),
            255 => 
            array (
                'id' => 842,
                'permission_id' => 42,
                'user_id' => 33,
            ),
            256 => 
            array (
                'id' => 841,
                'permission_id' => 41,
                'user_id' => 33,
            ),
            257 => 
            array (
                'id' => 840,
                'permission_id' => 40,
                'user_id' => 33,
            ),
            258 => 
            array (
                'id' => 839,
                'permission_id' => 39,
                'user_id' => 33,
            ),
            259 => 
            array (
                'id' => 838,
                'permission_id' => 38,
                'user_id' => 33,
            ),
            260 => 
            array (
                'id' => 837,
                'permission_id' => 37,
                'user_id' => 33,
            ),
            261 => 
            array (
                'id' => 836,
                'permission_id' => 36,
                'user_id' => 33,
            ),
            262 => 
            array (
                'id' => 835,
                'permission_id' => 35,
                'user_id' => 33,
            ),
            263 => 
            array (
                'id' => 834,
                'permission_id' => 34,
                'user_id' => 33,
            ),
            264 => 
            array (
                'id' => 833,
                'permission_id' => 33,
                'user_id' => 33,
            ),
            265 => 
            array (
                'id' => 832,
                'permission_id' => 32,
                'user_id' => 33,
            ),
            266 => 
            array (
                'id' => 831,
                'permission_id' => 31,
                'user_id' => 33,
            ),
            267 => 
            array (
                'id' => 830,
                'permission_id' => 30,
                'user_id' => 33,
            ),
            268 => 
            array (
                'id' => 829,
                'permission_id' => 29,
                'user_id' => 33,
            ),
            269 => 
            array (
                'id' => 828,
                'permission_id' => 28,
                'user_id' => 33,
            ),
            270 => 
            array (
                'id' => 827,
                'permission_id' => 27,
                'user_id' => 33,
            ),
            271 => 
            array (
                'id' => 826,
                'permission_id' => 26,
                'user_id' => 33,
            ),
            272 => 
            array (
                'id' => 825,
                'permission_id' => 25,
                'user_id' => 33,
            ),
            273 => 
            array (
                'id' => 824,
                'permission_id' => 24,
                'user_id' => 33,
            ),
            274 => 
            array (
                'id' => 823,
                'permission_id' => 23,
                'user_id' => 33,
            ),
            275 => 
            array (
                'id' => 822,
                'permission_id' => 22,
                'user_id' => 33,
            ),
            276 => 
            array (
                'id' => 821,
                'permission_id' => 21,
                'user_id' => 33,
            ),
            277 => 
            array (
                'id' => 820,
                'permission_id' => 20,
                'user_id' => 33,
            ),
            278 => 
            array (
                'id' => 819,
                'permission_id' => 19,
                'user_id' => 33,
            ),
            279 => 
            array (
                'id' => 818,
                'permission_id' => 18,
                'user_id' => 33,
            ),
            280 => 
            array (
                'id' => 817,
                'permission_id' => 17,
                'user_id' => 33,
            ),
            281 => 
            array (
                'id' => 816,
                'permission_id' => 16,
                'user_id' => 33,
            ),
            282 => 
            array (
                'id' => 815,
                'permission_id' => 15,
                'user_id' => 33,
            ),
            283 => 
            array (
                'id' => 814,
                'permission_id' => 14,
                'user_id' => 33,
            ),
            284 => 
            array (
                'id' => 813,
                'permission_id' => 13,
                'user_id' => 33,
            ),
            285 => 
            array (
                'id' => 812,
                'permission_id' => 12,
                'user_id' => 33,
            ),
            286 => 
            array (
                'id' => 811,
                'permission_id' => 11,
                'user_id' => 33,
            ),
            287 => 
            array (
                'id' => 810,
                'permission_id' => 10,
                'user_id' => 33,
            ),
            288 => 
            array (
                'id' => 809,
                'permission_id' => 9,
                'user_id' => 33,
            ),
            289 => 
            array (
                'id' => 808,
                'permission_id' => 8,
                'user_id' => 33,
            ),
            290 => 
            array (
                'id' => 807,
                'permission_id' => 7,
                'user_id' => 33,
            ),
            291 => 
            array (
                'id' => 806,
                'permission_id' => 6,
                'user_id' => 33,
            ),
            292 => 
            array (
                'id' => 805,
                'permission_id' => 5,
                'user_id' => 33,
            ),
            293 => 
            array (
                'id' => 804,
                'permission_id' => 4,
                'user_id' => 33,
            ),
            294 => 
            array (
                'id' => 803,
                'permission_id' => 3,
                'user_id' => 33,
            ),
            295 => 
            array (
                'id' => 802,
                'permission_id' => 2,
                'user_id' => 33,
            ),
            296 => 
            array (
                'id' => 801,
                'permission_id' => 1,
                'user_id' => 33,
            ),
        ));
        
        
    }
}