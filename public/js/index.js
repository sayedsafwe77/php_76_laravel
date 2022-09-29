let delete_btn = document.querySelectorAll("#delete-product");
const showModal = function (e) {
    e.preventDefault();
    const modal = document.querySelector(".modal");
    const modal_object = new bootstrap.Modal(modal);
    modal_object.show();
    let delete_form;
    delete_form = this.parentElement;
    document.querySelector(".confirm-delete").addEventListener("click", () => {
        deleteProduct(delete_form);
    });
};

const deleteProduct = function (delete_form) {
    delete_form.submit();
};
delete_btn.forEach((btn) => btn.addEventListener("click", showModal));
