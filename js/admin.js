
function check() {
    var ele = document.getElementsByName('myCheck[]');
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == 'checkbox')
            ele[i].checked = true;
    }

}

function uncheck() {
    var ele = document.getElementsByName('myCheck[]');
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == 'checkbox')
            ele[i].checked = false;
    }
}
