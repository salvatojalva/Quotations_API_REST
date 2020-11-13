<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Quotation;

class QuotationController extends Controller
{

    public function save(Request $request){

        
        $validator = Validator::make($request->all(), [
            'concessionaire_name' => 'required',
            'concessionaire_phone' => 'required',
            'concessionaire_address' => 'required',
            'agent_full_name' => 'required',
            'agent_phone' => 'required',
            'client_name' => 'required',
            'client_last_name' => 'required',
            'client_address' => 'required',
            'client_phone' => 'required',
            'client_email' => 'required|email',
            'client_age' => 'required|integer',
            'client_genre' => 'required|in:F,M',
            'client_civil_status' => 'required|in:Casado,Soltero,Viudo,Separado',
            'client_home_people' => 'required|integer',
            'client_academic_level' => 'required|in:Ninguna,Primaria,Basico,Diversificado,Licenciatura,Master,Doctorado,Tecnico,Otro',
            'client_is_working' => 'required|boolean',
            'client_income' => 'required|numeric',
            'car_model' => 'required',
            'car_line' => 'required',
            'car_brand' => 'required',
        ]);

        if ($validator->fails()) {
            
            return response()->json([
                'status' => 'Error',
                'errors' => $validator->errors(),
            ]);
        }

        return $this->store_quotation($request->all());
        
    }


    /**
     * Private functions
     */

    private function store_quotation($request_data){
        $quotation = new Quotation;
        $quotation->fill($request_data);
        
        if(!$quotation->save()){
            return response()->json([
                'status' => 'Error',
                'errors' => 'Can not save the quotation',
            ]);
        }

        return response()->json([
            'status' => 'Success',
            'data' => $quotation,
        ]);
    }
    
}
