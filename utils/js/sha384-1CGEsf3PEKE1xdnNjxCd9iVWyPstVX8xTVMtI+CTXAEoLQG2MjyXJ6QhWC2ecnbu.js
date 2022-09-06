function limpiarFormulario() {
    document.getElementById("forms").reset();
}
const scriptURLS =
    "https://script.google.com/macros/s/AKfycbw3no9xvDv6Ene3MPYCQ4sftjTwxRtFXmvWujW4rHURq66meLC43pgKGeZN1kAHJ4M9/exec";
const forms = document.querySelector("#forms");
const btnxs = document.querySelector("#submits");

forms.addEventListener("submit", (e) => {
    e.preventDefault();
    btnxs.disabled = true;
    btnxs.innerHTML = "Loading...";

    console.log(forms);
    fetch(scriptURLS, {
            method: "POST",
            body: new FormData(forms)
        })
        .then((response) => {
            btnxs.disabled = false;
            btnxs.innerHTML = "Enviar";

            alertify.success(
                '<h6 style="color:white;font-size:clamp(14px,2vw,15px)">Mensaje Enviado</h6>  '
            );
            limpiarFormulario();

        })
        .catch((error) => {
            btnxs.disabled = false;
            btnxs.innerHTML = "Submit";
            alert("Error!", error.message);
        });
});