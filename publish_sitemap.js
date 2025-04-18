import { google } from "googleapis";
import { JWT } from "google-auth-library";
const searchconsole = google.searchconsole("v1");
const keys = JSON.parse(
  Buffer.from(process.env.GOOGLE_SEARCH_CONSOLE_JSON_KEY, "base64").toString("utf-8")
);

const client = new JWT({
  email: keys.client_email,
  key: keys.private_key,
  scopes: [
    "https://www.googleapis.com/auth/webmasters",
    "https://www.googleapis.com/auth/webmasters.readonly",
  ],
});

google.options({ auth: client });

(async () => {
  try {
    await searchconsole.sitemaps.submit({
      feedpath: "https://pratikkuikel.com.np/sitemap.xml",
      siteUrl: "sc-domain:pratikkuikel.com.np",
    });
  } catch (e) {
    console.log(e);
  }
})();
