import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const deleteBtns = document.querySelectorAll('.delete-btn');

deleteBtns.forEach((btn) => {
    btn.addEventListener('click', (event) => {
        event.preventDefault();
        const comicTitle = btn.getAttribute('data-comic-title');
        const modal = new bootstrap.Modal(
            document.getElementById('deleteModal')
        );
        document.getElementById('modal-comic-title').innerText = comicTitle;
        document.getElementById('delete').addEventListener('click', () => {
            btn.parentElement.submit();
        });
        document.getElementById('close-modal').addEventListener('click', () => {
            modal.hide();
        });
        modal.show();
    });
});