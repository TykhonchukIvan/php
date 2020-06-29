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

function gameName(valValue) {
    let validLog = /[-_0-9a-z]/i;
    if (validLog.test(valValue) === true) {
        return true;
    } else {
        return false;
    }
}

function validGameKey(valValue) {

    let validKey = /[0-9]/i;
    if (validKey.test(valValue) === true) {
        return true;
    } else {
        return false;
    }
}

function validGameDescriptions(valValue) {

    // let validLog = /[-_0-9a-z]/i;

    if(valValue.length  > 100 ){
        return false
    } else {
        return true
    }

}

function validPath(valValue) {

    let validPath = /([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?/;

    if (validPath.test(valValue) === true) {
        return true;
    } else {
        return false;
    }
}