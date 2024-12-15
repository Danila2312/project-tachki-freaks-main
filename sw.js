'use strict';

importScripts('sw-toolbox.js');

toolbox.precache(["index.php","templates\style.css"]);

toolbox.router.get('templates\img*', toolbox.cacheFirst);

toolbox.router.get('/*', toolbox.networkFirst, {
  networkTimeoutSeconds: 5
});