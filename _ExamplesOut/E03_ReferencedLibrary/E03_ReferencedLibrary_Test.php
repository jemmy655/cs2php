<?php
/*
Generated by CS2PHP
*/
namespace E03_ReferencedLibrary;
require_once('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
class Test {
    const BASE_SIZE = 9;
    const FONT = 'dejavusans';
    const MARGIN = 10;
    const MARGIN_HEADER = 9;
    public function PhpMain() {
        $mpdf = new \mPDF('', 'A4', self::BASE_SIZE, self::FONT, self::MARGIN, self::MARGIN, self::MARGIN, self::MARGIN, self::MARGIN_HEADER, self::MARGIN_HEADER, 'P');
        $mpdf->author = 'Mr Compiler';
        $mpdf->title = 'PDF title';
        $mpdf->subject = 'PDF subject';
    }
}
?>