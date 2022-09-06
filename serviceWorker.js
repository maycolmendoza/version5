const staticDevCoffee = "monfu-v1"
const assets = [
    "/",
    "/index.php",
    "/utils/css/style.css",
    "/utils/js/app.js"

]

self.addEventListener("install", installEvent => {
    installEvent.waitUntil(
        caches.open(staticDevCoffee).then(cache => {
            cache.addAll(assets)
        })
    )
});
self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
        caches.match(fetchEvent.request).then(res => {
            return res || fetch(fetchEvent.request);
        })
    );
});