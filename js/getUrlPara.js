var strUrl = window.location.search;
var getPara, ParaVal;
var aryPara = [];
if (strUrl.indexOf("?") != -1) {
  var getSearch = strUrl.split("?");
  getPara = getSearch[1].split("&");
  /*內部加入Para的方法*/
  //aryPara.push('name');
  //aryPara['name'] = 'Link';

  for (i = 0; i < getPara.length; i++) {
    ParaVal = getPara[i].split("=");
    aryPara.push(ParaVal[0]);
    aryPara[ParaVal[0]] = ParaVal[1];
  }
  console.log(aryPara);
  //console.log(aryPara['name']);
}

