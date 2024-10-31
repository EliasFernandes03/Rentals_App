<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Criar novo Cliente</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <textarea id="email" name="email" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" class="form-control" step="0.01" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Criar cliente</button>
            </div>
        </form>
    </div>

</body>

</html>