/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */

/* eslint-disable camelcase */

(function ($) {
    "use strict";

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function createSkinBlock(colors, callback, noneSelected) {
        var $block = $("<select />", {
            class: noneSelected
                ? "custom-select mb-3 border-0"
                : "custom-select mb-3 text-light border-0 " +
                  colors[0].replace(/accent-|navbar-/, "bg-"),
        });

        if (noneSelected) {
            var $default = $("<option />", {
                text: "None Selected",
            });
            if (callback) {
                $default.on("click", callback);
            }

            $block.append($default);
        }

        colors.forEach(function (color) {
            var $color = $("<option />", {
                class: (typeof color === "object" ? color.join(" ") : color)
                    .replace("navbar-", "bg-")
                    .replace("accent-", "bg-"),
                text: capitalizeFirstLetter(
                    (typeof color === "object" ? color.join(" ") : color)
                        .replace(/navbar-|accent-|bg-/, "")
                        .replace("-", " ")
                ),
            });

            $block.append($color);

            $color.data("color", color);

            if (callback) {
                $color.on("click", callback);
            }
        });

        return $block;
    }

    var $sidebar = $(".control-sidebar");
    var $container = $("<div />", {
        class: "p-3 control-sidebar-content",
    });

    $sidebar.append($container);

    // Checkboxes
    $container.append('<h5>Personalizar</h5><hr class="mb-2"/>');
    $container.append("<h6>Modo</h6>");
    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("body").addClass("dark-mode");
        } else {
            $("body").removeClass("dark-mode");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-4" })
        .append($dark_mode_checkbox)
        .append("<span>Oscuro</span>");
    $container.append($dark_mode_container);

    // Fuentes
    $container.append("<h6>Fuentes</h6>");
    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("body").addClass("fuente-uno");
        } else {
            $("body").removeClass("fuente-uno");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-1" })
        .append($dark_mode_checkbox)
        .append("<span>Calibri</span>");
    $container.append($dark_mode_container);

    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("body").addClass("fuente-dos");
        } else {
            $("body").removeClass("fuente-dos");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-1" })
        .append($dark_mode_checkbox)
        .append("<span>Monospace</span>");
    $container.append($dark_mode_container);

    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("body").addClass("fuente-tres");
        } else {
            $("body").removeClass("fuente-tres");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-4" })
        .append($dark_mode_checkbox)
        .append("<span>Georgia</span>");
    $container.append($dark_mode_container);

    // Temas
    $container.append("<h6>Temas</h6>");
    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("aside").addClass("tema-uno");
        } else {
            $("aside").removeClass("tema-uno");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-1" })
        .append($dark_mode_checkbox)
        .append("<span>Niños</span>");
    $container.append($dark_mode_container);

    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("aside").addClass("tema-dos");
        } else {
            $("aside").removeClass("tema-dos");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-1" })
        .append($dark_mode_checkbox)
        .append("<span>Jovenes</span>");
    $container.append($dark_mode_container);

    var $dark_mode_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("dark-mode"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("aside").addClass("tema-tres");
        } else {
            $("aside").removeClass("tema-tres");
        }
    });
    var $dark_mode_container = $("<div />", { class: "mb-4" })
        .append($dark_mode_checkbox)
        .append("<span>Adultos</span>");
    $container.append($dark_mode_container);

    $container.append("<h6>Tamaño de letra</h6>");
    var $text_sm_body_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $("body").hasClass("text-sm"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $("body").addClass("text-sm");
        } else {
            $("body").removeClass("text-sm");
        }
    });
    var $text_sm_body_container = $("<div />", { class: "mb-1" })
        .append($text_sm_body_checkbox)
        .append("<span>Cuerpo</span>");
    $container.append($text_sm_body_container);

    var $text_sm_header_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $(".main-header").hasClass("text-sm"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $(".main-header").addClass("text-sm");
        } else {
            $(".main-header").removeClass("text-sm");
        }
    });
    var $text_sm_header_container = $("<div />", { class: "mb-1" })
        .append($text_sm_header_checkbox)
        .append("<span>Cabecera</span>");
    $container.append($text_sm_header_container);

    var $text_sm_brand_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $(".brand-link").hasClass("text-sm"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $(".brand-link").addClass("text-sm");
        } else {
            $(".brand-link").removeClass("text-sm");
        }
    });
    var $text_sm_brand_container = $("<div />", { class: "mb-1" })
        .append($text_sm_brand_checkbox)
        .append("<span>Logo</span>");
    $container.append($text_sm_brand_container);

    var $text_sm_sidebar_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $(".nav-sidebar").hasClass("text-sm"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $(".nav-sidebar").addClass("text-sm");
        } else {
            $(".nav-sidebar").removeClass("text-sm");
        }
    });
    var $text_sm_sidebar_container = $("<div />", { class: "mb-1" })
        .append($text_sm_sidebar_checkbox)
        .append("<span>Navegación</span>");
    $container.append($text_sm_sidebar_container);

    var $text_sm_footer_checkbox = $("<input />", {
        type: "checkbox",
        value: 1,
        checked: $(".main-footer").hasClass("text-sm"),
        class: "mr-1",
    }).on("click", function () {
        if ($(this).is(":checked")) {
            $(".main-footer").addClass("text-sm");
        } else {
            $(".main-footer").removeClass("text-sm");
        }
    });
    var $text_sm_footer_container = $("<div />", { class: "mb-4" })
        .append($text_sm_footer_checkbox)
        .append("<span>Pie de página</span>");
    $container.append($text_sm_footer_container);

    // Color Arrays
    var navbar_dark_skins = [
        "navbar-primary",
        "navbar-secondary",
        "navbar-info",
        "navbar-success",
        "navbar-danger",
        "navbar-indigo",
        "navbar-purple",
        "navbar-pink",
        "navbar-navy",
        "navbar-lightblue",
        "navbar-teal",
        "navbar-cyan",
        "navbar-dark",
        "navbar-gray-dark",
        "navbar-gray",
    ];

    var navbar_light_skins = [
        "navbar-light",
        "navbar-warning",
        "navbar-white",
        "navbar-orange",
    ];

    var sidebar_colors = [
        "bg-primary",
        "bg-warning",
        "bg-info",
        "bg-danger",
        "bg-success",
        "bg-indigo",
        "bg-lightblue",
        "bg-navy",
        "bg-purple",
        "bg-fuchsia",
        "bg-pink",
        "bg-maroon",
        "bg-orange",
        "bg-lime",
        "bg-teal",
        "bg-olive",
    ];

    var accent_colors = [
        "accent-primary",
        "accent-warning",
        "accent-info",
        "accent-danger",
        "accent-success",
        "accent-indigo",
        "accent-lightblue",
        "accent-navy",
        "accent-purple",
        "accent-fuchsia",
        "accent-pink",
        "accent-maroon",
        "accent-orange",
        "accent-lime",
        "accent-teal",
        "accent-olive",
    ];

    var sidebar_skins = [
        "sidebar-dark-primary",
        "sidebar-dark-warning",
        "sidebar-dark-info",
        "sidebar-dark-danger",
        "sidebar-dark-success",
        "sidebar-dark-indigo",
        "sidebar-dark-lightblue",
        "sidebar-dark-navy",
        "sidebar-dark-purple",
        "sidebar-dark-fuchsia",
        "sidebar-dark-pink",
        "sidebar-dark-maroon",
        "sidebar-dark-orange",
        "sidebar-dark-lime",
        "sidebar-dark-teal",
        "sidebar-dark-olive",
        "sidebar-light-primary",
        "sidebar-light-warning",
        "sidebar-light-info",
        "sidebar-light-danger",
        "sidebar-light-success",
        "sidebar-light-indigo",
        "sidebar-light-lightblue",
        "sidebar-light-navy",
        "sidebar-light-purple",
        "sidebar-light-fuchsia",
        "sidebar-light-pink",
        "sidebar-light-maroon",
        "sidebar-light-orange",
        "sidebar-light-lime",
        "sidebar-light-teal",
        "sidebar-light-olive",
    ];
})(jQuery);
