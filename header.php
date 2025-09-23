<?php
// week02/header.php
$current = basename($_SERVER['PHP_SELF']);
function nav_active($file) {
    global $current;
    return $current === $file ? ' active' : '';
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <title>資訊管理 學類</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="資管.css"/>



    <fieldset>
        <nav id="mainNav" class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="資訊學群.html">
                <img src="collego-logo.png" alt="Collego" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-underline me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        大學選才
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">認識學群</a></li>
                        <li><a class="dropdown-item" href="#">認識學類</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="高中育才">高中育才</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="焦點話題">焦點話題</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="最新消息">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="搜尋">搜尋</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="常見與問答">常見與問答</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal" href="#">登入</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

        <h1><strong>資訊管理 學類</strong></h1>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
      </nav>

    <div class="button-container">
    
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">

      <li class="nav-item">
            <a class="nav-link<?=nav_active('生涯進路.php')?>" href="生涯進路.php">生涯進路</a>
        </li>

        <li class="nav-item">
            <a class="nav-link<?=nav_active('能力特質.php')?>" href="能力特質.php">能力特質</a>
        </li>

        <li class="nav-item">
            <a class="nav-link<?=nav_active('對應校系.php')?>" href="對應校系.php">對應校系</a>
        </li>
    </div>
</nav>
</head>