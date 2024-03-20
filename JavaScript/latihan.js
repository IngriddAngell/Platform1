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

    // Buat input untuk pilihan
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
        createRadioButtons(pilihanContainer, jumlahPilihan);
        createSubmitButton(pilihanContainer);
    });
    pilihanContainer.appendChild(okButton);
});

function nameIsValid(name) {
    return name.trim() !== '';
}

const br = document.createElement('br');

function createRadioButtons(container, jumlahPilihan) {
    const br = document.createElement('br');
    // Create radio buttons with text
    for (let i = 0; i < jumlahPilihan; i++) {
        const label = document.createElement('label');
        const radio = document.createElement('input');
        const span = document.createElement('span');

        const pilihan = document.querySelector('input[name="pilihan' + (i + 1) + '"]').value;

        radio.type = 'radio';
        radio.name = 'selectedOption';
        radio.value = pilihan;

        span.textContent = pilihan;

        label.appendChild(radio);
        label.appendChild(span);

        container.appendChild(label);
        container.appendChild(document.createElement('br'));
    }
}

function createSubmitButton(container) {
    const okBtn = document.createElement('button');
    okBtn.textContent = 'OK';
    okBtn.type = 'button';
    okBtn.classList.add('btn');
    okBtn.addEventListener('click', submitForm);
    container.appendChild(br); // Add line break
    container.appendChild(okBtn);
}

function submitForm() {
    const name = document.getElementById('Nama').value;
    const jumlahPilihan = parseInt(document.getElementById('jumlahPilihan').value);
    const selectedOption = document.querySelector('input[name="selectedOption"]:checked');

    let result = 'Hallo, nama saya ' + name + ', saya mempunyai sejumlah ' + jumlahPilihan + ' pilihan yaitu:';

    for (let i = 0; i < jumlahPilihan; i++) {
        const pilihan = document.querySelector('input[name="pilihan' + (i + 1) + '"]').value;
        result += ' ' + pilihan + ',';
    }

    result = result.slice(0, -1); // Remove the last comma

    result += ' dan saya memilih ' + selectedOption.value + '.';

    alert(result);
}
