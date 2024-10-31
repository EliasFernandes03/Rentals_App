<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Space</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($customer['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <textarea id="email" name="email" class="form-control" rows="4" required><?= htmlspecialchars($customer['email']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" class="form-control" step="0.01" value="<?= htmlspecialchars($customer['phone']) ?>" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Customer</button>
            </div>
        </form>
    </div>

</body>

</html>