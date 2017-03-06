import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({

	routes: [
		{path: '/', component: require('./views/contoh/index.vue')}
	]

})

export default router