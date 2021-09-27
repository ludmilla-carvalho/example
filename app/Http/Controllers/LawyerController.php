<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Award;
use App\Models\Lawyer;
use App\Models\Language;
use App\Models\AwardType;
use App\Models\Experience;
use App\Models\Graduation;
use App\Models\AwardLawyer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\Lawyer as LawyerResource;




class LawyerController extends Controller
{
    public function index(Request $request)
    {
        $cache = request()->get('cache');
        if($cache){
            $lawyer = Lawyer::inRandomOrder($cache)->paginate(6);
            $lawyer->appends(['cache' => $cache]);
            return new LawyerResource($lawyer);
        }else{
            return new LawyerResource(Lawyer::orderBy('name', 'asc')->paginate(6));
        }
    }

    public function filter(Request $request)
    {
        $lawyer = Lawyer::orderBy('name', 'asc');
        
        $letter = request()->get('letter');
        $lawyer_type = request()->get('lawyer_type');
        $city = request()->get('city');
        $area = request()->get('area');

        

        if($letter){
            $lawyer->where('name','LIKE', $letter .'%');
        }

        if($lawyer_type){
            $lawyer->where('lawyer_type_id', $lawyer_type);
        }

        if($city){
            $lawyer->whereHas('cities', function ($query) use ($city) {
                $query->where('id', $city);
            });
        }

        if($area){
            $lawyer->whereHas('areas', function ($query) use ($area) {
                $query->where('id', $area);
            });
        }

        return new LawyerResource($lawyer->paginate(6));

        
    }

    public function show($slug){
        $lawyer = Lawyer::with(['graduation', 'languages', 'experience', 'areas', 'lawyer_type', 'lawyer_subtype', 'cities', 'awards'])->where('slug', $slug)->get();

        $result['lawyer'] = $lawyer;

        return new LawyerResource($result);
        //return LawyerResource::collection($lawyer);
    }

    public function import()
    {
        $row = 0;
        if (($handle = fopen(public_path("csv/int_juridico.csv"), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                //reconhecimentos
                /*
                $lawyer = Lawyer::where('slug',Str::slug(trim($data[0])))->first();
                if($lawyer){

                    $at1 = AwardType::where('title', trim($data[2]))->first();
                    if($at1){
                        //echo $row . ' ' . $at1->id . '<br>';
                        $aw1 = Award::where('award_type_id', $at1->id)->where('title', trim($data[4]))->first();
                        if($aw1){
                            //echo $row . ' ' . $aw->id . '<br>';
                            //ano $data[3]
                            $al1 = AwardLawyer::where('lawyer_id', $lawyer->id)->where('award_id', $aw1->id)->where('year', trim($data[3]))->first();
                            if(!$al1){
                                //$al1 = new AwardLawyer();
                                // $al1->lawyer_id = $lawyer->id;
                                // $al1->award_id = $aw1->id;
                                // $al1->year = trim($data[3]);
                                // $al1->save();*
                            }else{
                                //echo 'award law1 ' .  $row . ' ' . $lawyer->name .  '<br>';
                            }
                        }else{
                            echo 'award ' .  $row . ' ' . $lawyer->name . ' ' . $at1->id . '  ' . $data[4] . '<br>';
                            // $aw1 = new Award();
                            // $aw1->award_type_id = $at1->id;
                            // $aw1->title = trim($data[4]);
                            // $aw1->save();*
                        }
                    }else{
                        if(strlen($data[2]) > 2)
                            echo 'a type ' .  $row . ' ' . $data[2] . '<br>';
                    }

                    $at2 = AwardType::where('title', trim($data[5]))->first();
                    if($at2){
                        //echo $row . ' ' . $at2->id . '<br>';
                        $aw2 = Award::where('award_type_id', $at2->id)->where('title', trim($data[7]))->first();
                        if($aw2){
                            //echo $row . ' ' . $aw2->id . '<br>';
                            $al2 = AwardLawyer::where('lawyer_id', $lawyer->id)->where('award_id', $aw2->id)->where('year', trim($data[6]))->first();
                            if(!$al2){
                                // $al2 = new AwardLawyer();
                                // $al2->lawyer_id = $lawyer->id;
                                // $al2->award_id = $aw2->id;
                                // $al2->year = trim($data[6]);
                                // $al2->save();
                            }else{
                                echo 'award law2 ' .  $row . ' ' . $lawyer->name .  '<br>';
                            }
                        }else{
                            echo 'award law2 ' .  $row . ' ' . $lawyer->name . ' ' . $at2->id . '  ' . $data[7] . '<br>';
                            $aw2 = new Award();
                            $aw2->award_type_id = $at2->id;
                            $aw2->title = trim($data[7]);
                            $aw2->save();
                        }
                    }else{
                        if(strlen($data[5]) > 2){
                            echo 'a type/ ' .  $row . ' ' . $data[5] . '  ' . $data[5] . '<br>';
                            // $at2 = new AwardType();
                            // $at2->title = trim($data[5]);
                            // $at2->save();
                        }      
                    }
                }else{
                    echo 'adv ' .  $row . ' ' . $data[0] . '<br>';
                }

                */

                

                

                if($row > 0){
                    
                    /*$sel_cities = [];
                    if(isset($data[4])){
                        $cidade = City::where('title', $data[4])->first();
                        if($cidade){
                            array_push($sel_cities, $cidade->id);
                        }else{
                            if(strlen($data[4]) > 2){
                                echo 'cidade ' . $data[2] . ' linha ' . $row;
                            }
                        }
                    }else{
                        var_dump($data);
                        echo '<br> data[1] ' . $row;
                    }

                    

                    
                    $sel_areas = [];
                    $area = Area::where('title', trim($data[5]))->first();
                    if($area){
                        array_push($sel_areas, $area->id);
                    }else{
                        if(strlen($data[5]) > 2){
                            echo 'area ' . $data[5] . ' linha ' . $row;
                        }
                    }
                    $area = Area::where('title', trim($data[6]))->first();
                    if($area){
                        array_push($sel_areas, $area->id);
                    }else{
                        if(strlen($data[6]) > 2){
                            echo 'area ' . $data[6] . ' linha ' . $row;
                        }
                    }
                    $area = Area::where('title', trim($data[7]))->first();
                    if($area){
                        array_push($sel_areas, $area->id);
                    }else{
                        if(strlen($data[7]) > 2){
                            echo 'area ' . $data[7] . ' linha ' . $row;
                        }
                    }
                    
                    //var_dump($sel_areas);
                    

                    $sel_languages = [];
                    $idiomas = explode(";",$data[11]);
                    foreach($idiomas as $id){
                        $lang = Language::where('title', trim($id))->first();
                        if($lang){
                            array_push($sel_languages, $lang->id);
                        }else{
                            if(strlen($id) > 2){
                                echo 'idioma ' . $id . ' linha ' . $row;
                            }
                        }
                    }*/

                    /*$lang = Language::where('title', trim($data[11]))->first();
                    if($lang){
                        array_push($sel_languages, $lang->id);
                    }else{
                        if(strlen($data[11]) > 2){
                            echo 'idioma ' . $data[11] . ' linha ' . $row;
                        }
                    }
                    $lang = Language::where('title', trim($data[12]))->first();
                    if($lang){
                        array_push($sel_languages, $lang->id);
                    }else{
                        if(strlen($data[12]) > 2){
                            echo 'idioma ' . $data[12] . ' linha ' . $row;
                        }
                    }
                    $lang = Language::where('title', trim($data[13]))->first();
                    if($lang){
                        array_push($sel_languages, $lang->id);
                    }else{
                        if(strlen($data[13]) > 2){
                            echo 'idioma ' . $data[13] . ' linha ' . $row;
                        }
                    }
                    $lang = Language::where('title', trim($data[14]))->first();
                    if($lang){
                        array_push($sel_languages, $lang->id);
                    }else{
                        if(strlen($data[14]) > 2){
                            echo 'idioma ' . $data[14] . ' linha ' . $row;
                        }
                    }
                    //var_dump($sel_languages);*/
                    

                    /*$sel_graduation = [];
                    $graduation = Graduation::where('title', trim($data[15]))->first();
                    if($graduation){
                        array_push($sel_graduation, $graduation->id);
                    }else{
                        if(strlen($data[15]) > 2){
                            echo 'grad ' . $data[15] . ' linha ' . $row;
                        }
                    }
                    $graduation = Graduation::where('title', trim($data[16]))->first();
                    if($graduation){
                        array_push($sel_graduation, $graduation->id);
                    }else{
                        if(strlen($data[16]) > 2){
                            echo 'grad ' . $data[16] . ' linha ' . $row;
                        }
                    }
                    $graduation = Graduation::where('title', trim($data[17]))->first();
                    if($graduation){
                        array_push($sel_graduation, $graduation->id);
                    }else{
                        if(strlen($data[17]) > 2){
                            echo 'grad ' . $data[17] . ' linha ' . $row;
                        }
                    }
                    $graduation = Graduation::where('title', trim($data[18]))->first();
                    if($graduation){
                        array_push($sel_graduation, $graduation->id);
                    }else{
                        if(strlen($data[18]) > 2){
                            echo 'grad ' . $data[18] . ' linha ' . $row;
                        }
                    }
                    $graduation = Graduation::where('title', trim($data[19]))->first();
                    if($graduation){
                        array_push($sel_graduation, $graduation->id);
                    }else{
                        if(strlen($data[19]) > 2){
                            echo 'grad ' . $data[19] . ' linha ' . $row;
                        }
                    }
                    //var_dump($sel_graduation);
*/
 
/*$sel_experience = [];
                    $experience = Experience::where('title', trim($data[9]))->first();
                    if($experience){
                        array_push($sel_experience, $experience->id);
                    }else{
                        if(strlen($data[9]) > 2){
                            echo 'exp ' . $data[9] . ' linha ' . $row;
                        }
                    }
                    $experience = Experience::where('title', trim($data[10]))->first();
                    if($experience){
                        array_push($sel_experience, $experience->id);
                    }else{
                        if(strlen($data[10]) > 2){
                            echo 'exp ' . $data[10] . ' linha ' . $row;
                        }
                    }
                    */
                    /*$experience = Experience::where('title', trim($data[22]))->first();
                    if($experience){
                        array_push($sel_experience, $experience->id);
                    }else{
                        if(strlen($data[22]) > 2){
                            echo 'exp ' . $data[22] . ' linha ' . $row;
                        }
                    }*/
                    //var_dump($sel_experience);


                    
                    
                    /*$lawyer = new Lawyer();
                    $lawyer->lawyer_type_id = 4;
                    //$lawyer->name = ucwords(strtolower($data[0]));
                    $lawyer->name = $data[0];
                    $lawyer->slug = Str::slug($lawyer->name, '-');

                    $lawyer->gender =  $data[1];

                    if(trim($data[2]) == 'Auxiliar jurídico'){
                        $sub = 2;
                    }elseif(trim($data[2]) == 'Estagiário'){
                        $sub = 3;
                    }elseif(trim($data[2]) == 'Assistente jurídico'){
                        $sub = 1;
                    }else{
                        echo $data[2];
                    }

                    $lawyer->lawyer_subtype_id = $sub;
                    $lawyer->email =  $data[3];*/
                    
                    //$lawyer->email =  $data[1];
                    //$lawyer->phone =  $data[2];
                    //$lawyer->linkedin =  $data[5];
                    //$lawyer->text =  '<p>' . $data[8] . '</p>';

                    
                    //$lawyer->save();
                    //$lawyer->languages()->sync($sel_languages);
                    //$lawyer->cities()->sync($sel_cities);
                    //$lawyer->areas()->sync($sel_areas);
                    //$lawyer->graduation()->sync($sel_graduation);
                    //$lawyer->experience()->sync($sel_experience);

                    //txt en
                    $lawyer = Lawyer::where('email', trim($data[3]))->first();
                    $lawyer->gender =  $data[1];
                    //$lawyer->text_en = '<p>' . $data[3] . '</p>';
                    //$lawyer->save();
                    //dd($lawyer); exit;



                }
                $row++;
            }
            fclose($handle);
        }
        
    }
}
