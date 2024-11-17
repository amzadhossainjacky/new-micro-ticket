<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Services\UtilityService;
use App\Http\Controllers\Controller;

/**
 * StaffDashboardController
 * @author Md. Amzad Hossain Jacky <amzadhossaina1922@gmail.com>
 */
class StaffDashboardController extends Controller
{
    ## Service properties
    private UtilityService $utility_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //define breadcrumb 
        $breadCrumb = $this->utility_service->breadCrumb('Dashboard', 'Dashboard', 'List', 'home');

        return view('backend.staff.dashboard', ['breadCrumb' => $breadCrumb]);
    }
}
