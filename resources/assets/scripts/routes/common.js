var WebFont = require('webfontloader');

export default {
  init() {
    WebFont.load({
      google: {
        families: ['Roboto:300,400,500,700&display=swap'],
      },
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
