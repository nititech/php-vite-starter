// vite.config.js
import { defineConfig } from 'vite';
import { fileURLToPath } from 'node:url';
import usePHP from 'vite-plugin-php';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig(({ command }) => ({
	base: command === 'serve' ? '/' : '/',
	plugins: [
		usePHP({
			entry: ['pages/**/*.php', 'partials/**/*.php', 'php/**/*.php'],
		}),
		viteStaticCopy({
			targets: [
				{ src: 'src/public', dest: '' },
				{ src: 'php', dest: '' },
			],
			silent: command === 'serve',
		}),
	],
	resolve: {
		alias: {
			'~/': fileURLToPath(new URL('./src/', import.meta.url)),
		},
	},
	publicDir: command === 'build' ? 'raw' : 'src/public',
	server: {
		port: 3000,
	},
}));
