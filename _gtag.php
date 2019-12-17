<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1312433-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  
  //pageview
  function pageView(title,path){
       console.log(title,path);
       gtag('config', 'UA-1312433-22', {
        'page_title' : title, /*'網頁標題'*/
        'page_path': path    /*'網頁檔名(例:index.php)'*/
        });
  }
  
  //trackEvent
  function trackEvent( category, action, label, value ) {
      console.log(category,action,label,value);
      gtag( 'event', action, { /*事件行為 (例:click)*/
          'event_category': category, /*事件分類*/
          'event_label': label, /*事件標籤*/
          'value': value /*事件價值*/
      } );
  }
</script>