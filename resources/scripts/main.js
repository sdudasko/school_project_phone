let modal, btn, ctaClose, ctaCancel;
modal = document.getElementById('reviewCreateModal');
btn = document.getElementById("reviewCreateModalOpen");
ctaClose = document.getElementsByClassName("close")[0];
ctaCancel = document.getElementsByClassName("review-modal__cta-cancel")[0];

btn.onclick = function() {
    modal.style.display = "block";
};

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