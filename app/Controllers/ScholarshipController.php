<?php
namespace App\Controllers;

use App\Models\ScholarshipModel;
use CodeIgniter\Controller;

class ScholarshipController extends Controller {
    public function index() {
        $scholarshipModel = new ScholarshipModel();
        $data['scholarships'] = $scholarshipModel->findAll();
        return view('scholarship/view_scholarships', $data);
    }

    public function addScholarship() {
        return view('scholarship/add_scholarship');
    }

    public function saveScholarship() {
        $scholarshipModel = new ScholarshipModel();
        $scholarshipModel->save([
            'name' => $this->request->getVar('name'),
            'details' => $this->request->getVar('details')
        ]);
        return redirect()->to('/scholarships');
    }
}
