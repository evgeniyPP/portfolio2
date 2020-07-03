module.exports = {
    purge: {
        content: ["./resources/views/**/*"],
        options: {
            whitelist: [
                "text-yellow-500",
                "text-blue-400",
                "text-green-400",
                "font-normal",
                "font-semibold",
                "font-medium"
            ]
        }
    },
    theme: {
        extend: {}
    },
    variants: {},
    plugins: [require("@tailwindcss/ui")]
};
