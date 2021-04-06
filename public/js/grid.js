$(document).ready(function () {
    window.livewire.on("closeMessage", (time) => {
        setTimeout(() => {
            $(".message_container").fadeOut();
        }, time);
    });
    window.livewire.on("goToElement", (selector) => {
        document.getElementById(selector).scrollIntoView();
    });

    ClassicEditor.create(document.getElementById("summary-ckeditor"))
        .then((editor) => {
            $("#btnSubmit").click(function () {
                let text = $("#summary-ckeditor").data("note");
                eval(text).set("text", editor.getData());
                window.livewire.emit("submitForm");
            });
        })
        .catch((error) => {
            console.error(error);
        });
});
