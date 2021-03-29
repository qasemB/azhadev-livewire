$(document).ready(function () {
    window.livewire.on("closeMessage", (time) => {
        setTimeout(() => {
            $(".message_container").fadeOut();
        }, time);
    });
    window.livewire.on("goToElement", (selector) => {
        document.getElementById(selector).scrollIntoView();
    });
});
