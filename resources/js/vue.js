window.Vue = require("vue");

import App from "./components/App";
import router from "./route.js";

const app = new Vue({
    el: "#app",
    router,
    render: (h) => h(App),
});
