document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault();
    const name = document.getElementById('Nama').value;
    const jumlahPilihan = parseInt(document.getElementById('jumlahPilihan').value);

    if (!nameIsValid(name)){
        alert("Please enter a valid name.");
        return;
    }

    if (jumlahPilihan <= 0 || jumlahPilihan > 5 || isNaN(jumlahPilihan)){
        alert("Masukkan jumlah pilihan yang valid (1 - 5).");
        return; 
    }

    // Clear any previous content in the pilihanContainer
    const pilihanContainer = document.getElementById('pilihanContainer');
    pilihanContainer.innerHTML = '';

    for (let i = 0; i < jumlahPilihan; i++) {
        const label = document.createElement('label');
        label.textContent = 'Pilihan ' + (i + 1) + ':';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'pilihan' + (i + 1);

        pilihanContainer.appendChild(label);
        pilihanContainer.appendChild(input);
        pilihanContainer.appendChild(document.createElement('br'));
    }
  
    // Create and add the OK button
    const okButton = document.createElement('button');
    okButton.textContent = 'Ok';
    okButton.type = 'button';
    okButton.addEventListener('click', function() {
        createRadioButtons();
        document.getElementById('submitBtn').style.display = 'block'; // Show the submit button
    });
    pilihanContainer.appendChild(okButton);
});

function createRadioButtons() {
    const pilihanContainer = document.getElementById('pilihanContainer');
    pilihanContainer.innerHTML = '';

    const jumlahPilihan = parseInt(document.getElementById('jumlahPilihan').value);

    for (let i = 0; i < jumlahPilihan; i++) {
        const label = document.createElement('label');
        label.textContent = 'Pilihan ' + (i + 1) + ':';

        const input = document.createElement('input');
        input.type = 'radio';
        input.name = 'pilihan';
        input.value = 'Pilihan ' + (i + 1);

        pilihanContainer.appendChild(label);
        pilihanContainer.appendChild(input);
        pilihanContainer.appendChild(document.createElement('br'));
    }
}

function nameIsValid(name) {
    return name.trim() !== '';
}
