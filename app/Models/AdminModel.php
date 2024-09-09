<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_users';
    protected $allowedFields = ['mobile', 'email', 'password', 'otp', 'is_verified'];
    protected $primaryKey = 'id';

    public function getAdminByMobile($mobile)
    {
        return $this->where('mobile', $mobile)->first();
    }

    public function getAdminByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function updateOTP($id, $otp)
    {
        return $this->update($id, ['otp' => $otp]);
    }

    public function verifyOTP($id, $otp)
    {
        return $this->where('id', $id)->where('otp', $otp)->first();
    }
}
