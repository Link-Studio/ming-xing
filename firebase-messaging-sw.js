importScripts('https://www.gstatic.com/firebasejs/7.11.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.11.0/firebase-messaging.js');
firebase.initializeApp({
  messagingSenderId: '1040953994238' // 同上的拿取步驟
});
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload){
    console.log(payload);
    var obj=JSON.parse(payload.data.notification);
    var notificationTitle=obj.title;
    var notificationOptions={
        body:obj.body,
        icon:obj.icon
        
    };
return self.registration.showNotification(notificationTitle,notificationOptions);
});