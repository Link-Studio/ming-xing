var admin = require('firebase-admin');
// console.log(admin);

var serviceAccount = require('./serviceAccountKey.json');

// console.log(serviceAccount);

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: 'https://nan-tang.firebaseio.com'
});
// console.log(admin);


// This registration token comes from the client FCM SDKs.
var registrationTokens = [
    //會失敗的token
    'fQUCCns-Z2ajmSoJzI6J9V:APA91bH2RbKepNW8ZHljTOaCpnOsycnQtPMZl5EJRqQVqCccFnyWyJ4CTNO3e7pyWbCaAM5ARZqllaMYL_tPr_NFRhKk_AlkmQYJVtIqln-ncgqFmwBdPWHBttUVsFWVrl_GLZolfYb9',
    'fQUCCns-Z2ajmSoJzI6J9V:APA91bH2RbKepNW8ZHljTOaCpnOsycnQtPMZl5EJRqQVqCccFnyWyJ4CTNO3e7pyWbCaAM5ARZqllaMYL_tPr_NFRhKk_AlkmQYJVtIqln-ncgqFmwBdPWHBttUVsFWVrl_GLZolfYb0',
    //會成功的token
    'fQUCCns-Z2ajmSoJzI6J9V:APA91bH2RbKepNW8ZHljTOaCpnOsycnQtPMZl5EJRqQVqCccFnyWyJ4CTNO3e7pyWbCaAM5ARZqllaMYL_tPr_NFRhKk_AlkmQYJVtIqln-ncgqFmwBdPWHBttUVsFWVrl_GLZolfYbC'

];

var message = {
    //cloude message overview
    //https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages?authuser=1#Visibility
    //共用訊息
    notification: {
        title: 'title001',
        body: 'message001',
        image: 'image.png'
    },
    //Andriod專屬訊息
    android: {
        ttl: 3600 * 1000, //(time to live的縮寫)訊息存活時間  數字為秒數 預設為4週
        notification: {
            title: 'android-title001',
            body: 'android-message001',
            image: 'android-image.png',
            notification_count: 3, //同IOS的badge
            sound: 'android-sound.aiff'
        },
        //data為給APP端使用的訊息
        data: {
            messageID: "202000009139"
        }

    },

    // //IOS專屬訊息  
    // payload https://developer.apple.com/documentation/usernotifications/setting_up_a_remote_notification_server/generating_a_remote_notification
    apns: {
        headers: {},
        payload: {
            aps: {
                alert: {
                    title: 'IOS-title001',
                    subtitle: 'IOS-subtitle001',
                    body: 'IOS-message001',
                },
                badge: 42,
                sound: 'IOS-sound.aiff'
            },
        },
        fcm_options: {
            image: 'image.png'
        }
    },
    // //web-push專屬訊息
    webpush: {

    },

    tokens: registrationTokens
};

// Send a message to the device corresponding to the provided
// registration token.
admin.messaging().sendMulticast(message)
    .then((response) => {
        // Response is a message ID string.
        console.log('Successfully sent message:', response);
        if (response.failureCount > 0) {
            const failedTokens = [];
            response.responses.forEach((resp, idx) => {
                if (!resp.success) {
                    failedTokens.push(registrationTokens[idx]);
                }
            });
            console.log('推播失敗的token: ' + failedTokens);
        }
    })
    .catch((error) => {
        console.log('Error sending message:', error);
    });