import http from "../http";

class WordsService {
    getAll() {
        return http.get("words");
    }

    get(id) {
        return http.get(`words/${id}`);
    }
}

export default new WordsService();
