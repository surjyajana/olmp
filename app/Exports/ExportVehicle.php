<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use App\Models\VehicleNotification;


class ExportVehicle implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return [
            'Sl.No.', 
            'Vehicle No', 
            'Permit Valid Upto', 
            'Tax Valid Upto',
            'Fitness Valid Upto',
            'Insurance Valid Upto'
                
        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => [
                'font' => [
                    'color' => ['rgb' => Color::COLOR_BLUE] // Set the color here
                ]
            ],
            'B' => [
                'font' => [
                    'color' => ['rgb' => Color::COLOR_BLUE] // Set the color here
                ]
            ],
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $records=VehicleNotification::distinct('tbl_vehicle_notifications.id')->select('tbl_vehicle_notifications.*','tbl_vehicles.vehicle_no','tbl_vehicles.vehicle_name')->leftjoin('tbl_vehicles','tbl_vehicle_notifications.vehicle_id','=','tbl_vehicles.id')->where('tbl_vehicle_notifications.deleted_at',NULL)
        ->orderBy('tbl_vehicle_notifications.id', 'desc')
        ->get();
        $data_arr = array();
        $count=0;
        foreach($records as $k=> $record)
        {
            $curent_date=date("d-M-Y");
            $sl=$k+1;
            $vehicle_no=get_vehicle_name($record->vehicle_id);
            $permit_valid=(!empty($record->permit_valid_date))?date("d-M-Y", strtotime($record->permit_valid_date)):'NA';
            $curent_date_ten_days=date("d-M-Y", strtotime("-10 days", strtotime($curent_date)));
     

            if( $permit_valid !='NA')
            {
                if( strtotime($curent_date) < strtotime($permit_valid))
                {
                    $permit_valid_value='<span class ="badge" style=" border-color:#02d862e3;background-color: #02d862e3; color:#fff">'.$permit_valid.'</span>';
                    
                }
                elseif( strtotime($curent_date_ten_days) >  strtotime($permit_valid))
                {
                    $permit_valid_value='<span class ="badge" style=" border-color:#F12042;background-color: #F12042; color:#fff">'.$permit_valid.'</span>';
                }
                elseif( strtotime($curent_date_ten_days) <=  strtotime($permit_valid) &&  strtotime($curent_date) >=  strtotime($permit_valid))
                {
                    $permit_valid_value='<span class ="badge" style=" border-color:#fffb04;background-color: #fffb04; color:#1a1717">'.$permit_valid.'</span>';
                }
            }
            else
            {
                $permit_valid_value='<span>'.$permit_valid.'</span>';
            }
           
           
            
            $tax_valid=(!empty($record->tax_valid_date))?date("d-M-Y", strtotime($record->tax_valid_date)):'NA';
    
            if($tax_valid !='NA')
            {
                if( strtotime($curent_date) < strtotime($tax_valid))
                {
                    $tax_valid_value='<span class ="badge" style=" border-color:#02d862e3;background-color: #02d862e3; color:#fff">'.$tax_valid.'</span>';

                }
                elseif( strtotime($curent_date_ten_days) >  strtotime($tax_valid))
                {
                    $tax_valid_value='<span class ="badge" style=" border-color:#F12042;background-color: #F12042; color:#fff">'.$tax_valid.'</span>';
                

                }
                elseif( strtotime($curent_date_ten_days) <=  strtotime($tax_valid) &&  strtotime($curent_date) >=  strtotime($tax_valid))
                {
                    $tax_valid_value='<span class ="badge" style=" border-color:#fffb04;background-color: #fffb04; color:#1a1717">'.$tax_valid.'</span>';
                    
                }
            }
            else
            {
                $tax_valid_value='<span>'.$tax_valid.'</span>';
            }
           



            $fitness_valid=(!empty($record->fitness_valid_date))?date("d-M-Y", strtotime($record->fitness_valid_date)):'NA';
          
            if($fitness_valid !='NA')
            {
                if(strtotime($curent_date) < strtotime($fitness_valid))
                {
                    $fitness_valid_value='<span class ="badge" style=" border-color:#02d862e3;background-color: #02d862e3; color:#fff">'.$fitness_valid.'</span>';
                   
                }
                elseif( strtotime($curent_date_ten_days) >  strtotime($fitness_valid))
                {
                    $fitness_valid_value='<span class ="badge" style=" border-color:#F12042;background-color: #F12042; color:#fff">'.$fitness_valid.'</span>';
                
                }
                elseif( strtotime($curent_date_ten_days) <=  strtotime($fitness_valid) &&  strtotime($curent_date) >=  strtotime($fitness_valid))
                {
                    $fitness_valid_value='<span class ="badge" style=" border-color:#fffb04;background-color: #fffb04; color:#1a1717">'.$fitness_valid.'</span>';
                    
                }
            }
            else
            {
                $fitness_valid_value='<span>'.$fitness_valid.'</span>';
            }
           
            $insurance_valid=(!empty($record->insurance_valid_date))?date("d-M-Y", strtotime($record->insurance_valid_date)):'NA';
           
            if($insurance_valid !='NA')
            {
                if( strtotime($curent_date) < strtotime($insurance_valid))
                {
                    $insurance_valid_value='<span class ="badge" style=" border-color:#02d862e3;background-color: #02d862e3; color:#fff">'.$insurance_valid.'</span>';
                }
                elseif( strtotime($curent_date_ten_days) >  strtotime($insurance_valid))
                {
                    $insurance_valid_value='<span class ="badge" style=" border-color:#F12042;background-color: #F12042; color:#fff">'.$insurance_valid.'</span>';
                   
                }
                elseif( strtotime($curent_date_ten_days) <=  strtotime($insurance_valid) &&  strtotime($curent_date) >=  strtotime($insurance_valid))
                {
                    $insurance_valid_value='<span class ="badge" style=" border-color:#fffb04;background-color: #fffb04; color:#1a1717">'.$insurance_valid.'</span>';
                    
                }
            }
            else
            {
                $insurance_valid_value='<span>'.$insurance_valid.'</span>';
            }
           

            $data_arr[] = array(
            'sl'=>$sl,
            "vehicle_no" =>$vehicle_no,
            "permit_valid" =>$permit_valid_value,
            "tax_valid" =>$tax_valid_value,
            "fitness_valid" => $fitness_valid_value,
            "insurance_valid" => $insurance_valid_value,
            );
            

        }

        return collect($data_arr);
        // dd($data_arr);
        // return $data_arr;
    }

    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class    => function(AfterSheet $event) 
    //         {
    //             $event->sheet->getDelegate()->getStyle('A1:F1')
    //                             ->getFont()
    //                             ->getColor()
    //                             ->setARGB('DD4B39');
   
    //         },
    //     ];
    // }

   
}
