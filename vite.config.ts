// vite.config.js
import { defineConfig } from 'vite';
import usePHP from 'vite-plugin-php';

export default defineConfig({
	base: '/',
	server: {
		port: 3000,
		base: '/',
	},
	plugins: [
		usePHP({
			entry: ['**/*.php'],
		}),
	],
});
