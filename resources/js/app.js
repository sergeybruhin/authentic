require('./bootstrap');

import {createApp} from 'vue'
import HelloWorld from '../views/frontend/components/widgets/HelloWorld'

const app = createApp({})

// app.component('hello-world', HelloWorld);

app.mount('#app')
