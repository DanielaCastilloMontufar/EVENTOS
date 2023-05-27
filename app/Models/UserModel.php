<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'eventos';
    protected $primaryKey = 'Id_usuario';

    protected $returnType     = 'array';

    protected $allowedFields = ['Nombre_evento', 'Tipo','Fecha','Hora','Descripcion','Organizador','Enlace','Imagen'];

    // Dates
    protected $useTimestamps = false;
    protected $createdField  = 'Fecha_creacion';

    // Validation
    protected $validationRules      = [
        'Nombre_evento' => 'required|is_unique[eventos.Nombre_evento]' 
 
    ];
    protected $validationMessages   = [
        'Nombre_evento' =>[
            'is_unique'=>'Lo sentimos. Este nombre ya fue ingresado'
        ],
        'Id_usuario' =>[
            'numeric'=>'Error. El ID del usuario solo debe contener numeros'
        ]
    ];
    protected $skipValidation       = false;

}