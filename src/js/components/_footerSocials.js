module.exports.moveFooterSocials = function(){
    var footer = document.getElementById('footer-top');
    var socials = footer.querySelector('.socials');
    var contentFooterTop = footer.querySelector('.wp-block-media-text__content');

    if(contentFooterTop != null) {
        contentFooterTop.appendChild(socials);
    }
};