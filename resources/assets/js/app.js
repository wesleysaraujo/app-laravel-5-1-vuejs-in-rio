require('./bootstrap')

Vue.component('contacts', require('./components/Contacts/Main.vue'))

const app = new Vue({
  el: '#app',
  mounted () {
    console.log('olá mundo')
  }
})