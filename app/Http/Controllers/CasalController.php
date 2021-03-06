<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\casal;
use App\Models\city;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CasalController extends Controller
{
    public function casalView(){
        $casalInfo = casal::all();
        
        $cityInfo = city::all()->where('id',$casalInfo[0]->id_city);

        return view('casalView',[
            'cityInfo' => $cityInfo,
            'casalInfo' => $casalInfo,
            'casalCity' => $cityInfo[0]->name,
        ]);
    }

    public function casalsCreate(){
        $cities = city::all();
        $only_id = [];
        $cityNames = [];
        foreach($cities as $city){
            array_push($only_id, $city->id);
            array_push($cityNames, $city->name);
        }
        // dd($cities[0]->id);

        return view("addFormCasals",[
                'cityInfo' => $cities,
                'citiesId' => $only_id,
                'cityNames' => $cityNames,
        ]);
    }

    public function addCasal(Request $request){
        // dd($request);
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:25', 'min:5'],
            'initDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
            'places' => ['required', 'numeric', 'min:1'],
            'id_city' => ['required', 'numeric'],
        ])->validate();
        DB::table('casals')->insert([
            'name' => $request->name,
            'initDate' => $request->initDate,
            'endDate' => $request->endDate,
            'places' => $request->places,
            'id_city' => $request->id_city,
        ]);
        $casalInfo = casal::all();
        $cityInfo = city::all()->where('id',$casalInfo[0]->id_city);
        return view("casalView", [
            'casalInfo' => $casalInfo,
            'casalCity' => $cityInfo[0]->name,
        ]);
    }

    public function deleteCasal($casal){

        if(DB::table('casals')->where('id',$casal)){
            DB::table('casals')->where('id',$casal)->delete();
            $casalInfo = casal::all();
            $cityInfo = city::all()->where('id',$casalInfo[0]->id_city);
            return view('casalView',[
                'cityInfo' => $cityInfo,
                'casalInfo' => $casalInfo,
                'casalCity' => $cityInfo[0]->name,
            ]);
        }
        else{
            $message = "The items has not been found";
            return $message;
        }
    }

    public function formCasal($casal){
        if(DB::table('casals')->where('id',$casal)){
            $casalsInfo = DB::table('casals')->where('id',$casal)->get();
        }
        $cities = DB::table('cities')->get();
            
        // dd("hola");
        return view("editFormCasals", [
            'casalsInfo' => $casalsInfo,
            'cities' => $cities,
        ]);
    }


    public function edit(Request $request){

        Validator::make($request->all(), [
            'newName' => ['required', 'string', 'max:25', 'min:5'],
            'newInitDate' => ['required', 'date'],
            'newEndDate' => ['required', 'date'],
            'newPlaces' => ['required', 'numeric', 'min:1'],
            'newCity' => ['required', 'numeric'],
        ])->validate();
        
        $idCasal = DB::table('casals')->select('id')->where('name',$request->name)->get();
        // dd($idCasal[0]->id);
        DB::table('casals')->where('id',$idCasal[0]->id)->update([
            'name' => $request->newName,
            'initDate' => $request->newInitDate,
            'endDate' => $request->newEndDate,
            'places' => $request->newPlaces,
            'id_city' => $request->newCity,
        ]);
        $casalInfo = casal::all();
        $cityInfo = city::all()->where('id',$casalInfo[0]->id_city);
        return view("casalView", [
            'casalInfo' => $casalInfo,
            'casalCity' => $cityInfo[0]->name,
        ]);




    }
    
}
