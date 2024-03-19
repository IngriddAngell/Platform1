const form = document.getElementById('inputform');
const pilihanContainer = document.getElementById('pilihanContainer');

document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault();

    const jumlahPilihan = parseInt(document.getElementById('jumlahPilihan').value);
    pilihanContainer.innerHTML = '';

    const defaultOptions = ['ayam', 'bebek', 'kucing', 'ikan', 'angsa'];

    for (let i = 0; i < jumlahPilihan; i++) {
        const label = document.createElement('label');
        label.textContent = 'Pilihan ' + (i + 1) + ':';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'pilihan' + (i + 1);
        input.value = defaultOptions[i] || '';

        pilihanContainer.appendChild(label);
        pilihanContainer.appendChild(input);
        pilihanContainer.appendChild(document.createElement('br'));
    }
});
    