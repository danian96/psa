<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        //
        /*$infos = DB::select("
            Select *
            from infos,componentsinfo,components,managements
            where infos.id = componentsinfo.info_id  AND componentsinfo.component_id = components.id
            and components.typeComponent = 'MANAGEMENT'
        ");*/

        /*$infos  = DB::select("
            Select *
            from infos
            where infos.id IN (
                Select componentsinfo.info_id
                from componentsinfo
                WHERE componentsinfo.component_id in(
                    Select components.id
                    from components
                    where components.typeComponent = 'MANAGEMENT'
                ) 
            )
        ");*/
        $infos  = DB::table('infos')
            ->join('componentsinfo','infos.id','=','componentsinfo.info_id')
            ->join('components','componentsinfo.component_id','=','components.id')
            ->where('components.typeComponent', '=','MANAGEMENT')
            ->select('infos.*')
            ->get();
        return new JsonResponse($infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
