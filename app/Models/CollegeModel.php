<?php
namespace App\Models;

use CodeIgniter\Model;

class CollegeModel extends Model {
    protected $table = 'colleges';
    protected $allowedFields = ['name', 'location', 'details'];
}