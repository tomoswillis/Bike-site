const mapKeys = require('lodash/mapKeys');
const mapValues = require('lodash/mapValues');
const range = require('lodash/range');
const variables = require('../resources/assets/variables.json');

// converters and calculators
const relative = (px, unit = 'rem', base = variables['browser-default-font-size']) => `${px / base}${unit}`;
const letterSpacing = value => `${value / 1000}em`;
const ratio = (x, y) => `${y / x * 100}%`;

// values
const colors = variables['colors'];

const easing = mapValues(variables.easing, val => `cubic-bezier(${val[0]}, ${val[1]}, ${val[2]}, ${val[3]})`);

const screens = mapValues(variables.breakpoints, px => relative(px, 'em'));

const c = variables.columns;
const widths = mapKeys(mapValues(range(0, c), (v) => ratio(c, v + 1)), (v, k) => `${parseInt(k, 10) + 1}/${c}`);

const z = variables['z-indexes'];
const zIndex = z.reduce((v, name, i) => ({ ...v, [name]: z.length - i }), {});

// tailwind settings
module.exports = {
	theme: {
		screens,
		colors,
		fontFamily: {
			body: ['Oswald', 'sans-serif'],
			heading: ['Bebas Neue', 'Georgia', 'serif'],
			system: ['system-ui', 'sans-serif'],
		},
		boxShadow: {
			none: 'none',
			outline: `0px 0px 3px ${colors.blue}, 0px 0px 6px ${colors.blue}, 0px 0px 9px ${colors.blue}`,
		},
		fontSize: {
			xs: relative(12),
			sm: relative(14),
			base: relative(16),
			lg: relative(18),
			xl: relative(20),
			'2xl': relative(44),
			'3xl': relative(54),
			'4xl': relative(64),
			'5xl': relative(74),
			'6xl': relative(84),
			'100': '100%',
		},
		fontWeight: {
			small: 200,
			normal: 400,
			bold: 700,
		},
		letterSpacing: {
			normal: 0,
			wide: letterSpacing(50),
		},
		lineHeight: {
			none: 1,
			tight: 1.1,
			snug: 1.2,
			normal: 1.5,
			relaxed: 1.75,
			loose: 2,
		},
		maxWidth: {
			container: relative(1400),
			copy: '35em',
			'90': '90em',
			'6' : '6em',
			'2': '2em',
			'55': '55em',
			'40': '40em',
		},
		transitionTimingFunction: easing,
		zIndex,
		extend: {
			borderRadius: {
				'50': '50%',
			},
			inset: (theme, { negative }) => ({
				'1/2': '50%',
				...widths,
				...(negative(widths)),
			}),
			padding: {
				full: '100%',
				logo: ratio(300, 87),
				'9/16': ratio(16, 9),
				'3/4': ratio(4, 3),
				'4/3': ratio(3, 4),
				'530/1414': ratio(1414, 530),
			},
			spacing: {
				em: '1em',
				'1/2em': '.5em',
			},
			width: {
				...widths,
			},

			maxHeight: {
				'6': '6em',
				'62': '6em',
			},
		},
	},
	variants: {},
	plugins: [
		require('tailwindcss-transitions')(),
	],
	corePlugins: {
		container: false,
	},
};
