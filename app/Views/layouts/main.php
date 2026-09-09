<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'POS System') ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            color: #4f4a5a;
            background-color: #fff9fc;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
            padding: 18px 8%;
            background-color: #e8ddff;
            border-bottom: 1px solid #d7c8f3;
        }

        .brand {
            color: #65558f;
            font-size: 1.4rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
        }

        .nav-links a {
            display: inline-block;
            padding: 9px 14px;
            color: #5d5270;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.2s ease;
        }

        .nav-links a:hover {
            color: #403653;
            background-color: #f8f1ff;
        }

        .page-container {
            width: min(1100px, 90%);
            min-height: 65vh;
            margin: 42px auto;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            margin-bottom: 10px;
            color: #65558f;
            font-size: clamp(2rem, 5vw, 3.2rem);
        }

        .page-header p {
            max-width: 700px;
            color: #746d7f;
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .card {
            padding: 28px;
            background-color: #ffffff;
            border: 1px solid #eee3f3;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(101, 85, 143, 0.08);
        }

        .button {
            display: inline-block;
            padding: 12px 20px;
            color: #4d405e;
            font-weight: bold;
            text-decoration: none;
            background-color: #ffddec;
            border-radius: 10px;
        }

        .button:hover {
            background-color: #ffcfe3;
        }

        .table-wrapper {
            overflow-x: auto;
            background-color: #ffffff;
            border: 1px solid #eee3f3;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(101, 85, 143, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid #eee7f2;
        }

        th {
            color: #514566;
            background-color: #dff5ec;
        }

        tbody tr:hover {
            background-color: #fff4f8;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .footer {
            margin-top: 50px;
            padding: 22px;
            color: #766f7e;
            text-align: center;
            background-color: #e9f7f2;
        }

        @media (max-width: 700px) {
            .navbar {
                flex-direction: column;
            }

            .nav-links {
                justify-content: center;
            }

            .page-container {
                margin-top: 28px;
            }

            th,
            td {
                padding: 13px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="brand" href="/">POS System</a>

        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/customers">Customers</a></li>
            <li><a href="/users">Users</a></li>
        </ul>
    </nav>

    <main class="page-container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer">
        <p>
            &copy; <?= date('Y') ?> POS System.
            CodeIgniter Foundations Activity.
        </p>
    </footer>
</body>
</html>