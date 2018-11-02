let modal, openBtn, ctaClose, ctaCancel;
modal = document.getElementById('reviewCreateModal');
openBtn = document.getElementsByClassName("page-review__post-reply");
ctaClose = document.getElementsByClassName("close")[0];
ctaCancel = document.getElementsByClassName("review-modal__cta-cancel")[0];

for (var i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener("click", function() {
        modal.style.display = "block";
    });
}

ctaClose.onclick = function() {
    modal.style.display = "none";
};
ctaCancel.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
};