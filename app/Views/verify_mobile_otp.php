<form method="post" action="<?= base_url('verify_mobile_otp/' . $adminId) ?>">
    <label>Enter OTP</label>
    <input type="text" name="otp" required>
    <button type="submit">Verify OTP</button>
</form>
