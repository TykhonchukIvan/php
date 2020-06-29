function valid(valValue) {
    let validLog = /[-_0-9a-z]{3,12}/i;

    if (valValue.length > 12 || valValue.length < 3) {
        return false;
    } else if (typeof valValue !== 'string') {
        return false;
    } else if (valValue.indexOf(' ') !== -1) {
        return false;
    } else if (validLog.test(valValue) === true) {
        return true;
    } else {
        return false;
    }
}

function validEmail(valValue) {

    let validEmail = /\S+@\S+\.\S+/;
    if (validEmail.test(valValue) === true) {
        return true;
    } else {
        return false;
    }

}

function validGameSelect(valValue) {
    return true;
}