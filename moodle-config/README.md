## About

Make it really easy (add 1 line to your `config.php` file) and get complete TeX (and converters) support in your Moodle installation.

Supports gif/png/svg generation via docker image that will be pulled and used transparently.

Note that this has been created mainly for ease of testing, it's not a solution for production sites.

## Usage

1. Make a clone of this repo in your favorite folder

  ```
  git clone https://github.com/stronk7/docker-texlive-thin.git
  ```

1. In your Moodle site, edit `config.php` and right before the line including `lib/setup.php` add this:

  ```
  // Enable TeX and conversion tools support using stronk7/docker-texlive-thin
  require_once('/path/to/your/docker-texlive-thin/moodle-config/latex_config.php');
  ```

3. And that's all, now you can enable the TeX filter in your site and try it!

## Contributing

[Pull requests](https://github.com/stronk7/docker-texlive-thin/pulls) are welcome. For major changes, please [open an issue](https://github.com/stronk7/docker-texlive-thin/issues) first to discuss what you would like to change.

## License and copyright

[BSD 3-Clause](https://choosealicense.com/licenses/bsd-3-clause/) - Copyright (c) 2021 onwards, Eloy Lafuente (stronk7).
