FROM php:latest as builder

RUN apt-get update && apt-get install -y \
    git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY . /usr/src/Problemario-PR-Web
