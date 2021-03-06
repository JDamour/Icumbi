<?php

use Illuminate\Database\Seeder;
use App\Sector;
class SectorsTableSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imirenge = [
   ['district_id'=>'1','name'=>'Butaro'],
   ['district_id'=>'1','name'=>'Cyanika'],
   ['district_id'=>'1','name'=>'Cyeru'],
   ['district_id'=>'1','name'=>'Gahunga'],
   ['district_id'=>'1','name'=>'Gatebe'],
   ['district_id'=>'1','name'=>'Gitovu'],
   ['district_id'=>'1','name'=>'Kagogo'],
   ['district_id'=>'1','name'=>'Kinoni'],
   ['district_id'=>'1','name'=>'Kinyababa'],
   ['district_id'=>'1','name'=>'Kivuye'],
   ['district_id'=>'1','name'=>'Nemba'],
   ['district_id'=>'1','name'=>'Rugarama'],
   ['district_id'=>'1','name'=>'Rugengabari'],
   ['district_id'=>'1','name'=>'Ruhunde'],
   ['district_id'=>'1','name'=>'Rusarabuye'],
   ['district_id'=>'1','name'=>'Rwerere'],
   ['district_id'=>'2','name'=>'Busengo'],
   ['district_id'=>'2','name'=>'Coko'],
   ['district_id'=>'2','name'=>'Cyabingo'],
   ['district_id'=>'2','name'=>'Gakenke'],
   ['district_id'=>'2','name'=>'Gashenyi'],
   ['district_id'=>'2','name'=>'Mugunga'],
   ['district_id'=>'2','name'=>'Janja'],
   ['district_id'=>'2','name'=>'Kamubuga'],
   ['district_id'=>'2','name'=>'Karambo'],
   ['district_id'=>'2','name'=>'Kivuruga'],
   ['district_id'=>'2','name'=>'Mataba'],
   ['district_id'=>'2','name'=>'Minazi'],
   ['district_id'=>'2','name'=>'Muhondo'],
   ['district_id'=>'2','name'=>'Muyongwe'],
   ['district_id'=>'2','name'=>'Muzo'],
   ['district_id'=>'2','name'=>'Nemba'],
   ['district_id'=>'2','name'=>'Ruli'],
   ['district_id'=>'2','name'=>'Rusasa'],
   ['district_id'=>'2','name'=>'Rushashi'],
   ['district_id'=>'3','name'=>'Bukure'],
   ['district_id'=>'3','name'=>'Bwisige'],
   ['district_id'=>'3','name'=>'Byumba'],
   ['district_id'=>'3','name'=>'Cyumba'],
   ['district_id'=>'3','name'=>'Giti'],
   ['district_id'=>'3','name'=>'Kaniga'],
   ['district_id'=>'3','name'=>'Manyagiro'],
   ['district_id'=>'3','name'=>'Miyove'],
   ['district_id'=>'3','name'=>'Kageyo'],
   ['district_id'=>'3','name'=>'Mukarange'],
   ['district_id'=>'3','name'=>'Muko'],
   ['district_id'=>'3','name'=>'Mutete'],
   ['district_id'=>'3','name'=>'Nyamiyaga'],
   ['district_id'=>'3','name'=>'Nyankenke'],
   ['district_id'=>'3','name'=>'Rubaya'],
   ['district_id'=>'3','name'=>'Rukomo'],
   ['district_id'=>'3','name'=>'Rushaki'],
   ['district_id'=>'3','name'=>'Rutare'],
   ['district_id'=>'3','name'=>'Ruvune'],
   ['district_id'=>'3','name'=>'Rwamiko'],
   ['district_id'=>'3','name'=>'Shangasha'],
    ['district_id'=>'4','name'=>'Busogo'],
    ['district_id'=>'4','name'=>'Cyuve'],
    ['district_id'=>'4','name'=>'Gacaca'],
    ['district_id'=>'4','name'=>'Gashaki'],
    ['district_id'=>'4','name'=>'Gataraga'],
    ['district_id'=>'4','name'=>'Kimonyi'],
    ['district_id'=>'4','name'=>'Kinigi'],
    ['district_id'=>'4','name'=>'Muhoza'],
    ['district_id'=>'4','name'=>'Muko'],
    ['district_id'=>'4','name'=>'Musanze'],
    ['district_id'=>'4','name'=>'Nkotsi'],
    ['district_id'=>'4','name'=>'Nyange'],
    ['district_id'=>'4','name'=>'Remera'],
    ['district_id'=>'4','name'=>'Rwaza'],
    ['district_id'=>'4','name'=>'Shingiro'],
    ['district_id'=>'5','name'=>'Base'],
    ['district_id'=>'5','name'=>'Burega'],
    ['district_id'=>'5','name'=>'Bushoki'],
    ['district_id'=>'5','name'=>'Buyoga'],
    ['district_id'=>'5','name'=>'Cyinzuzi'],
    ['district_id'=>'5','name'=>'Cyungo'],
    ['district_id'=>'5','name'=>'Kinihira'],
    ['district_id'=>'5','name'=>'Kisaro'],
    ['district_id'=>'5','name'=>'Masoro'],
    ['district_id'=>'5','name'=>'Mbogo'],
    ['district_id'=>'5','name'=>'Murambi'],
    ['district_id'=>'5','name'=>'Ngoma'],
    ['district_id'=>'5','name'=>'arabana'],
    ['district_id'=>'5','name'=>'Rukozo'],
    ['district_id'=>'5','name'=>'Rusiga'],
    ['district_id'=>'5','name'=>'Shyorongi'],
    ['district_id'=>'5','name'=>'Tumba'],
    ['district_id'=>'6' ,'name'=>'Gikonko'],
    ['district_id'=>'6' ,'name'=>'Gishubi'],
    ['district_id'=>'6' ,'name'=>'Kansi'],
    ['district_id'=>'6' ,'name'=>'Kibilizi'],
    ['district_id'=>'6' ,'name'=>'Kigembe'],
    ['district_id'=>'6' ,'name'=>'Mamba'],
    ['district_id'=>'6' ,'name'=>'Muganza'],
    ['district_id'=>'6' ,'name'=>'Mugombwa'],
    ['district_id'=>'6' ,'name'=>'Mukindo'],
    ['district_id'=>'6' ,'name'=>'Musha'],
    ['district_id'=>'6','name'=>'Ndora'],
    ['district_id'=>'6','name'=>'Nyanza'],
    ['district_id'=>'6','name'=>'Save'],
    ['district_id'=>'7','name'=>'Gishamvu'],
    ['district_id'=>'7','name'=>'Karama'],
    ['district_id'=>'7','name'=>'Kigoma'],
    ['district_id'=>'7','name'=>'Kinazi'],
    ['district_id'=>'7','name'=>'Maraba'],
    ['district_id'=>'7','name'=>'Mbazi'],
    ['district_id'=>'7','name'=>'Mukura'],
    ['district_id'=>'7','name'=>'Ngoma'],
    ['district_id'=>'7','name'=>'Ruhashya'],
    ['district_id'=>'7','name'=>'Rusatira'],
    ['district_id'=>'7','name'=>'Rwaniro'],
    ['district_id'=>'7','name'=>'Simbi'],
    ['district_id'=>'7','name'=>'Tumba'],
    ['district_id'=>'8','name'=>'Gacurabwenge'],
    ['district_id'=>'8','name'=>'Karama'],
    ['district_id'=>'8','name'=>'Kayenzi'],
    ['district_id'=>'8','name'=>'Kayumbu'],
    ['district_id'=>'8','name'=>'Mugina'],
    ['district_id'=>'8','name'=>'Musambira'],
    ['district_id'=>'8','name'=>'Ngamba'],
    ['district_id'=>'8','name'=>'Nyamiyaga'],
    ['district_id'=>'8','name'=>'Nyarubaka'],
    ['district_id'=>'8','name'=>'Rugalika'],
    ['district_id'=>'8','name'=>'Rukoma'],
    ['district_id'=>'8','name'=>'Runda'],
     ['district_id'=>'9','name'=>'Cyeza'],
     ['district_id'=>'9','name'=>'Kabacuzi'],
     ['district_id'=>'9','name'=>'Kibangu'],
     ['district_id'=>'9','name'=>'Kiyumba'],
     ['district_id'=>'9','name'=>'Muhanga'],
     ['district_id'=>'9','name'=>'Mushishiro'],
     ['district_id'=>'9','name'=>'Nyabinoni'],
     ['district_id'=>'9','name'=>'Nyamabuye'],
     ['district_id'=>'9','name'=>'Nyarusange'],
     ['district_id'=>'9','name'=>'Rongi'],
     ['district_id'=>'9','name'=>'Rugendabari'],
     ['district_id'=>'9','name'=>'Shyogwe'],
    ['district_id'=>'10','name'=>'Buruhukiro'],
    ['district_id'=>'10','name'=>'Cyanika'],
    ['district_id'=>'10','name'=>'Gatare'],
    ['district_id'=>'10','name'=>'Kaduha'],
    ['district_id'=>'10','name'=>'Kamegeli'],
    ['district_id'=>'10','name'=>'Kibirizi'],
    ['district_id'=>'10','name'=>'Kibumbwe'],
    ['district_id'=>'10','name'=>'Kitabi'],
    ['district_id'=>'10','name'=>'Mbazi'],
    ['district_id'=>'10','name'=>'Mugano'],
    ['district_id'=>'10','name'=>'Musange'],
    ['district_id'=>'10','name'=>'Musebeya'],
    ['district_id'=>'10','name'=>'Mushubi'],
    ['district_id'=>'10','name'=>'komane'],
    ['district_id'=>'10','name'=>'Gasaka'],
    ['district_id'=>'10','name'=>'Tare'],
    ['district_id'=>'10','name'=>'Uwinkingi'],
    ['district_id'=>'11','name'=>'Busasamana'],
    ['district_id'=>'11','name'=>'Busoro'],
    ['district_id'=>'11','name'=>'Cyabakamyi'],
    ['district_id'=>'11','name'=>'Kibirizi'],
    ['district_id'=>'11','name'=>'Kigoma'],
    ['district_id'=>'11','name'=>'Mukingo'],
    ['district_id'=>'11','name'=>'Rwabicuma'],
    ['district_id'=>'11','name'=>'Muyira'],
    ['district_id'=>'11','name'=>'Ntyazo'],
    ['district_id'=>'11','name'=>'Nyagisozi'],
     ['district_id'=>'12','name'=>'Cyahinda'],
     ['district_id'=>'12','name'=>'Busanze'],
     ['district_id'=>'12','name'=>'Kibeho'],
     ['district_id'=>'12','name'=>'Mata'],
     ['district_id'=>'12','name'=>'Munini'],
     ['district_id'=>'12','name'=>'Kivu'],
     ['district_id'=>'12','name'=>'Ngera'],
     ['district_id'=>'12','name'=>'Ngoma'],
     ['district_id'=>'12','name'=>'Nyabimata'],
     ['district_id'=>'12','name'=>'Nyagisozi'],
     ['district_id'=>'12','name'=>'Ruheru'],
     ['district_id'=>'12','name'=>'Muganza'],
     ['district_id'=>'12','name'=>'Ruramba'],
     ['district_id'=>'12','name'=>'Rusenge'],
    ['district_id'=>'13','name'=>'Bweramana'],
    ['district_id'=>'13','name'=>'Byimana'],
    ['district_id'=>'13','name'=>'Kabagari'],
    ['district_id'=>'13','name'=>'Kinazi'],
    ['district_id'=>'13','name'=>'Kinihira'],
    ['district_id'=>'13','name'=>'Mbuye'],
    ['district_id'=>'13','name'=>'Mwendo'],
    ['district_id'=>'13','name'=>'Ntongwe'],
    ['district_id'=>'13','name'=>'Ruhango'],
    ['district_id'=>'14','name'=>'Gashora'],
    ['district_id'=>'14','name'=>'Juru'],
    ['district_id'=>'14','name'=>'Kamabuye'],
    ['district_id'=>'14','name'=>'Ntarama'],
    ['district_id'=>'14','name'=>'Mareba'],
    ['district_id'=>'14','name'=>'Mayange'],
    ['district_id'=>'14','name'=>'Musenyi'],
    ['district_id'=>'14','name'=>'Mwogo'],
    ['district_id'=>'14','name'=>'Ngeruka'],
    ['district_id'=>'14','name'=>'Nyamata'],
    ['district_id'=>'14','name'=>'Nyarugenge'],
    ['district_id'=>'14','name'=>'Rilima'],
    ['district_id'=>'14','name'=>'Ruhuha'],
    ['district_id'=>'14','name'=>'Rweru'],
    ['district_id'=>'14','name'=>'Shyara'],
      ['district_id'=>'15','name'=>'Gasange'],
      ['district_id'=>'15','name'=>'Gatsibo'],
      ['district_id'=>'15','name'=>'Gitoki'],
      ['district_id'=>'15','name'=>'Kabarore'],
      ['district_id'=>'15','name'=>'Kageyo'],
      ['district_id'=>'15','name'=>'Kiramuruzi'],
      ['district_id'=>'15','name'=>'Kiziguro'],
      ['district_id'=>'15','name'=>'Muhura'],
      ['district_id'=>'15','name'=>'Murambi'],
      ['district_id'=>'15','name'=>'Ngarama'],
      ['district_id'=>'15','name'=>'Nyagihanga'],
      ['district_id'=>'15','name'=>'Remera'],
      ['district_id'=>'15','name'=>'Rugarama'],
      ['district_id'=>'15','name'=>'Rwimbogo'],
      ['district_id'=>'16','name'=>'Gahini'],
      ['district_id'=>'16','name'=>'Kabare'],
      ['district_id'=>'16','name'=>'Kabarondo'],
      ['district_id'=>'16','name'=>'Mukarange'],
      ['district_id'=>'16','name'=>'Murama'],
      ['district_id'=>'16','name'=>'Murundi'],
      ['district_id'=>'16','name'=>'Mwiri'],
      ['district_id'=>'16','name'=>'Ndego'],
      ['district_id'=>'16','name'=>'Nyamirama'],
      ['district_id'=>'16','name'=>'Rukara'],
      ['district_id'=>'16','name'=>'Ruramira'],
      ['district_id'=>'16','name'=>'Rwinkwavu'],
      ['district_id'=>'17','name'=>'Gahara'],
      ['district_id'=>'17','name'=>'Gatore'],
      ['district_id'=>'17','name'=>'Kigina'],
      ['district_id'=>'17','name'=>'Kirehe'],
      ['district_id'=>'17','name'=>'Mahama'],
      ['district_id'=>'17','name'=>'Mpanga'],
      ['district_id'=>'17','name'=>'Musaza'],
      ['district_id'=>'17','name'=>'Mushikiri'],
      ['district_id'=>'17','name'=>'Nasho'],
      ['district_id'=>'17','name'=>'Nyamugari'],
      ['district_id'=>'17','name'=>'Nyarubuye'],
      ['district_id'=>'17','name'=>'Rusumo'],
      ['district_id'=>'18','name'=>'Gashanda'],
      ['district_id'=>'18','name'=>'Jarama'],
      ['district_id'=>'18','name'=>'Karembo'],
      ['district_id'=>'18','name'=>'Kazo'],
      ['district_id'=>'18','name'=>'Kibungo'],
      ['district_id'=>'18','name'=>'Mugesera'],
      ['district_id'=>'18','name'=>'Murama'],
      ['district_id'=>'18','name'=>'Mutenderi'],
      ['district_id'=>'18','name'=>'Remera'],
      ['district_id'=>'18','name'=>'Rukira'],
      ['district_id'=>'18','name'=>'Rukumberi'],
      ['district_id'=>'18','name'=>'Rurenge'],
      ['district_id'=>'18','name'=>'Sake'],
      ['district_id'=>'18','name'=>'Zaza'],
      ['district_id'=>'19','name'=>'Gatunda'],
      ['district_id'=>'19','name'=>'Kiyombe'],
      ['district_id'=>'19','name'=>'Karama'],
      ['district_id'=>'19','name'=>'Karangazi'],
      ['district_id'=>'19','name'=>'Katabagemu'],
      ['district_id'=>'19','name'=>'Matimba'],
      ['district_id'=>'19','name'=>'Mimuli'],
      ['district_id'=>'19','name'=>'Mukama'],
      ['district_id'=>'19','name'=>'Musheli'],
      ['district_id'=>'19','name'=>'Nyagatare'],
      ['district_id'=>'19','name'=>'Rukomo'],
      ['district_id'=>'19','name'=>'Rwempasha'],
      ['district_id'=>'19','name'=>'Rwimiyaga'],
      ['district_id'=>'19','name'=>'Tabagwe'],
      ['district_id'=>'20','name'=>'Fumbwe'],
      ['district_id'=>'20','name'=>'Gahengeri'],
      ['district_id'=>'20','name'=>'Gishari'],
      ['district_id'=>'20','name'=>'Karenge'],
      ['district_id'=>'20','name'=>'Kigabiro'],
      ['district_id'=>'20','name'=>'Muhazi'],
      ['district_id'=>'20','name'=>'Munyaga'],
      ['district_id'=>'20','name'=>'Munyiginya'],
      ['district_id'=>'20','name'=>'Musha'],
      ['district_id'=>'20','name'=>'Muyumbu'],
      ['district_id'=>'20','name'=>'Mwulire'],
      ['district_id'=>'20','name'=>'Nyakariro'],
      ['district_id'=>'20','name'=>'Nzige'],
      ['district_id'=>'20','name'=>'Rubona'],
      ['district_id'=>'21','name'=>'Bwishyura'],
      ['district_id'=>'21','name'=>'Gishari'],
      ['district_id'=>'21','name'=>'Gishyita'],
      ['district_id'=>'21','name'=>'Gisovu'],
      ['district_id'=>'21','name'=>'Gitesi'],
      ['district_id'=>'21','name'=>'Kareba'],
      ['district_id'=>'21','name'=>'Murambi'],
      ['district_id'=>'21','name'=>'Mubuga'],
      ['district_id'=>'21','name'=>'Mutuntu'],
      ['district_id'=>'21','name'=>'Rubengera'],
      ['district_id'=>'21','name'=>'Rugabano'],
      ['district_id'=>'21','name'=>'Ruganda'],
      ['district_id'=>'21','name'=>'Rwankuba'],
      ['district_id'=>'21','name'=>'Twumba'],
      ['district_id'=>'22','name'=>'Bwira'],
      ['district_id'=>'22','name'=>'Gatumba'],
      ['district_id'=>'22','name'=>'Hindiro'],
      ['district_id'=>'22','name'=>'Kabaya'],
      ['district_id'=>'22','name'=>'Kageyo'],
      ['district_id'=>'22','name'=>'Kavumu'],
      ['district_id'=>'22','name'=>'Matyazo'],
      ['district_id'=>'22','name'=>'Muhanda'],
      ['district_id'=>'22','name'=>'Muhororo'],
      ['district_id'=>'22','name'=>'Ndaro'],
      ['district_id'=>'22','name'=>'Ngororero'],
      ['district_id'=>'22','name'=>'Nyange'],
      ['district_id'=>'22','name'=>'Sovu'],
      ['district_id'=>'23','name'=>'Bigogwe'],
      ['district_id'=>'23','name'=>'Jenda'],
      ['district_id'=>'23','name'=>'Jomba'],
      ['district_id'=>'23','name'=>'Kabatwa'],
      ['district_id'=>'23','name'=>'Karago'],
      ['district_id'=>'23','name'=>'Kintobo'],
      ['district_id'=>'23','name'=>'Mukamira'],
      ['district_id'=>'23','name'=>'Muringa'],
      ['district_id'=>'23','name'=>'Rambura'],
      ['district_id'=>'23','name'=>'Rugera'],
      ['district_id'=>'23','name'=>'Rurembo'],
      ['district_id'=>'23','name'=>'Shyira'],
      ['district_id'=>'24','name'=>'Bushekeri'],
      ['district_id'=>'24','name'=>'Bushenge'],
      ['district_id'=>'24','name'=>'Cyato'],
      ['district_id'=>'24','name'=>'Gihombo'],
      ['district_id'=>'24','name'=>'Kagano'],
      ['district_id'=>'24','name'=>'Kanjongo'],
      ['district_id'=>'24','name'=>'Karambi'],
      ['district_id'=>'24','name'=>'Karengera'],
      ['district_id'=>'24','name'=>'Kirimbi'],
      ['district_id'=>'24','name'=>'Macuba'],
      ['district_id'=>'24','name'=>'Mahembe'],
      ['district_id'=>'24','name'=>'Nyabitekeri'],
      ['district_id'=>'24','name'=>'Rangiro'],
      ['district_id'=>'24','name'=>'Ruharambuga'],
      ['district_id'=>'24','name'=>'Shangi'],
       ['district_id'=>'25','name'=>'Bugeshi'],
       ['district_id'=>'25','name'=>'Busasamana'],
       ['district_id'=>'25','name'=>'Cyanzarwe'],
       ['district_id'=>'25','name'=>'Gisenyi'],
       ['district_id'=>'25','name'=>'Kanama'],
       ['district_id'=>'25','name'=>'Kanzenze'],
       ['district_id'=>'25','name'=>'Mudende'],
       ['district_id'=>'25','name'=>'Nyakiliba'],
       ['district_id'=>'25','name'=>'Nyamyumba'],
       ['district_id'=>'25','name'=>'Nyundo'],
       ['district_id'=>'25','name'=>'Rubavu'],
       ['district_id'=>'25','name'=>'Rugerero'],
       ['district_id'=>'26','name'=>'Bugarama'],
       ['district_id'=>'26','name'=>'Butare'],
       ['district_id'=>'26','name'=>'Bweyeye'],
       ['district_id'=>'26','name'=>'Gikundamvura'],
       ['district_id'=>'26','name'=>'Gashonga'],
       ['district_id'=>'26','name'=>'Giheke'],
       ['district_id'=>'26','name'=>'Gihundwe'],
       ['district_id'=>'26','name'=>'Gitambi'],
       ['district_id'=>'26','name'=>'Kamembe'],
       ['district_id'=>'26','name'=>'Muganza'],
       ['district_id'=>'26','name'=>'Mururu'],
       ['district_id'=>'26','name'=>'Nkanka'],
       ['district_id'=>'26','name'=>'Nkombo'],
       ['district_id'=>'26','name'=>'Nkungu'],
       ['district_id'=>'26','name'=>'Nyakabuye'],
       ['district_id'=>'26','name'=>'Nyakarenzo'],
       ['district_id'=>'26','name'=>'Nzahaha'],
       ['district_id'=>'26','name'=>'Rwimbogo'],
       ['district_id'=>'27','name'=>'Boneza'],
       ['district_id'=>'27','name'=>'Gihango'],
       ['district_id'=>'27','name'=>'Kigeyo'],
       ['district_id'=>'27','name'=>'Kivumu'],
       ['district_id'=>'27','name'=>'Manihira'],
       ['district_id'=>'27','name'=>'Mukura'],
       ['district_id'=>'27','name'=>'Murunda'],
       ['district_id'=>'27','name'=>'Musasa'],
       ['district_id'=>'27','name'=>'Mushonyi'],
       ['district_id'=>'27','name'=>'Mushubati'],
       ['district_id'=>'27','name'=>'Nyabirasi'],
       ['district_id'=>'27','name'=>'Ruhango'],
       ['district_id'=>'27','name'=>'Rusebeya'],
       ['district_id'=>'28','name'=>'Bumbogo'],
       ['district_id'=>'28','name'=>'Gatsata'],
       ['district_id'=>'28','name'=>'Jali'],
       ['district_id'=>'28','name'=>'Gikomero'],
       ['district_id'=>'28','name'=>'Gisozi'],
       ['district_id'=>'28','name'=>'Jabana'],
       ['district_id'=>'28','name'=>'Kinyinya'],
       ['district_id'=>'28','name'=>'Ndera'],
       ['district_id'=>'28','name'=>'Nduba'],
       ['district_id'=>'28','name'=>'Rusororo'],
       ['district_id'=>'28','name'=>'Rutunga'],
       ['district_id'=>'28','name'=>'Kacyiru'],
       ['district_id'=>'28','name'=>'Kimihurura'],
       ['district_id'=>'28','name'=>'Kimironko'],
       ['district_id'=>'28','name'=>'Remera'],
        ['district_id'=>'29','name'=>'Gahanga'],
        ['district_id'=>'29','name'=>'Gatenga'],
        ['district_id'=>'29','name'=>'Gikondo'],
        ['district_id'=>'29','name'=>'Kagarama'],
        ['district_id'=>'29','name'=>'Kanombe'],
        ['district_id'=>'29','name'=>'Kicukiro'],
        ['district_id'=>'29','name'=>'Kigarama'],
        ['district_id'=>'29','name'=>'Masaka'],
        ['district_id'=>'29','name'=>'Niboye'],
        ['district_id'=>'29','name'=>'Nyarugunga'],
        ['district_id'=>'30','name'=>'Gitega'],
        ['district_id'=>'30','name'=>'Kanyinya'],
        ['district_id'=>'30','name'=>'Kigali'],
        ['district_id'=>'30','name'=>'Kimisagara'],
        ['district_id'=>'30','name'=>'Mageragere'],
        ['district_id'=>'30','name'=>'Muhima'],
        ['district_id'=>'30','name'=>'Nyakabanda'],
        ['district_id'=>'30','name'=>'Nyamirambo'],
        ['district_id'=>'30','name'=>'Rwezamenyo'],
        ['district_id'=>'30','name'=>'Nyarugenge']
        ];
        foreach($imirenge as $umurenge){
            Sector::create($umurenge);
            }
    }
}
