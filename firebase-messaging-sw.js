

// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here, other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/7.11.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.11.0/firebase-messaging.js');


const firebaseConfig = {
  apiKey: "AIzaSyDR_imo_uCFzs5330KV0akwzHJQs1KQdTk",
  authDomain: "nan-tang.firebaseapp.com",
  databaseURL: "https://nan-tang.firebaseio.com",
  projectId: "nan-tang",
  storageBucket: "nan-tang.appspot.com",
  messagingSenderId: "1040953994238",
  appId: "1:1040953994238:web:ca17fa42f73c464b946eaf",
  measurementId: "G-2EVFE0KPRX"
};
// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
  'messagingSenderId': '1040953994238'
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});