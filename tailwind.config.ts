import type { Config } from 'tailwindcss';

export default {
	content: [
		'./pages/**/*.{php,html}',
		'./partials/**/*.{php,html}',
		'./src/**/*.{js,jsx,ts,tsx,svg}',
	],
	theme: {
		extend: {},
	},
	plugins: [],
} satisfies Config;
