const routes = [
	// {
	// 	path: '/',
	// 	component: () => import('layouts/MainLayout.vue'),
	// 	children: [{ path: '', component: () => import('pages/index.vue') }]
	// },

	{
		path: '/',
		name: 'authentication',
		component: () => import('pages/index.vue')
	},

	{
		path: '/:catchAll(.*)*',
		component: () => import('pages/404.vue')
	}
];

export default routes;
