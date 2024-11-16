<?php
namespace App\Models;

use CodeIgniter\Model;

class ConsolasModel extends Model {
    protected $table = "consolas";
    protected $primaryKey = "id";
    protected $allowFields = ["nombre", "precio", "stock", "codigo"  ];
    
}