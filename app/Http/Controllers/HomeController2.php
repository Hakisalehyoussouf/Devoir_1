<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function Index2Home(){
        $Lycee1 = "Lycee Ibnou-Cina; ";
        $Lycee2 = "Lycee Sacre-Coeur;";
        $Lycee3 = "Lycee Fort-Lamy;";
        $Lycee4 = "Lycee Felix-Eboué;";
        $Lycee5 = "Lycee Scientifiaue La Rennaissnce;";
        $Lycee6 = "Lycee Cheikh Hamdam;";
        $Lycee7 = "Lycee Gabriel Lisette;";
        $Lycee8 = "Lycee Baba Lagré;";
        $Lycee9 = "Lycee De la Paix;";
        $Lycee10 = "Lycee De Goudji Centre;";
        return view('index2',compact('Lycee1','Lycee2','Lycee3','Lycee4','Lycee5','Lycee6','Lycee7','Lycee8','Lycee9','Lycee10'));
    }
}
