import mapboxgl from 'assets/libs/mapbox-gl/mapbox-gl.js';

try {
  window.mapboxgl = mapboxgl;
} catch (e) {}

export { mapboxgl };
