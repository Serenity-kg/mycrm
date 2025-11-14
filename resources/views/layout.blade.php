<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя CRM</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <style>
        * { transition: background-color .3s ease, color .3s ease; }

        /* Светлая тема */
        body.light-mode {
            background-color: #f4f6f9;
            color: #111;
        }
        body.light-mode .content-wrapper {
            background-color: #f4f6f9 !important;
            color: #111 !important;
        }
        body.light-mode .small-box {
            color: #111 !important;
        }
        body.light-mode .small-box .inner h3,
        body.light-mode .small-box .inner p {
            color: #111 !important;
        }
        body.light-mode .nav-sidebar .nav-link,
        body.light-mode .main-header .nav-link,
        body.light-mode .brand-link {
            color: #111 !important;
        }
        body.light-mode .nav-sidebar .nav-link.active {
            background-color: #ddd !important;
        }

        /* Кнопка переключения темы */
        .theme-toggle {
            width: 45px;
            height: 22px;
            background: #555;
            border-radius: 30px;
            position: relative;
            cursor: pointer;
            transition: background .3s ease;
            margin-left: 20px;
        }
        .theme-toggle .ball {
            width: 18px;
            height: 18px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            left: 2px;
            transition: transform .3s cubic-bezier(.25,.8,.25,1);
        }
        .theme-toggle.light {
            background: #ddd;
        }
        .theme-toggle.light .ball {
            transform: translateX(23px);
        }
    </style>
</head>
<body class="hold-transition sidebar-mini dark-mode">
<div class="wrapper">

    <!-- Верхняя панель -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link font-weight-bold">Моя CRM</span>
            </li>
        </ul>

        <!-- Переключатель темы -->
        <div id="themeSwitcher" class="theme-toggle">
            <div class="ball"></div>
        </div>
    </nav>

    <!-- Боковое меню -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link text-center">
            <span class="brand-text font-weight-light">CRM Admin</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Организации</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-network-wired"></i>
                            <p>Оборудование</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-key"></i>
                            <p>Доступы</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Контент -->
    <div class="content-wrapper p-4">
        @yield('content')
    </div>
</div>

<!-- AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- Переключатель темы -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    const toggle = document.getElementById("themeSwitcher");

    // Восстановление сохранённой темы
    const saved = localStorage.getItem("theme");
    if (saved === "light") {
        body.classList.add("light-mode");
        toggle.classList.add("light");
    }

    toggle.addEventListener("click", () => {
        body.classList.toggle("light-mode");
        toggle.classList.toggle("light");

        if (body.classList.contains("light-mode")) {
            localStorage.setItem("theme", "light");
        } else {
            localStorage.setItem("theme", "dark");
        }
    });
});
</script>

</body>
</html>
