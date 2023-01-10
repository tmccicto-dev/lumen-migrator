<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Bpl_taxassessment;
use App\Models\Bpl_business_profile;
use App\Models\Portal\Buss_tax_assessments;
use App\Models\Portal\Business_profiles;
use Illuminate\Support\Str;

class MigratorController extends BaseController
{
    public function __construct()
    {
        //
    }

    public function bpl_taxassessment(){
        $taxes = Bpl_taxassessment::getAll();

        // foreach ($taxes as $tax) {
        //     Buss_tax_assessments::insert($tax);
        // }

        for($i = 0;$i<=count($taxes);$i++) {
            $id = (string) Str::orderedUuid();
            $insert_data[] = [
                'id' => $id,
                'refID' => $taxes[$i]['refID'],
                'business_profiles_id' => $taxes[$i]['business_profiles_id'],
                'assessment_date' => $taxes[$i]['assessment_date'],
                'assessment_year' => $taxes[$i]['assessment_year'],
                'remarks' => $taxes[$i]['remarks'],
                'payment_type' => $taxes[$i]['payment_type'],
                'created_at' => $taxes[$i]['created_at'],
                'updated_at' => $taxes[$i]['updated_at']
            ];
            // dd($insert_data);
            Buss_tax_assessments::insert($insert_data);
            $insert_data = [];
        }

        // return response()->json([]);
    }

    public function bpl_business_profile(){
        $profiles = Bpl_business_profile::getAll();

        for($i = 0;$i<=count($profiles);$i++) {
            $id = (string) Str::orderedUuid();
            $insert_data[] = [
                'id' => $id,
                'refID' => $profiles[$i]['refID'],
                'buss_id' => $profiles[$i]['buss_id'],
                'business_name' => $profiles[$i]['business_name'],
                'lessor_name' => $profiles[$i]['lessor_name'],
                'tel' => $profiles[$i]['tel'],
                'mobile' => $profiles[$i]['mobile'],
                'buss_type' => $profiles[$i]['buss_type'],
                'dti_no' => $profiles[$i]['dti_no'],
                'dti_reg_date' => $profiles[$i]['dti_reg_date'],
                'created_at' => $profiles[$i]['created_at'],
                'updated_at' => $profiles[$i]['updated_at'],
            ];
            // dd($insert_data);
            Business_profiles::insert($insert_data);
            $insert_data = [];
        }
    }
}
