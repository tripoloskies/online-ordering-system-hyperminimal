<?php
namespace Template;

require_once $_SERVER["DOCUMENT_ROOT"]."/define.php";


class Template {

    static array $navigation_lists = [
        [
            "name" => "Home",
            "location" => "index.php"
        ],
        [
            "name" => "Products",
            "location" => "products.php"
        ]
    ];
    public static function Head(string $title) {
        ?>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= "$title | ".APP_NAME ?></title>
            <link rel="stylesheet" href="assets/css/core.css">
            <script src="assets/js/core.js" defer></script>
        <?php
    }
    public static function Navigation(string $current_page) {
        ?>
        <header>
            <nav id="navigation">
                <div class="navigation-item">
                    <div id="navigation-logo">
                        <a href="/">
                            <img src="/assets/img/logo.png" style="height: 32px">
                        </a>
                    </div>
                    <div id="navigation-lists">
                        <?php foreach (self::$navigation_lists as $navigation_list): ?>
                            <a class="navigation-list <?= $navigation_list["name"] == $current_page ? "active" : "" ?>" href="<?= $navigation_list["location"] ?>"><?= $navigation_list["name"] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="navigation-item">
                    <a href="cart.php" class="btn" style="border: 0 !important">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        Cart
                    </a>
                    <button class="sidebar-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                </div>
            </nav>
        </header>
        <aside id="sidebar">
                <div id="sidebar-header">
                    <div class="sidebar-item">
                        <a href="/">
                            <img src="/assets/img/logo.png" style="height: 32px">
                        </a>
                    </div>
                    <div class="sidebar-item">
                        <button class="sidebar-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="sidebar-body">
                    <div id="sidebar-lists">
                        <?php foreach (self::$navigation_lists as $navigation_list): ?>
                        <a class="sidebar-list" href="<?= $navigation_list["location"] ?>"><?= $navigation_list["name"] ?></a>
                        <?php endforeach ?>
                        </div>
                    </div>
                <div id="sidebar-footer">
                    <b>Copyright 2024, all rights reserved.</b>
                </div>
            </aside>
        <?php
    }
}