// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
function getValue(varname) {
    var url = window.location.href;
    var qparts = '';
    var ampExists = (url.indexOf('?') >= 0) ? true : false;
    if (!ampExists) return "";
    qparts = url.split("?");
    if (qparts.length == 0) {
        return "";
    }
    var query = qparts[1];
    var vars = query.split("&");
    var value = "";
    for (i=0;i<vars.length;i++) {
        var parts = vars[i].split("=");
        if (parts[0] == varname) {
            value = parts[1];
            break;
        }
    }
    value = unescape(value);
    value = value.replace(/\+/g," ");
    return value;
}
