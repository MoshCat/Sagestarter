# [Sagestarter](https://github.com/MoshCat/sagestarter)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

[Sagestarter](https://sagestarter.middelham.nl) is a WordPress starter theme based on [Roots/Sage](https://roots.io/sage/) which implements a minimal set of features I use in most of my projects. Included is [Flexbuilder](https://github.com/MoshCat/sagestarter/tree/master/app/fields) which is a boilerplate pagebuilder made with [ACF Builder](https://github.com/StoutLogic/acf-builder) including some usefull components.

## Features

* Navigation with multilevel dropdown, mobile, keyboard & touchscreen support.
* Cleanup dashboard with [Intervention](https://github.com/soberwp/intervention).
* Boilerplate variables ([global/_variables.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_variables.scss)).
* Uniform spacing with mixins ([global/_mixins.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_mixins.scss)).
* Widget styling ([components/_widgets.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_widgets.scss)).
* Gallery styling ([components/_galleries.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_galleries.scss)).
* Customised TinyMCE toolbar ([app/tinymce.php](https://github.com/MoshCat/sagestarter/blob/master/app/tinymce.php)).
* CustomEvent polyfill ([Sage docs](https://roots.io/sage/docs/sage-compatibility/#known-issues-with-internet-explorer)).
* Animated [hamburger](https://jonsuh.com/hamburgers/) menu.
* Disabled Gutenburg editor and frontend block-styles.
* Basic page, blog, archive & search styling.
* SVG icon system (Use: `{!! App\get_theme_svg('calendar') !!}`).
* Social icons menu.
* [Webfontloader](https://github.com/typekit/webfontloader).
* [Flexbuilder](https://github.com/MoshCat/sagestarter/tree/master/app/fields) made with [ACF Builder](https://github.com/StoutLogic/acf-builder).
* Dutch translation.

## Theme installation

* Clone Sagestarter to your WordPress themes directory:
```shell
# @ app/themes/ or wp-content/themes/
$ git clone --depth=1 git@github.com:MoshCat/sagestarter.git your_theme_name
```

* Remove git history and create new git:
```shell
# @ app/themes/ or wp-content/themes/your_theme_name
$ rm -rf .git
$ git init
```
* Run `composer install` in the theme directory
* Update `style.css` in the `resources` folder with your theme name.
* Update `config.json` in the `resources/assets` folder:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure.
* Run `yarn && yarn build` from the theme directory to install dependencies and build the theme assets

## Flexbuilder
[ACF Builder](https://github.com/StoutLogic/acf-builder) will be installed when you run composer. [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/) is required. [ACF Extended](https://wordpress.org/plugins/acf-extended) and [ACF Autosize](https://wordpress.org/plugins/acf-autosize) are highly recommended.

## Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Controller documentation](https://github.com/soberwp/controller#usage)
