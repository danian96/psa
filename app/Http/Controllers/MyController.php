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

        $array = array();
        foreach ($subjects_ids as $subject) {
            array_push($array, $subject -> id);
        }

        $questions_subject_0 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.id')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[0])
            ->get();

        $array0 = array();
        foreach ($questions_subject_0 as $subject) {
            array_push($array0, $subject -> id);
        }

        $questions_subject_1 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.id')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[1])
            ->get();

        $array1 = array();
        foreach ($questions_subject_1 as $subject) {
            array_push($array1, $subject -> id);
        }

        $questions_subject_2 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.id')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[2])
            ->get();

        $array2 = array();
        foreach ($questions_subject_2 as $subject) {
            array_push($array2, $subject -> id);
        }

        $questions_subject_3 = DB::table('questions')
            ->join('areas', 'questions.area_id', '=', 'areas.id')
            ->select('questions.id')
            ->where('questions.area_id', '=', $area_id)
            ->where('questions.subject_id', '=', $array[3])
            ->get();

        $array3 = array();
        foreach ($questions_subject_3 as $subject) {
            array_push($array3, $subject -> id);
        }

        $questions = array();

        array_push($questions, $array0, $array1, $array2, $array3);

        /*
        $questions = $questions_subject_0
            ->union($questions_subject_1)
            ->union($questions_subject_2)
            ->union($questions_subject_3);
        */
        return $questions;
    }

    public function questionsforexam($area_id) {
        $questions_from_area = $this->questionsfromarea($area_id);
        $array = array();

        foreach ($questions_from_area as $questions_from_subject) {
            $questions_array = array();
            foreach (range(1, 10) as $i) {
                $index = rand(0, count($questions_from_subject) - 1);
                $question_id = $questions_from_subject[$index];
                $question = \App\Question::find($question_id);
                //echo('id : ');
                //echo($question -> id);
                //echo(' sub : ');
                //echo($question -> subject_id);
                //echo(' | ');
                array_push($questions_array, $question);
                unset($questions_from_subject[$index]);
                $questions_from_subject = array_values($questions_from_subject);
            }
            //echo(' FIN ');
            array_push($array, $questions_array);
        }

        //return $array;
        dd($array);
    }
}
