<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelperController extends Controller
{
    public static function getLayout()
    {

        $role = Auth::user()->role;
        $layout = false;

        switch ($role) {
            case 'super_admin':
                $layout =  'dashboard.layouts.main';
                break;
            case 'coordinator':
                $layout = 'dashboard.layouts.coordinator';
                break;
            case 'accounting':
                $layout = 'dashboard.layouts.accounting';
                break;
            case 'dental_assistant':
                $layout = 'dashboard.layouts.dental_assistant';
                break;
            case 'travel_coordinator':
                $layout = 'dashboard.layouts.travel_coordinator';
                break;
            case 'media_relations':
                $layout = 'dashboard.layouts.media_relations';
                break;
            case 'operation_manager_and_doctor':
                $layout = 'dashboard.layouts.operation_manager_and_doctor';
                break;
        }

        return $layout;
    }
}
