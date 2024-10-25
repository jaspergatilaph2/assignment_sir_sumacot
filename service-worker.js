self.addEventListener("install", e => {
  e.waitUntil(
    caches.open("static").then(cache => {
      return cache.addAll(["./", "./src/style.css", "./images/coffee512.png"]);
    })
  );
});

self.addEventListener("fetch", e => {
  e.respondWith(
    caches.match(e.request).then(response => {
      if (response) {
        // Return cached response
        return response;
      }
      // Fetch from network and cache the response
      return fetch(e.request).then(networkResponse => {
        // Cache the new response
        return caches.open("static").then(cache => {
          cache.put(e.request, networkResponse.clone());
          return networkResponse;
        });
      });
    })
  );
});
