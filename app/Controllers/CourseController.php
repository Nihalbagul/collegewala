<?php
namespace App\Controllers;

use App\Models\CourseModel;
use CodeIgniter\Controller;

class CourseController extends Controller {
    public function index() {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();
        return view('course/view_courses', $data);
    }

    public function addCourse() {
        return view('course/add_course');
    }

    public function saveCourse() {
        $courseModel = new CourseModel();
        $courseModel->save([
            'name' => $this->request->getVar('name'),
            'category_id' => $this->request->getVar('category_id'),
            'details' => $this->request->getVar('details')
        ]);
        return redirect()->to('/courses');
    }
}
