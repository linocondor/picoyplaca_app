<?php

namespace App\Models;

class PicoyplacaModel extends \CodeIgniter\Model
{
    

    protected $allowedFields = ['fecha',
                                
                                'hora',
                                'placa',
                                
    ];

    

    protected $validationRules = [
        
        'fecha' => 'required',
        'hora' => 'required',
        'placa' => 'required',
        
        
        
    ];
    
    protected $validationMessages = [
        
        'fecha' => [
            'required' => 'Porfavor seleccione una fecha',
            
        ],
        'hora' => [
            'required' => 'Porfavor seleccione una fecha',
            
        ],
        'placa' => [
            'required' => 'Porfavor seleccione una fecha',
            
        ]
    ];
    
    
    
}