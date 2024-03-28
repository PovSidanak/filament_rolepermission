<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    public function lead(){
        return view('lead');
    }
    public function customer(){
        return view('customer');
    }
    public function service(){
        return view('service');
    }
    public function ticket(){
        return view('ticket');
    }
    public function atm(){
        return view('atm');
    }
    public function sale(){
        return view('sale');
    }
    public function home(){
        return View('home');
    }
    public function technical(){
        return View('technical');
    }
    public function listreportPM(){
        return View('listreportPM');
    }
    public function listreportBTI(){
        return View('listreportBTI');
    }
    public function staff(){
        return View('staff');
    }
    public function createPM(){
        return View('createPM');
    }
    public function createBTI(){
        return View('createBTI');
    }
    public function drewCustomerPM(){
        return View('drewCustomerPM');
    }
    public function drewTechnicalPM(){
        return View('drewTechnicalPM');
    }
    public function drewCustomerBTI(){
        return View('drewCustomerBTI');
    }
    public function drewTechnicalBTI(){
        return View('drewTechnicalBTI');
    }
    public function manage(){
        return View('manage');
    }
    public function permission(){
        return View('permission');
    }









    


}
