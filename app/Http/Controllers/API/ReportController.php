<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Model
use App\Models\Report;

//Requests
use App\Http\Requests\SaveReportRequest;
use App\Http\Requests\UpdateReportRequest;






class ReportController extends Controller
{
   
    public function index()
    {
        return Report::all();
    }

    public function store(SaveReportRequest $request)
    {
        Report::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Reporte creado exitosamente!"
        ]);
    }

    public function show(Report $report)
    {
        return response()->json([
            'res' => true,
            'result' => $report
        ]);
    }

    public function update(UpdateReportRequest $request, Report $report)
    {
        $report->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo el rol correctamente"
        ],200);
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino el reporte correctamente"
        ],200);
    }
}
