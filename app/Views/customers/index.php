<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <h1>Customer Accounts</h1>

    <p>
        View the customer records currently stored in the system.
        These records come from a temporary PHP array.
    </p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>