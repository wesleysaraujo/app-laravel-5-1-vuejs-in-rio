require('./bootstrap')

// Load Component Contacts
Vue.component('contacts', require('./components/Contacts/Main.vue'))

// Vue.js App Instance
const app = new Vue({
  el: '#app'
})