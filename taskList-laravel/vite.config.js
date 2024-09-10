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
            input: ["resources/ts/import.ts"],
            refresh: true,
        }),
    ],
});
