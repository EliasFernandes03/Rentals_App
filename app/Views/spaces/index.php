<?php
// Inclui o arquivo navbar.php usando um caminho absoluto mais robusto
include dirname(__DIR__) . '/layouts/navbar.php';
?>

<div class="container mt-5">
    <h1>Espaços Disponíveis</h1>
    <a href="/create" class="btn btn-primary">Adicionar Espaço</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spaces as $space): ?>
                <tr>
                    <td><?= htmlspecialchars($space['name']); ?></td>
                    <td><?= htmlspecialchars($space['description']); ?></td>
                    <td><?= htmlspecialchars($space['price']); ?></td>
                    <td>
                        <a href="/update/<?= $space['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="/spaces/delete/<?= $space['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>