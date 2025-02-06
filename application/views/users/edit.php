<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit User</h2>

        <div class="card shadow p-4">
            <form action="<?= site_url('UserController/update/' . $user['id']); ?>" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone:</label>
                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone']); ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= site_url('UserController/index'); ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional, only needed for Bootstrap components like modals, tooltips, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>