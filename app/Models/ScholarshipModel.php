<?php
namespace App\Models;

use CodeIgniter\Model;

class ScholarshipModel extends Model {
    protected $table = 'scholarships';
    protected $allowedFields = ['name', 'details'];
}
