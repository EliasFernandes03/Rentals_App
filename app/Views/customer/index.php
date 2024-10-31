<?php
// Inclui o arquivo navbar.php usando um caminho absoluto mais robusto
include dirname(__DIR__) . '/layouts/navbar.php';
?>

<div class="container mt-5">
    <h1>Clientes</h1>
    <a href="/create" class="btn btn-primary">Adicionar Cliente</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= htmlspecialchars($customer['name']); ?></td>
                    <td><?= htmlspecialchars($customer['email']); ?></td>
                    <td><?= htmlspecialchars($customer['phone']); ?></td>
                    <td>
                        <a href="/update/<?= $customer['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="/customers/delete/<?= $customer['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>