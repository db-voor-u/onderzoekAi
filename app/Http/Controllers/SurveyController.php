<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SurveyController extends Controller
{
    public function index()
    {
        return view('Onderzoek');
    }

    public function sendSurvey(Request $request)
    {
        $data = $request->validate([
            'bedrijfsnaam' => 'required', // Voeg validatie toe voor andere velden zoals nodig
            'sector' => 'required',
            'grootte' => 'required',
            'regio' => 'required',
            'uitdagingen' => 'required',
            'technologieGebruik' => 'required',
            'verbeteringTechnologie' => 'required',
            'bekendAI' => 'required',
            'hulpAI' => 'required',
            'zorgenAI' => 'required',
            'automatiseringAI' => 'required',
            'klantenserviceAI' => 'required',
            'planningAI' => 'required',
            'investeringAI' => 'required',
            'aankoopType' => 'required',
            'belangrijkeFactoren' => 'required',
            'suggesties' => 'required',
            'interesseVervolgonderzoek' => 'required',


        ]);

        Mail::send('emails.survey', $data, function ($message) use ($data) {
            // Zorg ervoor dat u hier het juiste e-mailadres van de ontvanger plaatst
            $message->to('receptieemail@mail.com', 'AI Connect Monteurs')
                ->subject('Nieuwe Survey Inzending');
        });

        return redirect()->to('/')->with('success', 'Uw enquête is succesvol verzonden. Dank u!');
    }
}
