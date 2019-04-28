<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed admin into users table
        DB::table('users')->insert([
            'fName' => 'admin',
            'lName' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        
        //seed random users into users table 
        DB::table('users')->insert([
            'fName' => 'test',
            'lName' => 'dummy',
            'email' => 'testdummy.@gmail.com',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'fName' => Str::random(5),
            'lName' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => bcrypt('secret123'),
        ]);

        DB::table('users')->insert([
            'fName' => Str::random(5),
            'lName' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => bcrypt('secret123'),
        ]);

        //seed for country iso
        DB::table('countries')->insert( [
            'code'=>4,
            'alpha2'=>'AF',
            'alpha3'=>'AFG',
            'langEN'=>'Afghanistan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>8,
            'alpha2'=>'AL',
            'alpha3'=>'ALB',
            'langEN'=>'Albania'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>10,
            'alpha2'=>'AQ',
            'alpha3'=>'ATA',
            'langEN'=>'Antarctica'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>12,
            'alpha2'=>'DZ',
            'alpha3'=>'DZA',
            'langEN'=>'Algeria'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>16,
            'alpha2'=>'AS',
            'alpha3'=>'ASM',
            'langEN'=>'American Samoa'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>20,
            'alpha2'=>'AD',
            'alpha3'=>'AND',
            'langEN'=>'Andorra'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>24,
            'alpha2'=>'AO',
            'alpha3'=>'AGO',
            'langEN'=>'Angola'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>28,
            'alpha2'=>'AG',
            'alpha3'=>'ATG',
            'langEN'=>'Antigua and Barbuda'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>31,
            'alpha2'=>'AZ',
            'alpha3'=>'AZE',
            'langEN'=>'Azerbaijan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>32,
            'alpha2'=>'AR',
            'alpha3'=>'ARG',
            'langEN'=>'Argentina'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>36,
            'alpha2'=>'AU',
            'alpha3'=>'AUS',
            'langEN'=>'Australia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>40,
            'alpha2'=>'AT',
            'alpha3'=>'AUT',
            'langEN'=>'Austria'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>44,
            'alpha2'=>'BS',
            'alpha3'=>'BHS',
            'langEN'=>'Bahamas'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>48,
            'alpha2'=>'BH',
            'alpha3'=>'BHR',
            'langEN'=>'Bahrain'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>50,
            'alpha2'=>'BD',
            'alpha3'=>'BGD',
            'langEN'=>'Bangladesh'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>51,
            'alpha2'=>'AM',
            'alpha3'=>'ARM',
            'langEN'=>'Armenia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>52,
            'alpha2'=>'BB',
            'alpha3'=>'BRB',
            'langEN'=>'Barbados'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>56,
            'alpha2'=>'BE',
            'alpha3'=>'BEL',
            'langEN'=>'Belgium'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>60,
            'alpha2'=>'BM',
            'alpha3'=>'BMU',
            'langEN'=>'Bermuda'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>64,
            'alpha2'=>'BT',
            'alpha3'=>'BTN',
            'langEN'=>'Bhutan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>68,
            'alpha2'=>'BO',
            'alpha3'=>'BOL',
            'langEN'=>'Bolivia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>70,
            'alpha2'=>'BA',
            'alpha3'=>'BIH',
            'langEN'=>'Bosnia and Herzegovina'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>72,
            'alpha2'=>'BW',
            'alpha3'=>'BWA',
            'langEN'=>'Botswana'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>74,
            'alpha2'=>'BV',
            'alpha3'=>'BVT',
            'langEN'=>'Bouvet Island'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>76,
            'alpha2'=>'BR',
            'alpha3'=>'BRA',
            'langEN'=>'Brazil'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>84,
            'alpha2'=>'BZ',
            'alpha3'=>'BLZ',
            'langEN'=>'Belize'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>86,
            'alpha2'=>'IO',
            'alpha3'=>'IOT',
            'langEN'=>'British Indian Ocean Territory'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>90,
            'alpha2'=>'SB',
            'alpha3'=>'SLB',
            'langEN'=>'Solomon Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>92,
            'alpha2'=>'VG',
            'alpha3'=>'VGB',
            'langEN'=>'British Virgin Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>96,
            'alpha2'=>'BN',
            'alpha3'=>'BRN',
            'langEN'=>'Brunei Darussalam'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>100,
            'alpha2'=>'BG',
            'alpha3'=>'BGR',
            'langEN'=>'Bulgaria'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>104,
            'alpha2'=>'MM',
            'alpha3'=>'MMR',
            'langEN'=>'Myanmar'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>108,
            'alpha2'=>'BI',
            'alpha3'=>'BDI',
            'langEN'=>'Burundi'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>112,
            'alpha2'=>'BY',
            'alpha3'=>'BLR',
            'langEN'=>'Belarus'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>116,
            'alpha2'=>'KH',
            'alpha3'=>'KHM',
            'langEN'=>'Cambodia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>120,
            'alpha2'=>'CM',
            'alpha3'=>'CMR',
            'langEN'=>'Cameroon'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>124,
            'alpha2'=>'CA',
            'alpha3'=>'CAN',
            'langEN'=>'Canada'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>132,
            'alpha2'=>'CV',
            'alpha3'=>'CPV',
            'langEN'=>'Cape Verde'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>136,
            'alpha2'=>'KY',
            'alpha3'=>'CYM',
            'langEN'=>'Cayman Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>140,
            'alpha2'=>'CF',
            'alpha3'=>'CAF',
            'langEN'=>'Central African'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>144,
            'alpha2'=>'LK',
            'alpha3'=>'LKA',
            'langEN'=>'Sri Lanka'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>148,
            'alpha2'=>'TD',
            'alpha3'=>'TCD',
            'langEN'=>'Chad'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>152,
            'alpha2'=>'CL',
            'alpha3'=>'CHL',
            'langEN'=>'Chile'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>156,
            'alpha2'=>'CN',
            'alpha3'=>'CHN',
            'langEN'=>'China'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>158,
            'alpha2'=>'TW',
            'alpha3'=>'TWN',
            'langEN'=>'Taiwan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>162,
            'alpha2'=>'CX',
            'alpha3'=>'CXR',
            'langEN'=>'Christmas Island'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>166,
            'alpha2'=>'CC',
            'alpha3'=>'CCK',
            'langEN'=>'Cocos (Keeling) Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>170,
            'alpha2'=>'CO',
            'alpha3'=>'COL',
            'langEN'=>'Colombia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>174,
            'alpha2'=>'KM',
            'alpha3'=>'COM',
            'langEN'=>'Comoros'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>175,
            'alpha2'=>'YT',
            'alpha3'=>'MYT',
            'langEN'=>'Mayotte'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>178,
            'alpha2'=>'CG',
            'alpha3'=>'COG',
            'langEN'=>'Republic of the Congo'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>180,
            'alpha2'=>'CD',
            'alpha3'=>'COD',
            'langEN'=>'The Democratic Republic Of The Congo'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>184,
            'alpha2'=>'CK',
            'alpha3'=>'COK',
            'langEN'=>'Cook Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>188,
            'alpha2'=>'CR',
            'alpha3'=>'CRI',
            'langEN'=>'Costa Rica'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>191,
            'alpha2'=>'HR',
            'alpha3'=>'HRV',
            'langEN'=>'Croatia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>192,
            'alpha2'=>'CU',
            'alpha3'=>'CUB',
            'langEN'=>'Cuba'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>196,
            'alpha2'=>'CY',
            'alpha3'=>'CYP',
            'langEN'=>'Cyprus'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>203,
            'alpha2'=>'CZ',
            'alpha3'=>'CZE',
            'langEN'=>'Czech Republic'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>204,
            'alpha2'=>'BJ',
            'alpha3'=>'BEN',
            'langEN'=>'Benin'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>208,
            'alpha2'=>'DK',
            'alpha3'=>'DNK',
            'langEN'=>'Denmark'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>212,
            'alpha2'=>'DM',
            'alpha3'=>'DMA',
            'langEN'=>'Dominica'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>214,
            'alpha2'=>'DO',
            'alpha3'=>'DOM',
            'langEN'=>'Dominican Republic'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>218,
            'alpha2'=>'EC',
            'alpha3'=>'ECU',
            'langEN'=>'Ecuador'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>222,
            'alpha2'=>'SV',
            'alpha3'=>'SLV',
            'langEN'=>'El Salvador'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>226,
            'alpha2'=>'GQ',
            'alpha3'=>'GNQ',
            'langEN'=>'Equatorial Guinea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>231,
            'alpha2'=>'ET',
            'alpha3'=>'ETH',
            'langEN'=>'Ethiopia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>232,
            'alpha2'=>'ER',
            'alpha3'=>'ERI',
            'langEN'=>'Eritrea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>233,
            'alpha2'=>'EE',
            'alpha3'=>'EST',
            'langEN'=>'Estonia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>234,
            'alpha2'=>'FO',
            'alpha3'=>'FRO',
            'langEN'=>'Faroe Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>238,
            'alpha2'=>'FK',
            'alpha3'=>'FLK',
            'langEN'=>'Falkland Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>239,
            'alpha2'=>'GS',
            'alpha3'=>'SGS',
            'langEN'=>'South Georgia and the South Sandwich Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>242,
            'alpha2'=>'FJ',
            'alpha3'=>'FJI',
            'langEN'=>'Fiji'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>246,
            'alpha2'=>'FI',
            'alpha3'=>'FIN',
            'langEN'=>'Finland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>248,
            'alpha2'=>'AX',
            'alpha3'=>'ALA',
            'langEN'=>'Åland Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>250,
            'alpha2'=>'FR',
            'alpha3'=>'FRA',
            'langEN'=>'France'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>254,
            'alpha2'=>'GF',
            'alpha3'=>'GUF',
            'langEN'=>'French Guiana'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>258,
            'alpha2'=>'PF',
            'alpha3'=>'PYF',
            'langEN'=>'French Polynesia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>260,
            'alpha2'=>'TF',
            'alpha3'=>'ATF',
            'langEN'=>'French Southern Territories'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>262,
            'alpha2'=>'DJ',
            'alpha3'=>'DJI',
            'langEN'=>'Djibouti'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>266,
            'alpha2'=>'GA',
            'alpha3'=>'GAB',
            'langEN'=>'Gabon'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>268,
            'alpha2'=>'GE',
            'alpha3'=>'GEO',
            'langEN'=>'Georgia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>270,
            'alpha2'=>'GM',
            'alpha3'=>'GMB',
            'langEN'=>'Gambia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>275,
            'alpha2'=>'PS',
            'alpha3'=>'PSE',
            'langEN'=>'Occupied Palestinian Territory'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>276,
            'alpha2'=>'DE',
            'alpha3'=>'DEU',
            'langEN'=>'Germany'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>288,
            'alpha2'=>'GH',
            'alpha3'=>'GHA',
            'langEN'=>'Ghana'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>292,
            'alpha2'=>'GI',
            'alpha3'=>'GIB',
            'langEN'=>'Gibraltar'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>296,
            'alpha2'=>'KI',
            'alpha3'=>'KIR',
            'langEN'=>'Kiribati'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>300,
            'alpha2'=>'GR',
            'alpha3'=>'GRC',
            'langEN'=>'Greece'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>304,
            'alpha2'=>'GL',
            'alpha3'=>'GRL',
            'langEN'=>'Greenland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>308,
            'alpha2'=>'GD',
            'alpha3'=>'GRD',
            'langEN'=>'Grenada'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>312,
            'alpha2'=>'GP',
            'alpha3'=>'GLP',
            'langEN'=>'Guadeloupe'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>316,
            'alpha2'=>'GU',
            'alpha3'=>'GUM',
            'langEN'=>'Guam'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>320,
            'alpha2'=>'GT',
            'alpha3'=>'GTM',
            'langEN'=>'Guatemala'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>324,
            'alpha2'=>'GN',
            'alpha3'=>'GIN',
            'langEN'=>'Guinea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>328,
            'alpha2'=>'GY',
            'alpha3'=>'GUY',
            'langEN'=>'Guyana'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>332,
            'alpha2'=>'HT',
            'alpha3'=>'HTI',
            'langEN'=>'Haiti'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>334,
            'alpha2'=>'HM',
            'alpha3'=>'HMD',
            'langEN'=>'Heard Island and McDonald Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>336,
            'alpha2'=>'VA',
            'alpha3'=>'VAT',
            'langEN'=>'Vatican City State'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>340,
            'alpha2'=>'HN',
            'alpha3'=>'HND',
            'langEN'=>'Honduras'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>344,
            'alpha2'=>'HK',
            'alpha3'=>'HKG',
            'langEN'=>'Hong Kong'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>348,
            'alpha2'=>'HU',
            'alpha3'=>'HUN',
            'langEN'=>'Hungary'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>352,
            'alpha2'=>'IS',
            'alpha3'=>'ISL',
            'langEN'=>'Iceland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>356,
            'alpha2'=>'IN',
            'alpha3'=>'IND',
            'langEN'=>'India'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>360,
            'alpha2'=>'ID',
            'alpha3'=>'IDN',
            'langEN'=>'Indonesia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>364,
            'alpha2'=>'IR',
            'alpha3'=>'IRN',
            'langEN'=>'Islamic Republic of Iran'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>368,
            'alpha2'=>'IQ',
            'alpha3'=>'IRQ',
            'langEN'=>'Iraq'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>372,
            'alpha2'=>'IE',
            'alpha3'=>'IRL',
            'langEN'=>'Ireland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>376,
            'alpha2'=>'IL',
            'alpha3'=>'ISR',
            'langEN'=>'Israel'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>380,
            'alpha2'=>'IT',
            'alpha3'=>'ITA',
            'langEN'=>'Italy'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>384,
            'alpha2'=>'CI',
            'alpha3'=>'CIV',
            'langEN'=>'Côte d\'Ivoire'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>388,
            'alpha2'=>'JM',
            'alpha3'=>'JAM',
            'langEN'=>'Jamaica'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>392,
            'alpha2'=>'JP',
            'alpha3'=>'JPN',
            'langEN'=>'Japan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>398,
            'alpha2'=>'KZ',
            'alpha3'=>'KAZ',
            'langEN'=>'Kazakhstan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>400,
            'alpha2'=>'JO',
            'alpha3'=>'JOR',
            'langEN'=>'Jordan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>404,
            'alpha2'=>'KE',
            'alpha3'=>'KEN',
            'langEN'=>'Kenya'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>408,
            'alpha2'=>'KP',
            'alpha3'=>'PRK',
            'langEN'=>'Democratic People\'s Republic of Korea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>410,
            'alpha2'=>'KR',
            'alpha3'=>'KOR',
            'langEN'=>'Republic of Korea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>414,
            'alpha2'=>'KW',
            'alpha3'=>'KWT',
            'langEN'=>'Kuwait'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>417,
            'alpha2'=>'KG',
            'alpha3'=>'KGZ',
            'langEN'=>'Kyrgyzstan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>418,
            'alpha2'=>'LA',
            'alpha3'=>'LAO',
            'langEN'=>'Lao People\'s Democratic Republic'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>422,
            'alpha2'=>'LB',
            'alpha3'=>'LBN',
            'langEN'=>'Lebanon'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>426,
            'alpha2'=>'LS',
            'alpha3'=>'LSO',
            'langEN'=>'Lesotho'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>428,
            'alpha2'=>'LV',
            'alpha3'=>'LVA',
            'langEN'=>'Latvia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>430,
            'alpha2'=>'LR',
            'alpha3'=>'LBR',
            'langEN'=>'Liberia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>434,
            'alpha2'=>'LY',
            'alpha3'=>'LBY',
            'langEN'=>'Libyan Arab Jamahiriya'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>438,
            'alpha2'=>'LI',
            'alpha3'=>'LIE',
            'langEN'=>'Liechtenstein'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>440,
            'alpha2'=>'LT',
            'alpha3'=>'LTU',
            'langEN'=>'Lithuania'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>442,
            'alpha2'=>'LU',
            'alpha3'=>'LUX',
            'langEN'=>'Luxembourg'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>446,
            'alpha2'=>'MO',
            'alpha3'=>'MAC',
            'langEN'=>'Macao'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>450,
            'alpha2'=>'MG',
            'alpha3'=>'MDG',
            'langEN'=>'Madagascar'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>454,
            'alpha2'=>'MW',
            'alpha3'=>'MWI',
            'langEN'=>'Malawi'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>458,
            'alpha2'=>'MY',
            'alpha3'=>'MYS',
            'langEN'=>'Malaysia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>462,
            'alpha2'=>'MV',
            'alpha3'=>'MDV',
            'langEN'=>'Maldives'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>466,
            'alpha2'=>'ML',
            'alpha3'=>'MLI',
            'langEN'=>'Mali'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>470,
            'alpha2'=>'MT',
            'alpha3'=>'MLT',
            'langEN'=>'Malta'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>474,
            'alpha2'=>'MQ',
            'alpha3'=>'MTQ',
            'langEN'=>'Martinique'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>478,
            'alpha2'=>'MR',
            'alpha3'=>'MRT',
            'langEN'=>'Mauritania'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>480,
            'alpha2'=>'MU',
            'alpha3'=>'MUS',
            'langEN'=>'Mauritius'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>484,
            'alpha2'=>'MX',
            'alpha3'=>'MEX',
            'langEN'=>'Mexico'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>492,
            'alpha2'=>'MC',
            'alpha3'=>'MCO',
            'langEN'=>'Monaco'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>496,
            'alpha2'=>'MN',
            'alpha3'=>'MNG',
            'langEN'=>'Mongolia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>498,
            'alpha2'=>'MD',
            'alpha3'=>'MDA',
            'langEN'=>'Republic of Moldova'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>500,
            'alpha2'=>'MS',
            'alpha3'=>'MSR',
            'langEN'=>'Montserrat'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>504,
            'alpha2'=>'MA',
            'alpha3'=>'MAR',
            'langEN'=>'Morocco'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>508,
            'alpha2'=>'MZ',
            'alpha3'=>'MOZ',
            'langEN'=>'Mozambique'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>512,
            'alpha2'=>'OM',
            'alpha3'=>'OMN',
            'langEN'=>'Oman'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>516,
            'alpha2'=>'NA',
            'alpha3'=>'NAM',
            'langEN'=>'Namibia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>520,
            'alpha2'=>'NR',
            'alpha3'=>'NRU',
            'langEN'=>'Nauru'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>524,
            'alpha2'=>'NP',
            'alpha3'=>'NPL',
            'langEN'=>'Nepal'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>528,
            'alpha2'=>'NL',
            'alpha3'=>'NLD',
            'langEN'=>'Netherlands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>530,
            'alpha2'=>'AN',
            'alpha3'=>'ANT',
            'langEN'=>'Netherlands Antilles'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>533,
            'alpha2'=>'AW',
            'alpha3'=>'ABW',
            'langEN'=>'Aruba'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>540,
            'alpha2'=>'NC',
            'alpha3'=>'NCL',
            'langEN'=>'New Caledonia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>548,
            'alpha2'=>'VU',
            'alpha3'=>'VUT',
            'langEN'=>'Vanuatu'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>554,
            'alpha2'=>'NZ',
            'alpha3'=>'NZL',
            'langEN'=>'New Zealand'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>558,
            'alpha2'=>'NI',
            'alpha3'=>'NIC',
            'langEN'=>'Nicaragua'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>562,
            'alpha2'=>'NE',
            'alpha3'=>'NER',
            'langEN'=>'Niger'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>566,
            'alpha2'=>'NG',
            'alpha3'=>'NGA',
            'langEN'=>'Nigeria'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>570,
            'alpha2'=>'NU',
            'alpha3'=>'NIU',
            'langEN'=>'Niue'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>574,
            'alpha2'=>'NF',
            'alpha3'=>'NFK',
            'langEN'=>'Norfolk Island'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>578,
            'alpha2'=>'NO',
            'alpha3'=>'NOR',
            'langEN'=>'Norway'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>580,
            'alpha2'=>'MP',
            'alpha3'=>'MNP',
            'langEN'=>'Northern Mariana Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>581,
            'alpha2'=>'UM',
            'alpha3'=>'UMI',
            'langEN'=>'United States Minor Outlying Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>583,
            'alpha2'=>'FM',
            'alpha3'=>'FSM',
            'langEN'=>'Federated States of Micronesia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>584,
            'alpha2'=>'MH',
            'alpha3'=>'MHL',
            'langEN'=>'Marshall Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>585,
            'alpha2'=>'PW',
            'alpha3'=>'PLW',
            'langEN'=>'Palau'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>586,
            'alpha2'=>'PK',
            'alpha3'=>'PAK',
            'langEN'=>'Pakistan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>591,
            'alpha2'=>'PA',
            'alpha3'=>'PAN',
            'langEN'=>'Panama'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>598,
            'alpha2'=>'PG',
            'alpha3'=>'PNG',
            'langEN'=>'Papua New Guinea'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>600,
            'alpha2'=>'PY',
            'alpha3'=>'PRY',
            'langEN'=>'Paraguay'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>604,
            'alpha2'=>'PE',
            'alpha3'=>'PER',
            'langEN'=>'Peru'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>608,
            'alpha2'=>'PH',
            'alpha3'=>'PHL',
            'langEN'=>'Philippines'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>612,
            'alpha2'=>'PN',
            'alpha3'=>'PCN',
            'langEN'=>'Pitcairn'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>616,
            'alpha2'=>'PL',
            'alpha3'=>'POL',
            'langEN'=>'Poland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>620,
            'alpha2'=>'PT',
            'alpha3'=>'PRT',
            'langEN'=>'Portugal'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>624,
            'alpha2'=>'GW',
            'alpha3'=>'GNB',
            'langEN'=>'Guinea-Bissau'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>626,
            'alpha2'=>'TL',
            'alpha3'=>'TLS',
            'langEN'=>'Timor-Leste'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>630,
            'alpha2'=>'PR',
            'alpha3'=>'PRI',
            'langEN'=>'Puerto Rico'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>634,
            'alpha2'=>'QA',
            'alpha3'=>'QAT',
            'langEN'=>'Qatar'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>638,
            'alpha2'=>'RE',
            'alpha3'=>'REU',
            'langEN'=>'Réunion'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>642,
            'alpha2'=>'RO',
            'alpha3'=>'ROU',
            'langEN'=>'Romania'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>643,
            'alpha2'=>'RU',
            'alpha3'=>'RUS',
            'langEN'=>'Russian Federation'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>646,
            'alpha2'=>'RW',
            'alpha3'=>'RWA',
            'langEN'=>'Rwanda'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>654,
            'alpha2'=>'SH',
            'alpha3'=>'SHN',
            'langEN'=>'Saint Helena'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>659,
            'alpha2'=>'KN',
            'alpha3'=>'KNA',
            'langEN'=>'Saint Kitts and Nevis'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>660,
            'alpha2'=>'AI',
            'alpha3'=>'AIA',
            'langEN'=>'Anguilla'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>662,
            'alpha2'=>'LC',
            'alpha3'=>'LCA',
            'langEN'=>'Saint Lucia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>666,
            'alpha2'=>'PM',
            'alpha3'=>'SPM',
            'langEN'=>'Saint-Pierre and Miquelon'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>670,
            'alpha2'=>'VC',
            'alpha3'=>'VCT',
            'langEN'=>'Saint Vincent and the Grenadines'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>674,
            'alpha2'=>'SM',
            'alpha3'=>'SMR',
            'langEN'=>'San Marino'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>678,
            'alpha2'=>'ST',
            'alpha3'=>'STP',
            'langEN'=>'Sao Tome and Principe'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>682,
            'alpha2'=>'SA',
            'alpha3'=>'SAU',
            'langEN'=>'Saudi Arabia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>686,
            'alpha2'=>'SN',
            'alpha3'=>'SEN',
            'langEN'=>'Senegal'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>690,
            'alpha2'=>'SC',
            'alpha3'=>'SYC',
            'langEN'=>'Seychelles'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>694,
            'alpha2'=>'SL',
            'alpha3'=>'SLE',
            'langEN'=>'Sierra Leone'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>702,
            'alpha2'=>'SG',
            'alpha3'=>'SGP',
            'langEN'=>'Singapore'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>703,
            'alpha2'=>'SK',
            'alpha3'=>'SVK',
            'langEN'=>'Slovakia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>704,
            'alpha2'=>'VN',
            'alpha3'=>'VNM',
            'langEN'=>'Vietnam'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>705,
            'alpha2'=>'SI',
            'alpha3'=>'SVN',
            'langEN'=>'Slovenia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>706,
            'alpha2'=>'SO',
            'alpha3'=>'SOM',
            'langEN'=>'Somalia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>710,
            'alpha2'=>'ZA',
            'alpha3'=>'ZAF',
            'langEN'=>'South Africa'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>716,
            'alpha2'=>'ZW',
            'alpha3'=>'ZWE',
            'langEN'=>'Zimbabwe'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>724,
            'alpha2'=>'ES',
            'alpha3'=>'ESP',
            'langEN'=>'Spain'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>732,
            'alpha2'=>'EH',
            'alpha3'=>'ESH',
            'langEN'=>'Western Sahara'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>736,
            'alpha2'=>'SD',
            'alpha3'=>'SDN',
            'langEN'=>'Sudan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>738,
            'alpha2'=>'SS',
            'alpha3'=>'SSD',
            'langEN'=>'South Sudan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>740,
            'alpha2'=>'SR',
            'alpha3'=>'SUR',
            'langEN'=>'Suriname'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>744,
            'alpha2'=>'SJ',
            'alpha3'=>'SJM',
            'langEN'=>'Svalbard and Jan Mayen'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>748,
            'alpha2'=>'SZ',
            'alpha3'=>'SWZ',
            'langEN'=>'Swaziland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>752,
            'alpha2'=>'SE',
            'alpha3'=>'SWE',
            'langEN'=>'Sweden'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>756,
            'alpha2'=>'CH',
            'alpha3'=>'CHE',
            'langEN'=>'Switzerland'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>760,
            'alpha2'=>'SY',
            'alpha3'=>'SYR',
            'langEN'=>'Syrian Arab Republic'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>762,
            'alpha2'=>'TJ',
            'alpha3'=>'TJK',
            'langEN'=>'Tajikistan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>764,
            'alpha2'=>'TH',
            'alpha3'=>'THA',
            'langEN'=>'Thailand'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>768,
            'alpha2'=>'TG',
            'alpha3'=>'TGO',
            'langEN'=>'Togo'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>772,
            'alpha2'=>'TK',
            'alpha3'=>'TKL',
            'langEN'=>'Tokelau'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>776,
            'alpha2'=>'TO',
            'alpha3'=>'TON',
            'langEN'=>'Tonga'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>780,
            'alpha2'=>'TT',
            'alpha3'=>'TTO',
            'langEN'=>'Trinidad and Tobago'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>784,
            'alpha2'=>'AE',
            'alpha3'=>'ARE',
            'langEN'=>'United Arab Emirates'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>788,
            'alpha2'=>'TN',
            'alpha3'=>'TUN',
            'langEN'=>'Tunisia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>792,
            'alpha2'=>'TR',
            'alpha3'=>'TUR',
            'langEN'=>'Turkey'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>795,
            'alpha2'=>'TM',
            'alpha3'=>'TKM',
            'langEN'=>'Turkmenistan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>796,
            'alpha2'=>'TC',
            'alpha3'=>'TCA',
            'langEN'=>'Turks and Caicos Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>798,
            'alpha2'=>'TV',
            'alpha3'=>'TUV',
            'langEN'=>'Tuvalu'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>800,
            'alpha2'=>'UG',
            'alpha3'=>'UGA',
            'langEN'=>'Uganda'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>804,
            'alpha2'=>'UA',
            'alpha3'=>'UKR',
            'langEN'=>'Ukraine'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>807,
            'alpha2'=>'MK',
            'alpha3'=>'MKD',
            'langEN'=>'The Former Yugoslav Republic of Macedonia'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>818,
            'alpha2'=>'EG',
            'alpha3'=>'EGY',
            'langEN'=>'Egypt'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>826,
            'alpha2'=>'GB',
            'alpha3'=>'GBR',
            'langEN'=>'United Kingdom'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>833,
            'alpha2'=>'IM',
            'alpha3'=>'IMN',
            'langEN'=>'Isle of Man'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>834,
            'alpha2'=>'TZ',
            'alpha3'=>'TZA',
            'langEN'=>'United Republic Of Tanzania'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>840,
            'alpha2'=>'US',
            'alpha3'=>'USA',
            'langEN'=>'United States'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>850,
            'alpha2'=>'VI',
            'alpha3'=>'VIR',
            'langEN'=>'U.S. Virgin Islands'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>854,
            'alpha2'=>'BF',
            'alpha3'=>'BFA',
            'langEN'=>'Burkina Faso'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>858,
            'alpha2'=>'UY',
            'alpha3'=>'URY',
            'langEN'=>'Uruguay'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>860,
            'alpha2'=>'UZ',
            'alpha3'=>'UZB',
            'langEN'=>'Uzbekistan'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>862,
            'alpha2'=>'VE',
            'alpha3'=>'VEN',
            'langEN'=>'Venezuela'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>876,
            'alpha2'=>'WF',
            'alpha3'=>'WLF',
            'langEN'=>'Wallis and Futuna'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>882,
            'alpha2'=>'WS',
            'alpha3'=>'WSM',
            'langEN'=>'Samoa'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>887,
            'alpha2'=>'YE',
            'alpha3'=>'YEM',
            'langEN'=>'Yemen'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>891,
            'alpha2'=>'CS',
            'alpha3'=>'SCG',
            'langEN'=>'Serbia and Montenegro'
            ] );
                        
            DB::table('countries')->insert( [
            'code'=>894,
            'alpha2'=>'ZM',
            'alpha3'=>'ZMB',
            'langEN'=>'Zambia'
            ] );
    }
}