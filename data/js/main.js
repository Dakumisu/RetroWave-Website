$(document).ready(function () {
    $("#popup__open").click(function () {
        $(".container-popup").css({ "opacity": "1" });
        $(".container-popup").css({ "pointer-events": "auto" });

        $("#popup__open").css({ "opacity": "0" });
        $("#popup__open").css({ "pointer-events": "none" });
        $("#popup__open").css({ "z-index": "19" });

        $("#popup__close").css({ "opacity": "1" });
        $("#popup__close").css({ "pointer-events": "auto" });
        $("#popup__close").css({ "z-index": "20" });
    });

    // $("#popup__open").hover(function () {
    //     $("#popup__open").css({ "opacity": "0" });
    //     $("#popup__open").css({ "pointer-events": "none" });
    //     $("#popup__open").css({ "z-index": "19" });

    //     $("#popup__close").css({ "opacity": "1" });
    //     $("#popup__close").css({ "pointer-events": "auto" });
    //     $("#popup__close").css({ "z-index": "20" });
    // },
    //     function () {
    //         $("#popup__open").css({ "opacity": "1" });
    //         $("#popup__open").css({ "pointer-events": "auto" });
    //         $("#popup__open").css({ "z-index": "20" });

    //         $("#popup__close").css({ "opacity": "0" });
    //         $("#popup__close").css({ "pointer-events": "none" });
    //         $("#popup__close").css({ "z-index": "19" });
    //     });

    $("#popup__close").click(function () {
        $(".container-popup").css({ "opacity": "0" });
        $(".container-popup").css({ "pointer-events": "none" });

        $("#popup__open").css({ "opacity": "1" });
        $("#popup__open").css({ "pointer-events": "auto" });
        $("#popup__open").css({ "z-index": "20" });

        $("#popup__close").css({ "opacity": "0" });
        $("#popup__close").css({ "pointer-events": "none" });
        $("#popup__close").css({ "z-index": "19" });

    });
});