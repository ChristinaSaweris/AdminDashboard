
function info() {
    Lobibox.notify('info', {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        icon: 'bx bx-info-circle',
        msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
    });
}

function warning() {
    Lobibox.notify('warning', {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        icon: 'bx bx-error',
        msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
    });
}

function error(msg) {
    Lobibox.notify('error', {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        icon: 'bx bx-x-circle',
        msg: msg
    });
}

function success(msg) {
    Lobibox.notify('success', {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        icon: 'bx bx-check-circle',
        msg: msg
    });
}
