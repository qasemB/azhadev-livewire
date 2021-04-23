$(document).ready(function () {
    function ckeditorOn() {
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
    }
    var pathname = window.location.pathname;
    if (pathname == "/admin/add-article") {
        ckeditorOn();
    }

    window.livewire.on("reSetCkeditor", () => {
        ckeditorOn();
    });
});
