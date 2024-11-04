<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Rental</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Criar novo aluguel</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="customer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="rental_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="number" id="duration" name="rental_duration" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="total_price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="space">Space:</label>
                <select id="space" name="space_id" class="form-control" required>
                    <option value="">Select a Space</option>
                    <?php foreach ($spaces as $space): ?>
                        <option value="<?= htmlspecialchars($space['id']) ?>">
                            <?= htmlspecialchars($space['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Criar Aluguel</button>
            </div>
        </form>
    </div>
</body>

</html>