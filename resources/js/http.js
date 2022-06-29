import axios from "axios";
export default axios.create({
    baseURL: "https:/tinytalk.ru/api",
    headers: {
        "Content-type": "application/json"
    }
});
