window.onresize = function() {
    let spacing = document.querySelector('.content').clientHeight + 16;

    if (spacing + document.querySelector('footer').clientHeight <= window.innerHeight) {
      document.querySelector('footer').classList = 'footer';
      document.querySelector('footer').style.top = window.innerHeight - document.querySelector('footer').clientHeight - 16 + 'px';
    }
    else {
      document.querySelector('footer').classList = 'footer static';
      document.querySelector('footer').style.top = '0px';
    }
}
document.querySelector('html').children[1].onload = window.onresize;