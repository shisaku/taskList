import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            server: {
                hmr: {
                    host: 'localhost',
                },
            },
            input: ['resources/ts/taskListDisplay/defaultDisplay.ts'],
            refresh: true,
        }),
    ],
    build: {
        minify: false, // ミニファイを無効化
        sourcemap: true,
    },
    esbuild: {
        minify: false, // esbuildによるミニファイも無効化
    },
});
