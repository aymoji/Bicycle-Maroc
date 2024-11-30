<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class RecuController extends Controller
{
    public function recu($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);

        $pdf = PDF::loadView('recu', compact('reservation'));
        $filename = 'Reservation-' . $reservation_id.'-recu'.'.pdf';

        $pdf->save(storage_path('app/recus/' . $filename));

        return $pdf->download($filename);
    }
}