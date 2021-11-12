const SerpApi = require('google-search-results-nodejs');
const search = new SerpApi.GoogleSearch("304aa8d9bb1d4b8cf7948c5efc594fb9641b90070df76e8a6ec07796d5da518e");

const params = {
  q: "Red apple"
};

const callback = function(data) {
  console.log(data['inline_images']);
};

// Show result as JSON
search.json(params, callback);