import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            server: {
                hmr: {
                    host: "localhost",
                },
            },
            input: ["resources/js/app.ts"],
            refresh: true,
        }),
    ],
});
