<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Bpl_taxassessment;
use App\Models\Portal\Buss_tax_assessments;
use Illuminate\Support\Str;

class MigratorController extends BaseController
{
    public function __construct()
    {
        //
    }

    public function migrate_bpl_taxassessment(){
        $taxes = Bpl_taxassessment::getAll();
        $portal = Buss_tax_assessments::getAll();

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
            Buss_tax_assessments::insert($insert_data);
            $insert_data = [];
        }

        // return response()->json([]);
    }
}
