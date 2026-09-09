<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <h1>About the POS System</h1>

    <p>
        Learn about the purpose and current features of this
        CodeIgniter 4 application.
    </p>
</section>

<section class="card">
    <h2 style="margin-bottom: 14px; color: #65558f;">
        Project Overview
    </h2>

    <p style="margin-bottom: 16px; line-height: 1.7;">
        This website is the first version of a basic Point-of-Sale system.
        It demonstrates how CodeIgniter routes, controllers, and views
        work together to produce a multi-page web application.
    </p>

    <p style="line-height: 1.7;">
        The Customer Accounts and User Accounts pages currently use
        static PHP arrays as temporary data sources. A database will be
        introduced in a future version of the system.
    </p>
</section>

<?= $this->endSection() ?>