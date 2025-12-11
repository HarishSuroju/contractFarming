#!/bin/bash

# Create tmp directory if it doesn't exist
mkdir -p /tmp

# Copy database file to tmp directory if it exists
if [ -f "my.db" ]; then
  cp my.db /tmp/my.db
  echo "Copied existing database to /tmp/my.db"
else
  echo "No existing database found. Will be created on first access."
fi