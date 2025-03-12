#!/bin/bash

if [ -d "resources/views/docs/" ]; then
    echo "Pulling latest documentation updates..."
    (cd resources/views/docs/ && git pull)
else
    echo "Cloning..."
    git clone https://github.com/laravel-modules-com/docs "resources/views/docs/"
fi;
