import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
	plugins: [
		laravel({
			input: [
				'resources/css/app.css',
				'resources/js/app.js',
				'resources/scss/index.scss',
				'resources/js/index.js'
			],
			refresh: true
		})
	]
});