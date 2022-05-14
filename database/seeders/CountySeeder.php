<?php

namespace Database\Seeders;

use App\Models\County;
use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataArray = array(
            'Mombasa' => [
                'Likoni subcounty',
                'Coast Provincial General Hospital',
                'Bomu',
                'The Mombasa Hospital',
                'Port Reitz subcounty',
                
            ],
            'Kwale' => [
                'Msabweni county Refferal',
                'Diani beach',
                'palm ',
                'kwale centre',
                
            ],
            'Kilifi' => [
                'Kilifi County Hospital',
                'Jibana sub district',
                'Malindi District',
                'Mariakani sub District',
                
            ],
            'Tana River' => [
                'Hola county refferal',
                'Ngao',
                'Al habib nursing home',
                'Bura nomadic',
                'chewani'
                
            ],
            'Lamu' => [
                'Lamu subcounty',
                'King Fahd Lamu County Referral Hospital',
                'Mpeketoni Sub County Hospital',
                'Witu Health Centre',
                'Faza Sub County Hospital',
                
            ],
            'Taita Taveta' => [
                'Moi County Referral Hospital ',
                'Taveta Sub-county hospital ',
                'Mwatate Sub-County' ,
                'Wesu District Hospital',
                'Mbale Health Centre'
    
            ],
            'Garissa' => [
                'Garissa county referral',
                'Garissa medical centre',
                'Waberi Hospital',
                'Habib ',
                
            ],
            'Wajir' => [
                'Wajir county referral',
                'Leheley Sub-District Hospital',
                'Wajir District Hospital',
                'Tarbaj Health Center',
                'Eldas Health Cente',
                
            ],
            'Mandera' => [
                'Mandera county referral',
                'Shammal hospital',
                'Lifey ',
                'Mandera hospital'
            
            ],
            'Marsabit' => [
                
                'Marsbit county referral',
                'Marsabit district hospital',
                'Moyale Sub-County Hospital',
                'Moyale Nursing Home'
                
            ],
            'Isiolo' => [
                'Isiolo county Hospital',
                'Isiolo Medical Centre',
                ' Isiolo Central Medical Clinic',
                'Kulamawe Nursing Home',
                
            ],
            'Meru' => [
                'Meru county referral',
                'Meru district hospital',
                'Tigania',
                'Woodlands Hospital',
                
            ],
            'Tharaka-Nithi' => [
                'Chuka referral',
                'Chogoria hospital',
                'CHIAKARIGA HEALTH CENTRE',
                'THARAKA DISTRICT HOSPITAl',
                
            ],
            'Embu' => [
                'Embu refferal',
                'COUNTY MEDICAL CENTRE',
                'KARAU HEALTH CENTRE'
               
            ],
            'Kitui' => [
                'Kitui referral',
                'IKANGA SUB-DISTRICT HOSPITAL',
                'Neema hospital',
                
                
            ],
            'Machakos' => [
                'Machakos referral',
                'Kangundo sub-county',
                'Bishop kioko',
                'Shalom',
                
            ],
            'Makueni' => [
                'Makueni referral',
                'Kisau Sub-county Hospital',
                'MBOONI Sub-district Hospital',
                
            ],
            'Nyandarua' => [
                'Nyandarua referral',
                'Olkalau District Hospital',
                'GATIMU HEALTH CENTRE',
                
            ],
            'Nyeri' => [
                
                'Nyeri County referral',
                'Tumutumu Hospital',
                'Mt Kenya Sub-County Hospital',
                
            ],
            'Kirinyaga' => [
                'Kerogoya County referral',
                'Kagumo Health Centre',
                'Baricho Health Centre',
                
            ],
            'Murang’a' => [
                'Murang’a County referral',
                'Gaichanjiru Hospital',
                'Kenol Hospital',
                
            ],
            'Kiambu' => [
                'Kiambu County referral',
                'Kijabe Hospital',
                'Neema Hospital',
                
            ],
            'Turkana' => [
                'Lodwar referral',
                'Kalokol Health Centre',
                'Lokichogio hospital',
                
            ],
            'West Pokot' => [
                'Sigor Sub District',
                'Kapenguria County Referral',
                ' Kacheliba District Hospital',
                
            ],
            'Samburu' => [
                'Samburu referral',
                'Maralal subcounty',
               ' Baragoi subcounty'
                
            ],
            'Trans-Nzoia' => [
                'Kitale County referral',
                'Endebes subcounty ',
                'Kiminini hospital',
                
            ],
            'Uasin Gishu' => [
                'Eldoret Health Centre',
                'Moi Referral',
                'Eldoret Hospital'
            ],
            'Elgeyo-Marakwet' => [
                'Iten County referral',
                'Kapsowar Hospital',
                'Kamwosor Sub District Hospital'
                
            ],
            'Nandi' => [
                'Kapsabet referral',
                'Kaptumo Sub-District',
                'Meteitei Sub-County'
                
            ],
            'Baringo' => [
                'Baringo referral',
                'Chemolingot hospital',
                'Marigat hospital'
               
            ],
            'Laikipia' => [
                'Nyahururu referral',
                'Kimanjo subcounty',
                'Dol Dol subcounty'
                
            ],
            'Nakuru' => [
                'Nakuru national referral',
                'Naivasha county referral',
                'Mediheal hospital',
                
            ],
            'Narok' => [
                'Narok referral',
                'Loitokitot',
                'Baraka health centre',
                
            ],
            'Kajiado' => [
                'Kajiado referral',
                '',
                '',
                
            ],
            'Kericho' => [
                'Kericho referral',
                'Chepatalal subcounty',
                'Kapkatet ',
                
                
            ],
            'Bomet' => [
                'Bomet referral',
                'Kapkoros subcounty',
                'Tenwek',
               
            ],
            'Kakamega' => [
                'Kakamega referral',
                'Butere county',
                'Lumakanda',
                
            ],
            'Vihiga' => [
                'Vihiga referral',
                'Mungoma Hospital',
                'Kaimosi Hospital',
               
            ],
            'Bungoma' => [
                'Bungoma referral',
                'Bokoli subcounty',
                'Kimilili district',
                
            ],
            'Busia' => [
                'Busia referral',
                'KURIA DISTRICT HOSPITAL',
                'Bulama',
                
            ],
            'Siaya' => [
                'Siaya referral',
                'Bondo county',
                'Bama hospital',
               
            ],
            'Kisumu' => [
                'Kisumu referral',
                'Kisumu district',
                'Jaramogi odinga',
                
            ],
            'Homa Bay' => [
                'Homa bay referral',
                'kendu Hospital',
                'lLawrence hospital',
                
            ],
            'Migori' => [
                'Migori referral',
                'AWENDO SUB-DISTRICT HOSPITAL',
                'KURIA DISTRICT HOSPITAL',
                
            ],
            'Kisii' => [
                'Kisii  referral',
                'Hema hospital',
                'Tabaka',
                
            ],
            'Nyamira' => [
                'Nyamira County Referral Hospital',
                'Manga subcounty',
                'Masaba subcounty',
                
            ],
            'Nairobi' => [
                'Kenyatta National Hospita',
                'Mbagathi District Hospital',
                'Mama Lucy Kibaki Hospital',
                'Pumwani Maternity Hospital',
                
            ],
            
            

        );

        foreach ($dataArray as $county => $faculties) {

            $county = County::create([
                'name' => $county
            ]);

            if ($county) {
                foreach ($faculties as $key => $faculty) {
                    County::create([
                        'county_id' => $county->id,
                        'name' => $faculty
                    ]);
                }
            }
        }
    }
}
