// import './bootstrap';
"use strict"

import 'flowbite';

import jQuery from 'jquery';
window.$ = jQuery;

$(function () {
    Loading.show();
    Loading.hide(500);
    Lazyload.init();
    Menu.init();
    DarkMode.init();
    Buttons.click();
    
    // setup form select2
    $(".form-select").select2();
});

const Buttons = {
    click: function() {
        let btn = document.querySelectorAll(".buttons-click");

        if (btn) {
            btn.forEach(element => {
                element.addEventListener("click", function() {
                    let div = document.querySelector("#"+element.id+" div");
                    let tel = document.querySelector("#"+element.id+" a");
                    
                    element.classList.toggle("open");

                    if (element.classList.contains("open")) {
                        div.classList.add("hidden");
                        tel.classList.remove("hidden");
                        tel.classList.add("block");
                    } else {
                        div.classList.remove("hidden");
                        tel.classList.add("hidden");
                        tel.classList.remove("block");
                    }
                });
            });
        }
    }
}

const DarkMode = {
    init: function() {
        let btn = document.querySelector("#btn-darkmode");
        let htmlElement = document.documentElement;
        let icon = document.querySelector("#btn-darkmode i");

        if (btn) {
            // Load previously saved theme from localStorage
            if (localStorage.getItem("theme") === "dark") {
                htmlElement.classList.add("dark");
                htmlElement.setAttribute("data-mode", "dark");
                icon.classList.replace("bxs-moon", "bxs-sun");
            }

            btn.addEventListener("click", function() {
                if (htmlElement.classList.contains("dark")) {
                    htmlElement.classList.remove("dark");
                    htmlElement.removeAttribute("data-mode");
                    localStorage.setItem("theme", "light");
                    icon.classList.replace("bxs-sun", "bxs-moon");
                } else {
                    htmlElement.classList.add("dark");
                    htmlElement.setAttribute("data-mode", "dark");
                    localStorage.setItem("theme", "dark");
                    icon.classList.replace("bxs-moon", "bxs-sun");
                }
            });
        }
    }
}

const Menu = {
    init: function () {
        let menu = document.querySelector("#btn-menu");
        let menuMob = document.querySelector("#btn-menu-mobile");
        let menuClose = document.querySelector("#btn-close");
        let sidebar = document.querySelector("#sidebars");

        if (menu) {
            menu.addEventListener("click", function() {
                if (sidebar.classList.contains("open")) {
                    sidebar.classList.remove("open");
                    menu.classList.replace("bx-menu-alt-right", "bx-menu");
                } else {
                    sidebar.classList.add("open");
                    menu.classList.replace("bx-menu", "bx-menu-alt-right");
                }
            });
        }
        if (menuMob) {
            menuMob.addEventListener("click", function() {
                sidebar.classList.toggle("max-sm:left-[-100%]");
            });
            menuClose.addEventListener("click", function() {
                sidebar.classList.toggle("max-sm:left-[-100%]");
            });
        }
    }
}

const Loading = {
    show: function () {
        document.querySelector("body").style.overflow = "hidden";
        $("#pre-loader").show();
    },
    hide: function (timeout) {
        setTimeout(() => {
            $("#pre-loader").hide();
            document.querySelector("body").style.overflow = "auto";
        }, timeout);
    },
};

const Lazyload = {
    init: function () {
        let img = document.querySelector(".lazy");

        if (img) {
            $(".lazy").Lazy({
                scrollDirection: "vertical",
                effect: "fadeIn",
                effectTime: 1000,
                threshold: 0,
                visibleOnly: true,
                // beforeLoad: function (element) {
                //     console.log("on Load "+ element.data("src"));
                // },
                onError: function (element) {
                    console.log("error loading " + element.data("src"));
                },
            });
        }
    },
};