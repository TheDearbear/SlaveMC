var val;
var canvas_skin = this.document.getElementById("skin");
var ctx = canvas_skin.getContext("2d");
var img = new Image(100, 100);

ctx.imageSmoothingEnabled = false;

var xhr = new XMLHttpRequest();

function getskin() {
    if (this.document.getElementById("kod").value == "clear") ctx.clearRect(0,0,500,500);
    else if (this.document.getElementById("kod").value != "") {
        xhr.open('GET', 'https://api.thedearbear.com/mojang/getskin.php?nn=' + this.document.getElementById('kod').value, true);
        xhr.send();
        console.log('XHR sended');
    }
}

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        console.log('XHR recieved');
        val = JSON.parse(xhr.responseText).value;
	err = JSON.parse(xhr.responseText).error;
        if (err != null) { alert(err); return; };
        img.src = val;
        setTimeout(function() {
            ctx.drawImage(img, 0, 0, 300, 300);
            console.log('draw');
        }, 1);
    }
}

function getCookie(name) {
    let matches = this.document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
