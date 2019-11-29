module.exports.bodyPadding = function(){
    let headerHeight = document.getElementById('header').offsetHeight;
    let body = document.getElementsByTagName('body')[0];

    body.style.paddingTop = headerHeight + 'px';
};