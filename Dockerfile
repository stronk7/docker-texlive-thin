FROM thomasweise/docker-texlive-thin

RUN apt update && apt install -y \
    dvisvgm \
&& rm -rf /var/lib/apt/lists/*
