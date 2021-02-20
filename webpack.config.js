const path = require("path");
module.exports = {
    devServer: {
        proxy: {
            "*": "http://localhost:8000"
        }
    },
    resolve: {
        alias: {
            "@": path.resolve("resources/js")
        }
    }
};
