(function ($) {
    ("use strict");

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($("#loader").length > 0) {
                $("#loader").removeClass("show");
            }
        }, 1);
    };

    loader();

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000, "easeInOutExpo");
        return false;
    });

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $(".navbar").addClass("nav-sticky");
        } else {
            $(".navbar").removeClass("nav-sticky");
        }
    });

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $(".navbar .dropdown")
                    .on("mouseover", function () {
                        $(".dropdown-toggle", this).trigger("click");
                    })
                    .on("mouseout", function () {
                        $(".dropdown-toggle", this).trigger("click").blur();
                    });
            } else {
                $(".navbar .dropdown").off("mouseover").off("mouseout");
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    //prevent shacking effects when an anchor tag is clicked
    $(".dropdown-menu a").click(function (e) {
        e.stopPropagation();
    });

    // Main carousel
    $(".carousel .owl-carousel").owlCarousel({
        autoplay: true,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        items: 1,
        smartSpeed: 20000,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $(".btn-play").click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $("#videoModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#videoModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });
    });

    // Causes carousel
    $(".causes-carousel").owlCarousel({
        autoplay: true,
        animateIn: "slideInDown",
        animateOut: "slideOutDown",
        items: 1,
        smartSpeed: 450,
        dots: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    // Causes progress
    $(".causes-progress").waypoint(
        function () {
            $(".progress .progress-bar").each(function () {
                $(this).css("width", $(this).attr("aria-valuenow") + "%");
            });
        },
        { offset: "80%" }
    );

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
        center: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    // Related post carousel
    $(".related-slider").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
        },
    });
    // disable button after with id: sendMessageButton submit for 10 seconds then enable it, with a message
    $("#sendMessageButton").click(function (event) {
        event.preventDefault();
        $(this).prop("disabled", true); //disable the button

        //show message
        $(this).html("Encours d'envoi...");

        //get the form data
        var formData = $(this).closest("form").serialize();

        //send the form data using AJAX
        $.ajax({
            type: "POST",
            url: $(this).closest("form").attr("action"),
            data: formData,
            success: function (response) {
                // Insert the response message into the modal
                $("#responseModalBody").html(response.message);
                //clear the form fileds
                $("#contactForm")[0].reset();

                // Show the modal
                $("#responseModal").modal("show");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //handle any errors

                // Insert the error message into the modal
                $("#responseModalBody").html(
                    "Une erreur s'est produite, veuillez réessayer Encore: " +
                        textStatus
                );

                // show the modal
                $("#responseModal").modal("show");
            },
        });

        //reanble button
        setTimeout(function () {
            $("#sendMessageButton").prop("disabled", false);
        }, 10000);
    });
    // when click the close button in the modal, change the form submit button text to "Envoyer Message"
    $("#closeModal").click(function () {
        $("#sendMessageButton").html("Envoyer Message");
    });
})(jQuery);
