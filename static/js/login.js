var msgBoxStyle  = document.querySelector('#messageBox').style;
var blackerStyle = document.querySelector('.blacker').style;

function showMessageBox() {
  blackerStyle.display = 'block';
  msgBoxStyle.display = 'block';
  
}
function hideMessageBox() {
  blackerStyle.display = 'none';
  msgBoxStyle.display = 'none';
}