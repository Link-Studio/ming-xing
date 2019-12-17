var apiUrl = 'https://example.com/'
$.ajax({
  type: 'POST',
  data: {},
  url: apiUrl + '/example/example',
  dataType: 'json',
  async: false,
  beforeSend: function () {
    console.log('串接API中');
  },
  success: function (data) {
    console.log('串接API成功');
    console.log(data);
  },
  error: function () {
    console.log('串接API失敗');
  },
  complete: function () {
    console.log('完成串接工作(不論失敗或成功)');
  }
});
