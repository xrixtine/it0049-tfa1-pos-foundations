<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <h1>User Accounts</h1>

    <p>
        View the staff accounts and their assigned roles.
        These records come from a temporary PHP array.
    </p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>