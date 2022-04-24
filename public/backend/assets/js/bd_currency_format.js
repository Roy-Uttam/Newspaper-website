function bdCurrencyFormat(num) {
    input = num;
    var n1, n2;
    num = num + '' || '';
    // works for integer and floating as well
    n1 = num.split('.');
    n2 = n1[1] || null;
    n1 = n1[0].replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");
    num = n2 ? n1 + '.' + n2 : n1;
    // console.log("Input:", input)
    // console.log("Output:", num)
    return num;
}