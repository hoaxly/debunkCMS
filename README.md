debunkCMS is a preconfigured CMS for publishing reviews about web content like articles or quotes.

![debunkCMS with example content on iPhone7+](https://github.com/hoaxly/debunkCMS/blob/develop/documentation/debunkCMS_iphone.png)

It is based on Thunder, a Drupal distribution for professional publishers and includes the following features:

# Review content type

A review content type  provides all relevant fields to create reviews as structured content. 

This fields are currently: 

- field_review_content
- field_review_item_media
- field_review_metatags
- field_review_item_publisher
- field_review_rating
- field_review_item_claim
- field_review_item_authors
- field_review_item_country
- field_review_item_language
- field_review_item_pub_date
- field_review_item_tags
- field_review_item_title
- field_review_item_type
- field_review_item_url
- field_seo_title
- field_tags
- field_teaser_text
- field_teaser_media

These are just the field's machine-names. For every field there is helptext availabe when creating reviews.

There is also predefined configuration for displays (full article, teasers), metatags (meta description, og:*, twitter:card, ...) and url paths.

# Predefined vocabularies

Predefined vocabularies, that can be extended, to list authors, publishers, cities, countries, languages or rating values.

# ClaimReview schema.org markup

Published reviews include ClaimReview schema.org markup, so that your content can be found easily.

![Example debunkCMS ClaimReview output](https://github.com/hoaxly/debunkCMS/blob/develop/documentation/schemaorg_examplecontent.png)

# Rest API

When activated your published reviews can be accessed via REST.  So you can reuse your reviews in mobile apps for example or make it available to be included in the hoax.ly database easily.

When activated it is available using the following paths:

- /rest/reviews/all?_format=hal_json
- /rest/reviews/all?_format=json
- /rest/reviews/all?_format=xml

# Professional publishing features

debunkCMS includes all Thunder features like 
- story telling, 
- user management, 
- publishing workflows, 
- multilingual, 
- scheduling content, 
- improved media handling, 
- Facebook Instant Articles, 
- embedding social media posts, 
- a liveblog, 
- device specific previews 
- and so on.

![Thunder logo by Hubert Burda Media](https://github.com/hoaxly/debunkCMS/blob/develop/documentation/thunder.png)

Thunder has been initiated by Hubert Burda Media and is developed by multiple companies and organisations.

# Example content

When activated debunkCMS comes with example content (review, authors, rating values, publishers, info-block, ..).

# License

License: GNU General Public License. Feel free to use it!

debunkCMS is part of the hoax.ly project, created by acolono GmbH and funded by netidee.

# Issues
Check the repo issues on github: https://github.com/hoaxly/debunkCMS/issues​

# Roadmap
- A nicer default theme, that looks like a professional news-site out-of-the-box. Until then you can reuse one of the existing Drupal themes, some work to style reviews might be needed.
- Provide more specific Rest API endpoints (filter by tag, ...).
- Internal search: Search published reviews by tags, authors, city, country, urls, claims, publishers, date, ...

# debunkCMS specific modules

- review, providing the review contenttype and its configuration: https://github.com/hoaxly/debunkcms_review
- review_rest, providing the REST API: https://github.com/hoaxly/debunkCMS_review_rest
- debunkCMS_theme, a theme based on thunder_base to overwrite some templates and colors. https://github.com/hoaxly/debunkCMS_theme
- debunkCMS_demo, providing demo content: https://github.com/hoaxly/debunkCMS_demo
- schema_claimreview, providing metatag support for the ClaimReview schema.org specification: https://github.com/hoaxly/schema_claimreview


# Infos about how to work with the Composer based installation

This project template should provide a kickstart for managing your site dependencies with [Composer](https://getcomposer.org/).

If you want to know how to use it as replacement for
[Drush Make](https://github.com/drush-ops/drush/blob/master/docs/make.md) visit
the [Documentation on drupal.org](https://www.drupal.org/node/2471553).

## Usage

First you need to install [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) and [Git](https://git-scm.com).

> Note: The instructions below refer to the [global composer installation](https://getcomposer.org/doc/00-intro.md#globally).
You might need to replace `composer` with `php composer.phar` (or similar) 
for your setup.

After that you can create the project:

```
composer create-project hoaxly/debunkCMS debunkCMS
```

With `composer require ...` you can download new dependencies to your 
installation.

```
cd thunder
composer require drupal/devel:1.*
```

The `composer create-project` command passes ownership of all files to the 
project that is created. You should create a new git repository, and commit 
all files not excluded by the .gitignore file.

## What does the template do?

When installing the given `composer.json` some tasks are taken care of:

* Drupal will be installed in the `docroot`-directory.
* Autoloader is implemented to use the generated composer autoloader in `vendor/autoload.php`,
  instead of the one provided by Drupal (`docroot/vendor/autoload.php`).
* Modules (packages of type `drupal-module`) will be placed in `docroot/modules/contrib/`
* Theme (packages of type `drupal-theme`) will be placed in `docroot/themes/contrib/`
* Profiles (packages of type `drupal-profile`) will be placed in `docroot/profiles/contrib/`
* Downloads Drupal scaffold files such as `index.php`, or `.htaccess`
* Creates `sites/default/files`-directory.
* Latest version of drush is installed locally for use at `bin/drush`.
* Latest version of DrupalConsole is installed locally for use at `bin/drupal`.

## Installing

Creating the project will install the CMS into the docroot directory. You can now install it as you would with any Drupal 8 site. See: [Drupal installation guide](https://www.drupal.org/node/1839310).
 
## Updating

To update the distro, Drupal or any module to the newest version, constrained by the specified version in `composer.json`, execute `composer update`. This command will check every dependency for a new version, downloads it and updates the `composer.lock` accordingly.
After that you can run `drush updb` in the docroot folder to update the database of your site.

### File update

This project will attempt to keep all of your Thunder and drupal core files up-to-date; the 
project [drupal-composer/drupal-scaffold](https://github.com/drupal-composer/drupal-scaffold) 
is used to ensure that your scaffold files are updated every time drupal/core is 
updated. If you customize any of the "scaffolding" files (commonly .htaccess), 
you may need to merge conflicts if any of your modfied files are updated in a 
new release of Drupal core.

Follow the steps below to update your thunder files.

1. Run `composer update hoaxly/debunkCMS`
1. Run `git diff` to determine if any of the scaffolding files have changed. 
   Review the files for any changes and restore any customizations to 
  `.htaccess` or `robots.txt`.
1. Commit everything all together in a single commit, so `web` will remain in
   sync with the `core` when checking out branches or running `git bisect`.
1. In the event that there are non-trivial conflicts in step 2, you may wish 
   to perform these steps on a branch, and use `git merge` to combine the 
   updated core files with your customized files. This facilitates the use 
   of a [three-way merge tool such as kdiff3](http://www.gitshah.com/2010/12/how-to-setup-kdiff-as-diff-tool-for-git.html). This setup is not necessary if your changes are simple; 
   keeping all of your modifications at the beginning or end of the file is a 
   good strategy to keep merges easy.

## FAQ

### Should I commit the contrib modules I download

Composer recommends **no**. They provide [argumentation against but also 
workrounds if a project decides to do it anyway](https://getcomposer.org/doc/faqs/should-i-commit-the-dependencies-in-my-vendor-directory.md).

### How can I apply patches to downloaded modules?

If you need to apply patches (depending on the project being modified, a pull 
request is often a better solution), you can do so with the 
[composer-patches](https://github.com/cweagans/composer-patches) plugin.

To add a patch to drupal module foobar insert the patches section in the extra 
section of composer.json:
```json
"extra": {
    "patches": {
        "drupal/foobar": {
            "Patch description": "URL or local path to patch"
        }
    }
}
```
### Should I commit the scaffolding files?

The [drupal-scaffold](https://github.com/drupal-composer/drupal-scaffold) plugin can download the scaffold files (like
index.php, update.php, …) to the web/ directory of your project. If you have not customized those files you could choose
to not check them into your version control system (e.g. git). If that is the case for your project it might be
convenient to automatically run the drupal-scaffold plugin after every install or update of your project. You can
achieve that by registering `@drupal-scaffold` as post-install and post-update command in your composer.json:

```json
"scripts": {
    "drupal-scaffold": "DrupalComposer\\DrupalScaffold\\Plugin::scaffold",
    "post-install-cmd": [
        "@drupal-scaffold",
        "..."
    ],
    "post-update-cmd": [
        "@drupal-scaffold",
        "..."
    ]
},
```
### How can I prevent downloading modules, that I do not need?

To prevent downloading a module, that the project provides but that you do not need, add a replace block to your composer.json:

```json
"replace": {
    "drupal/features": "*"
}
```

This example prevents any version of the feature module to be downloaded.
