import type { Config } from 'tailwindcss';

export default {
	content: ['./**/*.{php,html}', './src/**/*.{js,jsx,ts,tsx,svg}'],
	theme: {
		extend: {},
	},
	plugins: [],
} satisfies Config;
