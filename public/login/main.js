function verifyPassword() {
    let password = document.getElementById('pass-key').value;
    if (password.length > 7) {
        if (/\d/.test(password)) {
            if (/[A-Z]/.test(password)) {
                if (/[a-z]/.test(password)) {
                    if (/\W/.test(password)) {
                        hoveralert("success", "Parametros Correctos");
                        iconalert("pass-key", "success");
                        return true;
                    } else {
                        hoveralert("error", "La contraseña debe tener mínimo un caracter especial");
                        iconalert("pass-key", "error");
                        return false;
                    }
                } else {
                    hoveralert("error", "La contraseña debe tener mínimo una minúscula");
                    iconalert("pass-key", "error");
                    return false;
                }
            } else {
                hoveralert("error", "La contraseña debe tener mínimo una mayúscula");
                iconalert("pass-key", "error");
                return false;
            }
        } else {
            hoveralert("error", "La contraseña debe tener mínimo un numero");
            iconalert("pass-key", "error");
            return false;
        }
    } else {
        hoveralert("error", "La contraseñas debe tener mínimo 8 caracteres");
        iconalert("pass-key", "error");
        return false;
    }
}

function iconalert(input, alert) {
    input = '.icon.' + input;
    alert = '#' + alert;
    if (alert == '#success') {
        document.querySelector(input + " #error").classList.remove('active');
        document.querySelector(input + " #warning").classList.remove('active');
        document.querySelector(input + " " + alert).classList.add('active');
    } else
    if (alert == '#error') {
        document.querySelector(input + " #success").classList.remove('active');
        document.querySelector(input + " #warning").classList.remove('active');
        document.querySelector(input + " " + alert).classList.add('active');
    } else if (alert == '#warning') {
        document.querySelector(input + " #success").classList.remove('active');
        document.querySelector(input + " #error").classList.remove('active');
        document.querySelector(input + " " + alert).classList.add('active');
    }
}

function hoveralert(icon, title) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
    })

    Toast.fire({
        icon: icon,
        title: title
    })

}
