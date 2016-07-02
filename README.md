# Create A Dead Simple Twitter Feed with jQuery + PHP + OAuth

[![Build Status](https://travis-ci.org/buluma/twitter-feed.svg?branch=master)](https://travis-ci.org/buluma/twitter-feed.svg?branch=master)

This is an old post that I created long time ago, but it hasn't been updated ever since Twitter moved on from the old API. Now I decided to spend some time to fine tune it and added a layer of PHP with OAuth authentication to retrieve tweets. I also added the capability to display media for the tweet.

To retrieve tweets from user timeline, we will be using statuses/user_timeline public API from Twitter. To make the OAuth authentication painless, we're using this third party PHP-Twitter API wrapper caled Twitter for PHP.

You will need to sign in to the Twitter and register an application from the Twitter App page to get teh required consumer keys and access tokens. Remember to never reveal your consumer secrets. Click on My Access Token link from the sidebar and retrieve your own access token. Now you have consumer key, consumer secret, access token and access token secret.

We will use links/hashtag/alias script to format Tweet's hashtag, aliases. This is the screenshot of text and image tweets:
