import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// Gstione della modale.
const projectDeleteButton = document.querySelectorAll('.project-delete-button');

projectDeleteButton.forEach((button) => {

    button.addEventListener('click', (event) => {
        event.preventDefault();


        const projectTitle = button.getAttribute('data-project-title');

        const modalProjectTitle = document.getElementById('modal-project-title');
        modalProjectTitle.innerText = projectTitle;

        const modal = document.getElementById('projectConfirmDeleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);

        bootstrapModal.show();

        const projectConfirmDeleteButton = document.getElementById('project-confirm-delete-button');

        projectConfirmDeleteButton.addEventListener('click', () => {

            button.submit();
        })
    })
})