<?php
// Inclui o arquivo navbar.php usando um caminho absoluto mais robusto
include dirname(__DIR__) . '/layouts/navbar.php';
?>

<div class="container mt-5">
    <h1>Alugueis Disponíveis</h1>
    <a href="/createRentals" class="btn btn-primary">Adicionar Aluguel</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Espaço</th>
                <th>Nome</th>
                <th>Dia</th>
                <th>Preco</th>
                <th>Duracao</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($rentals as $rental): ?>
                <tr>
                    <td><?= htmlspecialchars($rental['space_name']); ?></td>
                    <td><?= htmlspecialchars($rental['customer_name']); ?></td>
                    <td><?= htmlspecialchars($rental['rental_date']); ?></td>
                    <td><?= htmlspecialchars($rental['total_price']); ?></td>
                    <td><?= htmlspecialchars($rental['rental_duration']); ?></td>

                    <td>
                        <a href="/update/<?= $rental['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="/rentals/delete/<?= $rental['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>