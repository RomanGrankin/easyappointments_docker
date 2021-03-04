# Easy!Appointments Docker Edition

This repository contains the dockerized version of [Easy!Appointments](https://easyappointments.org/) - an awesome open source appointment scheduler. You can find the source code of Easy!Appointments [here](https://github.com/alextselegidis/easyappointments).

All kudos go to [Alex Tselegidis](https://github.com/alextselegidis).

## About this repository
To be able to customize Easy!Appointments via Docker environment variables, I had to make a naughty little hack, so that php takes the configuration from the environment variables. This is probably not necessary, but as I'm not a PHP guy I couldn't come up with a better solution. Feel free to send me a PR if it's possible to create a better solution for setting the class constants.

### config.php
This file reads the configuration from environment and uses it at runtime.

### php.ini
This file extends the PHP error logging to give some more detailed error.

### docker-compose.yml
This is an example docker-compose.yml to easily make a version of Easy!Appointments up and running.

## Environment Variables
The following environement variables are available for customization (see docker-compose.yml for an example configuration):

|Variable|Description                                |Default         |
|--------|-------------------------------------------|----------------|
|BASE_URL|The web applications base url              |localhost       |
|LANGUAGE|The applications language                  |english         |
|DB_HOST |The database url                           |localhost       |
|DB_NAME |The database name                          |easyappointments|
|DB_USERNAME|The database username                   |root            |
|DB_PASSWORD|The database password                   |root            |
|GOOGLE_SYNC_FEATURE|Turn the Sync feature on or off |FALSE           |
|GOOGLE_PRODUCT_NAME|The assigned google product name|                |
|GOOGLE_CLIENT_ID|The given google client ID         |                |
|GOOGLE_CLIENT_SECRET|The given google client secret |                |
|GOOGLE_API_KEY|The given google API key             |                |
|DEBUG_MODE|Turn Debug mode on or off                |                |

More information about the google calendar configuration can be found [here](https://easyappointments.org/docs.html#1.4.1/google-calendar-sync.md).