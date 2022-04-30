require('./bootstrap');

import { createApp } from 'vue'
import Home from './components/Home'
import modal from './components/modal'

const app = createApp({})

app.component('home', Home)
app.component('modal',modal)


app.mount('#app')