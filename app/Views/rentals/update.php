<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rental</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Editar Aluguel</h1>

        <?php if (!isset($rental) || !isset($spaces)): ?>
            <div class="alert alert-danger" role="alert">
                Erro: Dados do aluguel ou espaços não disponíveis.
            </div>
        <?php else: ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="customer_name">Name:</label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control"
                        value="<?= htmlspecialchars($rental['customer_name']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="rental_date">Date:</label>
                    <input type="date" id="rental_date" name="rental_date" class="form-control"
                        value="<?= htmlspecialchars($rental['rental_date']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="rental_duration">Duration:</label>
                    <input type="number" id="rental_duration" name="rental_duration" class="form-control"
                        step="0.01" value="<?= htmlspecialchars($rental['rental_duration']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="space">Space:</label>
                    <select id="space" name="space_id" class="form-control" required>
                        <?php foreach ($spaces as $space): ?>
                            <option value="<?= htmlspecialchars($space['id']) ?>"
                                <?= $rental['space_id'] == $space['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($space['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total_price">Total Price:</label>
                    <input type="number" id="total_price" name="total_price" class="form-control"
                        step="0.01" value="<?= htmlspecialchars($rental['total_price']) ?>" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Atualizar Aluguel</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>