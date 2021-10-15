<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function Index1Home(){
        $nom = "Nom et prenom: Haki";
        $prenom = "Saleh Youssouf/";
        $tel = "tel: +212621242576/";
        $etablissement = "etablissement: Ecole Nationale Des Sciences Appliauees de Tetouan";
        return view('index1', compact('nom','prenom','tel','etablissement'));
    }
}
