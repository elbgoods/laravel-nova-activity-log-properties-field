Nova.booting((Vue, router, store) => {
  Vue.component('index-laravel-nova-activity-log-property', require('./components/IndexField'))
  Vue.component('detail-laravel-nova-activity-log-property', require('./components/DetailField'))
  Vue.component('form-laravel-nova-activity-log-property', require('./components/FormField'))
})
