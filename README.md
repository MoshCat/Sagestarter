# [Sagestarter](https://github.com/MoshCat/sagestarter)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Sagestarter is a WordPress builerplate theme based on [Roots/Sage](https://roots.io/sage/).

## Features

* Navigation with multilevel dropdown, mobile, keyboard & touchscreen support.
* Disabled Gutenburg editor and block-styles.
* Cleanup dashboard with [Intervention](https://github.com/soberwp/intervention)
* Starter variables ([global/_variables.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_variables.scss))
* Spacing mixins ([global/_mixins.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_mixins.scss))
* Widget styling [components/_widgets.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_widgets.scss)
* Gallery styling [components/_galleries.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_galleries.scss))
* Custom Tinymce toolbar ([app/tinymce.php](https://github.com/MoshCat/sagestarter/blob/master/app/tinymce.php))
* Custom searchform ([resources/searchform.php](https://github.com/MoshCat/sagestarter/blob/master/resources/searchform.php))
* CustomEvent polyfill ([Sage docs](https://roots.io/sage/docs/sage-compatibility/#known-issues-with-internet-explorer))
* [Webfontloader](https://github.com/typekit/webfontloader)
* [ACF Builder](https://github.com/StoutLogic/acf-builder)
* ACF Flexbuilder ([Custom ACF pagebuilder](https://github.com/MoshCat/sagestarter/tree/master/app/fields))
* Dutch translation

## Theme installation

* Clone Sagestarter to your WordPress themes directory:
```shell
# @ app/themes/ or wp-content/themes/
$ git clone --depth=1 git@github.com:MoshCat/sagestarter.git your-theme-name
```
* Remove git history and create new git:
```shell
# @ app/themes/ or wp-content/themes/themefolder
$ rm -rf .git
$ git init
```
* Update `style.css` in the `resources` folder with your theme name.
* Update `config.json` in the `resources/assets` folder:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)
* Run `composer install` in the theme directory
* Run `yarn && yarn build` from the theme directory to install dependencies and build the theme assets

## Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Controller documentation](https://github.com/soberwp/controller#usage)

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## Sage sponsors

Help support our open-source development efforts by [becoming a patron](https://www.patreon.com/rootsdev).

<a href="https://kinsta.com/?kaid=OFDHAJIXUDIV"><img src="https://cdn.roots.io/app/uploads/kinsta.svg" alt="Kinsta" width="200" height="150"></a> <a href="https://k-m.com/"><img src="https://cdn.roots.io/app/uploads/km-digital.svg" alt="KM Digital" width="200" height="150"></a> <a href="https://scaledynamix.com/"><img src="https://cdn.roots.io/app/uploads/scale-dynamix.svg" alt="Scale Dynamix" width="200" height="150"></a> <a href="https://wisdomplugin.com/?sage"><img src="https://cdn.roots.io/app/uploads/wisdom.svg" alt="Wisdom" width="200" height="150"></a>

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)
