<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;
use Illuminate\Http\JsonResponse;

class MyController extends Controller
{
    //
    public function facultiesfromarea($id)
    {
        $faculties = DB::table('faculties')
                    ->join('areas', 'faculties.area_id', '=', 'areas.id')
                    //->leftjoin('components', 'faculties.component_id', '=', 'components.id')
                    ->where('areas.id', '=', $id)
                    ->select('faculties.*')
                    ->get();
        //dd($faculties);
        return  new JsonResponse($faculties);
    }

    public function subjectsfromarea($id)
    {
        $faculties = DB::table('subjects')
            ->join('area_subject', 'subjects.id', '=', 'area_subject.id')
            ->join('areas', 'area_subject.area_id', '=', 'areas.id')
            ->select('subjects.*')
            ->get();
        //dd($faculties);
        return  new JsonResponse($faculties);
    }


}
