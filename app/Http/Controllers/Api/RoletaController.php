<?php
/**
 * File RoletaController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use App\Http\Resources\RoletaResource;
use App\Laravue\Models\RoletaOption;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Arr;
/**
 * Class RoletaController
 *
 * @package App\Http\Controllers\Api
 */
class RoletaController extends BaseController
{
    const ITEM_PER_PAGE = 15;

    /**
     * Display a listing of the Roleta resource.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function index(Request $request)
    {
        $searchParams = $request->all();
        $RoletaQuery = RoletaOption::query();

        return $RoletaQuery->get('option');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  RoletaOption $Roleta
     * @return RoletaResource|\Illuminate\Http\JsonResponse
     */
    public function show(RoletaOption $Roleta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param RoletaOption    $Roleta
     * @return RoletaResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, RoletaOption $Roleta)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  RoletaOption $Roleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoletaOption $Roleta)
    {
    
    }

}
