<?php

namespace App\Controllers;

use App\Models\CollegeModel;
use CodeIgniter\Controller;

class CollegeController extends Controller {
    public function index() {
        $collegeModel = new CollegeModel();
        $data['colleges'] = $collegeModel->findAll();
        return view('college/view_colleges', $data);
    }

    public function addCollege() {
        return view('college/add_college');
    }

    public function saveCollege() {
        $collegeModel = new CollegeModel();
        $collegeModel->save([
            'name' => $this->request->getVar('name'),
            'location' => $this->request->getVar('location'),
            'details' => $this->request->getVar('details'),
        ]);
        return redirect()->to('/colleges');
    }
}
