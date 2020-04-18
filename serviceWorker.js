// const staticCacheName = 'site-static-v2';
// const dynamicCacheName = 'site-dynamic-v1';

// const assets = [
//     '/',
//     './assets/css/style.css',
//     './assets/css/custom-calendar.css',
//     './assets/css/jquery-ui-custom.css',
//     './assets/fonts/jt-bold.ttf',
//     './assets/fonts/jt-placard.ttf',
//     './assets/images/logo.png',
//     './assets/js/jquery-2.2.4.min.js',
//     './assets/js/slick.min.js',
//     './assets/js/waypoints.min.js',
//     './assets/js/jquery.counterup.min.js',
//     './assets/js/easyResponsiveTabs.min.js',
//     './assets/js/datepicker.min.js',
//     './assets/js/jquery.magnific-popup.min.js',
//     './assets/js/jquery.aniview.js',
//     './assets/js/jquery.sidr.min.js',
//     './assets/js/sumoselect.min.js',
//     './assets/js/simplebar.js',
//     './assets/js/jquery.validate.min.js',
//     './assets/js/app.js',
//     './assets/js/main.js',
//     './assets/js/zopim.js',
//     './assets/images/arabia-pass.jpg',
//     './assets/images/bb01.svg',
//     './assets/images/credit-card.png',
//     './assets/images/bb03.svg',
//     './assets/images/happy.png',
//     './assets/images/placeholder-image-1.png',
//     './assets/images/partners/emirates.png',
//     './assets/images/partners/etihad.png',
//     './assets/images/partners/flydubai.png',
//     './assets/images/partners/airarabia.png',
//     './assets/images/partners/saudia.png',
//     './assets/images/partners/atlantis.png',
//     './assets/images/partners/burj-al-arab.png',
//     './assets/images/partners/bab-al-shams.png',
//     './assets/images/partners/jumeirah.png',
//     './assets/images/partners/dubai-parks.png',
//     'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
//     'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
//     'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
// ];
// // install service worker
// self.addEventListener('install', evt => {
//     evt.waitUntil(
//       caches.open(staticCacheName).then((cache) => {
//         cache.addAll(assets);
//       })
//     );
//   });

// // active service worker
// self.addEventListener('activate', evt => {
//     evt.waitUntil(
//       caches.keys().then(keys => {
//         return Promise.all(keys
//           .filter(key => key !== staticCacheName)
//           .map(key => caches.delete(key))
//         );
//       })
//     );
//   });

// // fetch event
// self.addEventListener('fetch', evt => {
//     //console.log('fetch event', evt);
//     evt.respondWith(
//       caches.match(evt.request).then(cacheRes => {
//         return cacheRes || fetch(evt.request).then(fetchRes => {
//           return caches.open(dynamicCacheName).then(cache => {
//             cache.put(evt.request.url, fetchRes.clone());
//             return fetchRes;
//           })
//         });
//       })
//     );
//   });