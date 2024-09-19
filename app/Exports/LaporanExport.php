<?php

namespace App\Exports;

use App\Models\Persyaratan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LaporanExport extends DefaultValueBinder  implements FromCollection, WithMapping, WithHeadings, WithColumnFormatting, ShouldAutoSize, WithColumnWidths, WithStyles, WithEvents, WithCustomValueBinder
{

    private $numbering = 0;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Persyaratan::all();
    }


    /**
    * @param Invoice $invoice
    */
    public function map($persyaratan): array
    {
        $this->numbering += 1;
        return [
            $this->numbering,
            $persyaratan->petani->name,
            $persyaratan->petani->nik,
            $persyaratan->alsitan->name,
            $persyaratan->alsitan->kode,
            $persyaratan->biaya_perhari,
            $persyaratan->pembayaran,
            Date::dateTimeToExcel($persyaratan->mulai),
            Date::dateTimeToExcel($persyaratan->sampai_dengan),
        ];
    }


    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'NIK',
            'Nama Alat',
            'Kode Alat',
            'Biaya Perhari (Rp)',
            'Total (Rp)',
            'Tanggal Mulai',
            'Tanggal Selesai',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'H' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'I' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    public function columnWidths(): array
    {
        return [
            // 'E' => 40,            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            'A1:I1'    => [
                'font' => ['bold' => true],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_LEFT,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ],
            'A:I' => [
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_LEFT,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ],
        ];
    }
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:I'. $this->numbering+1)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ])->getAlignment()->setWrapText(true);
            },
        ];
    }

    // rubah formteng dari kolom NIK karena secara default dia diubah jadi Numerical, dan secara default oleh Exel diubah menjadi bentu kayak di Game Guardian gitu
    // 6,4655465E+16   contohnya jadi kayak gini jadi kita perlu definisikan di jadi string
    public function bindValue(Cell $cell, $value)
    {
        $nonNumericalColumn = ['C'];
         if (in_array($cell->getColumn(), $nonNumericalColumn) || $value == '' || $value == null) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);
            return true;
        }
        // else return default behavior
        return parent::bindValue($cell, $value);
    }
}


