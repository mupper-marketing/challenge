FROM ruby:2.3.7-alpine

ARG rails_env="development"

RUN apk update \
	&& apk add \
		  nodejs \
		  build-base \
		  sqlite-dev \
	&& mkdir -p /var/app

# Copy the main application into the container
COPY . /var/app
WORKDIR /var/app

ENV BUNDLE_PATH="/gems" RAILS_ENV=${rails_env}

RUN bundle install 
RUN rake db:create db:migrate

CMD rails s -b 0.0.0.0