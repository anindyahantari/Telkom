<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function createWordDocx()
    {
        $templateProcessor = new public\TemplateProcessor('template_p1.docx');
        $templateProcessor->setValue('jenisPelanggan', );
        $templateProcessor->setValue('judul', );
        $templateProcessor->setValue('unikKerja', );
        $templateProcessor->setValue('bebanMitra', );
        $templateProcessor->setValue('saatPenggunaan', );
        $templateProcessor->setValue('lb1', );
        $templateProcessor->setValue('lb2', );
        $templateProcessor->setValue('namaMitra', );
        $templateProcessor->setValue('readyForService', );
        $templateProcessor->setValue('pelanggan', );
        $templateProcessor->setValue('alamatDelivery', );
        $templateProcessor->setValue('nilaiKontrak', );
        $templateProcessor->setValue('marginTg', );
        $templateProcessor->setValue('rpMargin', );
        $templateProcessor->setValue('pemasukanDokumen', );
        $templateProcessor->setValue('am', );
        $templateProcessor->setValue('nikAm', );
        $templateProcessor->setValue('jabatanAm', );
        $templateProcessor->setValue('se', );
        $templateProcessor->setValue('nikSe', );
        $templateProcessor->setValue('jabatanSe', );
        $templateProcessor->setValue('bidding', );
        $templateProcessor->setValue('nikBidding', );
        $templateProcessor->setValue('jabatanBidding', );
        
        $templateProcessor->setValue('manager', );
        $templateProcessor->setValue('nikManager', );
        $templateProcessor->setValue('jabatanManager', );
        
        $templateProcessor->setValue('deputy', );
        $templateProcessor->setValue('nikDeputy', );
        $templateProcessor->setValue('jabatanDeputy', );
        
        $templateProcessor->setValue('gm', );
        $templateProcessor->setValue('nikGm', );
        $templateProcessor->setValue('jabatanGm', );

        try {
            $templateProcessor->saveAs('results/[NAMAFILE].docx');
            echo getEndingNotes(array('Word2007' => 'docx'));
        }
        catch (Exception $e) {

        }
        return response()->download(storage_path('TestWordFile.docx'));
    }
}
