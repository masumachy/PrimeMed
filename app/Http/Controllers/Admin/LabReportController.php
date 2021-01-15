<?php

namespace App\Http\Controllers\Admin;
use App\LabReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabReportController extends Controller
{
    public function new_lab_report(){
        $labReport = LabReport::paginate(10);
        return view('admin.lab-report.new-lab-report',compact('labReport'));
    }
}
