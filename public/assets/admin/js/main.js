"use strict";
Array.from(document.getElementsByClassName("dropdown")).forEach(function (e) {
    e.addEventListener("click", function (e) {
        var t;
        e.currentTarget.classList.contains("navbar-item") ? e.currentTarget.classList.toggle("active") : (t = e.currentTarget.getElementsByClassName("mdi")[1],
            e.currentTarget.parentNode.classList.toggle("active"),
            t.classList.toggle("mdi-plus"),
            t.classList.toggle("mdi-minus"))
    })
}),
    Array.from(document.getElementsByClassName("mobile-aside-button")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e = e.currentTarget.getElementsByClassName("icon")[0].getElementsByClassName("mdi")[0];
            document.documentElement.classList.toggle("aside-mobile-expanded"),
                e.classList.toggle("mdi-forwardburger"),
                e.classList.toggle("mdi-backburger")
        })
    }),
    Array.from(document.getElementsByClassName("--jb-navbar-menu-toggle")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            var t = e.currentTarget.getElementsByClassName("icon")[0].getElementsByClassName("mdi")[0];
            document.getElementById(e.currentTarget.getAttribute("data-target")).classList.toggle("active"),
                t.classList.toggle("mdi-dots-vertical"),
                t.classList.toggle("mdi-close")
        })
    }),
    Array.from(document.getElementsByClassName("--jb-modal")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e = e.currentTarget.getAttribute("data-target");
            document.getElementById(e).classList.add("active"),
                document.documentElement.classList.add("clipped")
        })
    }),
    Array.from(document.getElementsByClassName("--jb-modal-close")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.currentTarget.closest(".modal").classList.remove("active"),
                document.documentElement.classList.remove("is-clipped")
        })
    }),
    Array.from(document.getElementsByClassName("--jb-notification-dismiss")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.currentTarget.closest(".notification").classList.add("hidden")
        })
    });
