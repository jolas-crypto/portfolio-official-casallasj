## Intallation
 - clone this repository
 - run `composer install`
 - run `npm install`

## Installation for Vue JS 3, Vite, and Tailwind with the configuration that can be found in the vite and tailwind
 - run `npm install vue@next vue-loader@next`
 - run `npm i @vitejs/plugin-vue`
 - run `npm install -D tailwindcss postcss autoprefixer`
 - run `npx tailwindcss init -p`

## Configuration of the Vite and Tailwind
 - `Vite`
 - `Add`
    `import vue from '@vitejs/plugin-vue';`
    `vue({`
        `template: {`
            `transformAssetUrls: {`
                `base: null,`
                `includeAbsolute: false,`
            `},`
        `},`
    `}),`
    `after "plugins"`
    `resolve: {`
        `alias: {`
            `'vue': 'vue/dist/vue.esm-bundler.js'`
        `},`
    `},`
 - `Tailwind`
 - `Add`
    `content: [`
        `"./resources/**/*.blade.php",`
        `"./resources/**/*.js",`
        `"./resources/**/*.vue",`
    `],`
