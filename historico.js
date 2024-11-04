document.addEventListener('DOMContentLoaded', function() {
    const titles = document.querySelectorAll('.interactive-title');
    const modal = document.getElementById('interactive-modal');
    const modalText = document.getElementById('modal-text');
    const closeModal = document.querySelector('.modal-close');

    titles.forEach(title => {
        title.addEventListener('mouseenter', function() {
            const text = title.getAttribute('data-tooltip');
            modalText.textContent = text;
            modal.style.display = 'flex';
        });

        title.addEventListener('mouseleave', function() {
            modal.style.display = 'none';
        });
    });

    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Fecha o modal se clicar fora dele
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});


