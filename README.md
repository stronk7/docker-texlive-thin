## About
A simple docker image based on [thomasweise/docker-texlive-thin](https://hub.docker.com/r/thomasweise/docker-texlive-thin) and including [dvisvgm](https://dvisvgm.de).

## Usage

```
docker run -i --rm -v "${PWD}":/doc -w /doc stronk7/docker-texlive-thin [command]
```

## Extras

* [moodle-config](https://github.com/stronk7/docker-texlive-thin/tree/master/moodle-config): To easily integrate the image with Moodle and use it for testing purposes.
* ... more are welcome ;-)

## Contributing

[Pull requests](https://github.com/stronk7/docker-texlive-thin/pulls) are welcome. For major changes, please [open an issue](https://github.com/stronk7/docker-texlive-thin/issues) first to discuss what you would like to change.

## License and copyright

[BSD 3-Clause](https://choosealicense.com/licenses/bsd-3-clause/) - Copyright (c) 2021 onwards, Eloy Lafuente (stronk7).
