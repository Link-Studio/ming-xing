//檢驗欄位
function checkInput(InputText) {
  if (InputText == "") {
    console.log('請輸入InputText資訊。');
  } else {
    console.log('InputText資訊正確。');
  }
}
//檢驗信箱格式
function checkEMail(EMail) {
  let emailRegxp = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
  if (EMail == "") {
    console.log('請輸入電子信箱。');
  } else if (emailRegxp.test(EMail) != true) {
    console.log('電子信箱格式錯誤。');
  } else {
    console.log('電子信箱正確。');
  }
}
//檢驗手機號碼格式
function checkCellphone(Cellphone) {
  if (Cellphone == "") {
    console.log('請輸入手機。');
  } else if ((Cellphone.length != 10) || (Cellphone.substring(0, 2) != "09") || isNaN(Cellphone)) {
    console.log('手機格式錯誤。');
  } else {
    console.log('手機格式正確。');
  }
}
