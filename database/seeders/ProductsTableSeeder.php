<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('products')->delete();
        
        DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{

                    "en":"Tempered Glass Gaming Case with 4 ARGB Fans (341G, Black)",
                    "ar":"حافظة ألعاب من الزجاج المقوى مع 4 مراوح ARGB (341G ، أسود)"

                }',
                'img' => 'https://iili.io/4seXnV.png',
                'price' => '1,591',
                'category_id' => 1,
                'created_at' => '2022-08-30 03:05:17',
                'updated_at' => '2022-08-31 18:38:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{

                    "en":"LIAN LI Mesh Airflow ATX PC Case Gaming Computer Case Mid-Tower",
                    "ar":"LIAN LI Mesh Airflow ATX حافظة كمبيوتر ألعاب الكمبيوتر ميد تاور"
                }',
                'img' => 'https://iili.io/4seMwx.png',
                'price' => '1,774',
                'category_id' => 1,
                'created_at' => '2022-08-30 03:05:17',
                'updated_at' => '2022-08-31 18:37:32',
            ),
            2 => 
            array (
                'id' => 13,
                'name' => '{
                    "en":"HP EliteDesk 800 G2 SFF: Intel Core i5-6500 Quad-Core 3.2GHz | 500GB HDD | 8GB RAM",
                    "ar":"HP EliteDesk 800 G2 SFF: معالج Intel Core i5-6500 رباعي النواة 3.2 جيجاهرتز | هارد ديسك 500 جيجا | 8 جيجا رام"
                }',
                'img' => 'https://iili.io/4L2unf.png',
                'price' => '3,000',
                'category_id' => 1,
                'created_at' => '2022-08-31 20:41:43',
                'updated_at' => '2022-08-31 20:56:34',
            ),
            3 => 
            array (
                'id' => 14,
                'name' => '{
                    "en":"Dell Optiplex 7090 i7-10700-4GB-1TB-Intel",
                    "ar":"Dell Optiplex 7090 i7-10700-4GB-1TB-Intel"
                }',
                'img' => 'https://iili.io/4LFb3l.png',
                'price' => '13,499.00',
                'category_id' => 1,
                'created_at' => '2022-08-31 20:45:26',
                'updated_at' => '2022-08-31 20:45:26',
            ),
            4 => 
            array (
                'id' => 15,
                'name' => '{
                    "en":"Acer - Predator Orion 5000 Gaming Desktop",
                    "ar":"أيسر - جهاز كمبيوتر بريداتور أوريون 5000 للألعاب"
                }',
                'img' => 'https://iili.io/4LqWYl.png',
                'price' => '1,799.99',
                'category_id' => 1,
                'created_at' => '2022-08-31 20:51:01',
                'updated_at' => '2022-08-31 20:51:01',
            ),
            5 => 
            array (
                'id' => 16,
                'name' => '{
                    "en":"CyberPowerPC - Gamer Xtreme Gaming Desktop",
                    "ar":"أيسر - جهاز كمبيوتر بريداتور أوريون 5000 للألعاب"
                }',
                'img' => 'https://iili.io/4LBR6b.png',
                'price' => '1,349.99',
                'category_id' => 1,
                'created_at' => '2022-08-31 20:52:43',
                'updated_at' => '2022-08-31 20:53:07',
            ),
            6 => 
            array (
                'id' => 17,
                'name' => '{
                    "en":"ASUS - Zenbook 14 Laptop - AMD Ryzen 5 - 8GB Memory",
                    "ar":"أسوس - لاب توب زين بوك 14 بوصة - معالج AMD Ryzen 5 - ذاكرة 8 جيجا"
                }',
                'img' => 'https://iili.io/4Ln5kQ.png',
                'price' => '470.99',
                'category_id' => 2,
                'created_at' => '2022-08-31 20:58:35',
                'updated_at' => '2022-08-31 21:01:52',
            ),
            7 => 
            array (
                'id' => 18,
                'name' => '{
                    "en":"Dell Vostro 3510 laptop - 11th Gen Intel core i7-1165G7, 16GB RAM, 1TB HDD",
                    "ar":"لاب توب ديل فوسترو 3510 - الجيل الحادي عشر انتل كور i7-1165G7 ، 16 جيجا رام ، 1 تيرا بايت اتش دي دي"
                }',
                'img' => 'https://iili.io/4LnPu2.png',
                'price' => '16,050',
                'category_id' => 2,
                'created_at' => '2022-08-31 21:00:09',
                'updated_at' => '2022-08-31 21:02:24',
            ),
            8 => 
            array (
                'id' => 19,
                'name' => '{
                    "en":"Asus Laptop Zenbook Flip 13  Intel Core I7-1165G7- 2.8 GHZ, 16GB RAM, 1TB SSD",
                    "ar":"Asus Laptop Zenbook Flip 13 Intel Core I7-1165G7- 2.8 جيجا هرتز ، 16 جيجا رام ، 1 تيرا بايت SSD"
                }',
                'img' => 'https://iili.io/4LoHuV.png',
                'price' => '25,554.',
                'category_id' => 2,
                'created_at' => '2022-08-31 21:01:21',
                'updated_at' => '2022-08-31 21:03:28',
            ),
            9 => 
            array (
                'id' => 20,
                'name' => '{
                    "en":"Lenovo IdeaPad Gaming 3 Laptop - 11th Intel Core i7-11370H, 16GB RAM, 1TB HDD + 256GB SSD",
                    "ar":"لاب توب لينوفو ايديا باد للالعاب 3 - انتل كور i7-11370H الحادي عشر ، 16 جيجا رام ، 1 تيرا اتش دي دي + 256 جيجا اس اس دي"
                }',
                'img' => 'https://iili.io/4Lx5zB.png',
                'price' => '20,999',
                'category_id' => 2,
                'created_at' => '2022-08-31 21:05:31',
                'updated_at' => '2022-08-31 21:05:31',
            ),
            10 => 
            array (
                'id' => 21,
                'name' => '{
                    "en":"Dell G15-5515 Gaming Laptop - Ryzen 7 5800H 8-Cores, 16GB RAM, 512GB SSD",
                    "ar":"Dell G15-5515 لاب توب للألعاب - Ryzen 7 5800H 8-Cores، 16GB RAM، 512GB SSD"
                }',
                'img' => 'https://iili.io/4Lxl0g.png',
                'price' => '22,700',
                'category_id' => 2,
                'created_at' => '2022-08-31 21:06:25',
                'updated_at' => '2022-08-31 21:06:25',
            ),
            11 => 
            array (
                'id' => 22,
                'name' => '{
                    "en":"HP Pavilion 15-dk1026ne Gaming laptop - 10th Intel Core i5-10300H, 8 GB RAM, 1TB HDD and 128GB SSD",
                    "ar":"لاب توب HP Pavilion 15-dk1026ne للألعاب - معالج Intel Core i5-10300H العاشر ، وذاكرة وصول عشوائي 8 جيجا بايت ، و 1 تيرا بايت HDD ، و 128 جيجا بايت SSD"
                }',
                'img' => 'https://iili.io/4LxEdJ.png',
                'price' => '15,887.04',
                'category_id' => 2,
                'created_at' => '2022-08-31 21:07:15',
                'updated_at' => '2022-08-31 21:07:15',
            ),
            12 => 
            array (
                'id' => 23,
                'name' => '{

                    "en":"FUJIFILM X-T4 Mirrorless Camera with 18-55mm Lens - Silver",
                    "ar":"كاميرا فوجي فيلم X-T4 عديمة المرآة مع عدسة 18-55 ملم - فضي"

                }',
                'img' => 'https://iili.io/4L5T4S.png',
                'price' => '39.999',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:11:59',
                'updated_at' => '2022-08-31 22:11:59',
            ),
            13 => 
            array (
                'id' => 24,
                'name' => '{
                    "en":"FUJIFILM Mirrorless Digital Camera with 15-45mm Lens, Black - X-T200",
                    "ar":"فوجي فيلم كاميرا رقمية بدون مرآة مع عدسة 15-45 ملم ، اسود - X-T200"
                }',
                'img' => 'https://iili.io/4L5G6B.png',
                'price' => '12.999',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:13:04',
                'updated_at' => '2022-08-31 22:13:04',
            ),
            14 => 
            array (
                'id' => 25,
                'name' => '{
                    "en":"FUJIFILM Mirrorless Camera with 16-80mm Lens, Black - X-S10",
                    "ar":"كاميرا فوجي فيلم بدون مرآة مع عدسة 16-80 ملم ، اسود - X-S10"
                }',
                'img' => 'https://iili.io/4L5vGp.png',
                'price' => '27.999',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:14:08',
                'updated_at' => '2022-08-31 22:14:08',
            ),
            15 => 
            array (
                'id' => 26,
                'name' => '{
                    "en":"Imou Cue 2c Wireless Indoor Security Camera, 2MP, 1080p, White - IPC-C22CP",
                    "ar":"كاميرا مراقبة داخلية لاسلكية 2 سي من ايمو ، 2 ميجابكسل ، 1080 بكسل ، ابيض - IPC-C22CP"
                }',
                'img' => 'https://iili.io/4L569n.png',
                'price' => '609',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:14:51',
                'updated_at' => '2022-08-31 22:14:51',
            ),
            16 => 
            array (
                'id' => 27,
                'name' => '{
                    "en":"Sony HD Camera for PlayStation 5 - White Black",
                    "ar":"كاميرا سوني عالية الدقة لجهاز بلاي ستيشن 5 - أبيض أسود"
                }',
                'img' => 'https://iili.io/4L5bFS.png',
                'price' => '2.069',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:15:39',
                'updated_at' => '2022-08-31 22:15:39',
            ),
            17 => 
            array (
                'id' => 28,
                'name' => '{
                    "en":"Ezviz C1C Wi-Fi Indoor Camera, 2MP, 1080P - CS-C1C-D0-1D2WFR",
                    "ar":"كاميرا داخلية ايزفيز C1C واي فاي ، 2 ميجابكسل ، 1080 بكسل - CS-C1C-D0-1D2WFR"
                }',
                'img' => 'https://iili.io/4L7dtj.png',
                'price' => '1.029',
                'category_id' => 4,
                'created_at' => '2022-08-31 22:16:31',
                'updated_at' => '2022-08-31 22:16:31',
            ),
            18 => 
            array (
                'id' => 29,
                'name' => '{
                    "en":"JBL PARTYBOX 710",
                    "ar":"JBL PARTYBOX 710"
                }',
                'img' => 'https://iili.io/4L7zNa.png',
                'price' => '34,460',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:19:08',
                'updated_at' => '2022-08-31 22:19:08',
            ),
            19 => 
            array (
                'id' => 30,
                'name' => '{
                    "en":"JBL PARTYBOX 1000",
                    "ar":"JBL PARTYBOX 1000"
                }',
                'img' => 'https://iili.io/4L71Ns.png',
                'price' => '36,930',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:20:12',
                'updated_at' => '2022-08-31 22:20:12',
            ),
            20 => 
            array (
                'id' => 31,
                'name' => '{
                    "en":"Media Tech Subwoofer MT5619 - Black",
                    "ar":"صب ووفر ميديا تك MT5619 - أسود"
                }',
                'img' => 'https://iili.io/4L7hf2.png',
                'price' => '1,849.00',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:21:13',
                'updated_at' => '2022-08-31 22:21:13',
            ),
            21 => 
            array (
                'id' => 32,
                'name' => '{
                    "en":"Media Tech Subwoofer MTN871 - Black",
                    "ar":"صب ووفر ميديا تك MTN871 - أسود"
                }',
                'img' => 'https://iili.io/4L7kOu.png',
                'price' => '1,849.00',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:22:07',
                'updated_at' => '2022-08-31 22:22:07',
            ),
            22 => 
            array (
                'id' => 33,
                'name' => '{
                    "en":"Redragon GS510 Waltz RGB Desktop Speakers",
                    "ar":"مكبرات صوت سطح المكتب Redragon GS510 Waltz RGB"
                }',
                'img' => 'https://iili.io/4L7Sxj.png',
                'price' => '750',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:23:30',
                'updated_at' => '2022-08-31 22:23:30',
            ),
            23 => 
            array (
                'id' => 34,
                'name' => '{
                    "en":"JBL Portable Wireless Waterproof Bluetooth Speaker with Light Show PULSE3, Black",
                    "ar":"سماعة جي بي ال لاسلكية محمولة مقاومة للماء تعمل بالبلوتوث مع Light Show PULSE 3 ، أسود"
                }',
                'img' => 'https://iili.io/4L74fV.png',
                'price' => '4,480',
                'category_id' => 5,
                'created_at' => '2022-08-31 22:24:03',
                'updated_at' => '2022-08-31 22:24:03',
            ),
            24 => 
            array (
                'id' => 36,
                'name' => '{
                    "en":"TP-Link TL-MR6400 Unlocked 300 Mbps Wireless N 4G LTE Router",
                    "ar":"تي بي لينك TL-MR6400 راوتر لاسلكي N 4G LTE غير مقفل بسرعة 300 ميجابت في الثانية"
                }',
                'img' => 'https://iili.io/4LY25X.png',
                'price' => '1,598',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:25:58',
                'updated_at' => '2022-08-31 22:25:58',
            ),
            25 => 
            array (
                'id' => 37,
                'name' => '{
                    "en":"TP-LINK AC2100 Archer VR600 Wireless MU-MIMO VDSL/ADSL Modem Router",
                    "ar":"تي بي لينك AC2100 Archer VR600 Wireless MU-MIMO VDSL / ADSL Modem Router"
                }',
                'img' => 'https://iili.io/4LYBs4.png',
                'price' => '2,085',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:26:33',
                'updated_at' => '2022-08-31 22:26:33',
            ),
            26 => 
            array (
                'id' => 38,
                'name' => '{
                    "en":"Alfa Network AWUS036NHA – USB WiFi Adapter, 150 Mbps, 802.11b/g/n",
                    "ar":"Alfa Network AWUS036NHA - محول واي فاي USB ، 150 ميجابت في الثانية ، 802.11b / g / n"
                }',
                'img' => 'https://iili.io/4LYAmu.png',
                'price' => '942,63',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:28:13',
                'updated_at' => '2022-08-31 22:28:43',
            ),
            27 => 
            array (
                'id' => 39,
                'name' => '{
                    "en":"AC1200 Wireless Dual Band Router Archer C50",
                    "ar":"راوتر AC1200 لاسلكي ثنائي النطاق آرتشر C50"
                }',
                'img' => 'https://iili.io/4LYXIa.png',
                'price' => '630',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:29:36',
                'updated_at' => '2022-08-31 22:29:36',
            ),
            28 => 
            array (
                'id' => 40,
                'name' => '{
                    "en":"TP-Link TL-SG1016D 16-Port Gigabit Desktop/Rackmount Switch",
                    "ar":"TP-Link TL-SG1016D سويتش جيجابت للكمبيوتر المكتبي / على الرف ذو 16 منفذًا"
                }',
                'img' => 'https://iili.io/4LYNBR.png',
                'price' => '1,920',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:30:27',
                'updated_at' => '2022-08-31 22:30:27',
            ),
            29 => 
            array (
                'id' => 41,
            'name' => '{
                "en":"Linksys Wrt1900acs Ultra Smart Wi-Fi Router (Ac1900)",
                "ar":"راوتر واي فاي ذكي فائق الوضوح من لينكسيس Wrt1900acs (Ac1900)"
            }',
                'img' => 'https://iili.io/4L7bWv.png',
                'price' => '6,900',
                'category_id' => 6,
                'created_at' => '2022-08-31 22:25:08',
                'updated_at' => '2022-08-31 22:25:08',
            ),
            30 => 
            array (
                'id' => 42,
                'name' => '{
                    "en":"Western Digital WD40PURZ - 4TB Purple Surveillance Hard Disk",
                    "ar":"ويسترن ديجيتال WD40PURZ - قرص صلب للمراقبة باللون البنفسجي سعة 4 تيرابايت"
                }',
                'img' => 'https://iili.io/4L1JN1.png',
                'price' => '1,998.00',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:29:35',
                'updated_at' => '2022-08-31 23:29:35',
            ),
            31 => 
            array (
                'id' => 43,
            'name' => '{
                "en":"WD Internal Hard Disk (1 TB, Purple)",
                "ar":"قرص صلب داخلي WD (1 تيرابايت ، بنفسجي)"
            }',
                'img' => 'https://iili.io/4L1KiJ.png',
                'price' => '899',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:31:08',
                'updated_at' => '2022-08-31 23:31:08',
            ),
            32 => 
            array (
                'id' => 44,
                'name' => '{
                    "en":"Western Digital 2TB My Passport  Portable External Hard Drive USB 3.0 - Black",
                    "ar":"Western Digital My Passport هارد خارجي محمول 2 تيرا بايت يو اس بي 3.0 - أسود"
                }',
                'img' => 'https://iili.io/4L1BlR.png',
                'price' => '1,099.00',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:32:52',
                'updated_at' => '2022-08-31 23:32:52',
            ),
            33 => 
            array (
                'id' => 45,
                'name' => '{


                    "en":"WD 1TB My Passport Portable External Hard Drive, Black - WDBYVG0010BBK-WESN",
                    "ar":"WD 1TB My Passport Portable External Hard Drive ، أسود - WDBYVG0010BBK-WESN"
                }',
                'img' => 'https://iili.io/4L1BlR.png',
                'price' => '899',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:33:22',
                'updated_at' => '2022-08-31 23:33:22',
            ),
            34 => 
            array (
                'id' => 46,
                'name' => '{
                    "en":"My Passport 5TB black - Portable Hard Drive with password protection and auto backup software",
                    "ar":"My Passport 5TB black - محرك أقراص ثابت محمول مع حماية بكلمة مرور وبرنامج نسخ احتياطي تلقائي"
                }',
                'img' => 'https://iili.io/4L1BlR.png',
                'price' => '2,129',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:34:00',
                'updated_at' => '2022-08-31 23:34:00',
            ),
            35 => 
            array (
                'id' => 47,
                'name' => '{
                    "en":"My Passport 2TB red - Portable Hard Drive with password protection and auto backup software",
                    "ar":"My Passport 2TB red - محرك أقراص ثابت محمول مع حماية بكلمة مرور وبرنامج نسخ احتياطي تلقائي"
                }',
                'img' => 'https://iili.io/4L1IDX.png',
                'price' => '1,284',
                'category_id' => 7,
                'created_at' => '2022-08-31 23:36:08',
                'updated_at' => '2022-08-31 23:36:08',
            ),
            36 => 
            array (
                'id' => 48,
                'name' => '{
                    "en":"Kingston FURY Beast 8GB 3200MHz DDR4 CL16 DIMM RGB",
                    "ar":"Kingston FURY Beast 8GB 3200MHz DDR4 CL16 DIMM RGB"
                }',
                'img' => 'https://iili.io/4L1AVs.png',
                'price' => '999',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:37:16',
                'updated_at' => '2022-08-31 23:37:16',
            ),
            37 => 
            array (
                'id' => 49,
                'name' => '{
                    "en":"Kingston FURY Beast RGB 16GB 3200MHz DDR4 CL16 Desktop Memory Single Stick KF432C16BBA/16",
                    "ar":"Kingston FURY Beast RGB 16 جيجا بايت 3200 ميجا هرتز DDR4 CL16 ذاكرة سطح المكتب أحادية عصا KF432C16BBA / 16"
                }',
                'img' => 'https://iili.io/4L1sJp.png',
                'price' => '2,399',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:38:09',
                'updated_at' => '2022-08-31 23:38:09',
            ),
            38 => 
            array (
                'id' => 50,
                'name' => '{
                    "en":"HMIYPRAME080R1 Schneider Electric",
                    "ar":"HMIYPRAME080R1 شنايدر إلكتريك"
                }',
                'img' => 'https://iili.io/4L1DzX.png',
                'price' => '4,585.06',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:38:58',
                'updated_at' => '2022-08-31 23:38:58',
            ),
            39 => 
            array (
                'id' => 51,
            'name' => '{
                "en":"A-Data Xpg Spectrix (D60G, 16GB, 3200 MHz, DDR4)",
                "ar":"A-Data Xpg Spectrix (D60G, 16GB, 3200 MHz, DDR4)"
            }',
                'img' => 'https://iili.io/4L1mss.png',
                'price' => '2,100',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:39:47',
                'updated_at' => '2022-08-31 23:39:47',
            ),
            40 => 
            array (
                'id' => 52,
                'name' => '{
                    "en":"Kingston FURY Beast Black 16GB 6000MHz DDR5 CL40 DIMM - Desktop Gaming Memory Single Module KF560C40BB-16",
                    "ar":"Kingston FURY Beast Black 16 جيجابايت 6000 ميجاهرتز DDR5 CL40 DIMM - وحدة واحدة لذاكرة ألعاب الكمبيوتر المكتبي KF560C40BB-16"
                }',
                'img' => 'https://iili.io/4LE91f.png',
                'price' => '4,535',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:40:28',
                'updated_at' => '2022-08-31 23:40:28',
            ),
            41 => 
            array (
                'id' => 53,
                'name' => '{
                    "en":"CORSAIR VENGEANCE RGB PRO 16GB (2x8GB) DDR4 3600MHz C18 LED Desktop Memory - Black",
                    "ar":"CORSAIR VENGEANCE RGB PRO 16GB (2x8GB) DDR4 3600MHz C18 LED Desktop Memory - Black"
                }',
                'img' => 'https://iili.io/4LE272.png',
                'price' => '2,450',
                'category_id' => 8,
                'created_at' => '2022-08-31 23:42:02',
                'updated_at' => '2022-08-31 23:42:02',
            ),
            42 => 
            array (
                'id' => 54,
                'name' => '{
                    "en":"Dell E5440 Laptop Battery",
                    "ar":"بطارية لاب توب ديل E5440"
                }',
                'img' => 'https://iili.io/4LEFm7.png',
                'price' => '499',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:43:07',
                'updated_at' => '2022-08-31 23:43:07',
            ),
            43 => 
            array (
                'id' => 55,
            'name' => '{
                "en":"Anker PowerCore Essential 2000PD B2B - UN(excluded CN, Europe) Black Iteration 1",
                "ar":"Anker PowerCore Essential 2000PD B2B - UN(excluded CN, Europe) Black Iteration 1"
            }',
                'img' => 'https://iili.io/4LEfI9.png',
                'price' => '1,450',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:43:52',
                'updated_at' => '2022-08-31 23:43:52',
            ),
            44 => 
            array (
                'id' => 56,
                'name' => '{
                    "en":"Asus ASUS A42N1403 laptop battery",
                    "ar":"بطارية كمبيوتر محمول أسوس A42N1403"
                }',
                'img' => 'https://iili.io/4LEXIt.png',
                'price' => '1,550',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:44:42',
                'updated_at' => '2022-08-31 23:44:42',
            ),
            45 => 
            array (
                'id' => 57,
                'name' => '{
                    "en":"DELL ALIENWARE 1F22N laptop battery",
                    "ar":"بطارية كمبيوتر محمول DELL ALIENWARE 1F22N"
                }',
                'img' => 'https://iili.io/4LEjQn.png',
                'price' => '1,795.00',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:45:16',
                'updated_at' => '2022-08-31 23:45:16',
            ),
            46 => 
            array (
                'id' => 58,
                'name' => '{
                    "en":"FUJITSU LH532 laptop battery for Fujitsu battery",
                    "ar":"بطارية كمبيوتر محمول فوجيتسو LH532 لبطارية فوجيتسو"
                }',
                'img' => 'https://iili.io/4LEe4f.png',
                'price' => '600',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:46:36',
                'updated_at' => '2022-08-31 23:46:36',
            ),
            47 => 
            array (
                'id' => 59,
                'name' => '{
                    "en":"Battery Compatible E5420 E6520 E6530",
                    "ar":"بطارية متوافقة مع E5420 E6520 E6530"
                }',
                'img' => 'https://iili.io/4LESv2.png',
                'price' => '390.00',
                'category_id' => 9,
                'created_at' => '2022-08-31 23:47:48',
                'updated_at' => '2022-08-31 23:47:48',
            ),
            48 => 
            array (
                'id' => 60,
                'name' => '{
                    "en":"Gigamax CD 1X50 Desk 52X",
                    "ar":"قرص Gigamax CD 1X50 Desk 52X"
                }',
                'img' => 'https://iili.io/4LGoZX.png',
                'price' => '284',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:50:30',
                'updated_at' => '2022-08-31 23:50:30',
            ),
            49 => 
            array (
                'id' => 61,
                'name' => '{
                    "en":"Asus External DVD Writer Slim 8X -Black",
                    "ar":"ناسخ دي في دي خارجي سليم 8 اكس من اسوس - اسود"
                }',
                'img' => 'https://iili.io/4LGX8Q.png',
                'price' => '802',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:51:01',
                'updated_at' => '2022-08-31 23:51:01',
            ),
            50 => 
            array (
                'id' => 62,
                'name' => '{
                    "en":"Redragon GS560 Adiemus RGB 2.0 Channel Computer Speaker with Dynamic Lighting Bar Audio-Light",
                    "ar":"مكبر صوت كمبيوتر Redragon GS560 Adiemus RGB 2.0 قناة مع شريط إضاءة ديناميكي صوتي"
                }',
                'img' => 'https://iili.io/4LG8Pa.png',
                'price' => '850',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:51:38',
                'updated_at' => '2022-08-31 23:51:38',
            ),
            51 => 
            array (
                'id' => 63,
                'name' => '{
                    "en":"Cruzer Blade 64GB",
                    "ar":"كروزر بليد 64 جيجا"
                }',
                'img' => 'https://iili.io/4LMqKb.png',
                'price' => '95',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:52:24',
                'updated_at' => '2022-08-31 23:52:24',
            ),
            52 => 
            array (
                'id' => 64,
                'name' => '{
                    "en":"External DVD CD Drive, WTONG USB 3.0 Portable CD/DVD +/-RW Drive Slim DVD/CD ROM Rewriter Writer Reader Burner",
                    "ar":"محرك أقراص DVD خارجي ، WTONG USB 3.0 محمول CD / DVD +/- RW Drive Slim DVD / CD ROM Rewriter Reader Burner"
                }',
                'img' => 'https://iili.io/4LMoHQ.png',
                'price' => '670',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:53:15',
                'updated_at' => '2022-08-31 23:53:15',
            ),
            53 => 
            array (
                'id' => 65,
                'name' => '{
                    "en":"External DVD CD Player Burner USB 3.0 Portable Optical Drive for HP Laptop ZBook",
                    "ar":"مشغل أقراص DVD خارجي وناسخ USB 3.0 محرك ضوئي محمول لأجهزة الكمبيوتر المحمول HP ZBook"
                }',
                'img' => 'https://iili.io/4LMux1.png',
                'price' => '444',
                'category_id' => 11,
                'created_at' => '2022-08-31 23:53:57',
                'updated_at' => '2022-08-31 23:53:57',
            ),
        ));
        
        
    }
}