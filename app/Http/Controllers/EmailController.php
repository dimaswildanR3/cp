<?php

    namespace App\Http\Controllers;
        
    use Illuminate\Http\Request;
    use App\Mail\LatihanEmail; //import juga LatihanEmail
    use Illuminate\Support\Facades\Mail; //jangan lupa import ini
        
    class EmailController extends Controller
    {
        public function index(){
            //isi Mail::to(...) dengan email tujuan yang kalian inginkan
            Mail::to("dimaswildan1986@gmail.com")->send(new LatihanEmail());
        }
    }