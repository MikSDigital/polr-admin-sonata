Polr Admin demo
===============

This packages demonstrates how to use [Polr Admin Dashboard](https://github.com/lagdo/polr-admin) with Symfony and the Sonata Admin bundle.

Preparation
-----------

On each Polr instance to be managed, install the [Polr API](https://github.com/lagdo/polr-api) package,
create a user account and set an API key.

Installation and usage
----------------------

Copy the content of this repo into a local dir, cd into the dir and run `composer update`.

Edit the `app/config/polradmin.yml` config file, and list the Polr instances to be managed.

Setup the web server to serve the files in the `/web` subdir, and then browse the `/polr` url on the configured domain.
