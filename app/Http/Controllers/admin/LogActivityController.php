<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;

class LogActivityController extends Controller
{
    public function index()
    {
        $logs = LogActivity::with('user')
            ->latest()
            ->get();

        return view(
            'admin.log.index',
            compact('logs')
        );
    }
}