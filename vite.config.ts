// vite.config.js
import { defineConfig } from 'vite';
import usePHP from 'vite-plugin-php';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig(({ command }) => ({
	base: command === 'serve' ? '/' : '/',
	plugins: [
		usePHP({
			entry: ['pages/**/*.php', 'php/**/*.php'],
		}),
		viteStaticCopy({
			targets: [
				{ src: 'src/public', dest: '' },
				{ src: 'php', dest: '' },
			],
			silent: command === 'serve',
		}),
	],
	publicDir: command === 'build' ? 'raw' : 'src/public',
	server: {
		port: 3000,
	},
}));
