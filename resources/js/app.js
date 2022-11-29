import { createApp, h } from 'vue';
import { createIntertiaApp } from '@inertiajs/inertia/vue3';
import {resolvePageComponent } from 'laravel-vite-plugins/inertia-helpers';


createInertiaApp({
	resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/*/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});
