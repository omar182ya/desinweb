#!/bin/bash

export FLASK_APP=app.py
export FLASK_ENV=development
export FLASK_RUN_PORT=8082
export FLASK_RUN_HOST=0.0.0.0
sudo python3.8 app.py
echo Start Server...
