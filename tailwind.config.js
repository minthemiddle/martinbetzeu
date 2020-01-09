module.exports = {
    theme: {
      extend: {
        colors: {
            blue: {
                100: '#ECEEFC',
                200: '#D0D4F8',
                300: '#B3BBF3',
                400: '#7A87EA',
                500: '#4154E1',
                600: '#3B4CCB',
                700: '#273287',
                800: '#1D2665',
                900: '#141944',
                },
        },
        fontFamily: {
          sans: [
            'Hans',
            'Inter',
            '-apple-system',
            'BlinkMacSystemFont',
            'Segoe UI',
            'Roboto',
            'Oxygen',
            'Ubuntu',
            'Cantarell',
            'Fira Sans',
            'Droid Sans',
            'Helvetica Neue',
            'sans-serif'
          ],
          mono: [
            'Menlo',
          ],
        },
        lineHeight: {
          normal: '1.6',
          loose: '1.75',
        },
        maxWidth: {
          none: 'none',
          '7xl': '80rem',
          '8xl': '88rem'
        },
        spacing: {
          '7': '1.75rem',
          '9': '2.25rem'
        },
        boxShadow: {
          'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
        }
      },
      fontSize: {
        'xs': '.8rem',
        'sm': '.925rem',
        'base': '1rem',
        'lg': '1.125rem',
        'xl': '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.75rem',
        '4xl': '2.125rem',
        '5xl': '2.625rem',
        '6xl': '10rem',
      },
    },
    variants: {
      borderRadius: ['responsive', 'focus'],
      borderWidth: ['responsive', 'active', 'focus'],
      width: ['responsive', 'focus']
    },
    plugins: [
        require("tailwind-heropatterns")({
            variants: [],
            patterns: ["texture"],
            colors: {
              default: "#000044"
            }}),
      function({ addUtilities }) {
        const newUtilities = {
          '.transition-fast': {
            transition: 'all .2s ease-out',
          },
          '.transition': {
            transition: 'all .5s ease-out',
          },
        }
        addUtilities(newUtilities)
      }
    ]
  }
