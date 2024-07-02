import PageIndex from './pages/index.vue';

import { createApp } from 'vue';

const app = createApp({});

app.component('page-index', PageIndex);

app.mount('#app');
