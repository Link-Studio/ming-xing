<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase</title>
</head>

<body>
    <div id="token"></div>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.11.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.11.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.11.0/firebase-messaging.js"></script>

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDR_imo_uCFzs5330KV0akwzHJQs1KQdTk",
        authDomain: "nan-tang.firebaseapp.com",
        databaseURL: "https://nan-tang.firebaseio.com",
        projectId: "nan-tang",
        storageBucket: "nan-tang.appspot.com",
        messagingSenderId: "1040953994238",
        appId: "1:1040953994238:web:ca17fa42f73c464b946eaf",
        measurementId: "G-2EVFE0KPRX"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    const messaging = firebase.messaging();
    messaging.usePublicVapidKey(
        "BMn8SxvdaxEaK45f0bx_e3Uu0KASQsUuLGIf4W_AuT7mA37qiGFgEESyfhDmkCgBTCuDALAuVVinETKfyAYgS4s");
    messaging.getToken().then((currentToken) => {
        if (currentToken) {
            sendTokenToServer(currentToken);
            updateUIForPushEnabled(currentToken);
        } else {
            // Show permission request.
            console.log('No Instance ID token available. Request permission to generate one.');
            // Show permission UI.
            updateUIForPushPermissionRequired();
            setTokenSentToServer(false);
        }
    }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        showToken('Error retrieving Instance ID token. ', err);
        setTokenSentToServer(false);
    });
    </script>



</body>

</html>