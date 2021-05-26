import {defineConfig} from "@newlogic-digital/core";

export default defineConfig({
    paths: {
        output: {
            rewrite: true,
            root: "www",
            scripts: "www/assets/js",
            styles: "www/assets/css",
            icons: "www/assets",
            emails: "www",
            emailsImg: "www/img",
            emailsWww: "app/Presenters/emails",
            assets: "www/assets"
        }
    },
    styles: {
        purge: {
            content: ['src/scripts/**/*.js', 'src/templates/**/*.twig', 'app/Presenters/templates/**/*.latte', 'temp/cdn/*.js']
        },
        ratio: {
            content: ['src/templates/**/*.twig', 'app/Presenters/templates/**/*.latte']
        }
    }
})
