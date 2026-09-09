<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        body {
            margin: 0;
            color: #243b53;
            background: #eef4f8;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background: #ffffff;
            border-bottom: 1px solid #d5e3ea;
            box-shadow: 0 2px 14px rgba(16, 42, 67, 0.06);
            padding: 18px 32px;
        }

        .nav {
            align-items: center;
            display: flex;
            gap: 18px;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 1000px;
        }

        .brand {
            color: #0b7285;
            font-size: 22px;
            font-weight: 700;
            text-decoration: none;
        }

        .brand span {
            color: #102a43;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        nav a {
            border-radius: 8px;
            color: #486581;
            font-weight: 600;
            padding: 8px 12px;
            text-decoration: none;
        }

        nav a.active,
        nav a:hover {
            background: #0b7285;
            color: #ffffff;
        }

        main {
            margin: 0 auto;
            max-width: 1000px;
            padding: 36px 32px;
        }

        h1 {
            color: #102a43;
            font-size: 32px;
            margin-top: 0;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #d5e3ea;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(16, 42, 67, 0.08);
            padding: 28px;
        }

        .lead {
            color: #486581;
            font-size: 18px;
            line-height: 1.6;
        }

        .stats {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 24px;
        }

        .stat {
            background: #f8fbfc;
            border: 1px solid #d5e3ea;
            border-radius: 8px;
            padding: 16px;
        }

        .stat strong {
            color: #0b7285;
            display: block;
            font-size: 24px;
            margin-bottom: 4px;
        }

        .stat span {
            color: #627d98;
            font-size: 14px;
        }

        table {
            background: #ffffff;
            border-collapse: collapse;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(16, 42, 67, 0.08);
            overflow: hidden;
            width: 100%;
        }

        th,
        td {
            border-bottom: 1px solid #d9e2ec;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #dff3f5;
            color: #102a43;
        }

        tbody tr:hover {
            background: #f8fbfc;
        }

        @media (max-width: 700px) {
            .nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<?php $baseUrl = rtrim(config('App')->baseURL, '/'); ?>
<header>
    <div class="nav">
        <a class="brand" href="<?= $baseUrl ?>/">Caburao <span>POS</span></a>
        <nav>
            <a class="<?= $active === 'home' ? 'active' : '' ?>" href="<?= $baseUrl ?>/">Home</a>
            <a class="<?= $active === 'about' ? 'active' : '' ?>" href="<?= $baseUrl ?>/about">About</a>
            <a class="<?= $active === 'customers' ? 'active' : '' ?>" href="<?= $baseUrl ?>/customers">Customers</a>
            <a class="<?= $active === 'users' ? 'active' : '' ?>" href="<?= $baseUrl ?>/users">Users</a>
        </nav>
    </div>
</header>
<main>
