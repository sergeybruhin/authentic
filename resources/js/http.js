import axios from "axios";
export default axios.create({
    baseURL: "http://authentic.test/api",
    headers: {
        "Content-type": "application/json"
    }
});
