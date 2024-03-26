document.addEventListener("DOMContentLoaded", function () {
  const submitButton = document.querySelector("button.btn-primary");
  const tugasSection = document.querySelector("#tugas .container");

  submitButton.addEventListener("click", function () {
    const firstName = document.querySelector("input[aria-label='First name']").value.trim();
    const lastName = document.querySelector("input[aria-label='Last name']").value.trim();
    const email = document.querySelector("#email").value.trim();
    const jumlahHobi = parseInt(document.querySelector("#hobi").value);

    if (firstName === "" || lastName === "" || email === "" || isNaN(jumlahHobi) || jumlahHobi <= 0) {
      alert("Mohon lengkapi semua field dengan benar.");
      return;
    }

    const hobiInputs = [];
    for (let i = 0; i < jumlahHobi; i++) {
      const hobiInput = document.createElement("input");
      hobiInput.setAttribute("type", "text");
      hobiInput.setAttribute("class", "form-control mb-2");
      hobiInput.setAttribute("placeholder", `Pilihan Hobi ${i + 1}`);
      hobiInputs.push(hobiInput);
    }

    const inputContainer = document.createElement("div");
    inputContainer.setAttribute("id", "hobiInputsContainer");
    inputContainer.append(...hobiInputs);

    const okButton = document.createElement("button");
    okButton.setAttribute("type", "button");
    okButton.setAttribute("class", "btn btn-primary mt-3");
    okButton.textContent = "OK";

    okButton.addEventListener("click", function () {
      const selectedHobis = [];
      hobiInputs.forEach((input) => {
        const hobi = input.value.trim();
        if (hobi !== "") {
          selectedHobis.push(hobi);
        }
      });

      const radioButtons = selectedHobis
        .map(
          (hobi, index) => `
          <div class="form-check">
            <input class="form-check-input" type="radio" name="hobi" id="hobi${index}" value="${hobi}">
            <label class="form-check-label" for="hobi${index}">
              ${hobi}
            </label>
          </div>
        `
        )
        .join("");

      const radioButtonsContainer = `
          <div id="radioButtonsContainer">
            <div class="mb-3">
              <label for="pilihanHobi" class="form-label">Pilihan Hobi:</label>
              ${radioButtons}
            </div>
          </div>
        `;

      const submitKalimatButton = document.createElement("button");
      submitKalimatButton.setAttribute("type", "button");
      submitKalimatButton.setAttribute("class", "btn btn-primary mt-3");
      submitKalimatButton.textContent = "Ok";

      submitKalimatButton.addEventListener("click", function () {
        const selectedHobi = document.querySelector("input[name='hobi']:checked");
        if (!selectedHobi) {
          alert("Mohon pilih salah satu hobi.");
          return;
        }

        const kalimat = `Hallo, nama saya ${firstName} ${lastName}, dengan email ${email}, saya mempunyai hobi ${selectedHobi.value}.`;
        alert(kalimat);
      });

      tugasSection.insertAdjacentHTML("beforeend", radioButtonsContainer);
      tugasSection.appendChild(submitKalimatButton);

      okButton.remove();
      inputContainer.remove();
    });

    tugasSection.appendChild(inputContainer);
    tugasSection.appendChild(okButton);
  });
});
