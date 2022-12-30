<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function askingstone()
    {
        return view ('askingstone/askingstone');
    }

    public function ayunanlaut()
    {
        return view ('ayunanlaut/ayunanlaut');
    }

    public function bangkutaman()
    {
        return view ('bangkutaman/bangkutaman');
    }

    public function batualif()
    {
        return view ('batualif/batualif');
    }

    public function batubersantai()
    {
        return view ('batubersantai/batubersantai');
    }
    
    public function bbq()
    {
        return view ('bbq/bbq');
    }

    public function batujembatanterputus()
    {
        return view ('batujembatanterputus/batujembatanterputus');
    }

    public function homestay()
    {
        return view ('homestay/homestay');
    }

    public function kerangkapaus()
    {
        return view ('kerangkapaus/kerangkapaus');
    }

    public function pondokhijau()
    {
        return view ('pondokhijau/pondokhijau');
    }

    public function tamankayu()
    {
        return view ('tamankayu/tamankayu');
    }
    public function batupenyuraksasa()
    {
        return view ('batupenyuraksasa/batupenyuraksasa');
    }
    
}
