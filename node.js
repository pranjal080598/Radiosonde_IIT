// you will need to install via 'npm install jsonwebtoken' or in your package.json

var jwt = require("jsonwebtoken");

var METABASE_SITE_URL = "http://localhost:3000";
var METABASE_SECRET_KEY = "049f4d53718ceff9731fa9d1b3e7eba3a6f46d562fba2ba8321a9a9406e8a749";

var payload = {
  resource: { question: 1 },
  params: {},
  exp: Math.round(Date.now() / 1000) + (10 * 60) // 10 minute expiration
};
var token = jwt.sign(payload, METABASE_SECRET_KEY);

var iframeUrl = METABASE_SITE_URL + "/embed/question/" + token + "#theme=night&bordered=true&titled=true";
