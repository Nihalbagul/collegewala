<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>

    <!-- Other dashboard content -->

    <!-- Logout Button -->
    <form action="<?= base_url('admin/logout') ?>" method="post">
    <button type="submit" style="padding: 10px 20px; background-color: red; color: white; border: none; cursor: pointer;">
    Logout
</button>

</body>
</html>
