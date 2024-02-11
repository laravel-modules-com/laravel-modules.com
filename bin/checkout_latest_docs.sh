#!/bin/bash

if [ -d "resources/docs/" ]; then
    echo "Pulling latest documentation updates..."
    (cd resources/docs/ && git pull)
else
    echo "Cloning..."
    git clone https://github.com/laravel-modules-com/docs "resources/docs/"
fi;
