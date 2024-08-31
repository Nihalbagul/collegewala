<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Controller;

class CategoryController extends Controller {
    public function index() {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('category/view_categories', $data);
    }

    public function addCategory() {
        return view('category/add_category');
    }

    public function saveCategory() {
        $categoryModel = new CategoryModel();
        $categoryModel->save([
            'name' => $this->request->getVar('name')
        ]);
        return redirect()->to('/categories');
    }
}
