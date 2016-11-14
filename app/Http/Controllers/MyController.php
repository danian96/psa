<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class MyController extends Controller
{
    //
    public function facultiesfromarea($area)
    {
        $faculties = DB::table('faculties')
                    ->join('areas', 'faculties.area_id', '=', 'areas.id')
                    ->where('areas.id', '=', $area)
                    ->select('faculties.*')
                    ->get();

        /*
        $n = count($faculties);

        $array = array();
        foreach ($faculties as $faculty) {
            array_push($array, $faculty->id);
        }
        dd($array);
        */

        return  new JsonResponse($faculties);
    }

    public function subjectsfromarea($id)
    {
        $subjects = DB::table('subjects')
            ->join('area_subject', 'subjects.id', '=', 'area_subject.subject_id')
            ->join('areas', 'area_subject.area_id', '=', 'areas.id')
            ->where('areas.id', '=', $id)
            ->select('subjects.*')
            ->get();

        return  new JsonResponse($subjects);


    }

    public function questionsfromarea($area_id) {
        $subjects_ids = DB::table('subjects')
            ->join('area_subject', 'subjects.id', '=', 'area_subject.subject_id')
            ->join('areas', 'area_subject.area_id', '=', 'areas.id')
            ->where('areas.id', '=', $area_id)
            ->select('subjects.id')
            ->get();

        //dd($subjects_ids);

        $array = array();
        foreach ($subjects_ids as $subject) {
            array_push($array, $subject -> id);
        }

        //dd($array);

        $questions_subject_0 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.*')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[0])
            ->get();

        //dd($questions_subject_0);

        $questions_subject_1 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.*')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[1])
            ->get();

        //dd($questions_subject_1);

        $questions_subject_2 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.*')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[2])
            ->get();

        //dd($questions_subject_2);

        $questions_subject_3 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.*')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[3])
            ->get();

        //dd($questions_subject_3);

        $questions = array();

        array_push($questions, $questions_subject_0, $questions_subject_1, $questions_subject_2, $questions_subject_3);

        dd($questions);
        /*
        $questions = $questions_subject_0
            ->union($questions_subject_1)
            ->union($questions_subject_2)
            ->union($questions_subject_3);
        */
        return new JsonResponse($questions);
    }
}
